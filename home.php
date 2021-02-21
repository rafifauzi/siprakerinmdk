<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIPRAKERINMDK | MASUK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  <link rel="stylesheet" href="assets/css/alertify.min.css" type='text/css' />
  <link href="assets/css/style-login.css" rel='stylesheet' type='text/css'/>
  <link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css'/> 
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/alertify.min.js"></script>
  <style>
	body, html {
	    height: 100%;
	    margin: 0;
	}
	.bg {
	    background-image: url("assets/img/background/img (2).jpg");
	    height: 100%; 
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
	}
  </style>
</head>
<body class="bg">
<?php 
include 'includes/header.php';
include 'includes/koneksi.php';
session_start();
?>
	 <div class="main">
		<div class="login-form">
			<br>
			<center><h2>- L o g i n -</h2></center>
				<form method="POST" name="login">
					<input type="text" name="username" placeholder="Username" class="form-control" required autocomplete="off" autofocus>
					<input type="password" name="password" placeholder="Password" class="form-control" onchange="cekpass(this.value)" required>
					<div class="submit">
						<input type="submit" name="login" class="btn btn-outline-primary form-control" value="Masuk">
					</div>
					<p style="font-size:12px;"><a href="" data-toggle="modal" data-target="#myModal">Lupa Password ?</a></p>				
					<p style="font-size:12px; color:#000;">Buat Akun SIPRAKERIN <a href="user/siswa/page-daftar_control.php">Disini</a></p>
				</form>
			</div>
		</div>

<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">      
        <!-- Modal Header -->
        <div class="modal-header">
          <center><h5>- Pertanyaan Keamanan -</h5></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          	<form method="POST" name="quetion">
          		<input type="text" name="usernamepass" class="form-control" placeholder="Username"  autocomplete="off" required>
          		<select class="form-control wide" name="pertanyaan">
				  	<option value="0">--Pilih Pertanyaan--</option>
				    <option value="p1">Nama Ibu Kandung ?</option>
				    <option value="p2">Nama Sekolah SD Kamu ?</option>
				    <option value="p3">Nama Teman Dekat Kamu ?</option>
				    <option value="p4">Makanan Kesukaan Kamu ?</option>
				</select>
  				<input type="text" name="jawaban" class="form-control" placeholder="Jawaban"  autocomplete="off" required>
				<div class="submit">
					<input type="submit" class="btn btn-outline-primary form-control" name="quetion" value="Proses">
				</div>
			</form>
        </div>
        <div class="modal-footer">
          *Untuk Guru Silahkan Hubungi Bagian HUBIN
        </div>              
      </div>
    </div>
  </div> 
</div>
<script type="text/javascript">
	function  cekpass(pass){
		var panjang = pass.length;
		if (panjang<8||panjang>8) {
			alertify.error('Password Harus 8 Karakter'); 
		}
	}
</script>
<?php
if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$pass=$_POST['password'];	
	$query="SELECT `username`,`tingkat`, `aktif` FROM `tb_user` WHERE `username`='$username' AND `pass`='$pass'";
	$result=mysql_query($query) or die(mysql_error()); 
	$hasil=mysql_fetch_array($result);
	if ($hasil['aktif']=='0') {?>
		<script type="text/javascript">
	      alertify.alert("Akun Anda Belum Aktif",function(){
	      document.login.password.value = "";
	      document.login.username.value = "";
	      document.login.username.focus();
	        }).setHeader('Perhatian').set({closable:false,transition:'zoom'});
    	</script>	
	<?php
	}else{
		if ($hasil['tingkat']=='1') {
    		echo "<script>window.location.assign('admin/index.php');</script>";
		}elseif ($hasil['tingkat']=='2') {
		    $_SESSION['kdGuru']=$_POST['username'];
		    echo "<script>window.location.assign('user/guru/dashboard.php');</script>";
		}elseif ($hasil['tingkat']=='3') {
		    $_SESSION['nis']=$_POST['username'];
		    echo "<script>window.location.assign('user/siswa/page-profil.php?n=$username');</script>";
		}else{ ?>
		   <script type="text/javascript">
		    alertify.alert("Gagal Login Coba Lagi",function(){
		    document.login.password.value = "";
		    document.login.username.value = "";
		    document.login.username.focus();
		    }).setHeader('Perhatian').set({closable:false,transition:'zoom'});
		   </script>
		<?php
		}
	}
}
if (isset($_POST['quetion'])) { 
	if ($_POST['pertanyaan']=='0') {?>
		<script type="text/javascript">
			alertify.alert("Silahkan Pilih Pertanyaan").setHeader('Perhatian').set({closable:false,transition:'zoom'});
		</script>
		<?php
	}else{		
		$username=$_POST['usernamepass'];
		$pertanyaan=$_POST['pertanyaan'];
		$jawaban=$_POST['jawaban'];
		$hasil=$pertanyaan."-".$jawaban;
		$query="SELECT username, pertanyaan FROM tb_user WHERE username='$username' AND pertanyaan='$hasil'";
		$result=mysql_query($query) or die(mysql_error());
		$row=mysql_num_rows($result);
		if ($row>0) {
			$_SESSION['pass']=$username;
			echo "<script>window.location.assign('reset-pass.php');</script>";
		}else{
			?>
			<script type="text/javascript">
				alertify.alert("Data Tidak Ditemukan").set({closable:true,transition:'zoom',basic:true});
			</script>
			<?php
		}
		
	}
}
?>
<div class="footer">
  <p>Created by: Rafi.sf | ver: 1.8 Beta</p>
</div>
</body>
</html>