<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mapel_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Mapel',
			'mapel' => $this->Mapel_model->get()->result(),
		];

		$this->load->view('template/header', $data);
		$this->load->view('mapel/index', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah Mapel',
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
			$id_mapel = $this->input->post('id_mapel');
			$nama = $this->input->post('nama');

			$data = [
				'id_mapel' => $id_mapel,
				'nama_mapel' => $nama,
			];

			$affected = $this->Mapel_model->create($data);

			if ($affected > 0) {
				$this->session->set_flashdata('theme', 'success');
				$this->session->set_flashdata('message', 'Berhasil tambah mapel');
				redirect("mapel");

			} else {
				$this->session->set_flashdata('theme', 'danger');
				$this->session->set_flashdata('message', 'Gagal tambah mapel');
				redirect("mapel/add");
			}

		} else {
			$this->load->view('template/header', $data);
			$this->load->view('mapel/add', $data);
			$this->load->view('template/footer');
		}
	}

	public function edit($id = null)
	{
		$id = array('id_mapel' => $id);

		$data = [
			'title' => 'Ubah Mapel',
			'row' => $this->Mapel_model->getById($id)->row(),
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
			
			$id_mapel = $this->input->post('id_mapel');
			$nama = $this->input->post('nama');

			$id = array('id_mapel' => $id_mapel);
			$data = [
				'id_mapel' => $id_mapel,
 				'nama_mapel' => $nama,
			];

				$affected = $this->Mapel_model->update($data, $id);
				if ($affected > 0) {
					$this->session->set_flashdata('theme', 'success');
					$this->session->set_flashdata('message', 'Berhasil edit mapel');
					redirect("mapel");

				} else {
					$this->session->set_flashdata('theme', 'danger');
					$this->session->set_flashdata('message', 'Gagal edit mapel');
					redirect("mapel/edit/$id_mapel");
				}

		} else {

			$this->load->view('template/header', $data);
			$this->load->view('mapel/edit', $data);
			$this->load->view('template/footer');
		}
	}

	public function delete($id)
	{
		$id = array('id_mapel' => $id);
		$affected = $this->Mapel_model->delete($id);
		if ($affected > 0) {
			$this->session->set_flashdata('theme', 'success');
			$this->session->set_flashdata('message', 'Berhasil hapus mapel');
			redirect("mapel");

		} else {
			$this->session->set_flashdata('theme', 'danger');
			$this->session->set_flashdata('message', 'Gagal hapus mapel');
			redirect("mapel");
		}
	}
}
