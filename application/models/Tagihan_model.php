<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tagihan_model extends CI_Model
{
    public function dataTagihan($nisn)
    {
        $this->db->where('nisn', $nisn); // Menambahkan filter berdasarkan NISN
        return $this->db->get('tagihan-spp')->result_array();
    }
}
