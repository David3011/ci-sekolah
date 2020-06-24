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

	public function get()
	{
		return $this->db->get($this->table);
	}

	public function getById($id)
	{
		return $this->db->get_where($this->table, $id);
	}

	public function create($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function update($data, $id)
	{
		$this->db->update($this->table, $data, $id);
	}

	public function delete($id)
	{
		$this->db->delete($this->table, $id);
	}
}
