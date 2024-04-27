<?php
class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //relasi databse
    }

    public function index()
    {
        $this->load->view('admin/layout/nav.php');
        $this->load->view('admin/petugas.php');
        $this->load->view('admin/layout/foot.php');
    }

    public function addPetugas()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $pw = $this->input->post('password');
        $password = password_hash($pw, PASSWORD_DEFAULT);
        $data = [
            'nama_petugas' => $nama,
            'username' => $username,
            'password' => $password
        ];
        $this->db->insert('petugas', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
       Data successfully inserted!
       </div>'
        );

        redirect('/admin/petugas');
    }

    public function editPetugas($id)
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $pw = $this->input->post('password');
        $password = password_hash($pw, PASSWORD_DEFAULT);
        $data = [
            'nama_petugas' => $nama,
            'username' => $username,
            'password' => $password
        ];
        $this->db->where('id', $id)->update('petugas', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-warning" role="alert">
       Data successfully Updated!
       </div>'
        );

        redirect('/admin/petugas');
    }

    public function hapusPetugas($id)
    {
        $this->db->delete('petugas', ['id' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger" role="alert">
       Data successfully Deleted!
       </div>'
        );
        redirect('/admin/petugas');
    }
}
