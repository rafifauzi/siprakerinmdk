<?php 
session_start();
include '../includes/koneksi.php';
  $kdGuru=$_GET['g'];
  $noPengantar=$_GET['n'];
  $query="SELECT no_surat_pengantar, tb_pengantaran.no_surat_permohonan, nama_perusahaan, alamat_perusahaan, tgl_pengantar, jenis_usaha, hasil_kunjungan, pesan_perusahaan, nama_guru, status_antar FROM `tb_pengantaran` JOIN `tb_permohonan` ON tb_pengantaran.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN `tb_guru` ON tb_pengantaran.kode_guru=tb_guru.kode_guru JOIN `tb_perusahaan` ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan WHERE tb_pengantaran.kode_guru='$kdGuru' AND tb_pengantaran.no_surat_pengantar='$noPengantar'";
  $result=mysql_query($query) or die(mysql_error());
  $hasil=mysql_fetch_array($result);
  if ($hasil['status_antar']=='0') {
      $status='Belum Diantar';
      $color='#FF4081';
      $tgl_antar="-";
    }else{
      $status='Sudah Diantar';
      $color='#B2FF59';
      $tgl_antar=date("Y-m-d",strtotime($hasil['tgl_pengantar']));
    }
  
?>
<!DOCTYPE html>
<html>
<head>
	 <style type="text/css">
    .container{
      margin-top:30px;  
      box-shadow: 1px 1px 10px 1px #888888; 
      padding-top: 10px;
      border-radius: 3px;
    }.container h3{
      text-align:center;
      padding:20px 0px 2px 0px;
    }
    .form-group{
      padding-right: 5px;
      margin:2% auto 4% 15%;
      position: relative;
    }
    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number] {
        -moz-appearance:textfield;
    }
    select{
      -webkit-appearance: none; -moz-appearance:textfield;
    }
    .container label{
      margin-top: 10px;
    }
    .btn-group{
      align-items: center;
    }
    #textarea,#textarea1,input[type=text],input[type=number]{
      color: #000;
      resize: none;
      pointer-events: none
    }
    @media screen and (max-width: 600px) {
      .form-group{
        padding-right: 5px;
        margin:2% auto 4% 5%;
        position: relative;
      }
      .col-sm-3,#date1,#sel1,#textarea,#textarea1,#btn,#jurusan,#walikelas,#gd,#jk,#kerja_ortu,input[type=date],input[type=text],input[type=number],input[type=file]{  
            font-size: 12px;
        } 
     
      }
  </style>
  <title>Data Pengantaran</title>
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />  
  <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../assets/css/default.min.css" type='text/css'  />
  <link href="../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="../assets/js/jquery-1.12.4.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/alertify.min.js"></script>
</head>
<body>
<?php include '../includes/header-menu-admin.php';?>
<form method="POST" name="laporan">
<div class="container">
    <div class="col-sm-3 col-md-10">
    <div class="form-group">
        <input type="text" class="form-control" name="noPengantar" autocomplete="off" style="pointer-events: none; background-color: #E0E0E0; display: none;" value="<?php echo $hasil['no_surat_pengantar'];?>"> 
        <label>Nama Perusahaan</label>
        <input type="text" class="form-control" name="namaPerusahaan" id="namaPerusahaan" autocomplete="off" style="pointer-events: none; background-color: #E0E0E0;" value="<?php echo $hasil['nama_perusahaan'];?>"> 
        <label>Alamat</label>
        <textarea class="form-control" name="alamatPerusahaan" id="textarea" autocomplete="off" rows="3" style="pointer-events: none; background-color: #E0E0E0;"><?php echo $hasil['alamat_perusahaan'];?></textarea>       
        <label>Tanggal Mengantar</label>
        <input type="date" class="form-control" name="tglAntar" id="tglAntar" autocomplete="off" style="pointer-events: none;  color: #000; background-color: #E0E0E0;" value="<?php echo $tgl_antar;?>">
        <label>Jenis Usaha</label>
        <input type="text" class="form-control" name="jenisUsaha" id="jenisUsaha" autocomplete="off" style="pointer-events: none; background-color: #E0E0E0;" value="<?php echo $hasil['jenis_usaha'];?>">
        <label>Hasil Kunjungan</label>
        <textarea class="form-control" name="hasilKunjungan" id="textarea" autocomplete="off" rows="3" style="pointer-events: none; background-color: #E0E0E0;"><?php echo $hasil['hasil_kunjungan'];?></textarea>
        <label>Pesan Perusahaan</label>
        <textarea class="form-control" name="pesanPerusahaan" id="textarea" autocomplete="off" rows="3" style="pointer-events: none; background-color: #E0E0E0;"><?php echo $hasil['pesan_perusahaan'];?></textarea> 
        <label>Status Pengantaran</label>
        <input type="text" class="form-control" name="status" id="status" autocomplete="off" style="pointer-events: none; border: none; background-color: <?=$color;?>;" value="<?php echo $status;?>">
      </div>
    </div>
  <center>
        <button type="reset"  name="batal" class="btn btn-danger" id="btn" onclick="window.location.assign('tugas_pengantaran.php');">Kembali &nbsp;<span class="fa fa-compress"></span></button>
  </center>
<br></div><br>
</form>
</body>
</html>