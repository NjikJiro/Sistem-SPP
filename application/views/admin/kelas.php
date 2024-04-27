<div class="container mt-4">
    <div class="row bg-white shadow shadow-sm">
        <div class="col p-3">
            <!-- Breadcrumb -->
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Admin</li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $judul ?></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $master ?></li>
                </ol>
            </nav>
            <button class="btn btn-ungu" data-bs-toggle="modal" data-bs-target="#modalTambahKelas">Tambah Kelas</button>
        </div>
    </div>
    <div class="row bg-white shadow shadow-sm mt-4">
        <?= $this->session->flashdata('message') ?>
        <div class="col p-3 mt-2">
            <table id="example" class="table table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama Kelas</th>
                        <th>Jurusan</th>
                        <th>Tahun</th>
                        <th>Nominal SPP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kelas as $no => $data) : ?>
                        <tr>
                            <td>
                                <?= $no + 1 ?>
                            </td>
                            <td>
                                <?= $data['id_kelas'] ?>
                            </td>
                            <td>
                                <?= $data['nama_kelas'] ?>
                            </td>
                            <td>
                                <?= $data['jurusan'] ?>
                            </td>
                            <td>
                                <?= $data['tahun'] ?>
                            </td>
                            <td>
                                Rp. <?= number_format($data['nominal'], 0, ',', '.')  ?>
                            </td>
                            <td>

                                <i class="bi bi-trash fs-3"  data-bs-toggle="modal" data-bs-target="#modalHapusKelas<?= $data['id_kelas'] ?>" style="cursor: pointer; color: #c62323;"></i>
                                <!-- Modal Hapus Petugas -->
                                <div class="modal fade" id="modalHapusKelas<?= $data['id_kelas'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content p-2">
                                            <div class="modal-header">
                                                <h5 class="colorungu">Hapus <?= $data['nama_kelas'] ?> ?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= base_url('kelas/hapusKelas/') . $data['id_kelas'] ?>" method="post">
                                                <div class="modal-body">
                                                    <p class="fs-5">Apakah anda yakin ingin menghapus <?= $data['nama_kelas'] ?> ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-ungu">Save changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="modalTambahKelas" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-2">
            <div class="modal-header">
                <h5 class="colorungu">Tambah Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?= base_url('kelas/addKelas') ?>" method="post">
                <div class="modal-body">
                    <div class="my-3">
                        <label class="form-label">Jurusan</label>
                        <select class="form-select" aria-label="Default select example" name="jurusan">
                            <option selected>--</option>
                            <?php foreach ($jurusan as $no => $data) : ?>
                                <option value="<?= $data['nama_jurusan'] ?>">
                                    <?= $data['nama_jurusan'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control" autocomplete="off" placeholder="XI PPLG 1">
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <div class="px-1">
                                <label class="form-label">Tahun Masuk</label>
                                <input type="text" name="tahun" class="form-control" autocomplete="off" placeholder="2021">
                            </div>
                            <div class="px-1">
                                <label class="form-label">Nominal SPP</label>
                                <input type="text" name="nominal" class="form-control" autocomplete="off" placeholder="400000">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-ungu">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>