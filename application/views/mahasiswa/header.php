 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HALAMAN MAHASISWA</title>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css") ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url ("assets/customcss/custommagang.css") ?>">
  <!-- ckeditor -->
  <script type="text/javascript" src="<?= base_url()?>assets/ckeditor/ckeditor.js"></script>
  <!-- link icon from font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/adminLTE/dashboard.css") ?>">
 <script src="<?= base_url()?>assets2/lib/jquery.min.js"></script>
</head>
<body>
 <div class="wrapper">
  <nav id="sidebar" class="hidden-print">
    <div class="sidebar-header">
      <h3>Integra Inovasi Indonesia</h3>
      <strong><i class="glyphicon glyphicon-home"></i></strong>
    </div>

    <ul class="list-unstyled components">
      <li>

      </li>
      <li class="">
        <a href="<?php echo base_url("mahasiswa"); ?>" data-toggle=" " aria-expanded="false">
          <i class="glyphicon glyphicon-dashboard"></i>
          Dashboard
        </a>
      </li>
      <br>
      <li>
        <a href="<?php echo base_url("mahasiswa/profil"); ?>">
          <i class="glyphicon glyphicon-user"></i>
          Profil
        </a>
      </li>
      <br>
      <li>
        <a href="<?php echo base_url("mahasiswa/Absensi"); ?>">
          <i class="glyphicon glyphicon-calendar"></i>
          Absensi
        </a>
      </li>
      <br>
      <li>
        <a href="<?php echo base_url("mahasiswa/aktifitas"); ?>">
          <i class="glyphicon glyphicon-tasks"></i>
          Aktivitas
        </a>
      </li>
    </ul>
  </nav>