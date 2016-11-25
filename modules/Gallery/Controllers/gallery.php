<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Gallery extends MX_Controller
    {
        public function __construct()
            {
                  parent::__construct();
                  $this->load->model('gallery_model','gallery');
    }
 
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('gallery_view');
    }
 
    public function ajax_list()
    {

        $this->load->helper('url');
 
        $list = $this->gallery->get_datatables(); // gets $result 
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $gallery) {
            $no++;
            $row = array();
            $row[]= $gallery->gallery_id;
            $row[] = $gallery->photo_title;
            $row[] = $gallery->photo_desc;
    
            if($gallery->gallery_photo)
                $row[] = '<a href="'.base_url('upload/'.$gallery->gallery_photo).'" target="_blank"><img src="'.base_url('upload/'.$gallery->gallery_photo).'" class="img-responsive" /></a>';
            else
                $row[] = '(No photo)';
 
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_gallery('."'".$gallery->gallery_id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_gallery('."'".$gallery->gallery_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
         
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->gallery->count_all(),
                        "recordsFiltered" => $this->gallery->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($gallery_id)
    {
        $data = $this->gallery->get_by_id($gallery_id);
       // $data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $this->_validate();
         
        $data = array(
                'photo_title' => $this->input->post('photo_title'),
                'photo_desc' => $this->input->post('photo_desc'),
            );
 
        if(!empty($_FILES['gallery_photo']['name']))
        {
            $upload = $this->_do_upload();
            $data['gallery_photo'] = $upload;
        }
 
        $insert = $this->gallery->save($data);
 
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $this->_validate();
        $data = array(
                'photo_title' => $this->input->post('photo_title'),
                'photo_desc' => $this->input->post('photo_desc'),
            );
 
        if($this->input->post('remove_photo')) // if remove photo checked
        {
            if(file_exists('upload/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                unlink('upload/'.$this->input->post('remove_photo'));
            $data['gallery_photo'] = '';
        }
 
        if(!empty($_FILES['gallery_photo']['name']))
        {
            $upload = $this->_do_upload();
             
            //delete file
            $gallery = $this->gallery->get_by_id($this->input->post('gallery_id'));
            if(file_exists('upload/'.$gallery->gallery_photo) && $gallery->gallery_photo)
                unlink('upload/'.$gallery->gallery_photo);
 
            $data['gallery_photo'] = $upload;
        }
 
        $this->gallery->update(array('gallery_id' => $this->input->post('gallery_id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($gallery_id)
    {
        //delete file
        $gallery = $this->gallery->get_by_id($gallery_id);
        if(file_exists('upload/'.$gallery->gallery_photo) && $gallery->gallery_photo)
            unlink('upload/'.$gallery->gallery_photo);
         
        $this->gallery->delete_by_id($gallery_id);
        echo json_encode(array("status" => TRUE));
    }
 
    private function _do_upload()
    {
        $config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100; //set max size allowed in Kilobyte
        $config['max_width']            = 1000; // set max width image allowed
        $config['max_height']           = 1000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
 
        if(!$this->upload->do_upload('gallery_photo')) //upload and validate
        {
            $data['inputerror'][] = 'gallery_photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
 
    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('photo_title') == '')
        {
            $data['inputerror'][] = 'photo_title';
            $data['error_string'][] = 'Photo Title is required';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('photo_desc') == '')
        {
            $data['inputerror'][] = 'photo_desc';
            $data['error_string'][] = 'Photo Description is required';
            $data['status'] = FALSE;
        }
 
        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
 
}