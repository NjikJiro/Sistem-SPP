<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin | <?= $judul ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-B5Og38vQw2YrWjJMw/7Wx1J/ghcjG7A6H3B4ivJAdckvq+ebVlVNyVpOZ+XTJL6gxSc6flF1Es1Ry3yyvhcrFg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">

  </head>
 
  <body>
    <!-- Navbar pertama -->
    <nav class="navbar navungu">
      <div class="container-fluid px-5 py-2">
        <a class="navbar-brand text-white fs-5 fw-semibold ms-3"
          ><i class="bi bi-wallet-fill me-2"></i>MUDA SPP</a
        >
        <div class="d-flex">
          <img
            src="<?= base_url('assets/img/face.jpg') ?>"
            class="img-fluid rounded rounded-circle"
            alt=""
            width="36"
          />
          <div class="dropdown me-3">
            <a
              class="btn dropdown-toggle text-white border border-0 "
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <span><?= $_SESSION['nama_petugas']; ?></span>
            </a>
            <ul class="dropdown-menu z-2">
              <li>
                <a class="dropdown-item text-danger me-3" href="<?= base_url('auth/logout') ?>"
                  ><i class="bi bi-box-arrow-right me-3"></i>Logout</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- Navbar kedua -->
    <nav
      class="navbar navbar-expand-lg navputih sticky-top shadow shadow-sm z-1"
    >
      <div class="container-fluid px-5 py-2">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item mx-2">
              <a class="nav-link <?= ($judul == 'Dashboard') ? 'nav-active' : '' ?>" aria-current="page" href="<?= base_url('admin/dashboard') ?>"
                ><i class="bi bi-house-fill me-2"></i>Home</a
              >
            </li>
            <li class="nav-item dropdown mx-2">
              <a
                class="nav-link dropdown-toggle <?= ($judul == 'Masterdata') ? 'nav-active' : '' ?>"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-database me-2"></i>Master Data
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= base_url('admin/jurusan') ?>"> <i class="bi bi-card-list me-2"></i>Jurusan</a></li>
                <li><a class="dropdown-item" href="<?= base_url('admin/kelas') ?>"> <i class="bi bi-backpack me-2"></i>Kelas</a></li>
                <li><a class="dropdown-item" href="<?= base_url('admin/siswa') ?>"> <i class="bi bi-person-fill me-2"></i>Siswa</a></li>
              </ul>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link <?= ($judul == 'Bayar') ? 'nav-active' : '' ?>" href="<?= base_url('admin/bayar') ?>"
                ><i class="bi bi-cash-coin me-2"></i>Pembayaran</a
              >
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link <?= ($judul == 'Riwayat Pembayaran') ? 'nav-active' : '' ?>" href="<?= base_url('admin/riwayat_pembayaran') ?>"
                ><i class="bi bi-cash-coin me-2"></i>Riwayat Pembayaran</a
              >
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link <?= ($judul == 'Petugas') ? 'nav-active' : '' ?>" href="<?= base_url('admin/petugas') ?>"
                ><i class="bi bi-person-fill me-2"></i>Petugas</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
