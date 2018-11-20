<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model(array('M_Snap'));
		

	}

	public function index()
	{
		$data['fresh_snap'] = $this->M_Snap->fresh_snap()->result();
		$this->load->view('template/V_Header.php');
		$this->load->view('V_Home', $data);
		$this->load->view('template/V_Footer');
		// foreach ($data['fresh_snap'] as $f) {
		// 	echo $f->img;
		// }
	}

	public function fileUpload(){

		if(!empty($_FILES['file']['name'])){
			$dirname = md5($this->session->userdata("id"));
			$length = 10;
			$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
			$charactersLength = strlen($characters);
			$code = '';
			for ($i = 0; $i < $length; $i++) {
				$code .= $characters[rand(0, $charactersLength - 1)];
			}

			$config['upload_path'] = 'uploads/'.$dirname."/"; 
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
	     	$config['max_size'] = '10240'; // max_size in kb
	     	$config['file_name'] = $code;

	     	$this->load->library('upload',$config); 

	     	if($this->upload->do_upload('file')){
	     		$uploadData = $this->upload->data();
	     		$filename = $uploadData['file_name'];
	     		$data = array(
	     			'isOnUploadSnap'=> TRUE,
	     			'img'			=> $filename,
	     			'code'			=> $code
	     		);
	     		$this->session->set_userdata($data);
	     		echo $filename;
	     	}
	     }
	 }

	 function detailupload(){
	 	if($this->session->userdata('isOnUploadSnap')  == TRUE ){
	 		$img = $this->session->userdata('img');
	 		$dir = md5($this->session->userdata('id'));

	 		$data = array(
	 			'img'		=> $img,
	 			'dir'		=> $dir

	 		);
	 		$this->load->view('V_DetailUpload',$data);
	 	}
	 }

	 function uploaddetail(){
	 	$title 		= $this->input->post('title');
	 	$tags		= $this->input->post('tags');
	 	$description= $this->input->post('description');
	 	$id_user	= $this->session->userdata('id');
	 	$slug		= $this->session->userdata('code');
	 	$img		= $this->session->userdata('img');

	 	$data = array(
	 		'title'			=> $title,
	 		'tags'			=> $tags,
	 		'description'	=> $description,
	 		'id_user'		=> $id_user,
	 		'slug'			=> $slug,
	 		'img'			=> $img,
	 		'datetime'	=> date('Y-m-d H:i:s')
	 	);
	 	$this->M_Snap->insert($data);

	 	$data = array(
	 		'isOnUploadSnap'=> FALSE,
	 		'img'			=> '',
	 		'code'			=> ''
	 	);
	 	$this->session->set_userdata($data);

	 	redirect(base_url());

	 }

	}

	/* End of file Home.php */
/* Location: ./application/controllers/Home.php */