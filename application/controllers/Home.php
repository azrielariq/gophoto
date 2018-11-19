<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('template/V_Header.php');
		$this->load->view('V_Home');
		$this->load->view('template/V_Footer');
	}

	public function fileUpload(){

		if(!empty($_FILES['file']['name'])){
			$dirname = md5($this->session->userdata("id"));
			$length = 10;
			$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
			$charactersLength = strlen($characters);
			$filename = '';
			for ($i = 0; $i < $length; $i++) {
				$filename .= $characters[rand(0, $charactersLength - 1)];
			}

			$config['upload_path'] = 'uploads/'.$dirname."/"; 
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
	     	$config['max_size'] = '10240'; // max_size in kb
	     	$config['file_name'] = $filename;

	     	$this->load->library('upload',$config); 

	     	if($this->upload->do_upload('file')){
	     		$uploadData = $this->upload->data();
	     		$filename = $uploadData['file_name'];
	     		//set session for upload
	     		echo $filename;
	     	}
 		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */