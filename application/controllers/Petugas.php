<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Petugas_model', 'Guru_model'));
	}

	public function index()
	{
		$data = [
			'title' => 'Petugas',
			'petugas' => $this->Petugas_model->get()->result(),
		];

		$this->load->view('template/header', $data);
		$this->load->view('petugas/index', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah Petugas',
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
			$id_petugas = $this->input->post('id_petugas');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$ulang_password = $this->input->post('ulang_password');
			$nama = $this->input->post('nama');
			$level = $this->input->post('level');

			$data = [
				'id_petugas' => $id_petugas,
				'nama' => $nama,
				'username' => $username,
				'password' => $password,
				'level' => $level,
			];

			if ($password == $ulang_password) {
				$affected = $this->Petugas_model->create($data);

				if ($affected > 0) {
					$this->session->set_flashdata('theme', 'success');
					$this->session->set_flashdata('message', 'Berhasil tambah petugas');
					redirect("petugas");

				} else {
					$this->session->set_flashdata('theme', 'danger');
					$this->session->set_flashdata('message', 'Gagal tambah petugas');
					redirect("petugas/add");
				}

			} else {
				$this->session->set_flashdata('theme', 'info');
				$this->session->set_flashdata('message', 'Password tidak sama');
				redirect("petugas/add");
			}

		} else {
			$this->load->view('template/header', $data);
			$this->load->view('petugas/add', $data);
			$this->load->view('template/footer');
		}
	}

	public function edit($id = null)
	{
		$id = array('id_petugas' => $id);

		$data = [
			'title' => 'Ubah Petugas',
			'row' => $this->Petugas_model->getById($id)->row(),
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
			$id_petugas = $this->input->post('id_petugas');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$ulang_password = $this->input->post('ulang_password');
			$nama = $this->input->post('nama');
			$level = $this->input->post('level');

			$id = array('id_petugas' => $id_petugas);
			$data = [
				'nama' => $nama,
				'username' => $username,
				'level' => $level,
			];

			if ($password == $ulang_password) {
				if ($password != "") {
					$data['password'] = $password;
				}

				$affected = $this->Petugas_model->update($data, $id);
				if ($affected > 0) {
					$this->session->set_flashdata('theme', 'success');
					$this->session->set_flashdata('message', 'Berhasil edit petugas');
					redirect("petugas");

				} else {
					$this->session->set_flashdata('theme', 'danger');
					$this->session->set_flashdata('message', 'Gagal edit petugas');
					redirect("petugas/edit/$id_petugas");
				}

			} else {
				$this->session->set_flashdata('theme', 'info');
				$this->session->set_flashdata('message', 'Password tidak sama');
				redirect("petugas/edit/$id_petugas");
			}

		} else {

			$this->load->view('template/header', $data);
			$this->load->view('petugas/edit', $data);
			$this->load->view('template/footer');
		}
	}

	public function delete($id)
	{
		$id = array('id_petugas' => $id);
		$affected = $this->Petugas_model->delete($id);
		if ($affected > 0) {
			$this->session->set_flashdata('theme', 'success');
			$this->session->set_flashdata('message', 'Berhasil hapus petugas');
			redirect("petugas");

		} else {
			$this->session->set_flashdata('theme', 'danger');
			$this->session->set_flashdata('message', 'Gagal hapus petugas');
			redirect("petugas");
		}
	}

	public function getGuru()
	{
		$nip = $this->input->post('id');

		$id = array('nip' => $nip);
		$row = $this->Guru_model->getById($id)->row();

		echo json_encode($row);
	}
}
