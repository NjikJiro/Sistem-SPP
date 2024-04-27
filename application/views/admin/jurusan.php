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
            <button class="btn btn-ungu" data-bs-toggle="modal" data-bs-target="#modalTambahJurusan">Tambah Jurusan</button>
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
                        <th>Nama Jurusan</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jurusan as $no => $data) : ?>
                        <tr>
                            <td>
                                <?= $no + 1 ?>
                            </td>
                            <td>
                                <?= $data['id_jurusan'] ?>
                            </td>
                            <td>
                                <?= $data['nama_jurusan'] ?>
                            </td>
                            <td>
                                <?= $data['jurusan'] ?>
                            </td>
                            <td>

                                <i class="bi bi-pencil-square fs-3 me-3" data-bs-toggle="modal" data-bs-target="#modalEditJurusan<?= $data['id_jurusan'] ?>" style="cursor: pointer; color: #d4aa00;"></i>

                                <i class="bi bi-trash fs-3" data-bs-toggle="modal" data-bs-target="#modalHapusJurusan<?= $data['id_jurusan'] ?>" style="cursor: pointer; color: #c62323;"></i>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalTambahJurusan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-2">
            <div class="modal-header">
                <h5 class="colorungu">Tambah Jurusan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?= base_url('jurusan/addJurusan') ?>" method="post">
                <div class="modal-body">
                    <div class="my-3">
                        <label class="form-label">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" class="form-control" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Singkatan</label>
                        <input type="text" name="jurusan" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-ungu">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
