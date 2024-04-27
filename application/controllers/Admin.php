<?php
class Admin extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //relasi database
        $this->load->model('Dashboard_model', 'dashboard');
        $this->load->model('Petugas_model', 'petugas');
        $this->load->model('Jurusan_model', 'jurusan');
        $this->load->model('Kelas_model', 'kelas');
        $this->load->model('Siswa_model', 'siswa');
        $this->load->model('Bayar_model', 'bayar');
        $this->load->model('Riwayat_model', 'riwayat');
        $this->load->model('Tagihan_model','tagihan');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata(
                'login_message',
                '<div class="alert alert-danger" role="alert">
                Silahkan login terlebih dahulu!
               </div>'
            );
            redirect('auth');
        }
    }
    public function dashboard(){
        $data['jurusan'] = $this->dashboard->jumlahJurusan();
        $data['kelas'] = $this->dashboard->jumlahKelas();
        $data['siswa'] = $this->dashboard->jumlahSiswa();
        $data['riwayat'] = $this->dashboard->jumlahRiwayat();
        $data['judul'] = 'Dashboard';
        $this->load->view('admin/layout/nav.php', $data);
        $this->load->view('admin/dashboard.php', $data);
        $this->load->view('admin/layout/foot.php');
    }
    public function jurusan(){
        $data['jurusan'] = $this->jurusan->dataJurusan();
        $data['judul'] = 'Masterdata';
        $data['master'] = 'Jurusan';
        $this->load->view('admin/layout/nav.php', $data);
        $this->load->view('admin/jurusan.php', $data);
        $this->load->view('admin/layout/foot.php');
    }
    public function kelas(){
        $data['kelas'] = $this->kelas->dataKelas();
        $data['jurusan'] = $this->kelas->dataJurusan();
        $data['judul'] = 'Masterdata';
        $data['master'] = 'Kelas';
        $this->load->view('admin/layout/nav.php', $data);
        $this->load->view('admin/kelas.php', $data);
        $this->load->view('admin/layout/foot.php');
    }
    public function siswa(){
        $data['siswa'] = $this->siswa->dataSiswa();
        $data['jurusan'] = $this->siswa->dataJurusan();
        $data['kelas'] = $this->siswa->dataKelas();
        $data['judul'] = 'Masterdata';
        $data['master'] = 'siswa';
        $this->load->view('admin/layout/nav.php', $data);
        $this->load->view('admin/siswa.php', $data);
        $this->load->view('admin/layout/foot.php');
    }
    public function bayar(){
        $data['jurusan'] = $this->bayar->dataJurusan();
        $data['kelas'] = $this->bayar->dataKelas();
        $data['siswa'] = $this->bayar->dataSiswa();
        $data['judul'] = 'Bayar';
        $this->load->view('admin/layout/nav.php', $data);
        $this->load->view('admin/bayar.php', $data);
        $this->load->view('admin/layout/foot.php');
    }
public function tagihan($nisn){
    $this->load->model('Tagihan_model');
    $data['tagihan'] = $this->Tagihan_model->dataTagihan($nisn); // Kirim NISN ke model
    $data['judul'] = 'Tagihan';
    $siswa = $this->db->get_where('siswa', ['nisn' => $nisn])->row_array();
    $kelas = $this->db->get_where('kelas', ['id_kelas' => $siswa['id_kelas']])->row_array();
    $data['nama_siswa'] = $siswa['nama_siswa'];
    $data['kelas'] = $kelas['nama_kelas'];
    $data['tahun'] = $kelas['tahun'];
    $this->load->view('admin/layout/nav.php', $data);
    $this->load->view('admin/tagihan.php', $data);
    $this->load->view('admin/layout/foot.php');
}

    public function petugas(){
        $data['petugas'] = $this->petugas->dataPetugas();
        $data['judul'] = 'Petugas';
        $this->load->view('admin/layout/nav.php', $data);
        $this->load->view('admin/petugas.php', $data);
        $this->load->view('admin/layout/foot.php');
    }
    public function riwayat_pembayaran()
    {
        $data['riwayat'] = $this->riwayat->dataRiwayat();
        $data['judul'] = 'Riwayat Pembayaran';
        $this->load->view('admin/layout/nav.php', $data);
        $this->load->view('admin/riwayat.php', $data);
        $this->load->view('admin/layout/foot.php');
    }
}