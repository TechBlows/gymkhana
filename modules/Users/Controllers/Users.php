<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller {

	
	public function __construct()
     {
          parent::__construct(); 
          $this->load->helper('url');
          $this->load->database();       
     }

	public function index()
	{
		 $this->load->model('Users_model');  
          //call the model function to get the department data
          
          $deptresult = $this->Users_model->get_content_list();
          $data['deptlist']=$deptresult;
          
          $data['img']=array('dumbbell.svg','exercise.svg','yoga-carpet.svg');
          
          $this->load->view('users/header');
          $this->load->view('users/banner');

          $this->load->view('description',$data);

          $expresult = $this->Users_model->get_expert_list();
          $data['explist']=$expresult;
          
          $this->load->view('users/experts',$data);

          $scresult = $this->Users_model->get_schedule_list();
          $data['sclist']=$scresult;

          $this->load->view('users/schedule.php', $data);
          
          $galresult = $this->Users_model->get_gallery_list();
          $data['gallist']=$galresult;

          $this->load->view('gymgallery.php', $data);

          $priceresult =$this->Users_model->get_price_list();
          $data['pricelist']=$priceresult;

          $classresult =$this->Users_model->get_class_list();
          $data['classlist']=$classresult;

          $this->load->view('price.php', $data);

          $clientresult = $this->Users_model->get_client_list();
          $data['clientlist']=$clientresult;

          $this->load->view('clients.php', $data);     
          $this->load->view('adds.php');

          $blogresult =$this->Users_model->get_blog_list();
          $data['bloglist']=$blogresult;

          $this->load->view('gymblogs.php', $data);      
          $this->load->view('users/footer');
		//$this->load->view('users/home', $data);
	}

     public function login_page(){
          
          $this->load->view("login/login_form.php");
     }
     public function users_page(){
          $this->load->view('users/index');
     }
     public function admin_page(){
          $this->load->view('admin/admin_view.php');
     }
     
     public function search(){
          $this->load->library('form_validation');
          $this->load->helper('form');
          $this->form_validation->set_rules('query','Query','required');
          if(!$this->form_validation->run())
               $this->index();
         
          $query=$this->input->post('query');
          $data=array();
          $this->load->model('users_model');
          $data['records']=$this->users_model->search($query);
          $this->load->view('header');
          $this->load->view('search_results',$data);
          $this->load->view('footer');
     }
     function get_searches(){
    $this->load->model('users_model');
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->birds_model->get_search($q);
    }
  }
    
}
/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */
?>