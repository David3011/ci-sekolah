<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Kelas_model');
		$this->load->model('Siswa_model');
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
		$id_kls = array('id_kelas' => $id_kelas);

		$data = [
			'title' => 'Nilai',
			'nilai'=> (!empty($this->Jadwal_model->getNilaiByMapel($id_kelas, $id_mapel))) ? $this->Jadwal_model->getNilaiByMapel($id_kelas, $id_mapel) : $this->Siswa_model->getById($id_kls)->result(),
		];

		// var_dump($data);

		$this->load->view('template/header', $data);
        $this->load->view('nilai/nilai', $data);
		$this->load->view('template/footer');
	}

	public function save()
	{
		$id_nilai = $this->input->post('id_nilai');
		$nis = $this->input->post('nis');
		$id_mapel = $this->input->post('id_mapel');
		$tugas_1 = $this->input->post('tugas_1');
		$tugas_2 = $this->input->post('tugas_2');
		$tugas_3 = $this->input->post('tugas_3');
		$tugas_4 = $this->input->post('tugas_4');
		$tugas_5 = $this->input->post('tugas_5');
		$tugas_6 = $this->input->post('tugas_6');
		$tugas_7 = $this->input->post('tugas_7');
		$tugas_8 = $this->input->post('tugas_8');
		$uts = $this->input->post('uts');
		$uas = $this->input->post('uas');

		$datas = [];
		$status = true;

		for ($i=0; $i < count($id_nilai); $i++) {
			$data = [
				'nis' => $nis[$i],
				'id_mapel' => $id_mapel[$i],
				'tugas1' => $tugas_1[$i],
				'tugas2' => $tugas_2[$i],
				'tugas3' => $tugas_3[$i],
				'tugas4' => $tugas_4[$i],
				'tugas5' => $tugas_5[$i],
				'tugas6' => $tugas_6[$i],
				'tugas7' => $tugas_7[$i],
				'tugas8' => $tugas_8[$i],
				'uts' => $uts[$i],
				'uas' => $uas[$i],
			];

			if ($id_nilai[$i] != '') {
				$data['id_nilai'] = $id_nilai[$i];
				$status = false;
			}

			$datas[] = $data;
		}

		// insert
		if ($status) {
			$affected = $this->Nilai_model->save($datas, $status);
		} else {
			$affected = $this->Nilai_model->save($datas, $status);
		}

		if ($affected > 0) {
			$this->session->set_flashdata('theme', 'success');
			$this->session->set_flashdata('message', 'Berhasil simpan nilai');
			redirect("nilai");
		} else {
			$this->session->set_flashdata('theme', 'danger');
			$this->session->set_flashdata('message', 'Gagal simpan nilai');
			redirect("nilai");
		}
	}
}
