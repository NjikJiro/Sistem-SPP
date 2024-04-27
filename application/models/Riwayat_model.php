<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat_model extends CI_Model
{

    public function dataRiwayat()
    {
         $this->db->order_by('created_at', 'desc'); // Mengurutkan berdasarkan created_at secara descending
        return $this->db->get('riwayat')->result_array();
    }
}