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
      margin-right: 650px;
      font-weight: 550px;
    }    
    .dropbtn:focus {
      outline: none;
    }
    @media screen and (max-width:1024px){
      .navbar-brand{
        margin-right: 430px;
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
    $kode_guru=$_SESSION['kdGuru'];
    $q1=mysql_query("SELECT kode_guru FROM tb_pengantaran WHERE kode_guru='$kode_guru'") or die(mysql_error());
    $q2=mysql_query("SELECT kode_guru FROM tb_monitoring WHERE kode_guru='$kode_guru'") or die(mysql_error());
    $q3=mysql_query("SELECT kode_guru FROM tb_bimbingan WHERE kode_guru='$kode_guru'") or die(mysql_error());
    $q4=mysql_query("SELECT kode_guru FROM tb_sidang WHERE kode_guru='$kode_guru'") or die(mysql_error());
    if (mysql_num_rows($q1)>0) {
      $mark="--";
    }else{
      $mark="&nbsp;";
    }
    if (mysql_num_rows($q2)>0) {
      $mark1="--";
    }else{
      $mark1="&nbsp;";
    }
    if (mysql_num_rows($q3)>0) {
      $mark2="--";
    }else{
      $mark2="&nbsp;";
    }
    if (mysql_num_rows($q4)>0) {
      $mark3="--";
    }else{
      $mark3="&nbsp;";
    }
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
          <button class="dropbtn">Kegiatan</button>
            <div class="dropdown-content">
              <a href="tugas-pengantaran_control.php"><?=$mark;?>Pengantaran<?=$mark;?></a>
              <a href="tugas-monitoring_control.php"><?=$mark1;?>Monitoring<?=$mark1;?></a>
              <a href="tugas-bimbingan_control.php"><?=$mark2;?>Bimbingan<?=$mark2;?></a>
              <a href="tugas-penguji_control.php"><?=$mark3;?>Penguji<?=$mark3;?></a>
            </div>
          </div>
      </li>
      <li class="nav-item dropdown">
        <div class="dropdown">
          <button class="dropbtn" onclick="window.location.assign('../../includes/proses_logout.php')">Logout</button>
        </div>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
