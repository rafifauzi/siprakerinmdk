<?php
 include 'koneksi.php';
$term = trim(strip_tags($_GET['term']));
$sql = "SELECT kode_guru, nama_guru FROM tb_guru LIKE '%$term%' WHERE kode_guru NOT IN (SELECT kode_guru FROM tb_pengantaran)";
$hs = mysql_query($sql);
$json = array();
while($rs = mysql_fetch_array($hs)){
	$json[] = array(
		'id' => $rs['kode_guru']." - ".$rs['nama_guru'],
		'value' => $rs['nama_guru']
	);
}
header("Content-Type: application/json");
echo json_encode($json);
?>