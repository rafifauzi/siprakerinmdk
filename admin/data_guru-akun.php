<!DOCTYPE html>
<html>
<head>
  <title></title>
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
<?php
	include '../includes/koneksi.php';
	$query="SELECT kode_guru, nama_guru FROM tb_guru";
	$result=mysql_query($query) or die(mysql_error());
	$row=mysql_num_rows($result);
	$no=0;
	while ($h=mysql_fetch_array($result)) {
	  $username=$h['kode_guru'];
	  $pass=$h['kode_guru']."".date("Y");
	  $query1="INSERT INTO tb_user (`username`,`pass`,`tingkat`,`aktif`) VALUES ('$username','$pass','2','0')";
	  $result1=mysql_query($query1) or die(mysql_error());
	$no++;
	}
	if ($no==$row) { ?>
	    <script type="text/javascript">
	      alertify.confirm('Akun Guru Berhasil Dibuat', function(){window.location.assign('settings.php')}).setHeader('Perhatian').autoOk(3);
	    </script>
  	<?php
	}else{ ?>
	    <script type="text/javascript">
	      alertify.confirm('Akun Guru Gagal Dibuat', function(){window.location.assign('settings.php')}).setHeader('Perhatian').autoOk(3);
	    </script>
  	<?php
	}
?>
</body>
</html>