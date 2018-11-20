<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Snap extends CI_Model {

	function get_where($where){
		$this->db->where($where);
		return $this->db->get('snap');
	}

	function insert($data){
		$this->db->insert('snap',$data);
	}

	function fresh_snap(){
		$this->db->select('snap.img, users.name, users.id_user');
		$this->db->limit(6);
		$this->db->order_by("datetime", "DESC");
		$this->db->where('snap.id_user = users.id_user');
		$this->db->from('users, snap');
		return $this->db->get();
	}
	

}

/* End of file M_Login.php */
/* Location: ./application/models/M_Login.php */