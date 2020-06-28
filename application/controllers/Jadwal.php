<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jadwal_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Jadwal',
			'jadwal' => $this->Jadwal_model->get(),
		];

		$this->load->view('template/header', $data);
		$this->load->view('jadwal/index', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah Jadwal',
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
            $id_jadwal = $this->input->post('id_jadwal');
            $id_kelas = $this->input->post('id_kelas');
            $id_mapel = $this->input->post('id_mapel');
            $nip = $this->input->post('nip');
            $hari = $this->input->post('hari');
            $jam_mulai = $this->input->post('jam_mulai');
            $jam_akhir = $this->input->post('jam_akhir');
			

			$data = [
                'id_jadwal' => $id_jadwal,
                'id_kelas' => $id_kelas,
                'id_mapel' => $id_mapel,
                'nip' => $nip,
                'hari' => $hari,
                'jam_mulai' => $jam_mulai,
                'jam_akhir' => $jam_akhir,
			
			];

			

			$affected = $this->Jadwal_model->create($data);

			if ($affected > 0) {
				$this->session->set_flashdata('theme', 'success');
				$this->session->set_flashdata('message', 'Berhasil tambah jadwal');
				redirect("jadwal");

			} else {
				$this->session->set_flashdata('theme', 'danger');
				$this->session->set_flashdata('message', 'Gagal tambah jadwal');
				redirect("jadwal/add");
			}

		} else {
			$this->load->view('template/header', $data);
			$this->load->view('jadwal/add', $data);
			$this->load->view('template/footer');
		}
	}

	public function edit($id = null)
	{
		$id = array('id_jadwal' => $id);

		$data = [
			'title' => 'Ubah Jadwal',
			'row' => $this->Jadwal_model->getById($id)->row(),
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
            $id_jadwal = $this->input->post('id_jadwal');
            $id_kelas = $this->input->post('id_kelas');
            $id_mapel = $this->input->post('id_mapel');
            $nip = $this->input->post('nip');
            $hari = $this->input->post('hari');
            $jam_mulai = $this->input->post('jam_mulai');
            $jam_akhir = $this->input->post('jam_akhir');

			$id = array('id_jadwal' => $id_jadwal);
			$data = [
                'id_jadwal' => $id_jadwal,
                'id_kelas' => $id_kelas,
                'id_mapel' => $id_mapel,
                'nip' => $nip,
                'hari' => $hari,
                'jam_mulai' => $jam_mulai,
                'jam_akhir' => $jam_akhir,
			];


				 $affected = $this->Jadwal_model->update($data, $id);
				 if ($affected > 0) {
					$this->session->set_flashdata('theme', 'success');
				 	$this->session->set_flashdata('message', 'Berhasil edit jadwal');
				 	redirect("jadwal");

				 } else {
				 	$this->session->set_flashdata('theme', 'danger');
				 	$this->session->set_flashdata('message', 'Gagal edit jadwal');
				 	redirect("jadwal/edit/$id_jadwal");
				 }

		} else {

			$this->load->view('template/header', $data);
			$this->load->view('jadwal/edit', $data);
			$this->load->view('template/footer');
		}
	}

	public function delete($id)
	{
		$id = array('id_jadwal' => $id);
		$affected = $this->Jadwal_model->delete($id);
		if ($affected > 0) {
			$this->session->set_flashdata('theme', 'success');
			$this->session->set_flashdata('message', 'Berhasil hapus jadwal');
			redirect("jadwal");

		} else {
			$this->session->set_flashdata('theme', 'danger');
			$this->session->set_flashdata('message', 'Gagal hapus jadwal');
			redirect("jadwal");
		}
	}
}
