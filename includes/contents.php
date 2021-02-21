<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Notifikasi JB Motor</title>
</head>
<body>
<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
  <h1>Verifikasi Email</h1>
  <hr>
  <h3>Silahkan masukan kode dibawah ini pada kolom verifikasi email pada akun anda
  <?php
    include 'koneksi.php';
  	session_start();
  	$nis=$_SESSION['nis'];
  	$q=mysql_query("SELECT email, kode FROM tb_user WHERE username='$nis'");
	$r=mysql_fetch_array($q);
	$email=$r['email'];
	$kode=$r['kode'];
  ?>
  <br>Kode Verifikasi : <?php echo $kode;?></h3>
</div>
</body>
</html>