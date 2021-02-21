<?php 
session_start();
include '../../includes/koneksi.php';
if (!isset($_SESSION['kdGuru'])) {
    echo "<script>window.location='../../includes/error.php';</script>";
}else{
    $kdGuru=$_SESSION['kdGuru'];
    $query="SELECT nama_guru FROM `tb_guru` WHERE `kode_guru`='$kdGuru'";
    $result=mysql_query($query) or die(mysql_error());
    $hasil=mysql_fetch_array($result);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $hasil['nama_guru'];?></title>
  <link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />  
  <link rel="stylesheet" href="../../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../../assets/css/default.min.css" type='text/css'  />
  <link href="../../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="../../assets/js/jquery-1.12.4.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/alertify.min.js"></script>
  <style type="text/css">
    .card {
      transition: 0.3s;
      width: 50%;
    }
    .card-in {
      padding: 2px 16px;
      color: #fff;
      text-align: center;
      cursor: pointer;
    }
  </style>
</head>
<body>
	<?php 
  include '../../includes/header-menu-guru.php';
    $kode_guru=$_SESSION['kdGuru'];
    $q1=mysql_query("SELECT kode_guru, tgl_pengantar FROM tb_pengantaran WHERE kode_guru='$kode_guru'") or die(mysql_error());
    $q2=mysql_query("SELECT kode_guru, tgl_monitoring FROM tb_monitoring WHERE kode_guru='$kode_guru'") or die(mysql_error());
    $q3=mysql_query("SELECT kode_guru, tgl_bimbingan FROM tb_bimbingan WHERE kode_guru='$kode_guru'") or die(mysql_error());
    $q4=mysql_query("SELECT kode_guru, tgl_sidang FROM tb_sidang WHERE kode_guru='$kode_guru'") or die(mysql_error());
    $q5=mysql_query("SELECT * FROM tb_settings") or die(mysql_error());
    $r1=mysql_fetch_array($q1);
    $r2=mysql_fetch_array($q2);
    $r3=mysql_fetch_array($q3);
    $r4=mysql_fetch_array($q4);
    $r5=mysql_fetch_array($q5);

    if (mysql_num_rows($q1)>0) {
      $mark="display:block;";
    }else{
      $mark="display:none;";
    }
    if (mysql_num_rows($q2)>0) {
      $mark1="display:block;";
    }else{
      $mark1="display:none;";
    }
    if (mysql_num_rows($q3)>0) {
      $mark2="display:block;";
    }else{
      $mark2="display:none;";
    }
    if (mysql_num_rows($q4)>0) {
      $mark3="display:block;";
    }else{
      $mark3="display:none;";
    }
  ?>

  <center>
  <div class="card" onclick="window.location.assign('tugas-pengantaran_control.php')" style="<?=$mark;?> background-color:#3f51b5;">
    <div class="card-in">
       <b>Acara Pengantaran Siswa akan dilaksanakan pada tanggal <?php echo date("d/m/Y",strtotime($r5['tgl_pengantaran']));?></b><br>
       <b>dan pada pukul <?php echo $r5['waktu_antar']?>. Diwajibkan datang untuk acara pengantaran siswa</b>
       <br>-------------------------------------------------------------------------------------------------<br>
       <b>Untuk Pengisian Laporan Pengantaran Dapat Diisi Pada Menu Kegiatan Pengantaran</b>
    </div>
  </div>
  <div class="card" onclick="window.location.assign('tugas-monitoring_control.php')" style="<?=$mark1;?> background-color:#3f51b5;">
    <div class="card-in">
       <b>Tugas Monitoring pada tanggal <?php echo date("d/m/Y",strtotime($r2['tgl_monitoring'])) ?></b><br>
       <b>Halaman Laporan Monitoring Dapat Diisi Pada Menu Kegiatan Monitoring</b>
    </div>
  </div>  
  <div class="card" onclick="window.location.assign('tugas-bimbingan_control.php')" style="<?=$mark2;?> background-color:#3f51b5;">
    <div class="card-in">
       <b>Tugas Bimbingan Laporan PRAKERIN pada tanggal <?php echo date("d/m/Y",strtotime($r3['tgl_bimbingan'])) ?></b><br>
       <b>Halaman Hasil Bimbingan Dapat Diisi Pada Menu Kegiatan Bimbingan</b>
    </div>
  </div>
  <div class="card" onclick="window.location.assign('tugas-penguji_control.php')" style="<?=$mark3;?> background-color:#3f51b5;">
    <div class="card-in">
       <b>Tugas Menguji Laporan PRAKERIN pada tanggal <?php echo date("d/m/Y",strtotime($r4['tgl_sidang'])) ?></b><br>
       <b>Halaman Penilaian PRAKERIN Dapat Diisi Pada Menu Kegiatan Sidang</b>
    </div>
  </div>
  
  </center>
</body>
</html>