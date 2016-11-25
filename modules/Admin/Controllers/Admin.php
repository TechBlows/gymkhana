<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {
public function __construct() {
    parent::__construct();
    }

    function index() {
     if($this->session->userdata('logged_in')){
       $this->load->view('admin_view');
     }
     else{
        $this->load->view('login/login_form');  
     }
    }
    function login_page() {
       $this->load->view('login/login_form');
    }
    function admin_page(){
        $this->load->view('admin/admin_view');
    }
    function content_page(){
        $this->load->view('content/content_view');
    }
    function client_page(){
        $this->load->view('client/client_view');
    }
    function classes_page(){
        $this->load->view('gclass/gclass_view');
    }
    function schedule_page(){
        $this->load->view('schedule/schedule_view');
    }
    function price_page(){
        $this->load->view('price/price_view');
    }
    function expert_page(){
        $this->load->view('expert/expert_view');
    }
    function blog_page(){
        $this->load->view('blog/blog_view');
    }
    function person_page(){
        $this->load->view('person/person_view');
    }
    function training_page(){
        $this->load->view('training/training_view');
    }
    function gallery_page(){
        $this->load->view('gallery/gallery_view');
    }
    public function admin_view(){
          $this->load->view('users/index.php');
     }
     public function logout(){
      
            // Removing session data
            $sess_array = array(
            'username' => ''
            );
            $this->session->unset_userdata('logged_in', $sess_array);
            $data['message_display'] = 'Successfully Logout!';
            redirect('','refresh');  
     }
   
}
?>
    