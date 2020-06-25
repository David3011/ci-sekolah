<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Guru_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Guru',
			'guru' => $this->Guru_model->get()->result(),
		];

		$this->load->view('template/header', $data);
		$this->load->view('guru/index', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah Guru',
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$nohp = $this->input->post('nohp');

			$data = [
				'nip' => $nip,
				'nama_guru' => $nama,
				'alamat' => $alamat,
				'nohp' => $nohp,
			];

			$affected = $this->Guru_model->create($data);

			if ($affected > 0) {
				$this->session->set_flashdata('theme', 'success');
				$this->session->set_flashdata('message', 'Berhasil tambah guru');
				redirect("guru");

			} else {
				$this->session->set_flashdata('theme', 'danger');
				$this->session->set_flashdata('message', 'Gagal tambah guru');
				redirect("guru/add");
			}

		} else {
			$this->load->view('template/header', $data);
			$this->load->view('guru/add', $data);
			$this->load->view('template/footer');
		}
	}

	public function edit($id = null)
	{
		$id = array('nip' => $id);

		$data = [
			'title' => 'Ubah Guru',
			'row' => $this->Guru_model->getById($id)->row(),
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$nohp = $this->input->post('nohp');

			$id = array('nip' => $nip);
			$data = [
				'nama_guru' => $nama,
				'alamat' => $alamat,
				'nohp' => $nohp,
			];

				$affected = $this->Guru_model->update($data, $id);
				if ($affected > 0) {
					$this->session->set_flashdata('theme', 'success');
					$this->session->set_flashdata('message', 'Berhasil edit guru');
					redirect("guru");

				} else {
					$this->session->set_flashdata('theme', 'danger');
					$this->session->set_flashdata('message', 'Gagal edit guru');
					redirect("guru/edit/$nip");
				}

		} else {

			$this->load->view('template/header', $data);
			$this->load->view('guru/edit', $data);
			$this->load->view('template/footer');
		}
	}

	public function delete($id)
	{
		$id = array('nip' => $id);
		$affected = $this->Guru_model->delete($id);
		if ($affected > 0) {
			$this->session->set_flashdata('theme', 'success');
			$this->session->set_flashdata('message', 'Berhasil hapus guru');
			redirect("guru");

		} else {
			$this->session->set_flashdata('theme', 'danger');
			$this->session->set_flashdata('message', 'Gagal hapus guru');
			redirect("guru");
		}
	}
}
