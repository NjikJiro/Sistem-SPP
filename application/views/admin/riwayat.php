<div class="container mt-4">
    <div class="row bg-white shadow shadow-sm">
        <div class="col p-3">
            <!-- Breadcrumb -->
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Admin</li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $judul ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row bg-white shadow shadow-sm mt-4">
        <?= $this->session->flashdata('message') ?>
        <div class="col p-3 mt-2">
            <table id="example" class="table table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>SPP</th>
                        <th>Nominal</th>
                        <th>Waktu Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($riwayat as $no => $data) : ?>
                        <tr>
                            <td><?= $no + 1 ?></td>
                            <td><?= $data['nisn'] ?></td>
                            <td><?= $data['nama_siswa'] ?></td>
                            
                            <td>
                                <?php
                                $id_kelas = $this->db->get_where('siswa', ['nisn' => $data['nisn']])->row_array();
                                $kelas = $this->db->get_where('kelas', ['id_kelas' => $id_kelas['id_kelas']])->row_array();
                                ?>
                                <?= $kelas['tahun'] ?> - <?= $kelas['nama_kelas'] ?>
                            </td>
                            <td>
                                <?= $data['bulan'] .'-'. $data['tahun'] ?>
                            </td>
                            <td>Rp. <?= number_format($data['nominal'], 0, ',', '.')  ?>
                            </td>
                            <td>
                                <?= $data['created_at'] ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>