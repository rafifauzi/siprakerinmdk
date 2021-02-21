<?php
include 'includes/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Program</title>
</head>
<body>
<form method="POST" name="up">
	<input type="text" name="txtcari" placeholder="Masukan No Surat Permohonan"><p>
	<input type="submit" name="btncari" value="Cari">
</form>
<?php 
	if (isset($_POST['btncari'])) {
		$nosurat=$_POST['txtcari'];
		$q="SELECT * FROM tb_permohonan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis WHERE tb_permohonan.no_surat_permohonan='$nosurat'";
		$r=mysql_query($q) or die(mysql_error());

		?>
		<table border="1">
			<tr>
				<td>Nis</td>
				<td>Nama</td>
			</tr>
			<?php
				while ($h=mysql_fetch_array($r)) { ?>
				<tr>
				<td><?php echo $h['nis']?></td>
				<td><?php echo $h['nama_siswa']?></td>
			</tr>
			<?php
			
				}
			?>
		</table>
		<?php
	}
?>
</body>
</html>