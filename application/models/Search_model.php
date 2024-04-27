<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search_model extends CI_Model
{
public function searchData($nisn)
{
    $this->db->like('nisn', $nisn); // Menambahkan kondisi WHERE LIKE
    return $this->db->get('tagihan-spp')->result_array(); // Mengembalikan hasil query
}

}