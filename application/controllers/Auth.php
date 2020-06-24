<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Petugas_model');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('auth/index');
		$this->load->view('template/footer');
	}

	public function check()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$petugas = $this->Petugas_model->checkPetugas($username, $password);
		if ($petugas->num_rows() > 0) {

			$row_petugas = $petugas->row();

			$session = array(
				'id_petugas' => $row_petugas->id_petugas,
				'username' => $row_petugas->username,
				'nama' => $row_petugas->nama,
				'level' => $row_petugas->level
			);

			$this->session->set_userdata($session);

			redirect("dashboard");
		} else {
			redirect("auth");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("auth");
	}

}
