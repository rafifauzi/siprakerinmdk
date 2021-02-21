<?php
	include '../includes/koneksi.php';
	$jur=$_GET['j'];
	$query=mysql_query("SELECT nis FROM tb_siswa WHERE kode_jurusan='AP'");
	$r=mysql_num_rows($query);
	$a=$r;
	$b=$r/2;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="bimbingan" method="POST">
	<?php
		$year=date("Y");
  		$sql="SELECT `no_surat_bimbingan` FROM `tb_bimbingan`";
  		$row=mysql_num_rows(mysql_query($sql))+1;
  		if ($row<=9) {
    		$no_urut="00".$row;
  		}elseif ($row>=9&&$row<=99) {
   	 		$no_urut="0".$row;
  		}else{
    		$no_urut=$row;
  		}
  	?>
  	<label>No Surat</label><br>
  	<input type="text" name="noSuratBimbingan" value="<?php echo $no_urut;?>/K/SMK-Mdk/E.11/<?php echo $year;?>"><p>
	<label>Nama Guru Pembimbing</label><br>
	<select name="kdGuru">
		<option value="">Pilih Nama Guru</option>
		<?php
			$qGuru="SELECT kode_guru, nama_guru FROM tb_guru WHERE kode_guru NOT IN (SELECT kode_guru FROM tb_bimbingan) ORDER BY nama_guru";
			$rGuru=mysql_query($qGuru) or die(mysql_error());
			while ($hGuru=mysql_fetch_array($rGuru)) { ?>
				<option value="<?php echo $hGuru['kode_guru']?>"><?php echo $hGuru['nama_guru']?></option>
			<?php
			}
		?>
	</select>
	<p>1 Guru Pembimbing dapat Membimbing <?= $b; ?> Orang Siswa</p>
	<table border="1" style="border-collapse: collapse;" width="500">
		<tr>
			<td>NIS</td>
			<td>Nama</td>
			<td>Kelas</td>
		</tr>
	
	<?php
		$query=mysql_query("SELECT nis, nama_siswa, kelas, tb_siswa.kode_jurusan, nama_jurusan FROM tb_siswa JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE tb_siswa.kode_jurusan='AP' AND nis NOT IN (SELECT nis FROM tb_detail_bimbingan)");
		while ($h=mysql_fetch_array($query)) { ?>
			<tr>
				<td><input type="text" name="nis[]" value="<?=$h['nis'];?>"></td><!-- input nis array-->
				<td><input type="text" name="nama[]" value="<?=$h['nama_siswa'];?>"></td><!-- input nama array-->
				<td><input type="text" name="kelas[]" value="<?=$h['kelas'];?>"></td><!-- input kelas array-->
			</tr>
		<?php
		}
	?>
	</table>
	<p>
	<input type="submit" name="simpan" value="Simpan">
	</form>
	<?php
		if (isset($_POST['simpan'])) {
			$batasInput=$a/2;
			$noSuratBimbingan=$_POST['noSuratBimbingan'];
			$nis=$_POST['nis'];
			$kodeGuru=$_POST['kdGuru'];
			$ins=mysql_query("INSERT INTO tb_bimbingan VALUES ('$noSuratBimbingan','l','$kodeGuru')") or die(mysql_error());
			for ($i=0; $i<$batasInput ; $i++) { 
				$ins=mysql_query("INSERT INTO tb_detail_bimbingan VALUES ('$noSuratBimbingan','$nis[$i]','0')") or die(mysql_error());
			} ?>
			<script type="text/javascript">
				window.location.assign('test_random.php?j=all');
			</script>

		<?php
		}
	?>
</body>
</html>