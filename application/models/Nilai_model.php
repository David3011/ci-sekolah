<?php
    class Nilai_model extends CI_Model{
        
        private $table = 'nilai';

	public function get()
	{
		$this->db->select('*');
		$this->db->from('nilai');
		$this->db->join('siswa','siswa.nis=nilai.nis');
		$query =$this->db->get();
		return $query->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->table, $id);
    }
}