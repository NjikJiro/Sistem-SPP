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
                        <th>NIS</th>
                        <th>Nama SIswa</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Nominal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($siswa as $no => $data_siswa) : ?>
                        <tr>
                            <td><?= $no + 1 ?></td>
                            <td><?= $data_siswa['nisn'] ?></td>
                            <td><?= $data_siswa['nis'] ?></td>
                            <td><?= $data_siswa['nama_siswa'] ?></td>
                            <td><?= $data_siswa['jurusan'] ?></td>
                            
                            <td>
                                <?php
                                $nama_kelas = $this->db->get_where('kelas', ['id_kelas' => $data_siswa['id_kelas']])->row_array();
                                ?>
                                <?= $data_siswa['tahun'] ?> - <?= $nama_kelas['nama_kelas'] ?>
                            </td>
                            <td>Rp. <?= number_format($nama_kelas['nominal'], 0, ',', '.')  ?>
                            <td>
                                <a class="btn btn-ungu" href="<?= base_url('admin/tagihan/') . $data_siswa['nisn'] ?>">Bayar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>