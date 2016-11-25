<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends MX_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('content_model','content');
    }

    function index()
    {
        $this->load->helper('url');
        $this->load->view('content_view');
        
    }

    function ajax_list_content() 
    {
        $list = $this->content->get_datatables_content();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $content) {
            $no++;
            $row = array();
            $row[] = $content->content_id;
            $row[] = $content->content_title;
            $row[] = $content->content_description;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="ajax_edit_content('."'".$content->content_id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="ajax_delete_content('."'".$content->content_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
        
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->content->count_all_content(),
                        "recordsFiltered" => $this->content->count_filtered_content(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    function ajax_edit_content($content_id)
    {
        $data = $this->content->get_by_id_content($content_id);
        //$data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
        echo json_encode($data);
    }

    function ajax_add_content()
    {
        $this->_validate_content();
        $data = array(
                'content_title' => $this->input->post('content_title'),
                'content_description' => $this->input->post('content_description'),
            );
        $insert = $this->content->save_content($data);
        echo json_encode(array("status" => TRUE));
    }

    function ajax_update_content()
    {
        $this->_validate_content();
        $data = array(
                'content_id' => $this->input->post('content_id'),
                'content_title' => $this->input->post('content_title'),
                'content_description' => $this->input->post('content_description'),
            );
        $this->content->update_content(array('content_id' => $this->input->post('content_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    function ajax_delete_content($content_id)
    {
        $this->content->delete_by_id($content_id);
        echo json_encode(array("status" => TRUE));
    }


    private function _validate_content()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('content_title') == '')
        {
            $data['inputerror'][] = 'content_title';
            $data['error_string'][] = 'Content Title is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('content_description') == '')
        {
            $data['inputerror'][] = 'content_description';
            $data['error_string'][] = 'Content Description is required';
            $data['status'] = FALSE;
        }


        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

}
