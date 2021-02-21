<!DOCTYPE html>
<html>
<head>
	<title>Data Angket</title>
	<style type="text/css">
		.container{
			margin-top: 30px;	
			padding: 10px;
			box-shadow: 1px 1px 10px 1px #888888;	
			font-size: 14px;
		}
		.container h5{
			padding-top: 20px;
			text-align: center;
		}
		input[type="number"]{
			width: 25px;
			border: none;
			pointer-events: none;
			text-align: center;
		}
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
  		-webkit-appearance: none; 
  		margin: 0; 
		}
		#strip {
   		color: white;
   		background-image: linear-gradient(
      		45deg, 
      		#000 25%, 
      		transparent 25%, 
      		transparent 50%, 
      		#000 50%, 
      		#000 75%, 
      		transparent 75%, 
      		transparent
      	);
   		background-size: 3px 3px;
		}
	</style>
	<link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
    <link rel="stylesheet" href="../assets/css/default.min.css" type='text/css'  />
    <script src="../assets/js/alertify.min.js"></script>
    <script src="../assets/js/jquery-1.12.4.js"></script>
    <script src="../assets/js/popper.min.js"></script>
</head>
<body>
<?php
include '../includes/header-menu-admin.php';
include '../includes/koneksi.php';
$jur=$_GET['j'];
$query="SELECT * FROM tb_jurusan WHERE kode_jurusan='$jur'";
$result=mysql_query($query) or die(mysql_error());
$h=mysql_fetch_array($result);
$q1="SELECT DISTINCT nama_perusahaan, p1,p2,p3,p4,p5,p6 FROM tb_permohonan JOIN tb_detail_permohonan on tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis WHERE kode_jurusan='$jur' AND status_permohonan='1'";
$r1=mysql_query($q1) or die(mysql_error());
$SS1=mysql_num_rows(mysql_query("SELECT p1 FROM tb_perusahaan WHERE p1=5"));
$SS2=mysql_num_rows(mysql_query("SELECT p2 FROM tb_perusahaan WHERE p2=5"));
$SS3=mysql_num_rows(mysql_query("SELECT p3 FROM tb_perusahaan WHERE p3=5"));
$SS4=mysql_num_rows(mysql_query("SELECT p4 FROM tb_perusahaan WHERE p4=5"));
$SS5=mysql_num_rows(mysql_query("SELECT p5 FROM tb_perusahaan WHERE p5=5"));
$SS6=mysql_num_rows(mysql_query("SELECT p6 FROM tb_perusahaan WHERE p6=5"));
$S1=mysql_num_rows(mysql_query("SELECT p1 FROM tb_perusahaan WHERE p1=4"));
$S2=mysql_num_rows(mysql_query("SELECT p2 FROM tb_perusahaan WHERE p2=4"));
$S3=mysql_num_rows(mysql_query("SELECT p3 FROM tb_perusahaan WHERE p3=4"));
$S4=mysql_num_rows(mysql_query("SELECT p4 FROM tb_perusahaan WHERE p4=4"));
$S5=mysql_num_rows(mysql_query("SELECT p5 FROM tb_perusahaan WHERE p5=4"));
$S6=mysql_num_rows(mysql_query("SELECT p6 FROM tb_perusahaan WHERE p6=4"));
$H1=mysql_num_rows(mysql_query("SELECT p1 FROM tb_perusahaan WHERE p1=3"));
$H2=mysql_num_rows(mysql_query("SELECT p2 FROM tb_perusahaan WHERE p2=3"));
$H3=mysql_num_rows(mysql_query("SELECT p3 FROM tb_perusahaan WHERE p3=3"));
$H4=mysql_num_rows(mysql_query("SELECT p4 FROM tb_perusahaan WHERE p4=3"));
$H5=mysql_num_rows(mysql_query("SELECT p5 FROM tb_perusahaan WHERE p5=3"));
$H6=mysql_num_rows(mysql_query("SELECT p6 FROM tb_perusahaan WHERE p6=3"));
$TS1=mysql_num_rows(mysql_query("SELECT p1 FROM tb_perusahaan WHERE p1=2"));
$TS2=mysql_num_rows(mysql_query("SELECT p2 FROM tb_perusahaan WHERE p2=2"));
$TS3=mysql_num_rows(mysql_query("SELECT p3 FROM tb_perusahaan WHERE p3=2"));
$TS4=mysql_num_rows(mysql_query("SELECT p4 FROM tb_perusahaan WHERE p4=2"));
$TS5=mysql_num_rows(mysql_query("SELECT p5 FROM tb_perusahaan WHERE p5=2"));
$TS6=mysql_num_rows(mysql_query("SELECT p6 FROM tb_perusahaan WHERE p6=2"));
$STS1=mysql_num_rows(mysql_query("SELECT p1 FROM tb_perusahaan WHERE p1=1"));
$STS2=mysql_num_rows(mysql_query("SELECT p2 FROM tb_perusahaan WHERE p2=1"));
$STS3=mysql_num_rows(mysql_query("SELECT p3 FROM tb_perusahaan WHERE p3=2"));
$STS4=mysql_num_rows(mysql_query("SELECT p4 FROM tb_perusahaan WHERE p4=1"));
$STS5=mysql_num_rows(mysql_query("SELECT p5 FROM tb_perusahaan WHERE p5=1"));
$STS6=mysql_num_rows(mysql_query("SELECT p6 FROM tb_perusahaan WHERE p6=1"));
?>
<div class="container">
	<h5>Jurusan <?=$h['nama_jurusan'];?></h5><hr>
<form method="POST" name="angket">
	<table class="table table-bordered table-hover">
		<tr>
			<td colspan="7" align="center">Data Keseluruhan Perusahaan</td>
		</tr>
		<tr style="text-align: center;">
			<td id="strip">&nbsp;</td>
			<td>Skill</td>
			<td>Tanggung Jawab</td>
			<td>Motivasi</td>
			<td>Kerjasama</td>
			<td>Perilaku</td>
			<td>Disiplin</td>
		</tr>
		<tr style="text-align: center;">
			<td>Sangat Puas</td>
			<td><input type="number" name="SS1" value="<?=$SS1;?>"></td>
			<td><input type="number" name="SS2" value="<?=$SS2;?>"></td>
			<td><input type="number" name="SS3" value="<?=$SS3;?>"></td>
			<td><input type="number" name="SS4" value="<?=$SS4;?>"></td>
			<td><input type="number" name="SS5" value="<?=$SS5;?>"></td>
			<td><input type="number" name="SS6" value="<?=$SS6;?>"></td>
		</tr>
		<tr style="text-align: center;">
			<td>Puas</td>
			<td><input type="number" name="S1" value="<?=$S1;?>"></td>
			<td><input type="number" name="S2" value="<?=$S2;?>"></td>
			<td><input type="number" name="S3" value="<?=$S3;?>"></td>
			<td><input type="number" name="S4" value="<?=$S4;?>"></td>
			<td><input type="number" name="S5" value="<?=$S5;?>"></td>
			<td><input type="number" name="S6" value="<?=$S6;?>"></td>
		</tr>
		<tr style="text-align: center;">
			<td>Cukup Puas</td>
			<td><input type="number" name="H1" value="<?=$H1;?>"></td>
			<td><input type="number" name="H2" value="<?=$H2;?>"></td>
			<td><input type="number" name="H3" value="<?=$H3;?>"></td>
			<td><input type="number" name="H4" value="<?=$H4;?>"></td>
			<td><input type="number" name="H5" value="<?=$H5;?>"></td>
			<td><input type="number" name="H6" value="<?=$H6;?>"></td>
		</tr>
		<tr style="text-align: center;">
			<td>Tidak Puas</td>
			<td><input type="number" name="TS1" value="<?=$TS1;?>"></td>
			<td><input type="number" name="TS2" value="<?=$TS2;?>"></td>
			<td><input type="number" name="TS3" value="<?=$TS3;?>"></td>
			<td><input type="number" name="TS4" value="<?=$TS4;?>"></td>
			<td><input type="number" name="TS5" value="<?=$TS5;?>"></td>
			<td><input type="number" name="TS6" value="<?=$TS6;?>"></td>
		</tr>
		<tr style="text-align: center;">
			<td>Sangat Tidak Puas</td>
			<td><input type="number" name="STS1" value="<?=$STS1;?>"></td>
			<td><input type="number" name="STS2" value="<?=$STS2;?>"></td>
			<td><input type="number" name="STS3" value="<?=$STS3;?>"></td>
			<td><input type="number" name="STS4" value="<?=$STS4;?>"></td>
			<td><input type="number" name="STS5" value="<?=$STS5;?>"></td>
			<td><input type="number" name="STS6" value="<?=$STS6;?>"></td>
		</tr>
	</table>
	<p><p>
	<?php
		$jmlresponden=$SS1+$S1+$H1+$TS1+$STS1;				
		$batasAtas=$jmlresponden*5;
		$batasBawah=$jmlresponden*1;
		echo "Total Responden : ".mysql_num_rows($r1)." Perusahaan<br>";
		echo "Jumlah Responden Yang Masuk : ".$jmlresponden." Perusahaan<br>";
		echo "Batas Tertinggi : ". $batasAtas ."<br>";
		echo "Batas Terendah : ". $batasBawah ."<br>";
	?>
	<p>
	<input type="submit" name="hitung" value="HITUNG">
	</form>
	<p>

<?php
	if (isset($_POST['hitung'])) { //((SS*5)+(S*4)+(N*3)+(TS*2)+(STS*1))/(5*3)
		$skill=((($_POST['SS1']*5)+($_POST['S1']*4)+($_POST['H1']*3)+($_POST['TS1']*2)+($_POST['STS1']*1))/$batasAtas)*100;		
		$tanggungJawab=((($_POST['SS2']*5)+($_POST['S2']*4)+($_POST['H2']*3)+($_POST['TS2']*2)+($_POST['STS2']*1))/$batasAtas)*100;	
		$motivasi=((($_POST['SS3']*5)+($_POST['S3']*4)+($_POST['H3']*3)+($_POST['TS3']*2)+($_POST['STS3']*1))/$batasAtas)*100;
		$kerjasama=((($_POST['SS4']*5)+($_POST['S4']*4)+($_POST['H4']*3)+($_POST['TS4']*2)+($_POST['STS4']*1))/$batasAtas)*100;
		$perilaku=((($_POST['SS5']*5)+($_POST['S5']*4)+($_POST['H5']*3)+($_POST['TS5']*2)+($_POST['STS5']*1))/$batasAtas)*100;
		$disiplin=((($_POST['SS6']*5)+($_POST['S6']*4)+($_POST['H6']*3)+($_POST['TS6']*2)+($_POST['STS6']*1))/$batasAtas)*100;
		switch ($skill) {
			case ($skill<=20):
				$kesimpulan="Sangat Tidak Puas";
				break;
			case ($skill>20&&$skill<=40):
				$kesimpulan="Tidak Puas";
				break;
			case ($skill>40&&$skill<=60):
				$kesimpulan="Cukup Puas";
				break;
			case ($skill>60&&$skill<=80):
				$kesimpulan="Puas";
				break;
			case ($skill>80&&$skill<=100):
				$kesimpulan="Sangat Puas";
				break;
		}
		switch ($tanggungJawab) {
			case ($tanggungJawab<=20):
				$kesimpulan1="Sangat Tidak Puas";
				break;
			case ($tanggungJawab>20&&$tanggungJawab<=40):
				$kesimpulan1="Tidak Puas";
				break;
			case ($tanggungJawab>40&&$tanggungJawab<=60):
				$kesimpulan1="Cukup Puas";
				break;
			case ($tanggungJawab>60&&$tanggungJawab<=80):
				$kesimpulan1="Puas";
				break;
			case ($tanggungJawab>80&&$tanggungJawab<=100):
				$kesimpulan1="Sangat Puas";
				break;
		}
		switch ($motivasi) {
			case ($motivasi<=20):
				$kesimpulan2="Sangat Tidak Puas";
				break;
			case ($motivasi>20&&$motivasi<=40):
				$kesimpulan2="Tidak Puas";
				break;
			case ($motivasi>40&&$motivasi<=60):
				$kesimpulan2="Cukup Puas";
				break;
			case ($motivasi>60&&$motivasi<=80):
				$kesimpulan2="Puas";
				break;
			case ($motivasi>80&&$motivasi<=100):
				$kesimpulan2="Sangat Puas";
				break;
		}
		switch ($kerjasama) {
			case ($kerjasama<=20):
				$kesimpulan3="Sangat Tidak Puas";
				break;
			case ($kerjasama>20&&$kerjasama<=40):
				$kesimpulan3="Tidak Puas";
				break;
			case ($kerjasama>40&&$kerjasama<=60):
				$kesimpulan3="Cukup Puas";
				break;
			case ($kerjasama>60&&$kerjasama<=80):
				$kesimpulan3="Puas";
				break;
			case ($kerjasama>80&&$kerjasama<=100):
				$kesimpulan3="Sangat Puas";
				break;
		}
		switch ($perilaku) {
			case ($perilaku<=20):
				$kesimpulan4="Sangat Tidak Puas";
				break;
			case ($perilaku>20&&$perilaku<=40):
				$kesimpulan4="Tidak Puas";
				break;
			case ($perilaku>40&&$perilaku<=60):
				$kesimpulan4="Cukup Puas";
				break;
			case ($perilaku>60&&$perilaku<=80):
				$kesimpulan4="Puas";
				break;
			case ($perilaku>80&&$perilaku<=100):
				$kesimpulan4="Sangat Puas";
				break;
		}
		switch ($disiplin) {
			case ($disiplin<=20):
				$kesimpulan5="Sangat Tidak Puas";
				break;
			case ($disiplin>20&&$disiplin<=40):
				$kesimpulan5="Tidak Puas";
				break;
			case ($disiplin>40&&$disiplin<=60):
				$kesimpulan5="Cukup Puas";
				break;
			case ($disiplin>60&&$disiplin<=80):
				$kesimpulan5="Puas";
				break;
			case ($disiplin>80&&$disiplin<=100):
				$kesimpulan5="Sangat Puas";
				break;
		}
		?>		
	<table class="table table-bordered table-hover">
	<tr>
		<td style="text-align: center;">ATTRIBUT</td>
		<td style="text-align: center;">PERSENTASE KEPUASAN</td>
		<td style="text-align: center;">HASIL</td>
	</tr>
	<tr>
		<td style="text-align: center;">Skill</td>
		<td style="text-align: center;"><?=round($skill)."%";?></td>
		<td style="text-align: center;"><?="Perusahaan ".$kesimpulan." Terhadap Skill Siswa";?></td>
	</tr>
	<tr>
		<td style="text-align: center;">Tanggung Jawab</td>
		<td style="text-align: center;"><?=round($tanggungJawab)."%";?></td>
		<td style="text-align: center;"><?="Perusahaan ".$kesimpulan1." Terhadap Tanggung Jawab Siswa";?></td>
	</tr>
	<tr>
		<td style="text-align: center;">Motivasi</td>
		<td style="text-align: center;"><?=round($motivasi)."%";?></td>
		<td style="text-align: center;"><?="Perusahaan ".$kesimpulan2." Terhadap Motivasi Siswa";?></td>
	</tr>
	<tr>
		<td style="text-align: center;">Kerjasama</td>
		<td style="text-align: center;"><?=round($kerjasama)."%";?></td>
		<td style="text-align: center;"><?="Perusahaan ".$kesimpulan3." Terhadap Kerjasama Siswa";?></td>
	</tr>
	<tr>
		<td style="text-align: center;">Perilaku</td>
		<td style="text-align: center;"><?=round($perilaku)."%";?></td>
		<td style="text-align: center;"><?="Perusahaan ".$kesimpulan4." Terhadap Perilaku Siswa";?></td>
	</tr>
	<tr>
		<td style="text-align: center;">Disiplin</td>
		<td style="text-align: center;"><?=round($disiplin)."%";?></td>
		<td style="text-align: center;"><?="Perusahaan ".$kesimpulan5." Terhadap Disiplin Siswa";?></td>
	</tr>		
	</table>
	<?php
	}
?>
</div><br>
</body>
</html>