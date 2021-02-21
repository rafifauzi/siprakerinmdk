<?php
	include '../../includes/koneksi.php';
	$nis=$_GET['n'];
	$query="SELECT * FROM `tb_bimbingan` JOIN tb_guru ON tb_bimbingan.kode_guru=tb_guru.kode_guru JOIN tb_detail_bimbingan ON tb_bimbingan.no_surat_bimbingan=tb_detail_bimbingan.no_surat_bimbingan JOIN tb_siswa ON tb_detail_bimbingan.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE tb_siswa.nis='$nis'";
	$result=mysql_query($query) or die(mysql_error());
	$hasil=mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />
	<style type="text/css">
		body{
			font-family: "times"; 
			font-size: 12pt;
		}
		h4{
			font-size: 12pt;
			font-family: "times";
			font-weight: 900;
		}
		h3{
			font-size: 14pt;
			font-family: "times";
			font-weight: 900;
		}
		h1{
			font-size: 12pt;
			font-weight: 900;
			line-height: 45px;
		}
		p{
			text-indent: 50px;
			text-align: justify;
		}
		td, tr{
			border-color: #000;
		}
	</style>
	<script type="text/javascript">
		window.print();
	</script>
	<title>Surat Preview</title>
</head>
<body>
		<h4 align="center">KARTU BIMBINGAN PENYUSUNAN LAPORAN <br>PRAKTEK KERJA INDUSTRI (PRAKERIN)</h4>
		<table>
			<tr>
				<td style="padding-right: 15px;">NAMA SISWA</td>
				<td style="padding-right: 5px;">:</td>
				<td><?php echo strtoupper($hasil['nama_siswa']);?></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><?php echo $hasil['nis'];?></td>
			</tr>
			<tr>
				<td>KELAS</td>
				<td>:</td>
				<td><?php echo strtoupper($hasil['kelas']);?></td>
			</tr>
			<tr>
				<td>JURUSAN</td>
				<td>:</td>
				<td><?php echo strtoupper($hasil['nama_jurusan']);?></td>
			</tr>
		</table>
		<br>
		<table border="1" style="border-collapse: collapse;" align="center">
			<tr>
				<td width="20" style="text-align: center;"><b>No</b></td>
				<td style="text-align: center;"><b>TANGGAL</b></td>
				<td width="300" style="text-align: center;"><b>REVISI</b></td>
				<td width="60" style="text-align: center;"><b>Paraf Pembimbing</b></td>
			</tr>		
			<?php
				for ($i=1; $i<=20 ; $i++) { ?>
				<tr>
					<td><?=$i;?></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>				
				</tr>
				<?php
				}
			?>	
			
		</table>
		<p>
		<div style="float: right; margin-right: 50px;">
			<table>
				<tr>
					<td>Pembimbing Penyusunan Laporan</td>
				</tr>
				<tr>
					<td><br><br><br><?php echo $hasil['nama_guru']?></td>
				</tr>
			</table>
		</div>
</body>
</html>