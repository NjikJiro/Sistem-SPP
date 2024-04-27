<?php
class Dashboard_model extends CI_Model
{
    public function jumlahKelas()
    {
        $query = $this->db->query('SELECT COUNT(*) as total FROM kelas');
        $row = $query->row();
        $totalKelas = $row->total;
        return $totalKelas;
    }
    public function jumlahSiswa()
    {
        $query = $this->db->query('SELECT COUNT(*) as total FROM siswa');
        $row = $query->row();
        $totalSiswa = $row->total;
        return $totalSiswa;
    }
    public function jumlahJurusan()
    {
        $query = $this->db->query('SELECT COUNT(*) as total FROM jurusan');
        $row = $query->row();
        $totalJurusan = $row->total;
        return $totalJurusan;
    }
        public function jumlahRiwayat()
    {
        $this->db->order_by('created_at', 'desc'); // Mengurutkan berdasarkan created_at secara descending
        $this->db->limit(5); // Membatasi hasil hanya untuk 5 baris pertama
        return $this->db->get('riwayat')->result_array();
    }

}