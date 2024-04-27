<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_model extends CI_Model
{

    public function dataPetugas()
    {
        return $this->db->get('petugas')->result_array();
    }
}