<?php

class Guru_model extends CI_Model {

	private $table = 'guru';

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
		return $this->db->affected_rows();
	}

	public function update($data, $id)
	{
		$this->db->update($this->table, $data, $id);
		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$this->db->delete($this->table, $id);
		return $this->db->affected_rows();
	}
}
