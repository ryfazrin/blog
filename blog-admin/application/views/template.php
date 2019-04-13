<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin &mdash; Blog</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/fontawesome/css/all.min.css')?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/datatables.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/select2/dist/css/select2.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-daterangepicker/daterangepicker.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/summernote/summernote-bs4.css')?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/components.css')?>">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <ul class="navbar-nav mr-3">
          <li><a href="#" data-toggle="sidebar" class="nav-link nav-link d-lg-none"><i class="fas fa-bars"></i></a></li>
          <!-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
        </ul>
        <a class="navbar-brand text-right" href="">
          Admin Blog
        </a>
      </nav>
      <div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="<?php echo site_url(); ?>">Admin blog</a>
      </div>
      <!-- sidebar -->
      <ul class="sidebar-menu">
        <li class="dropdown">
          <a href="" class="nav-link has-dropdown"><i class="fas fa-user text-danger"></i><span>Hai, <?= $this->session->userdata("nama"); ?></span></a>
          <ul class="dropdown-menu">
            <!-- <li><a class="nav-link" href="#"><i class="fas fa-lock"></i>Ubah Password</a></li> -->
            <li><a class="nav-link text-danger" href="<?php echo site_url('login/logout/'); ?>" onclick="return confirm('Yakin ingin Logout?')"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
          </ul>
        </li>
        <li class="menu-header"><b><?= $this->session->userdata("level"); ?></b></li>
        <li>
          <a href="<?php echo site_url(); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>

        <!-- level admin -->
        <?php //if ($level->level == 'administrator'): ?>
          <li class="dropdown">
            <a href="" class="nav-link has-dropdown"><i class="fa fa-newspaper"></i><span>Post</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="<?php echo site_url('/post'); ?>"><i class="fas fa-newspaper"></i> Semua Post</a></li>
              <li><a class="nav-link" href="<?php echo site_url('/post/tambah'); ?>"><i class="fas fa-plus"></i> Tambah Baru</a></li>
            </ul>
          </li>
          <?php if ($this->session->userdata('level') == 'administrator'): ?>
            <li><a href="<?php echo site_url('user/'); ?>" class="nav-link"><i class="fas fa-user"></i><span>Data User</span></a></li>
          <?php endif; ?>
        <?php //endif; ?>
      </ul>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="<?php echo site_url('login/logout/'); ?>" class="btn btn-danger btn-lg btn-block btn-icon-split" onclick="return confirm('Yakin ingin Logout?')">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>

    </aside>
  </div>

      <!-- main content -->
      <div class="main-content">
        <?= $adm_content; ?>
      </div>
      <!-- end main content -->

<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; 2019 <div class="bullet"></div> By <a href="https://ryfazrin.github.io/">Ryfazrin</a> SMK Negeri 1 Kotabaru
  </div>
  <div class="footer-right">

  </div>
</footer>
</div>
</div>
<!-- modal konfirmasi-->
<div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Konfirmasi</h4>
  </div>
  <div class="modal-body btn-info">
    Apakah Anda yakin ingin menghapus data ini ?
  </div>
  <div class="modal-footer">
    <a href="javascript:;" class="btn btn-danger" id="hapus-true-data">Hapus</a>
    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
  </div>

  </div>
</div>
</div>
<!-- General JS Scripts -->
<script src="<?php echo base_url('assets/modules/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/modules/popper.js')?>"></script>
<script src="<?php echo base_url('assets/modules/tooltip.js')?>"></script>
<script src="<?php echo base_url('assets/modules/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/modules/nicescroll/jquery.nicescroll.min.js')?>"></script>
<script src="<?php echo base_url('assets/modules/moment.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/stisla.js')?>"></script>

<!-- JS Libraies -->
<script src="<?php echo base_url('assets/modules/datatables/datatables.min.js')?>"></script>
<script src="<?php echo base_url('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')?>"></script>
<script src="<?php echo base_url('assets/modules/select2/dist/js/select2.full.min.js')?>"></script>
<script src="<?php echo base_url('assets/modules/jquery-ui/jquery-ui.min.js')?>"></script>
<script src="<?php echo base_url('assets/modules/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
<script src="<?php echo base_url('assets/modules/summernote/summernote-bs4.js')?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('assets/js/page/modules-datatables.js')?>"></script>

<!-- Template JS File -->
<script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
<script src="<?php echo base_url('assets/js/custom.js')?>"></script>
</body>
</html>
