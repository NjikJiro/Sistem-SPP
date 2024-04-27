<?php
// application/controllers/Auth.php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'am');
    }

    public function index(){
        $this->load->view('/auth/index');
    }

    public function login()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('/auth/index');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
           Please login first!
           </div>'
            );
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $datauser = $this->db->get_where('petugas', ['username' => $username])->row_array();

            $user = $this->am->login($username, $password);

            if ($user) {
                $userdata = [
                    'username' => $user->username,
                    'nama_petugas' => $datauser['nama_petugas'],
                    'logged_in' => TRUE
                ];
                $this->session->set_userdata($userdata);
                redirect('/admin/dashboard');
            } else {
                $this->session->set_flashdata(
                    'login_message',
                    '<div class="alert alert-danger" role="alert">
           Inccorect password or username
           </div>'
                );
                redirect('/auth/index');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
