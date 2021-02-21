<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../assets/css/bootstrap.min.css" rel='stylesheet' type='text/css'/>  
	<link rel="stylesheet" href="../../assets/css/alertify.min.css" type='text/css'/>
	<script src="../../assets/js/jquery-1.12.4.js"></script>
  	<script src="../../assets/js/bootstrap.min.js"></script>
	<script src="../../assets/js/alertify.min.js"></script>
</head>
<body>

</body>
</html>
<?php 
	include '../../includes/koneksi.php';
	session_start();
	$nis=$_SESSION['nis'];
	$query="SELECT `nomor_jurnal` FROM tb_siswa WHERE nis='$nis'";
	$result=mysql_query($query) or die(mysql_error());
	$r=mysql_fetch_array($result);
	if ($r['nomor_jurnal']!="") {
		echo "<script>window.location='page-jurnal.php';</script>";
	}else{ ?>
		<script type="text/javascript">
			alertify.alert('Buku Jurnal Belum Dapat Digunakan', function(){ window.location.assign('page-profil.php?n=<?php echo $nis;?>')}).setHeader('Perhatian').set({'closable':false,});
		</script>
	<?php
	}
?>