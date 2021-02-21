<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />  
  <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../assets/css/default.min.css" type='text/css'  />
  <link href="../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="../assets/js/jquery-1.12.4.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/alertify.min.js"></script>
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
  include '../includes/koneksi.php';
  include '../includes/header-menu-admin.php';
  $query="SELECT * FROM tb_settings";
  $result=mysql_query($query) or die(mysql_error());
  $hasil=mysql_fetch_array($result);
  $tgl_diantar=$hasil['tgl_pengantaran'];
  $tgl_mulai=$hasil['tgl_mulai_kp'];
  $tgl_selesai=$hasil['tgl_akhir_kp'];
  $tgl_monitoring=$hasil['tgl_monitoring'];
  $tgl_sidang=$hasil['tgl_sidang'];
  $tgl_Sekarang=date('Y-m-d');
  
  //pengantaran
  $tgl_pengantaranAwal=date('Y-m-d', strtotime($tgl_mulai. ' - 14 days'));
  $tgl_pengantaranAkhir=date('Y-m-d', strtotime($tgl_pengantaranAwal. ' + 7 days'));
  if ($tgl_Sekarang>=$tgl_pengantaranAwal && $tgl_Sekarang<=$tgl_pengantaranAkhir  ) {
    $antar='display : blok;';
  }else{
    $antar='display : none;';
  }

  //monitoring
  $tgl_monitoringAwal=date('Y-m-d', strtotime($tgl_monitoring. ' - 7 days'));
  $tgl_monitoringAkhir=date('Y-m-d', strtotime($tgl_monitoringAwal. ' + 7 days'));
  if ($tgl_Sekarang>=$tgl_monitoringAwal && $tgl_Sekarang<=$tgl_monitoringAkhir ) {
    $monitoring='display : blok;';
  }else{
    $monitoring='display : none;';
  }

  //sidang
  $tgl_sidangAwal=date('Y-m-d', strtotime($tgl_sidang. ' - 7 days'));
  $tgl_sidangAkhir=date('Y-m-d', strtotime($tgl_sidangAwal. ' + 7 days'));
  if ($tgl_Sekarang>=$tgl_sidangAwal && $tgl_Sekarang<=$tgl_sidangAkhir ) {
    $sidang='display : blok;';
  }else{
    $sidang='display : none;';
  }

  //bimbingan
  $tgl_bimbinganAwal=date('Y-m-d', strtotime($tgl_selesai. ' - 14 days'));
  $tgl_bimbinganAkhir=date('Y-m-d', strtotime($tgl_bimbinganAwal. ' + 7 days'));
  if ($tgl_Sekarang>=$tgl_bimbinganAwal && $tgl_Sekarang<=$tgl_bimbinganAkhir ) {
    $bimbingan='display : blok;';
  }else{
    $bimbingan='display : none;';
  }

  //nilai
  $tgl_nilaiAwal=date('Y-m-d', strtotime($tgl_selesai. ' + 1 days'));
  $tgl_nilaiAkhir=date('Y-m-d', strtotime($tgl_nilaiAwal. ' + 9 days'));
  if ($tgl_Sekarang>=$tgl_nilaiAwal && $tgl_Sekarang<=  $tgl_nilaiAkhir ) {
    $nilai='display : blok;';
  }else{
    $nilai='display : none;';
  }

?>

  <center>
  <div class="card" onclick="window.location.assign('tugas_pengantaran.php')" style="<?=$antar;?> background-color: #1A237E;">
    <div class="card-in">
       <b>Siswa akan segera diantarkan ke tempat PRAKERIN</b><br>
       <b>Segera bagi tugas guru untuk mengantarkan siswa PRAKERIN</b>
    </div>
  </div>
  <div class="card" onclick="window.location.assign('tugas_monitoring.php')" style="<?=$monitoring;?> background-color: #B71C1C;">
    <div class="card-in">
       <b>Sudah mau masa monitoring</b><br>
       <b>Segera bagi tugas guru untuk melakukan monitoring</b>
    </div>
  </div>  
  <div class="card" onclick="window.location.assign('tugas_penguji.php')" style="<?=$sidang;?> background-color: #2196F3;">
    <div class="card-in">
       <b>Sudah mau masa Pengujian</b><br>
       <b>Segera bagi tugas guru untuk menjadi penguji</b>
    </div>
  </div>
  <div class="card" onclick="window.location.assign('tugas_bimbingan.php')" style="<?=$bimbingan;?> background-color: #4A148C;">
    <div class="card-in">
       <b>Sudah mau masa Bimbingan</b><br>
       <b>Segera bagi tugas guru untuk menjadi pembimbing</b>
    </div>
  </div>
  <div class="card" onclick="window.location.assign('tugas_penguji-tambahnilai.php')" style="<?=$nilai;?> background-color: #3F51B5;">
    <div class="card-in">
       <b>Masa Pengumpulan Berkas</b><br>
       <b>Silahkan Input Nilai Perusahaan Yang Sudah Ada</b>
    </div>
  </div>

  </center>
</body>
</html>