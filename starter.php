<?php
session_start();
require_once("config/koneksi.php");

// CEK LOGIN
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Monic | Starter</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Web Saya</span>
    </a>

    <div class="sidebar">

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">
            <?= htmlspecialchars($_SESSION['username']); ?>
          </a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">

          <li class="nav-item">
            <a href="starter.php?page=mapel" class="nav-link">
              <p>Mapel</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="starter.php?page=guru" class="nav-link">
              <p>Guru</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="starter.php?page=kelas" class="nav-link">
              <p>Kelas</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="starter.php?page=siswa" class="nav-link">
              <p>Siswa</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="starter.php?page=siswa" class="nav-link">
              <p>Skripsi</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="logout.php" class="nav-link text-danger">
              <p>Logout</p>
            </a>
          </li>

        </ul>
      </nav>

    </div>
  </aside>

  <!-- CONTENT -->
  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">

        <?php
        $page = $_GET['page'] ?? 'dashboard';

        $file = "page/$page.php";

        if (file_exists($file)) {
            include $file;
        } else {
            echo "<div class='alert alert-danger'>File tidak ditemukan</div>";
        }
        ?>

      </div>
    </section>

  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2026</strong>
  </footer>

</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>