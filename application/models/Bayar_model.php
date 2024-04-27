<?php
class Bayar_model extends CI_Model
{

    public function dataJurusan()
    {
        return $this->db->get('jurusan')->result_array();
    }
    public function dataKelas()
    {
        return $this->db->get('kelas')->result_array();
    }
    public function dataSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }
}
