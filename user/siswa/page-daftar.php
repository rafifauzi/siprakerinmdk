<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background-color:#e5e5e5;
		}
		.container{
			background: #fff;
			margin-top: 30px;	
			box-shadow: 1px 1px 10px 1px #888888;	
		}
		.container h3{
			text-align:center;
			padding:20px 0px 2px 0px;
		}
		input[type=number]::-webkit-outer-spin-button,
		input[type=number]::-webkit-inner-spin-button {
    		-webkit-appearance: none;
   			margin: 0;
		}
		input[type=number] {
    		-moz-appearance:textfield;
		}
		.container label{
			margin-top: 10px;
		}
		.btn-group{
			align-items: center;
		}
		#textarea,input[type=text],input[type=number],input[type=email]{
      		color: #000;
      		resize: none;
    	}
		#date1,#kelas,#ket_kelas{
			width: 115px;
			display: inline;
		}
		@media screen and (max-width: 600px) {
			#date1{
				width: 92px;
			}
			.col-sm-3,.col-sm-9,#date1,#sel1,#textarea,#btn,input[type=text],input[type=number],input[type=email]{  
      			font-size: 12px;
   			} 
		}
	</style>
  <title>Pendaftaran</title>
	<link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />
	<link rel="stylesheet" href="../../assets/css/alertify.min.css" type='text/css' />
	<link rel="stylesheet" href="../../assets/css/default.min.css" type='text/css'  />
	<link href="../../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  	<script src="../../assets/js/bootstrap.min.js"></script>
	<script src="../../assets/js/alertify.min.js"></script>
	<script>
	  $(document).on('keyup keypress', 'form input[type="text"]', function(e) {
    	if(e.which == 13) {
      		e.preventDefault();
      		return false;
      	}
  	  });
  	  $(document).on('keyup keypress', 'form input[type="text"]', function(e) {
    	if(e.which == 13) {
      		e.preventDefault();
      		return false;
    	}
      });
	</script>
</head>
<body>
<?php include '../../includes/header.php'; 
include '../../includes/koneksi.php';
$d1=date("Y");
$d2=$d1+1;
?>
<div class="container">
  <form method="POST"><br>
  		<div style="background-color:#BBDEFB; padding: 20px;">
  			<label>Biodata Siswa</label><hr>
  			<label>Nama Lengkap</label>
  			<input type="text" name="nama_lengkap" class="form-control" id="nama" autocomplete="off" required>
  			<label>Nomor Induk Siswa</label>
  			<input type="number" name="nis" class="form-control" id="nis" autocomplete="off" required>
  			<label>Kompetensi Keahlian</label>
			  <select class="form-control" id="sel1" name="kode_jurusan" id="kJurusan" onchange="prosesJus(this.value)">
			  	<option value="0">--Jurusan--</option>
					<?php 
					$query="SELECT * FROM `tb_jurusan` ORDER BY nama_jurusan";
					$result=mysql_query($query) or mysql_error();
					while ($r=mysql_fetch_array($result)) { ?>
						<option value="<?php echo $r['kode_jurusan'];?>"><?php echo $r['nama_jurusan'];?></option>
					<?php
					}
					?>
			  </select>
			<label>Kelas</label><br>
  			<input type="text" name="kelas" class="form-control" id="kelas" autocomplete="off" style="pointer-events: none;">
  			<input type="text" name="ket_kelas" class="form-control" id="ket_kelas" autocomplete="off" required maxlength="1"><br>
			<label>Wali Kelas</label>
			  <select class="form-control" id="sel1" name="kode_guru">
			  	<option value="0">--Wali Kelas--</option>
					<?php 
					$query="SELECT * FROM `tb_guru` ORDER BY nama_guru";
					$result=mysql_query($query) or die(mysql_error());
					while ($r=mysql_fetch_array($result)) { ?>
						<option value="<?php echo $r['kode_guru'];?>"><?php echo $r['nama_guru'];?></option>
					<?php
					}
					?>
			  </select>	    			
  			<label>Tahun Ajaran</label>
  			<input type="text" name="thn_ajaran" class="form-control" autocomplete="off" required value="<?php echo $d1."/".$d2;?>" style="pointer-events: none;">
  			<label >Alamat</label>
  			<textarea name="alamat" class="form-control" id="textarea" autocomplete="off" required rows="3"></textarea>	  		
			<label>Jenis Kelamin</label>
  			<div class="radio">
  				<label class="radio-inline"><input type="radio" name="jk" value="1">Laki-Laki</label>			
  				<label class="radio-inline"><input type="radio" name="jk" value="0">Perempuan</label>
			</div>
			<label>Tempat Lahir</label>
  			<input type="text" name="tempat_lahir" class="form-control" autocomplete="off" required>  			
  			<label>Tanggal Lahir</label>
  				<div class="bulan">
  					<select class="form-control" id="date1" name="tgl_lahir">
			    		<option>-Tanggal-</option>
			    		<?php 
			    			for ($i=1; $i<=31 ; $i++) { ?>
			    			<option value="<?php echo $i;?>"><?=$i;?></option>
			    		<?php
			    			}
			    		?>
			  		</select>
  					<select class="form-control" id="date1" name="bln_lahir">
			    		<option>-Bulan-</option>
			    		<option value="01">Januari</option>
			    		<option value="02">Februari</option>
			    		<option value="03">Maret</option>
			    		<option value="04">April</option>
			    		<option value="05">Mei</option>
			    		<option value="06">Juni</option>
			    		<option value="07">Juli</option>
			    		<option value="08">Agustus</option>
			    		<option value="09">September</option>
			    		<option value="10">Oktober</option>
			    		<option value="11">November</option>
			    		<option value="12">Desember</option>
			  		</select>
			  		<select class="form-control" id="date1" name="thn_lahir">
			    		<option>-Tahun-</option>
			    		<?php 
			    		$dateY=date("Y")-10;
			    		for ($i=2000; $i<=$dateY; $i++) { ?>
			    			<option><?=$i;?></option>
			    		<?php
			    		}
			    		?>
			  		</select>
  				</div>	
      			<label>Golongan Darah</label>
			  	<select class="form-control" id="sel1" name="gd">
			  		<option>--Golongan Darah--</option>
			    	<option value="A">A</option>
			    	<option value="B">B</option>
			    	<option value="AB">AB</option>
			    	<option value="O">O</option>
			  	</select>	
				<label>Catatan Kesehatan</label>
  				<input type="text" name="cat_kes" class="form-control" autocomplete="off" required value="-">	
  				<label>No Hp</label>
  				<input type="number" name="no_hp" class="form-control" autocomplete="off" required onchange="maxLimit(this.value)">
  			</div>
  		<div style="background-color:#E1BEE7; margin-top: 10px; padding: 20px;">
  		<label>Biodata Orang Tua/Wali</label><hr>
  			<label>Nama Orang Tua/Wali (Sesuai Rapot)</label>
  			<input type="text" name="nm_ortu" class="form-control" autocomplete="off" required>  			
  			<label>Pekerjaan Orang Tua/Wali (Sesuai Rapot)</label>
  			<select class="form-control" id="sel1" name="kerja_ortu">
			    <option>Pegawai Negeri Sipil (PNS)</option>
			    <option>Pegawai Swasta</option>
			    <option>Wiraswasta</option>
			    <option>POLRI / TNI </option>
			    <option>Belum memiliki pekerjaan</option>
			  </select>	
  			<label >Alamat Orang Tua/Wali (Sesuai Rapot)</label>
  			<textarea name="alamat_ortu" class="form-control" id="textarea" autocomplete="off" required rows="3"></textarea>
  			<label>No Hp Orang Tua/Wali</label>
  			<input type="number" name="no_hp_ortu" class="form-control" autocomplete="off" required onchange="maxLimit(this.value)">
  		</div>
  		<div style="background-color:#F8BBD0; margin-top: 10px; padding: 20px;">  			
      		<label>Data Akun SIPRAKERINMDK</label><hr>
      		<label>Email</label>
  			<input type="email" name="email" class="form-control" autocomplete="off" required>
  			<label>Password</label>
  			<input type="password" name="pass" class="form-control" autocomplete="off" onchange="cekpass(this.value)" required>
  			<label>Pertanyaan</label>
  			<select class="form-control" name="pertanyaan">
			  	<option>--Pilih Pertanyaan--</option>
			    <option value="p1">Nama Ibu Kandung ?</option>
			    <option value="p2">Nama Sekolah SD Kamu ?</option>
			    <option value="p3">Nama Teman Dekat Kamu ?</option>
			    <option value="p4">Makanan Kesukaan Kamu ?</option>
			</select>
  			<label>Jawaban</label>
  			<input type="text" name="jawaban" class="form-control" autocomplete="off" required>
  		</div>
  		<center>
  			<div class="btn-group" style="margin: 10px 0px 10px 0px;">
  				<button type="reset" class="btn btn-danger" id="btn">Batal</button>
  				<input type="submit" name="simpan" class="btn btn-success" id="btn" value="Simpan">
  				<button type="button" class="btn btn-secondary" id="btn" onclick="window.location.assign('../../index.php');">Kembali</button>
  			</div>
		</center><p>
  	</form>
</div> 
<script type="text/javascript">
	function prosesJus(id){
		if (id==0) {
			document.getElementById("kelas").value = ""; 
		}else{
			document.getElementById("kelas").value = "XI-"+id.toUpperCase(); 
		}      			
  	}
	function  cekpass(pass){
		var panjang = pass.length;
		if (panjang<8||panjang>8) {
			alertify.error('Password Harus 8 Karakter'); 
		}
	}
	function maxLimit(no){
		var panjang = no.length;
		if (no.length>13 || no.length<10) {
			alertify.error('Cek Kembali Nomor HP');
		}
	}
</script>
<?php
if (ISSET($_POST['simpan'])) {
	$nis=$_POST['nis'];
	$nama_lengkap=ucwords($_POST['nama_lengkap']);
	$kelas=$_POST['kelas'].".".$_POST['ket_kelas'];
	$alamat=$_POST['alamat'];
	$jk=$_POST['jk'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$bln_lahir=$_POST['bln_lahir'];
	$thn_lahir=$_POST['thn_lahir'];
	$tanggal_lahir=$_POST['thn_lahir']."-".$_POST['bln_lahir']."-".$_POST['tgl_lahir'];
	$gd=$_POST['gd'];
	$cat_kes=$_POST['cat_kes'];
	$kode_jurusan=$_POST['kode_jurusan'];
	$kode_guru=$_POST['kode_guru'];
	$thn_ajaran=$_POST['thn_ajaran'];
	$no_hp=$_POST['no_hp'];
	$nm_ortu=ucwords(addslashes($_POST['nm_ortu']));
	$kerja_ortu=$_POST['kerja_ortu'];
	$alamat_ortu=$_POST['alamat_ortu'];
	$no_hp_ortu=$_POST['no_hp_ortu'];
	$email=$_POST['email'];
	$kode=rand(1111,9999);
	$pass=$_POST['pass'];
	$username=$_POST['nis'];
	$foto="blank_dp.jpg";
	$pertanyaan=$_POST['pertanyaan']."-".$_POST['jawaban'];

	$query="INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `kelas`, `tempat_lahir`, `tanggal_lahir`, `jk`, `gd`, `alamat_siswa`, `cat_kes`, `nm_ortu`, `alamat_ortu`, `kerja_ortu`, `no_hp_ortu`, `thn_ajaran`, `no_hp`, `foto`, `kode_jurusan`, `nomor_jurnal`, `kode_guru`) VALUES ('$nis', '$nama_lengkap', '$kelas', '$tempat_lahir', '$tanggal_lahir', $jk, '$gd', '$alamat', '$cat_kes', '$nm_ortu', '$alamat_ortu', '$kerja_ortu', '$no_hp_ortu', '$thn_ajaran', '$no_hp', '$foto', '$kode_jurusan','', '$kode_guru');";
	$query1="INSERT INTO `tb_user` (`username`, `pass`, `email`, `kode`, `tingkat`, `pertanyaan`, `aktif`) VALUES ('$username', '$pass', '$email', '$kode', '3', '$pertanyaan', '1');";
	$result=mysql_query($query) or die(mysql_error()); 
	$result1=mysql_query($query1) or die(mysql_error()); 
	   if ($result&&$result1) {
	?>
    <script type="text/javascript">	
		alertify.alert("Silahkan Login<br>Gunakan NIS Sebagai Username",function(){
    	alertify.success(window.location.assign('../../index.php'));
  		}).setHeader('Perhatian').set({'closable':false,});	
	</script>
	<?php
    }else{
      ?>
    <script type="text/javascript">	
		alertify.alert("Gagal Cek Kembali",function(){
  		}).setHeader('Perhatian').set({'closable':false,});	
	</script>
	<?php
    }
}
?>
</body>
</html>
