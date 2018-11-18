<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->view('template/V_Header');
		$this->load->view('V_Profile');
		$this->load->view('template/V_Footer');
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */