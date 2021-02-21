<?php
	include '../../includes/koneksi.php';
	$nis=$_GET['n'];
	$query="SELECT tb_siswa.nis, nama_siswa, kelas, nama_jurusan, nama_perusahaan, alamat_perusahaan, status_permohonan FROM tb_permohonan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan = tb_detail_permohonan.no_surat_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE status_permohonan='1' AND tb_siswa.nis='$nis'";
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
		<h4 align="center">FORM PENILAIAN PRAKTEK KERJA INDUSTRI (PRAKERIN)<br>SMK MERDEKA BANDUNG</h4>
		<table>
			<tr>
				<td style="padding-right: 15px;">NAMA PERUSAHAAN</td>
				<td style="padding-right: 5px;">:</td>
				<td><?php echo strtoupper($hasil['nama_perusahaan']);?></td>
			</tr>
			<tr>
				<td style="padding-right: 15px;">ALAMAT PERUSAHAAN</td>
				<td style="padding-right: 5px;">:</td>
				<td><?php echo strtoupper($hasil['alamat_perusahaan']);?></td>
			</tr>
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
				<td style="padding-right: 15px;">KOMPETENSI KEAHLIAN</td>
				<td style="padding-right: 5px;">:</td>
				<td><?php echo strtoupper($hasil['nama_jurusan']);?></td>
			</tr>
		</table>
		<br>
		<table border="1" style="border-collapse: collapse;" align="center">
			<tr>
				<th width="50">No</th>
				<th width="200">Aspek yang dinilai</th>
				<th width="60" style="padding-top: 5px; padding-bottom: 5px;">Nilai<br>Angka</th>
				<th width="60">Nilai<br>Huruf</th>
				<th width="200">Keterangan</th>
			</tr>
			<tr>
				<td height="40" style="text-align: center;">1</td>
				<td style="padding-left: 5px;">Disiplin</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td height="40" style="text-align: center;">2</td>
				<td style="padding-left: 5px;">Kerjasama</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td height="40" style="text-align: center;">3</td>
				<td style="padding-left: 5px;">Inisiatif</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td height="40" style="text-align: center;">4</td>
				<td style="padding-left: 5px;">Kerajinan</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td height="40" style="text-align: center;">5</td>
				<td style="padding-left: 5px;">Tanggung Jawab</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td height="40" style="text-align: center;">6</td>
				<td style="padding-left: 5px;">Sikap</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td height="40" style="text-align: center;">7</td>
				<td style="padding-left: 5px;">Prestasi / Kejujuran</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		<p>
		<div>
			<table>
				<tr>
					<td style="text-align: left;">Hasil</td>
					<td>:</td>
					<td>Kompeten / Belum Kompeten</td>
				</tr>
				<tr>
					<td style="text-align: left;">Rentang Nilai</td>
					<td>:</td>
					<td>&nbsp;</td>
				</tr>
			</table>
			<table>				
				<tr>
					<td style="text-align: left;">1 - 74 = BK (Belum Kompeten)</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td style="text-align: left;">75 - 100 = K (Kompeten)</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</div>
		<div style="margin-left: 400px;">
			<table>
				<tr>
					<td>.............. , ............................ 20 ......</td>
				</tr>
				<tr>
					<td>Pembimbing Industri</td>
				</tr>
				<tr>
					<td><br><br><br>........................................................</td>
				</tr>
				<tr>
					<td>Nama dan Cap Perusahaan</td>
				</tr>
			</table>
		</div>
</body>
</html>