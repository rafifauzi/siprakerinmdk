<?php
	include '../../includes/koneksi.php';
	$nis=$_GET['n'];
	$query="SELECT tb_siswa.nis, nama_siswa, nama_jurusan, nama_perusahaan, status_permohonan FROM tb_permohonan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan = tb_detail_permohonan.no_surat_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE status_permohonan='1' AND tb_siswa.nis='$nis'";
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
		<h4 align="center">DAFTAR HADIR PRAKTEK KERJA INDUSTRI (PRAKERIN)<br>SISWA SMK MERDEKA BANDUNG<br>JURUSAN : <?php echo strtoupper($hasil['nama_jurusan']);?></h4>
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
				<td>PERUSAHAAN</td>
				<td>:</td>
				<td><?php echo strtoupper($hasil['nama_perusahaan']);?></td>
			</tr>
		</table>
		<br>
		<table border="1" style="border-collapse: collapse;" align="center">
			<tr>
				<td rowspan="2" width="100" style="text-align: center;"><b>BULAN</b></td>
				<td colspan="31" style="text-align: center;"><b>TANGGAL</b></td>
				<td rowspan="2"  width="60" style="text-align: center;"><b>KET</b></td>
			</tr>
			<tr style="font-weight: bold;">
				<td style="padding: 5px;">1</td>
				<td style="padding: 5px;">2</td>
				<td style="padding: 5px;">3</td>
				<td style="padding: 5px;">4</td>
				<td style="padding: 5px;">5</td>
				<td style="padding: 5px;">6</td>
				<td style="padding: 5px;">7</td>
				<td style="padding: 5px;">8</td>
				<td style="padding: 5px;">9</td>
				<td style="padding: 5px;">10</td>
				<td style="padding: 5px;">11</td>
				<td style="padding: 5px;">12</td>
				<td style="padding: 5px;">13</td>
				<td style="padding: 5px;">14</td>
				<td style="padding: 5px;">15</td>
				<td style="padding: 5px;">16</td>
				<td style="padding: 5px;">17</td>
				<td style="padding: 5px;">18</td>
				<td style="padding: 5px;">19</td>
				<td style="padding: 5px;">20</td>
				<td style="padding: 5px;">21</td>
				<td style="padding: 5px;">22</td>
				<td style="padding: 5px;">23</td>
				<td style="padding: 5px;">24</td>
				<td style="padding: 5px;">25</td>
				<td style="padding: 5px;">26</td>
				<td style="padding: 5px;">27</td>
				<td style="padding: 5px;">28</td>
				<td style="padding: 5px;">29</td>
				<td style="padding: 5px;">30</td>
				<td style="padding: 5px;">31</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		<p>
		<div style="float: left;">
			<table>
				<tr>
					<td style="text-align: right;">Sakit</td>
					<td>=</td>
					<td>............. hari</td>
				</tr>
				<tr>
					<td style="text-align: right;">Izin</td>
					<td>=</td>
					<td>............. hari</td>
				</tr>
				<tr>
					<td style="text-align: right;">Alpa</td>
					<td>=</td>
					<td><u>............. hari<u></td>
				</tr>
				<tr>
					<td style="text-align: right;">Jumlah tidak hadir</td>
					<td>=</td>
					<td>............. hari</td>
				</tr>
			</table>
		</div>
		<div style="float: right; margin-right: 50px;">
			<table>
				<tr>
					<td>Bandung, ............................ 20 ......</td>
				</tr>
				<tr>
					<td>Pembimbing Industri</td>
				</tr>
				<tr>
					<td><br><br><br>........................................................</td>
				</tr>
			</table>
		</div>
		<div style="margin-top: 150px;">
		<table>
			<tr>
				<td rowspan="3" valign="top">Catatan Khusus</td>
				<td rowspan="3" valign="top"> : </td>
				<td style="border-bottom: 2px solid #000;" width="850">&nbsp;</td>
			</tr>
			<tr>
				<td style="border-bottom: 2px solid #000;" width="850">&nbsp;</td>
			</tr>
			<tr>
				<td style="border-bottom: 2px solid #000;" width="850">&nbsp;</td>
			</tr>
		</table>
		</div>
</body>
</html>