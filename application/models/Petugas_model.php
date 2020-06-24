<?php

class Petugas_model extends CI_Model {

	private $table = 'petugas';

	public function checkPetugas($username, $password)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get();
	}
}
