<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $data['judul'];?> | Sistham</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= BASEURL; ?>dash/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/fontawesome-free/css/all.min.css">

<!-- Select2 -->
<link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- JQVMap -->
   <link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/jqvmap/jqvmap.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/summernote/summernote-bs4.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>dash/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= BASEURL; ?>dash/dist/img/download.png" alt="" height="150" width="150">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= BASEURL; ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">About</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= BASEURL;?>" class="brand-link">
      <img src="<?= BASEURL;?>dash/dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sistham <strong style="font-weight: bold;">2021</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= BASEURL;?>dash/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Rizki Darms <br><span style="font-size: 13px; font-weight:bold">Admin</span>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= BASEURL;?>" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
        </li>
        <li class="nav-header">KHATAMAN <span class="badge badge-info left">2021</span></li>
            <li class="nav-item">
                <a href="<?= BASEURL;?>binadhor" class="nav-link">
                    <i class="nav-icon fas fa-quran" style="color:grey"></i>
                    <p>Binadhor</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= BASEURL;?>bilghoib" class="nav-link">
                    <i class="nav-icon fas fa-quran"></i>
                    <p>Bilghoib</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-tshirt"></i>
                    <p>Seragam<i class="right fas fa-angle-left "></i></p>
                </a>
                <ul class="nav nav-treeview ml-2">
                    <li class="nav-item">
                      <a href="<?= BASEURL; ?>seragam" class="nav-link">
                      <i class="nav-icon fas fa-quran" style="color:grey"></i>
                        <p>Seragam Binadhor</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?= BASEURL; ?>seragam/bilghoib" class="nav-link">
                      <i class="nav-icon fas fa-quran"></i>
                        <p>Seragam Bilghoib</p>
                      </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= BASEURL;?>syahadah" class="nav-link">
                    <i class="nav-icon fas fa-medal"></i>
                    <!-- <i class="nav-icon fa-file-certificate"></i> -->
                    <i class=""></i>
                    <p>Syahadah</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= BASEURL; ?>pembayaran" class="nav-link">
                    <i class="nav-icon far fa-money-bill-alt"></i>
                    <p>Pembayaran</p>
                </a>
            </li>
          <li class="nav-item">
          <li class="nav-header"> AKHIRUSANNAH <span class="badge badge-info left">Beta</span></li>
            <li class="nav-item">
                <a href="" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                    <p>Panitia</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-wallet"></i>
                    <p>Keuangan</p>
                </a>
            </li>
          </li>
          <li class="nav-header">SETTING</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user""></i>
              <p class="text">User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
          <br>
          <br>
          <br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- ==================================================================================================== -->

