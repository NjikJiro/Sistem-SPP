<?php
class Jurusan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/layout/nav.php');
        $this->load->view('admin/jurusan.php');
        $this->load->view('admin/layout/foot.php');
    }

    public function addJurusan()
    {
        $nama_jurusan = $this->input->post('nama_jurusan');
        $jurusan = $this->input->post('jurusan');
        $data = [
            'nama_jurusan' => $nama_jurusan,
            'jurusan' => $jurusan
        ];
        $this->db->insert('jurusan', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
       Data successfully inserted!
       </div>'
        );

        redirect('/admin/jurusan');
    }
}
