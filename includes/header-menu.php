<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
  
  <link href="../../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="../../assets/css/style-navbar.css" rel='stylesheet' type='text/css' />
  <script src="../../assets/js/bootstrap.min.js"></script>
  <style type="text/css">
    .navbar-brand{
      margin-right: 400px;
      font-weight: 550px;
    }    
    .dropbtn:focus {
      outline: none;
    }
    @media screen and (max-width:1024px){
      .navbar-brand{
        margin-right: 90px;
      }
    }
    @media screen and (max-width: 600px) {
      .navbar-brand{
        font-size: 14px;
        margin-right: 10px;
      }
    }
  </style>
</head>
<body>
  <?php 
    include '../../includes/koneksi.php';
    $q=mysql_query("SELECT nm_web FROM tb_settings");
    $r=mysql_fetch_array($q);
    $namaWeb=$r['nm_web'];
  ?>
<nav class="navbar navbar-expand-sm fixed-top" style="background:#2196F3;">
  <a class="navbar-brand" href="#"><img src="../../assets/img/logo.png" width="30"><span>SIPRAKERIN</span><?php echo $namaWeb;?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
  <div class="hamburger"></div>
  <div class="hamburger"></div>
  <div class="hamburger"></div>  
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
          <div class="dropdown">
          <button class="dropbtn">Pendaftaran</button>
            <div class="dropdown-content">
              <a href="page-permohonan_control.php">Prakerin</a>
              <a href="page-sidang-daftar.php">Sidang</a>
            </div>
          </div>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <button class="dropbtn" onclick="window.location.assign('page-list_perusahaan.php')">List Perusahaan</button>
        </div>
      </li>
      <li class="nav-item dropdown">
          <div class="dropdown">
          <button class="dropbtn">Kegiatan</button>
            <div class="dropdown-content">
              <a href="page-pengantaran.php">Pengantaran</a>
              <a href="page-bimbingan.php">Bimbingan</a>
              <a href="page-sidang.php">Sidang</a>
            </div>
          </div>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <button class="dropbtn" onclick="window.location.assign('page-jurnal_control.php')">Buku Jurnal</button>
        </div>
      </li>
      <li class="nav-item dropdown">
        <div class="dropdown">
          <button class="dropbtn">Profil</button>
            <div class="dropdown-content">
              <a href="page-profil.php?n=<?php echo $_SESSION['nis'] ;?>">Biodata</a>
              <a href="../../includes/proses_logout.php">Logout</a>
            </div>
          </div>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
