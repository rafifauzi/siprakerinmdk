<?php
include 'koneksi.php';
$term = trim(strip_tags($_GET['term']));
$sql = "SELECT kode_perusahaan,nama_perusahaan,alamat_perusahaan FROM tb_perusahaan WHERE nama_perusahaan LIKE '%$term%'";
$hs = mysql_query($sql);
$json = array();
while($rs = mysql_fetch_array($hs)){
	$json[] = array(
		'id' => $rs['kode_perusahaan'],
		'value' => $rs['nama_perusahaan'].' - '.$rs['alamat_perusahaan'],
		'alamat_perusahaan' => $rs['alamat_perusahaan']
	);
}
header("Content-Type: application/json");
echo json_encode($json);
?>