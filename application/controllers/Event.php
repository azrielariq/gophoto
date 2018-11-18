<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function index()
	{
		$this->load->view('template/V_Header');
		$this->load->view('V_Event');
		$this->load->view('template/V_Footer');
	}

}

/* End of file Event.php */
/* Location: ./application/controllers/Event.php */