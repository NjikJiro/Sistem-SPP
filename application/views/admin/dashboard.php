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

            <h3 class="colorungu">Selamat Datang <?= $_SESSION['nama_petugas']; ?></h3>
            <p class="fs-5 text-secondary">Kamu telah login sebagai admin!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 p-2 mt-3">
            <div class=" bg-white shadow shadow-sm">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/img/kelas-clip.svg') ?>" alt="" width="300px">
                    </div>
                    <div class="col-md-6 p-3">
                        <h3 class="colorungu mt-3 ms-1">Jumlah Jurusan</h3>
                        <p class="fs-4 text-secondary ms-1"><?= $jurusan ?></p>
                        <h3 class="colorungu mt-3 ms-1">Jumlah Kelas</h3>
                        <p class="fs-4 text-secondary ms-1"><?= $kelas ?></p>
                        <h3 class="colorungu mt-3 ms-1">Jumlah Siswa</h3>
                        <p class="fs-4 text-secondary ms-1"><?= $siswa ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-2 mt-3">
            <div class=" bg-white shadow shadow-sm p-2">
                <h3 class="colorungu my-3 ms-1">Pembayaran Terbaru</h3>
                 <table class="table table-striped" style="width: 100%">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Nominal</th>
                        <th>Waktu Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($riwayat as $no => $data) : ?>
                        <tr>
                            <td><?= $data['nama_siswa'] ?></td>
                            
                            <td>
                                <?php
                                $id_kelas = $this->db->get_where('siswa', ['nisn' => $data['nisn']])->row_array();
                                $kelas = $this->db->get_where('kelas', ['id_kelas' => $id_kelas['id_kelas']])->row_array();
                                ?>
                                <?= $kelas['nama_kelas'] ?>
                            </td>
                            <td>Rp. <?= number_format($data['nominal'], 0, ',', '.')  ?>
                           
                            </td>
                            <td>
                                <?= date('Y-m-d', strtotime($data['created_at'])) ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>