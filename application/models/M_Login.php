<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

	function get_where($where){
		$this->db->where($where);
		return $this->db->get('users');
	}

	function register($data){
		$this->db->insert('users',$data);
	}
	

}

/* End of file M_Login.php */
/* Location: ./application/models/M_Login.php */