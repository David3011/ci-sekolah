<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Petugas_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Dashboard'
		];

		$this->load->view('template/header', $data);
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
	}


}
