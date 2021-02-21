<?php
include 'koneksi.php';
$term = trim(strip_tags($_GET['term']));
$jur = trim(strip_tags($_GET['j']));
$sql = "SELECT kode_guru, nama_guru FROM tb_guru WHERE nama_guru LIKE '%$term%' AND kode_guru NOT IN (SELECT kode_guru FROM tb_monitoring) AND kode_jurusan='$jur'";
$hs = mysql_query($sql);
$json = array();
while($rs = mysql_fetch_array($hs)){
	$json[] = array(
		'id' => $rs['kode_guru'],
		'value' => $rs['nama_guru']
	);
}
header("Content-Type: application/json");
echo json_encode($json);
?>