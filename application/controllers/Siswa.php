<?php
    class Siswa extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            // $this->load->model('Siswa_model');
        }

        public function index(){
            $data['si_siswa'] = $this->Siswa_model->lihat_data()->result();
            $this->load->view('siswa/index', $data);
        }

        public function view_tambah(){

            $this->load->view('siswa/tambah');
        
        }

        public function tambah(){
            $noinduk  = $this->input->post('nis');
            $idkelas  = $this->input->post('kelas');
            $nama     = $this->input->post('nama');
            $ttl      = $this->input->post('ttl');
            $agama    = $this->input->post('agama'); 
            $gender   = $this->input->post('gender');
            $alamat   = $this->input->post('alamat');
            $no_hp    = $this->input->post('no_hp');
    
            $data = array(
                 'nis'      => $noinduk,
                 'id_kelas' => $idkelas,
                 'nama'     => $nama ,
                 'ttl'      => $ttl,
                 'agama'    => $agama,
                 'gender'   => $gender,
                 'alamat'   => $alamat,
                 'no_tlp'   => $no_hp
            );
    
            $this->Siswa_model->create($data);
            redirect(base_url());

        }

        public function view_edit($data){
    
            $where = array(
                 'nis' => $data
              );
            
            $array['isi_db'] = $this->Siswa_model->pilihsiswa($where);
            $this->load->view('siswa/ubah', $array);
        }

        public function hapus($id){
        
            $this->Siswa_model->delete($id);
            redirect(base_url());
        }

        public function edit(){
            $n_induk  = $this->input->post('nis');
            $idkls    = $this->input->post('kelas');
            $nama     = $this->input->post('nama');
            $ttl      = $this->input->post('ttl');
            $agama    = $this->input->post('agama'); 
            $gender   = $this->input->post('gender');
            $alamat   = $this->input->post('alamat');
            $no_hp    = $this->input->post('no_hp');
    
            $data = array(
                 'nis'      => $n_induk,
                 'id_kelas' => $idkls,
                 'nama'     => $nama ,
                 'ttl'      => $ttl,
                 'agama'    => $agama,
                 'gender'   => $gender,
                 'alamat'   => $alamat,
                 'no_tlp'   => $no_hp
            );
    
            $this->Siswa_model->update($n_induk, $data);
            redirect(base_url());
        }

    }
?>