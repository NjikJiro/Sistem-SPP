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

            <button class="btn btn-ungu" data-bs-toggle="modal" data-bs-target="#modalTambahPetugas">Tambah Petugas</button>

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
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($petugas as $no => $data) : ?>
                        <tr>
                            <td>
                                <?= $no + 1 ?>
                            </td>
                            <td>
                                <?= $data['id'] ?>
                            </td>
                            <td>
                                <?= $data['nama_petugas'] ?>
                            </td>
                            <td>
                                <?= $data['username'] ?>
                            </td>
                            <td>

                                <i class="bi bi-pencil-square fs-3 me-3" data-bs-toggle="modal" data-bs-target="#modalEditPetugas<?= $data['id'] ?>" style="cursor: pointer; color: #d4aa00;"></i>

                                <i class="bi bi-trash fs-3" data-bs-toggle="modal" data-bs-target="#modalHapusPetugas<?= $data['id'] ?>" style="cursor: pointer; color: #c62323;"></i>
                                <!-- Modal Edit Petugas -->
                                <div class="modal fade" id="modalEditPetugas<?= $data['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content p-2">
                                            <div class="modal-header">
                                                <h5 class="colorungu">Edit <?= $data['nama_petugas'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= base_url('petugas/editPetugas/') . $data['id'] ?>" method="post">
                                                <div class="modal-body">
                                                    <div class="my-3">
                                                        <label class="form-label">Nama Petugas</label>
                                                        <input type="text" name="nama" class="form-control" autocomplete="off" value="<?= $data['nama_petugas'] ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Username</label>
                                                        <input type="text" value="<?= $data['username'] ?>" name="username" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-ungu">Save changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal Hapus Petugas -->
                        <div class="modal fade" id="modalHapusPetugas<?= $data['id'] ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content p-2">
                                    <div class="modal-header">
                                        <h5 class="colorungu">Hapus <?= $data['nama_petugas'] ?> ?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="<?= base_url('petugas/hapusPetugas/') . $data['id'] ?>" method="post">
                                        <div class="modal-body">
                                            <p class="fs-5">Apakah anda yakin ingin menghapus <?= $data['nama_petugas'] ?> ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-ungu">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah Petugas -->
<div class="modal fade" id="modalTambahPetugas" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-2">
            <div class="modal-header">
                <h5 class="colorungu">Tambah Petugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?= base_url('petugas/addPetugas') ?>" method="post">
                <div class="modal-body">
                    <div class="my-3">
                        <label class="form-label">Nama Petugas</label>
                        <input type="text" name="nama" class="form-control" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-ungu">Save changes</button>
            </form>
        </div>
    </div>
</div>


<!-- Div Keramat -->
</div>
<!-- Div Keramat -->