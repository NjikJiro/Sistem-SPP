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
            <button class="btn btn-ungu" data-bs-toggle="modal" data-bs-target="#modalTambahSiswa">Tambah Siswa</button>
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
                            <td>
                                <i class="bi bi-pencil-square fs-3 me-3" data-bs-toggle="modal" data-bs-target="#modalEditSiswa<?= $data_siswa['nisn'] ?>" style="cursor: pointer; color: #d4aa00;"></i>
                                <i class="bi bi-trash fs-3" data-bs-toggle="modal" data-bs-target="#modalHapusSiswa<?= $data_siswa['nisn'] ?>" style="cursor: pointer; color: #c62323;"></i>
                                <!-- Modal Edit -->
                                <div class="modal fade" id="modalEditSiswa<?= $data_siswa['nisn'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content p-2">
                                            <div class="modal-header">
                                                <h5 class="colorungu">Edit <?= $data_siswa['nama_siswa'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= base_url('siswa/editSiswa/') . $data_siswa['nisn'] ?>" method="post">
                                                <div class="modal-body">
                                                    <div class="d-flex">
                                                        <div class="my-3 px-1">
                                                            <label class="form-label">NISN</label>
                                                            <input type="number" name="nisn" class="form-control" value="<?= $data_siswa['nisn'] ?>" readonly>
                                                        </div>
                                                        <div class="my-3 px-1">
                                                            <label class="form-label">NIS</label>
                                                            <input type="number" name="nis" class="form-control" value="<?= $data_siswa['nis'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama Siswa</label>
                                                        <input type="text" name="nama_siswa" class="form-control" autocomplete="off" value="<?= $data_siswa['nama_siswa'] ?>">
                                                    </div>
                                                    <label class="form-label">Kelas</label>
                                                    <select class="form-select" aria-label="Default select example" name="id_kelas">
                                                        <option selected>--</option>
                                                        <?php foreach ($kelas as $no_kelas => $data_kelas) : ?>
                                                            <?php if ($data_kelas['id_kelas'] == $data_siswa['id_kelas']) : ?>
                                                                <option value="<?= $data_kelas['id_kelas'] ?>" selected>
                                                                    <?= $data_kelas['nama_kelas'] ?>
                                                                </option>
                                                            <?php else : ?>
                                                                <option value="<?= $data_kelas['id_kelas'] ?>">
                                                                    <?= $data_kelas['nama_kelas'] ?>
                                                                </option>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-ungu">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Hapus Petugas -->
                                <div class="modal fade" id="modalHapusSiswa<?= $data_siswa['nisn'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content p-2">
                                            <div class="modal-header">
                                                <h5 class="colorungu">Hapus <?= $data_siswa['nama_siswa'] ?> ?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= base_url('siswa/hapusSiswa/') . $data_siswa['nisn'] ?>" method="post">
                                                <div class="modal-body">
                                                    <p class="fs-5">Apakah anda yakin ingin menghapus <?= $data_siswa['nama_siswa'] ?> ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-ungu">Save changes</button>
                                            </form>
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

<div class="modal fade" id="modalTambahSiswa" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-2">
            <div class="modal-header">
                <h5 class="colorungu">Tambah Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?= base_url('siswa/addSiswa') ?>" method="post">
                <div class="modal-body">
                    <div class="d-flex">
                        <div class="my-3 px-1">
                            <label class="form-label">NISN</label>
                            <input type="number" name="nisn" class="form-control" autocomplete="off">
                        </div>
                        <div class="my-3 px-1">
                            <label class="form-label">NIS</label>
                            <input type="number" name="nis" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Siswa</label>
                        <input type="text" name="nama_siswa" class="form-control" autocomplete="off">
                    </div>
                    <label class="form-label">Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="id_kelas">
                        <option selected>--</option>
                        <?php foreach ($kelas as $no => $data) : ?>
                            <option value="<?= $data['id_kelas'] ?>">
                                <?= $data['nama_kelas']?> - <?= $data['tahun'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-ungu">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>