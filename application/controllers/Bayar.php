<?php
class Bayar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //relasi databse
    }
    public function bayar($id_tagihan)
    {
        // Ubah status tagihan menjadi lunas
        $data = [
            'status' => 'LUNAS'
        ];
        $this->db->where('id_tagihan', $id_tagihan)->update('tagihan-spp', $data);

        $dataSpp = $this->db->get_where('tagihan-spp', ['id_tagihan' => $id_tagihan])->row_array();


        $data = [
            'id' => $id_tagihan,
            'nisn' => $dataSpp['nisn'],
            'nama_siswa' => $dataSpp['nama_siswa'],
            'bulan' => $dataSpp['bulan'],
            'tahun' => $dataSpp['tahun'],
            'nominal' => $dataSpp['nominal']
        ];
        $this->db->insert('riwayat', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
       Data successfully inserted!
       </div>'
        );



        redirect('/admin/riwayat_pembayaran');
    }
}
