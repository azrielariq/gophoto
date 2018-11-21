<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function index()
	{
		$this->load->view('template/V_Header');
		$this->load->view('V_Upload');
		$this->load->view('template/V_Footer');
	}

}

/* End of file Upload.php */
/* Location: ./application/controllers/Upload.php */