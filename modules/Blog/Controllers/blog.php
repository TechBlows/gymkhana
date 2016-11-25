<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Blog extends MX_Controller
    {
        public function __construct()
            {
                  parent::__construct();
                  $this->load->model('blog_model','blog');
    }
 
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('blog_view');
    }
 
    public function ajax_list()
    {

        $this->load->helper('url');
 
        $list = $this->blog->get_datatables(); // gets $result 
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $blog) {
            $no++;
            $row = array();
            $row[]= $blog->blog_id;
            $row[] = $blog->blog_title;
            $row[] = $blog->blog_date;
            $row[] = $blog->blog_comment;
            $row[] = $blog->blog_desc;
    
            if($blog->blog_photo)
                $row[] = '<a href="'.base_url('upload/'.$blog->blog_photo).'" target="_blank"><img src="'.base_url('upload/'.$blog->blog_photo).'" class="img-responsive" /></a>';
            else
                $row[] = '(No photo)';
 
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_blog('."'".$blog->blog_id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_blog('."'".$blog->blog_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
         
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->blog->count_all(),
                        "recordsFiltered" => $this->blog->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($blog_id)
    {
        $data = $this->blog->get_by_id($blog_id);
        $data->blog_date = ($data->blog_date == '0000-00-00') ? '' : $data->blog_date; // if 0000-00-00 set tu empty for datepicker compatibility
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $this->_validate();
         
        $data = array(
                'blog_id' => $this->input->post('blog_id'),
                'blog_title' => $this->input->post('blog_title'),
                'blog_date' => $this->input->post('blog_date'),
                'blog_comment' => $this->input->post('blog_comment'),
                'blog_desc' => $this->input->post('blog_desc'),
            );
 
        if(!empty($_FILES['blog_photo']['name']))
        {
            $upload = $this->_do_upload();
            $data['blog_photo'] = $upload;
        }
 
        $insert = $this->blog->save($data);
 
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $this->_validate();
        $data = array(
                 'blog_title' => $this->input->post('blog_title'),
                'blog_date' => $this->input->post('blog_date'),
                'blog_comment' => $this->input->post('blog_comment'),
                'blog_desc' => $this->input->post('blog_desc'),
            );
 
        if($this->input->post('remove_photo')) // if remove photo checked
        {
            if(file_exists('upload/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                unlink('upload/'.$this->input->post('remove_photo'));
            $data['blog_photo'] = '';
        }
 
        if(!empty($_FILES['blog_photo']['name']))
        {
            $upload = $this->_do_upload();
             
            //delete file
            $blog = $this->blog->get_by_id($this->input->post('blog_id'));
            if(file_exists('upload/'.$blog->blog_photo) && $blog->blog_photo)
                unlink('upload/'.$blog->blog_photo);
 
            $data['blog_photo'] = $upload;
        }
 
        $this->blog->update(array('blog_id' => $this->input->post('blog_id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($blog_id)
    {
        //delete file
        $blog = $this->blog->get_by_id($blog_id);
        if(file_exists('upload/'.$blog->blog_photo) && $blog->blog_photo)
            unlink('upload/'.$blog->blog_photo);
         
        $this->blog->delete_by_id($blog_id);
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
 
        if(!$this->upload->do_upload('blog_photo')) //upload and validate
        {
            $data['inputerror'][] = 'blog_photo';
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
 
        if($this->input->post('blog_title') == '')
        {
            $data['inputerror'][] = 'blog_title';
            $data['error_string'][] = 'Blog Title is required';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('blog_date') == '')
        {
            $data['inputerror'][] = 'blog_date';
            $data['error_string'][] = 'Blog Date is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('blog_comment') == '')
        {
            $data['inputerror'][] = 'blog_comment';
            $data['error_string'][] = 'Blog Comment is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('blog_desc') == '')
        {
            $data['inputerror'][] = 'blog_desc';
            $data['error_string'][] = 'Blog Description is required';
            $data['status'] = FALSE;
        }
 
        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
 
}