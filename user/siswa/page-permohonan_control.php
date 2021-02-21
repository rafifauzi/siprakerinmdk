<?php 
	include '../../includes/koneksi.php';
	session_start();
	$nis=$_SESSION['nis'];
	$query="SELECT `status_permohonan` FROM `tb_detail_permohonan` WHERE `nis` = '$nis'";
	$result=mysql_query($query);
	$r=mysql_fetch_array($result);
	if ($r['status_permohonan']!="") {
		echo "<script>window.location='page-permohonan_hasil.php';</script>";
	}else{
		echo "<script>window.location='page-permohonan.php?n=';</script>";
	}
?>