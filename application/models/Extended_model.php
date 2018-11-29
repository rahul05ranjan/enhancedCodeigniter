<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extended_model extends CI_Model {

	public function get_table_model($table_name, $limit = null, $offset = null)
	{
		$query = $this->db->get($table_name, $limit, $offset);
		if ($query->num_rows()>0) {
			return $query->result_array();
		}else{
			return false;
		}
	}
	public function get_table_where_model($table_name, $where = [], $limit = null, $offset = null)
	{
		$this->db->where($where);
		$query = $this->db->get($table_name, $limit, $offset);
		if ($query->num_rows()>0) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function is_table_exist_model($table_name)
	{
		$query = $this->db->table_exists($table_name);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
}

/* End of file Extended_model.php */
/* Location: ./application/models/Extended_model.php */