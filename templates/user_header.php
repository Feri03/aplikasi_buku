<!DOCTYPE html>
<html>

<head>

  <!-- meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- title -->
  <title><?= $data['judul']; ?></title>

  <!-- css -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/<?= $data['css']; ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.12.5/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
</head>

<body>


  <nav class="navbar navbar-light bg-light p-3 shadow-sm" id="d-mobile">
    <a class="navbar-brand ml-3" href="<?= base_url(); ?>">Buku</a>
    <button class="navbar-toggler mr-3" id="o-none" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav p-3">
        <a class="nav-link p-2" href="<?= base_url(); ?>">
          <i class="fas fa-fw fa-home mr-1"></i>
          <span>Beranda</span>
        </a>
        <a class="nav-link p-2" href="<?= base_url('buku/buku.php?kumpulan_buku'); ?>">
          <i class="fas fa-fw fa-book mr-1"></i>
          <span>Buku</span>
        </a>
        <a class="nav-link p-2" href="<?= base_url('admin/login.php'); ?>">
          <i class="fas fa-fw fa-sign-in-alt mr-1"></i>
          <span>Login</span>
        </a>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-light bg-light p-3" id="d-desk">
    <a class="navbar-brand ml-5" href="<?= base_url(); ?>">Buku</a>
    <nav class="nav justify-content-center align-items-center mr-5">
      <a class="nav-link" href="<?= base_url(); ?>">Beranda</a>
      <a class="nav-link" href="<?= base_url('buku/buku.php'); ?>">Buku</a>
      <a class="nav-link" href="<?= base_url('admin/login.php'); ?>">Login</a>
    </nav>
  </nav>
