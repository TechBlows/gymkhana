<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_model extends CI_Model {
var $table = 'content';
	var $column_order = array('content_id','content_title','content_description', null); //set column field database for datatable orderable
	var $column_search = array('content_title','content_description'); //set column field database for datatable searchable just content_title and content_description are searchable
	var $order = array('content_id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// get content datatables query

	private function _get_datatables_query_content()
	{
		
		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	function get_datatables_content()
	{
		$this->_get_datatables_query_content();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered_content()
	{
		$this->_get_datatables_query_content();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_content()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id_content($content_id)
	{
		$this->db->from($this->table);
		$this->db->where('content_id',$content_id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save_content($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update_content($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($content_id)
	{
		$this->db->where('content_id', $content_id);
		$this->db->delete($this->table);
	}
}
?>
