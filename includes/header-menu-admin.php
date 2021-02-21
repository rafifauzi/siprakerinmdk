<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
  <link href="../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="../assets/css/style-navbar.css" rel='stylesheet' type='text/css' />
  <script src="../assets/js/bootstrap.min.js"></script>
  <style type="text/css">
    .navbar-brand{
      margin-right: 550px;
      font-weight: 550px;
    }
    .dropbtn:focus {
      outline: none;
    }
    @media screen and (max-width:1024px){
      .navbar-brand{
        margin-right: 140px;
      }
    }
    @media screen and (max-width: 600px) {
      .navbar-brand{
        font-size: 10pt;
        margin-right: 0px;
        margin-left: 5px;
      }
    }
  </style>
</head>
<body>
  <?php 
    include '../includes/koneksi.php';
    $q=mysql_query("SELECT nm_web FROM tb_settings");
    $r=mysql_fetch_array($q);
    $namaWeb=$r['nm_web'];
  ?>
<nav class="navbar navbar-expand-sm fixed-top" style="background:#2196F3;">
  <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" width="30"><span>SIPRAKERIN</span><?php echo $namaWeb;?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
  <div class="hamburger"></div>
  <div class="hamburger"></div>
  <div class="hamburger"></div>  
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
          <div class="dropdown">
          <button class="dropbtn" onclick="window.location.assign('index.php');">Dashboard</button>
          </div>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <button class="dropbtn">Kegiatan</button>
            <div class="dropdown-content">
              <a href="data_pemohon.php">Permohonan</a>
              <a href="tugas_pengantaran.php">Pengantaran</a>
              <a href="tugas_monitoring.php">Monitoring</a>
              <a href="tugas_bimbingan.php">Bimbingan</a>
              <a href="tugas_penguji.php">Sidang</a>
            </div>
        </div>
      </li>
      <li class="nav-item dropdown">
       <div class="dropdown">
          <button class="dropbtn">List Data</button>
            <div class="dropdown-content">
              <a href="data_siswa.php?j=all&k=all">Siswa PRAKERIN</a>
              <a href="data_nilai.php">Nilai Siswa</a>
              <a href="data_guru.php">Guru</a>
              <a href="data_angket.php">Angket Kepuasan</a>
              <a href="data_perusahaan.php">Perusahaan</a>
            </div>
        </div>
      </li>
      <li class="nav-item dropdown">
       <div class="dropdown">
          <button class="dropbtn">Settings</button>
            <div class="dropdown-content">
              <a href="settings.php">Penjadwalan</a>
              <a href="../index.php">Logout</a>
            </div>
        </div>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
