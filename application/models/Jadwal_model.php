<?php
class Jadwal_model extends CI_Model
{

    private $table = 'jadwal';

    public function get()
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('mapel', 'mapel.id_mapel=jadwal.id_mapel');
        $this->db->join('kelas', 'kelas.id_kelas=jadwal.id_kelas');
        $this->db->join('guru', 'guru.nip=jadwal.nip');
        $query = $this->db->get();
        return $query->result();
    }

    public function getMapelByKelas($id_kelas)
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('kelas', 'kelas.id_kelas=jadwal.id_kelas');
        $this->db->join('mapel', 'mapel.id_mapel=jadwal.id_mapel');
        $this->db->where('jadwal.id_kelas', $id_kelas);
        $query = $this->db->get();
        return $query->result();
    }

    public function getNilaiByMapel($id_kelas, $id_mapel)
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('kelas', 'kelas.id_kelas=jadwal.id_kelas');
        $this->db->join('mapel', 'mapel.id_mapel=jadwal.id_mapel');
        $this->db->join('nilai', 'nilai.id_mapel=jadwal.id_mapel');
        $this->db->join('siswa', 'siswa.nis=nilai.nis AND siswa.id_kelas=jadwal.id_kelas'); // jadwal join siswa with id_kelas and siswa join nilai with nis
        $this->db->where('jadwal.id_kelas', $id_kelas);
        $this->db->where('jadwal.id_mapel', $id_mapel);
        $query = $this->db->get();
        return $query->result();
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
