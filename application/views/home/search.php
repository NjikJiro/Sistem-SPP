<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Search | Muda SPP</title>
</head>
<style>
    body {
        font-family: poppins;
    }
</style>

<body style="background-color: #FAFAFA;">

<?php if(isset($nisn)): ?>
        <h3>ERROR 404</h3>
<?php else: ?>
    <div class="container">
        <div class="row bg-white shadow shadow-sm p-4 mt-4">
            <div class="col-md-3 text-center mt-3 mb-3">
                    <img src="<?= base_url('assets/img/profile-search.png') ?>" alt="" width="240px">
            </div>
            <div class="col-md-9 mt-3 mb-3">
                <h3 class="text-dark mb-4"><?= $siswa['nama_siswa']?></h3>
                <p class="fs-5 text-secondary">NISN : <?= $siswa['nisn'] ?></p>
                <p class="fs-5 text-secondary">NIS : <?= $siswa['nis'] ?></p>
                <p class="fs-5 text-secondary">Jurusan : <?= $siswa['jurusan'] ?></p>
                <p class="fs-5 text-secondary">Kelas : <?= $kelas['nama_kelas'] ?></p>
                <p class="fs-5 text-secondary">Tahun Masuk : <?= $kelas['tahun'] ?></p>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row bg-white shadow shadow-sm mt-3 mb-4">
            <div class="col p-3">
                <table class="table table-striped mb-3">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Bulan - Tahun</td>
                            <td>Nominal</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $no => $data) : ?>
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
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                    <div class="d-grid">
                        <a href="<?= base_url('/check') ?>" class="btn btn-secondary mt-3 ms-auto">Kembali</a>
                    </div>
            </div>
        </div>
    </div>
<?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>