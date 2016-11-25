<?php
	class Users_model extends CI_Model {
		function get_content_list()
     	{
          $sql = 'SELECT content_title, content_description FROM content limit 3';
          $query = $this->db->query($sql);
          $result = $query->result_array();
          return $result;
     	}
      function get_expert_list()
      {
          $sql = 'SELECT expert_name, expertise, expert_photo FROM expert  limit 3';
          $query = $this->db->query($sql);
          $result = $query->result_array();
          return $result;
      }
      function get_gallery_list()
      {
          $sql = 'SELECT photo_title, photo_desc, gallery_photo FROM gallery  limit 8';
          $query = $this->db->query($sql);
          $result = $query->result_array();
          return $result;
      }
      function get_client_list()
      {
          $sql = 'SELECT client_name, client_net, client_photo, client_message FROM client  limit 3';
          $query = $this->db->query($sql);
          $result = $query->result_array();
          return $result;
      }

      function get_price_list()
      {
          $sql = 'SELECT price_types, price FROM price';
          $query = $this->db->query($sql);
          $result = $query->result_array();
          return $result;
      }
      function get_class_list()
      {
          $sql = 'SELECT class_no, class_types FROM class limit 7';
          $query = $this->db->query($sql);
          $result = $query->result_array();
          return $result;
      }
      function get_schedule_list()
      {

          $sql = 'SELECT sc_day, sc_timing, sc_class, sc_trainer FROM schedule limit 8';
          $query = $this->db->query($sql);
          $result = $query->result_array();
          return $result;
      }

      function get_blog_list()
      {
          $sql = 'SELECT blog_title, blog_date, blog_comment, blog_desc, blog_photo FROM blog limit 3';
          $query = $this->db->query($sql);
          $result = $query->result_array();
          return $result;
      }
     	function search($query){
     		$q=$this->db->from('content')
     				    ->like('content_title',$query)
     				    ->get();
     		return $q->result_array();
               		    
     	}
      function get_search($q){
        $this->db->select('content_title');
        $this->db->like('content_title', $q);
        $query = $this->db->get('content');
             if($query->num_rows() > 0){
             foreach ($query->result_array() as $row){
             $row_set[] = htmlentities(stripslashes($row['content_title'])); //build an array
        }
     echo json_encode($row_set); //format the array into json data
    }
  }
	}
?>