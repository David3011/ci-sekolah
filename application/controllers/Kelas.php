<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kelas_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Kelas',
			'kelas' => $this->Kelas_model->get()->result(),
		];

		$this->load->view('template/header', $data);
		$this->load->view('kelas/index', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah Kelas',
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
			$id_kelas = $this->input->post('id_kelas');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');

			$data = [
				'id_kelas' => $id_kelas,
				'nama_kelas' => $nama,
				'keterangan' => $keterangan,
			];

			$affected = $this->Kelas_model->create($data);

			if ($affected > 0) {
				$this->session->set_flashdata('theme', 'success');
				$this->session->set_flashdata('message', 'Berhasil tambah kelas');
				redirect("kelas");

			} else {
				$this->session->set_flashdata('theme', 'danger');
				$this->session->set_flashdata('message', 'Gagal tambah kelas');
				redirect("kelas/add");
			}

		} else {
			$this->load->view('template/header', $data);
			$this->load->view('kelas/add', $data);
			$this->load->view('template/footer');
		}
	}

	public function edit($id = null)
	{
		$id = array('id_kelas' => $id);

		$data = [
			'title' => 'Ubah Kelas',
			'row' => $this->Kelas_model->getById($id)->row(),
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
			$id_kelas = $this->input->post('id_kelas');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');

			$id = array('id_kelas' => $id_kelas);
			$data = [
				'nama_kelas' => $nama,
				'keterangan' => $keterangan,
			];

				$affected = $this->Kelas_model->update($data, $id);
				if ($affected > 0) {
					$this->session->set_flashdata('theme', 'success');
					$this->session->set_flashdata('message', 'Berhasil edit kelas');
					redirect("kelas");

				} else {
					$this->session->set_flashdata('theme', 'danger');
					$this->session->set_flashdata('message', 'Gagal edit kelas');
					redirect("kelas/edit/$id_kelas");
				}

		} else {

			$this->load->view('template/header', $data);
			$this->load->view('kelas/edit', $data);
			$this->load->view('template/footer');
		}
	}

	public function delete($id)
	{
		$id = array('id_kelas' => $id);
		$affected = $this->Kelas_model->delete($id);
		if ($affected > 0) {
			$this->session->set_flashdata('theme', 'success');
			$this->session->set_flashdata('message', 'Berhasil hapus kelas');
			redirect("kelas");

		} else {
			$this->session->set_flashdata('theme', 'danger');
			$this->session->set_flashdata('message', 'Gagal hapus kelas');
			redirect("kelas");
		}
	}
}
