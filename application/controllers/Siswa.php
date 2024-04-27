<?php
class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //relasi databse
        $this->load->model('Siswa_model', 'siswa');
    }

    public function index()
    {
        $this->load->view('admin/layout/nav.php');
        $this->load->view('admin/siswa.php');
        $this->load->view('admin/layout/foot.php');
    }

    public function addSiswa()
    {
        $nisn = $this->input->post('nisn');
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama_siswa');
        $id_kelas = $this->input->post('id_kelas');
        $kelas = $this->db->get_where('kelas', ['id_kelas' =>  $id_kelas])->row_array();

        $data = [
            'nisn' => $nisn,
            'nis' => $nis,
            'nama_siswa' => $nama,
            'jurusan' => $kelas['jurusan'],
            'tahun' => $kelas['tahun'],
            'id_kelas' => $id_kelas
        ];
        $this->db->insert('siswa', $data);

            $tahun = $kelas['tahun'];
            $bulan = [
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
            ];

            for ($i = 0; $i < 3; $i++) {
                foreach ($bulan as $nama_bulan) {
                    if (strtolower($nama_bulan) === 'januari') {
                        $tahun++;
                    }

                    $data_siswa_spp = [
                        'nisn' => $nisn,
                        'nama_siswa' => $nama,
                        'bulan' => $nama_bulan,
                        'tahun' => $tahun,
                        'nominal' => $kelas['nominal']
                    ];

                    $inserted = $this->db->insert('tagihan-spp', $data_siswa_spp);

                    if (!$inserted) {
                        throw new Exception('Gagal menyimpan data SPP siswa.');
                    }
                }
            }
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
       Data successfully inserted!
       </div>'
        );



        redirect('/admin/siswa');
    }

    public function editSiswa($id)
    {
        $nisn = $this->input->post('nisn');
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama_siswa');
        $id_kelas = $this->input->post('id_kelas');
        $kelas = $this->db->get_where('kelas', ['id_kelas' =>  $id_kelas])->row_array();

        $data = [
            'nisn' => $nisn,
            'nis' => $nis,
            'nama_siswa' => $nama,
            'jurusan' => $kelas['jurusan'],
            'tahun' => $kelas['tahun'],
            'id_kelas' => $id_kelas
        ];
        $this->db->where('nisn', $nisn)->update('siswa', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-warning" role="alert">
       Data successfully Updated!
       </div>'
        );


        redirect('/admin/siswa');
    }

    public function hapusSiswa($id)
    {
        $this->db->delete('siswa', ['nisn' => $id]);
        $this->db->delete('tagihan-spp', ['nisn' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger" role="alert">
       Data successfully Deleted!
       </div>'
        );
        redirect('/admin/siswa');
    }
}
