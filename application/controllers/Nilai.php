<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Kelas_model');
		$this->load->model('Mapel_model');
		$this->load->model('Nilai_model');
		$this->load->model('Jadwal_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Kelas',
			'kelas' => $this->Kelas_model->get()->result(),
		];

		$this->load->view('template/header', $data);
		$this->load->view('nilai/index', $data);
		$this->load->view('template/footer');
    }

	// parameter id_kelas diambil dari /namaController/namaMethod/parameter
	// Nilai/mapel/$row->id_kelas
    public function mapel($id_kelas)
	{
		$data = [
			'title' => 'Mapel',
			'mapel' => $this->Jadwal_model->getMapelByKelas($id_kelas),
		];

		

		$this->load->view('template/header', $data);
        $this->load->view('nilai/mapel', $data);
		$this->load->view('template/footer');
    }
    
    public function nilai($id_kelas, $id_mapel)
	{
		$data = [
			'title' => 'Nilai',
			'nilai'=> $this->Jadwal_model->getNilaiByMapel($id_kelas, $id_mapel),
		];

		$this->load->view('template/header', $data);
        $this->load->view('nilai/nilai', $data);
		$this->load->view('template/footer');
	}
}
