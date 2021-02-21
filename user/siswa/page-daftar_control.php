<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<link href="../../assets/css/bootstrap.min.css" rel='stylesheet' type='text/css'/>  		
		<link rel="shortcut icon" href="../../assets/img/favicon.ico">
		<link rel="stylesheet" href="../../assets/css/alertify.min.css" type='text/css'/>
		<link rel="stylesheet" href="../../assets/css/default.min.css" type='text/css'/>	
  		<script src="../../assets/js/jquery-1.12.4.js"></script>
  		<script src="../../assets/js/bootstrap.min.js"></script>
		<script src="../../assets/js/alertify.min.js"></script>
</head>
<body>
<?php
include '../../includes/koneksi.php';
$qTanggal="SELECT tgl_daftar FROM tb_settings";
$rTanggal=mysql_query($qTanggal) or die(mysql_error());
$hTanggal=mysql_fetch_array($rTanggal);
$Date = $hTanggal['tgl_daftar'];
$tgl_akhir= date('Y-m-d', strtotime($Date. ' + 14 days'));
$tgl_skrg=date("Y-m-d");
if ($tgl_skrg>$tgl_akhir) { ?>
	<script type="text/javascript">
		alertify.alert("Pendaftaran Telah Ditutup", function(){window.history.go(-1)}).setHeader('Perhatian').set({closable:false,transition:'zoom'});
	</script>
<?php
}else if($tgl_skrg<$Date){ ?>
	<script type="text/javascript">
		alertify.alert("Pendaftaran Belum Dibuka", function(){window.history.go(-1)}).setHeader('Perhatian').set({closable:false,transition:'zoom'});
	</script>
<?php


}else{ ?>
	<script type="text/javascript">
		window.location.assign('page-daftar.php');
	</script>
<?php
}
?>
</body>
</html>