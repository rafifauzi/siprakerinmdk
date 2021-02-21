<?php 
session_start();
if (!isset($_SESSION['pass'])) {
    echo "<script>window.location='includes/error.php';</script>";
}else{
	$username=$_SESSION['pass'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIPRAKERINMDK | MASUK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  <link rel="stylesheet" href="assets/css/alertify.min.css" type='text/css' />
  <link href="assets/css/style-login.css" rel='stylesheet' type='text/css'/>
  <link href="assets/css/bootstrap.minn.css" rel='stylesheet' type='text/css'/> 
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/alertify.min.js"></script>
  <style type="text/css">
  	.btn-back{
  		margin-bottom: 10px;
  	}
  </style>
</head>
<body>
<?php 
include 'includes/header.php';
?>
	 <div class="main">
		<div class="login-form">
			<br>
			<center><h5>- Reset Password -</h5></center>
				<form method="POST" name="reset">
					<input type="password" name="pass" placeholder="Password Baru" class="form-control" required autocomplete="off" id="paslama" onchange="cekpass(this.value)" autofocus>
					<input type="password" name="password" placeholder="Masukan Kembali Password Baru" class="form-control" id="pasbaru" onchange="cekPas(this.value)" required>
					<input type="submit" name="reset" class="btn btn-outline-primary form-control" value="Reset Password">
				</form>
				<center>
				<button type="button" class="btn btn-outline-secondary btn-sm btn-back" onclick="back()">Kembali</button>
				</center>
			</div>
		</div>
<script type="text/javascript">
	function  cekpass(pass){
		var panjang = pass.length;
		if (panjang<8||panjang>8) {
			alertify.error('Password Harus 8 Karakter'); 
		}
	}
	function  cekPas(pass){
		var panjang = pass.length;
		var pas= document.getElementById('paslama').value;
		if (panjang<8||panjang>8) {
			alertify.error('Password Harus 8 Karakter'); 
		}else if(pas!=pass){
			alertify.error('Password Tidak Sama');
		}
	}
	function back(){
		window.location.assign('includes/proses_logout.php');
	}
</script>
<?php
if (isset($_POST['reset'])) {
	$password=$_POST['pass'];
	$coPass=$_POST['password'];
	if ($password==$coPass) {
		$query="UPDATE tb_user SET pass='$password' WHERE username='$username'";
		$result=mysql_query($query) or die(mysql_error());
		if ($result) { ?>
			<script type="text/javascript">
			alertify.alert('Silahkan Login Dengan Password Baru', function(){window.location.assign('includes/proses_logout.php')}).setHeader('Perhatian').set({closable:false,transition:'zoom'});
			</script>

		<?php
		}else{
			echo "<script>alertify.alert('Password Tidak Sama atau Data Salah').set({closable:true,transition:'zoom',basic:true});</script>";
		}
	}
}
?>
<div class="footer">
  <p>Created by: Rafi.sf | ver: 1.7 Beta</p>
</div>
</body>
</html>
