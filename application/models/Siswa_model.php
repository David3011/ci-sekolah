<?php
    class M_1461800048 extends CI_Model{
        
        public $table = 'siswa';
        
        public function lihat_data(){
            $this->db->select('nis, nama, no_tlp');
            $this->db->from($this->table);
            return $this->db->get();
        }
        
        public function create($data){
            $this->db->insert('siswa', $data);
        }
        
        public function pilihsiswa($data){
            return $this->db->get_where('siswa', $data)->result();
         }


        public function delete($id){
            $this->db->where('nis', $id);
            $this->db->delete('siswa');
        }

        public function update($id, $data)
        {
            $this->db->where('nis', $id);
            $this->db->update('siswa', $data);
        }

    }

?>