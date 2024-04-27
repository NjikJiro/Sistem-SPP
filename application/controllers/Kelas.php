<?php
class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Relasa database
        $this->load->model('Jurusan_model', 'jurusan');
    }

    public function index()
    {
        $this->load->view('admin/layout/nav.php');
        $this->load->view('admin/kelas.php');
        $this->load->view('admin/layout/foot.php');
    }

    public function addKelas()
    {
        $nama_kelas = $this->input->post('nama_kelas');
        $jurusan = $this->input->post('jurusan');
        $tahun = $this->input->post('tahun');
        $nominal = $this->input->post('nominal');
        $data = [
            'nama_kelas' => $nama_kelas,
            'jurusan' => $jurusan,
            'tahun' => $tahun,
            'nominal' => $nominal
        ];
        $this->db->insert('kelas', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
       Data successfully inserted!
       </div>'
        );

        redirect('/admin/kelas');
    }

    public function hapusKelas($id)
    {
        $this->db->delete('kelas', ['id_kelas' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger" role="alert">
       Data successfully Deleted!
       </div>'
        );
        redirect('/admin/kelas');
    }
}
