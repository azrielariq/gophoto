<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('template/V_Header.php');
		$this->load->view('V_Home');
		$this->load->view('template/V_Footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */