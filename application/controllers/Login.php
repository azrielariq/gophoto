<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model(array('M_Login'));
		

	}

	// List all your items
	public function index()
	{
		$this->cek_session();
		$this->load->view('V_Login');
	}

	public function register()
	{
		$this->cek_session();
		$this->load->view('V_Register');
	}

	function cek_session(){
		if($this->session->userdata('isLogin') == TRUE){
			redirect(base_url());
		}
	}

	function cek_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$where = array(
			'username'	=> $username,
			'password'	=> $password
		);

		$result = $this->M_Login->get_where($where);

		if ($result->num_rows() == 1) {
			$data = array(
				'id'		=> $result->row('id_user'),
				'nama'		=> $result->row('nama'),
				'isLogin'	=> TRUE
			);
			$this->session->set_userdata($data);

			echo "TRUE";
		}else{
			echo "Username atau Password salah !";
		}

	}

	function aksi_register(){
		$nama 		= $this->input->post('nama');
		$username 	= $this->input->post('username');
		$email		= $this->input->post('email');
		$password 	= md5($this->input->post('password'));

		//cek apakah email sudah digunakan
		$where = array(
			'email'	=> $email
		);
		$result = $this->M_Login->get_where($where);
		if($result->num_rows() == 1){
			$pesan = '1';
		}else{
			$pesan = '0';
		}

		//cek apakah username sudah digunakan
		$where = array(
			'username' => $username
		);
		$result = $this->M_Login->get_where($where);
		if($result->num_rows() == 1){
			if($pesan == '1'){ //jika email sudah digunakan
				$pesan = '3'; //jika email dan username sudah digunakan
			}else{ //jika email belum digunakan
				$pesan = '2';
			}
		}else{
			if($pesan == '0'){
				$pesan = '0';
			}	
		}

		if($pesan == '0'){ //jika email dan username belum digunakan
			$data = array(
				'nama'		=> $nama,
				'username'	=> $username,
				'email'		=> $email,
				'password'	=> $password
			);

			$this->M_Login->register($data);

			$where = array(
				'username'	=> $username
			);

			$id_user = $this->M_Login->get_where($where)->row('id_user');

			//membuat folder user
			mkdir('./uploads/'.md5($id_user));

			//copy gambar avatar from assets ke folder user
			$file = './_assets/img/avatar.jpg';
			$newfile = './uploads/'.md5($id_user).'/avatar.jpg';
			if (!copy($file, $newfile)) {
				echo "failed to copy $file...\n";
			}else{
				echo "copied $file into $newfile\n";
			}
		}

		echo $pesan;

	}

	function logout(){
		$data = array(
			'nama'		=> "",
			'isLogin'	=> FALSE
		);
		$this->session->set_userdata($data);
		redirect(base_url().'Login');
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}


}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
