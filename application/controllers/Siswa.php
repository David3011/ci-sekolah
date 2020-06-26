<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Siswa',
			'siswa' => $this->Siswa_model->get()->result(),
		];

		$this->load->view('template/header', $data);
		$this->load->view('siswa/index', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah Siswa',
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
            $nis = $this->input->post('nis');
            $kelas = $this->input->post('kelas');
            $nama = $this->input->post('nama');
            $tempatlahir = $this->input->post('tempatlahir');
            $ttl = $this->input->post('ttl');
            $agama = $this->input->post('agama');
            $gender = $this->input->post('gender');
			$alamat = $this->input->post('alamat');
			$nohp = $this->input->post('nohp');

			$data = [
                'nis' => $nis,
                'id_kelas' => $kelas,
                'nama' => $nama,
                'tempat_lahir' => $tempatlahir,
                'ttl' => $ttl,
                'agama' => $agama,
                'gender' => $gender,
				'alamat' => $alamat,
				'no_tlp' => $nohp,
			];

			$affected = $this->Siswa_model->create($data);

			if ($affected > 0) {
				$this->session->set_flashdata('theme', 'success');
				$this->session->set_flashdata('message', 'Berhasil tambah siswa');
				redirect("guru");

			} else {
				$this->session->set_flashdata('theme', 'danger');
				$this->session->set_flashdata('message', 'Gagal tambah siswa');
				redirect("siswa/add");
			}

		} else {
			$this->load->view('template/header', $data);
			$this->load->view('siswa/add', $data);
			$this->load->view('template/footer');
		}
	}

	public function edit($id = null)
	{
		$id = array('nis' => $id);

		$data = [
			'title' => 'Ubah Siswa',
			'row' => $this->Siswa_model->getById($id)->row(),
		];

		$simpan = $this->input->post('simpan');

		if ($simpan != "") {
			$nis = $this->input->post('nis');
            $kelas = $this->input->post('kelas');
            $nama = $this->input->post('nama');
            $tempatlahir = $this->input->post('tempatlahir');
            $ttl = $this->input->post('ttl');
            $agama = $this->input->post('agama');
            $gender = $this->input->post('gender');
			$alamat = $this->input->post('alamat');
			$nohp = $this->input->post('nohp');

			$id = array('nis' => $nis);
			$data = [
				'nis' => $nis,
                'id_kelas' => $kelas,
                'nama' => $nama,
                'tempat_lahir' => $tempatlahir,
                'ttl' => $ttl,
                'agama' => $agama,
                'gender' => $gender,
				'alamat' => $alamat,
				'nohp' => $nohp,
			];

				$affected = $this->Guru_model->update($data, $id);
				if ($affected > 0) {
					$this->session->set_flashdata('theme', 'success');
					$this->session->set_flashdata('message', 'Berhasil edit siswa');
					redirect("guru");

				} else {
					$this->session->set_flashdata('theme', 'danger');
					$this->session->set_flashdata('message', 'Gagal edit siswa');
					redirect("siswa/edit/$nis");
				}

		} else {

			$this->load->view('template/header', $data);
			$this->load->view('siswa/edit', $data);
			$this->load->view('template/footer');
		}
	}

	public function delete($id)
	{
		$id = array('nis' => $id);
		$affected = $this->Siswa_model->delete($id);
		if ($affected > 0) {
			$this->session->set_flashdata('theme', 'success');
			$this->session->set_flashdata('message', 'Berhasil hapus siswa');
			redirect("siswa");

		} else {
			$this->session->set_flashdata('theme', 'danger');
			$this->session->set_flashdata('message', 'Gagal hapus siswa');
			redirect("siswa");
		}
	}
}
