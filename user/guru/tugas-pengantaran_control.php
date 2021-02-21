<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="../../assets/css/alertify.min.css" type='text/css' />
  <link href="../../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="../../assets/js/jquery-1.12.4.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/alertify.min.js"></script>
</head>
<body>
<?php
include '../../includes/koneksi.php';
session_start();
$kode_guru=$_SESSION['kdGuru'];
$query="SELECT kode_guru FROM tb_pengantaran WHERE kode_guru = '$kode_guru'";
$result=mysql_query($query) or die(mysql_error());
$hasil=mysql_fetch_array($result);
if ($hasil['kode_guru']=='') {
	echo "<script>window.location.assign('../../includes/null.php');</script>";
}else{
	$query1="SELECT jenis_usaha FROM tb_pengantaran JOIN tb_guru ON tb_pengantaran.kode_guru=tb_guru.kode_guru WHERE tb_pengantaran.kode_guru = '$kode_guru'";
$result1=mysql_query($query1) or die(mysql_error());
$hasil=mysql_fetch_array($result1);
if ($hasil['jenis_usaha']!=null) { ?>
	<script type="text/javascript">
		alertify.alert('Anda Sudah Mengisi Laporan <br> Terima Kasih', function(){ window.location.assign('dashboard.php')}).setHeader('Perhatian').set({closable:false,transition:'zoom'}); 
	</script>
<?php
}else{
	echo "<script>window.location.assign('tugas-pengantaran.php');</script>";
}
}
?>
</body>
</html>