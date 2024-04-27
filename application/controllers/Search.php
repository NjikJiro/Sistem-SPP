<?php
class Search extends CI_Controller{
    public function cari()
    {
        // Memuat model Search_model
        $this->load->model('Search_model');
        
        $nisn = $this->input->get('nisn'); // Ambil input pencarian dari URL
        $data['results'] = $this->Search_model->searchData($nisn); // Panggil fungsi pencarian dari model
        $siswa = $this->db->get_where('siswa', ['nisn' => $nisn])->row_array();
        $data['siswa'] = $siswa;
        $kelas = $this->db->get_where('kelas', ['id_kelas' => $siswa['id_kelas']])->row_array();
        $data['kelas'] = $kelas;
        $this->load->view('home/search.php', $data);
    }
}
?>
