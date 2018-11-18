<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {

	public function index()
	{
		$this->load->view('template/V_Header');
		$this->load->view('V_Job');
		$this->load->view('template/V_Footer');
	}

}

/* End of file Job.php */
/* Location: ./application/controllers/Job.php */