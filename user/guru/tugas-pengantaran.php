<?php 
session_start();
include '../../includes/koneksi.php';
date_default_timezone_set("Asia/Bangkok");
if (!isset($_SESSION['kdGuru'])) {
    echo "<script>window.location='../../includes/error.php';</script>";
}else{
    $kdGuru=$_SESSION['kdGuru'];
    $query="SELECT no_surat_pengantar, tb_pengantaran.no_surat_permohonan, nama_perusahaan, alamat_perusahaan, tgl_pengantar,nama_guru FROM `tb_pengantaran` JOIN `tb_permohonan` ON tb_pengantaran.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN `tb_guru` ON tb_pengantaran.kode_guru=tb_guru.kode_guru JOIN `tb_perusahaan` ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan WHERE tb_pengantaran.kode_guru='$kdGuru'";
    $result=mysql_query($query) or die(mysql_error());
    $hasil=mysql_fetch_array($result);
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
</head>
<body>
<?php include '../../includes/header-menu-guru.php';?>
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
        <input type="date" class="form-control" name="tglAntar" id="tglAntar" autocomplete="off" style="pointer-events: none;  color: #000; background-color: #E0E0E0;" value="<?php echo date("Y-m-d");?>">
        <label>Waktu Mengantar</label>
        <input type="text" class="form-control" name="wktAntar" id="wktAntar" autocomplete="off" style="pointer-events: none;  color: #000; background-color: #E0E0E0;" value="<?php echo date("H:i");;?>">
  			<label>Jenis Usaha</label>
        <input type="text" class="form-control" name="jenisUsaha" id="jenisUsaha" autocomplete="off" style="pointer-events: none; background-color: #E0E0E0;" required>
  			<label>Hasil Kunjungan</label>
        <input type="text" class="form-control" name="hasilKunjungan" id="hasil" autocomplete="off" style="pointer-events: none;background-color: #E0E0E0;" required>
        <label>Pesan Perusahaan</label>
        <input type="text" class="form-control" name="pesanPerusahaan" id="pesan" autocomplete="off" style="pointer-events: none;background-color: #E0E0E0;" required>  
        <p>
        <label>*Laporan Yang Telah Disimpan Tidak Dapat Diubah Kembali, Jadi Pastikan Data Yang Dimasukan Telah Sesuai</label>
      </div>
    </div>

 <p>
  <center>
      <button type="button" class="btn btn-primary" id="btn" onclick="editForm()">Buat Laporan Pengantaran</button> <p>
      <div class="btn-group" style="margin-bottom: 10px;">               
        <input type="submit" name="update" class="btn btn-success" id="btn" disabled value="Simpan">
        <button type="reset"  name="batal" class="btn btn-danger" id="btn" onclick="window.location.assign('tugas-pengantaran.php');" disabled>Batal</button>
      </div>
      </center> 
</div><p>
</form>
<?php
  if (isset($_POST['update'])) {
    $no_surat_pengantar=$_POST['noPengantar'];
    $jenisUsaha=$_POST['jenisUsaha'];
    $hasilKunjungan=$_POST['hasilKunjungan'];
    $tglAntar=$_POST['tglAntar'];
    $wktAntar=$_POST['wktAntar'];
    $pesanPerusahaan=$_POST['pesanPerusahaan'];
    $tgl_diantar=date("Y-m-d");
    $query="UPDATE `tb_pengantaran` SET `tgl_pengantar`='$tglAntar', `waktu_pengantar`='$wktAntar', `jenis_usaha` = '$jenisUsaha', `hasil_kunjungan` = '$hasilKunjungan', `pesan_perusahaan` = '$pesanPerusahaan', `status_antar`='1' WHERE `no_surat_pengantar` = '$no_surat_pengantar';";
    $result=mysql_query($query) or die(mysql_error());
    if ($result) { ?>
      <script type="text/javascript">
        alertify.alert("Laporan Telah Tersimpan<br>Terima Kasih", function(){window.history.go(-2)}).setHeader('Perhatian').set({'closable':false,});
      </script>
    <?php
    }

  }
?>
<script type="text/javascript">
  function editForm(){
    document.laporan.update.disabled = false;  
    document.laporan.batal.disabled = false;    
    document.getElementById("jenisUsaha").style.backgroundColor = "rgb(245,245,245)";
    document.getElementById("hasil").style.backgroundColor = "rgb(245,245,245)";
    document.getElementById("pesan").style.backgroundColor = "rgb(245,245,245)";
    document.getElementById("jenisUsaha").style.pointerEvents = "auto";
    document.getElementById("hasil").style.pointerEvents = "auto";
    document.getElementById("pesan").style.pointerEvents = "auto";
  }
</script>
</body>
</html>