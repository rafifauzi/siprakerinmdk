<?php
include '../../includes/koneksi.php';
session_start();
$kode_guru=$_SESSION['kdGuru'];
$query="SELECT kode_guru FROM tb_bimbingan WHERE kode_guru = '$kode_guru'";
$result=mysql_query($query) or die(mysql_error());
$hasil=mysql_fetch_array($result);
if ($hasil['kode_guru']=='') {
	echo "<script>window.location.assign('../../includes/null.php');</script>";
}else{
	echo "<script>window.location.assign('tugas-bimbingan.php');</script>";
}
?>