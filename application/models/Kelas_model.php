<?php
class Kelas_model extends CI_Model
{
    public function dataKelas()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function dataJurusan()
    {
        return $this->db->get('jurusan')->result_array();
    }
}
