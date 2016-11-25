<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logs extends MX_Controller {
    public function __construct() {
        parent::__construct();
             $this->load->library('session');

             $this->load->helper('form'); 
             
             $this->load->library('email'); 
             
             $this->load->model('logs_model1');
        }

    // logs_model to logs_model1

    function index(){        
       
        $ext= $this->logs_model1->get_ext();
       
        $ext = explode(",", $ext[0]['tel_no']);

        $data['query'] = $this->logs_model1->check_group($ext);

        $this->load->view('logs_view', $data);
    }

    public function send_mail() {

         $to_email = $this->input->post('email');  

         $email_group = $this->logs_model1->get_user_email();

         $email_list = array($email_group);
         
         $this->email->from('email_list', 'user_name');
 
         $this->email->to($to_email);

         $this->email->subject('Missed Call Notification');

        $ext= $this->logs_model1->get_ext();
       
        $ext = explode(",", $ext[0]['tel_no']);

        $data = $this->logs_model1->check_group($ext);

          $msg = '<table border="1px">
                      <tr> 
                        <td>Id </td>
                        <td>Call Id</td>
                        <td>Source </td>
                        <td>Destination</td>
                        <td>Disposition</td>
                        <td>Call Date</td>
                      </tr>';
        

            foreach($data as $row) { 
                    $msg = $msg .'<tr>
                                <td>'.$row["id"].'</td>
                                <td>'.$row["clid"].'</td>
                                <td>'.$row["src"].'</td>
                                <td>'.$row["dst"].'</td>
                                <td>'.$row["disposition"].'</td>
                                <td>'.$row["calldate"].'</td>
                            </tr>';
                            }   

                    // echo $msg;
                    // exit();

                            
        $this->email->message($msg); 

   
         //Send mail 
         if($this->email->send()) {
            $this->session->set_flashdata("email_sent","Email sent successfully."); 
         }
         else{ 
             $this->session->set_flashdata("email_sent","Error in sending Email."); 
             //$this->load->view('logs_view');
        }   
    }

}