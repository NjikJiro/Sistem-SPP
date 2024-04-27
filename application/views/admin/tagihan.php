<div class="container mt-4">
    <div class="row bg-white shadow shadow-sm">
        <div class="col p-3">
            <!-- Breadcrumb -->
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Admin</li>
                    <li class="breadcrumb-item active">Pembayaran</li>
                </ol>
            </nav>
            <h3 class="colorungu"><?= $nama_siswa ?></h3>
            <p class="fs-5 text-secondary">Kelas <?= $kelas ?>, tahun <?= $tahun ?></p>
        </div>
    </div>
    <div class="row bg-white shadow shadow-sm mt-4">
        <?= $this->session->flashdata('message') ?>
        <div class="col p-3 mt-2">
            <table id="example" class="table table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Bulan - Tahun</th>
                        <th>Nominal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tagihan as $no => $data) : ?>
                        <tr>
                            <td><?= $no + 1 ?></td>
                            <td>
                                <?= $data['bulan'] ?> - <?= $data['tahun'] ?>
                            </td>
                            <td>
                                Rp. <?= number_format($data['nominal'], 0, ',', '.')  ?>
                            </td>
                            <td class="<?= $data['status'] == 'BELUM LUNAS' ? 'fw-bold text-danger' : 'fw-bold text-success' ?>">
                                <?= $data['status'] ?>
                            </td>
                            <td>

                                <button class="btn btn-ungu <?= $data['status'] == 'LUNAS' ? 'btn-secondary' : '' ?> " data-bs-toggle="modal" data-bs-target="#modalBayar<?= $data['id_tagihan'] ?>"
                                <?= $data['status'] == 'LUNAS' ? 'disabled' : '' ?>>Bayar</button>
                                <!-- Modal Hapus Petugas -->
                                <div class="modal fade" id="modalBayar<?= $data['id_tagihan'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content p-2">
                                            <div class="modal-header">
                                                <h5 class="colorungu">Lakukan Pembayaran</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="fs-5">Lakukan pembayaran spp untuk bulan <?= $data['bulan'] ?> tahun <?= $data['tahun'] ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="<?= base_url('bayar/bayar/' . $data['id_tagihan']) ?>" class="btn btn-ungu">Bayar</a>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>