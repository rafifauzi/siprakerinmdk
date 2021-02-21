<?php  
include '../../includes/koneksi.php';
$no_surat=$_GET['n'];
$kode=$_GET['g'];
$query="SELECT tb_detail_bimbingan.nis, nama_siswa, kelas, nama_guru, nip, nuptk, nama_jurusan, pangkat_gol, jabatan FROM tb_bimbingan JOIN tb_detail_bimbingan ON tb_bimbingan.no_surat_bimbingan=tb_detail_bimbingan.no_surat_bimbingan JOIN tb_siswa ON tb_detail_bimbingan.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan JOIN tb_guru ON tb_bimbingan.kode_guru=tb_guru.kode_guru WHERE tb_bimbingan.no_surat_bimbingan='$no_surat'";
$res=mysql_query($query) or die(mysql_error());
$hasil=mysql_fetch_array($res);
$akun=mysql_fetch_array(mysql_query("SELECT username, pass FROM tb_user WHERE username='$kode'"));
$bulan = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember',
);
$dayList = array(
	'Sun' => 'Minggu',
	'Mon' => 'Senin',
	'Tue' => 'Selasa',
	'Wed' => 'Rabu',
	'Thu' => 'Kamis',
	'Fri' => 'Jumat',
	'Sat' => 'Sabtu'
);
$tgl_cetak=date('d')." ". $bulan[date('m')]." ".date('Y');
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
		}
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
	</style>
	<script type="text/javascript">
		window.print();
	</script>
	<title>Surat Preview</title>
</head>
<body>
	<table style="border-bottom: 2px solid #000; margin-left: 55px;">
	<tr>
		<td>
			<img src="../../assets/img/logo.png" width="80">
		</td>
		<td align="center" width="440">
			<h4>YAYASAN PENDIDIKAN WAHIDIN BANDUNG</h4>
			<h3>SMK “MERDEKA”</h3>
			(STATUS TERAKREDITASI A)<br>
			Jl. Pahlawan No 54. Telepon/Fax 022 7201621 (PAGI-SORE)<br>
			E-mail: smkmerdekabdg@yahoo.com, Website:www.smkmerdekabdg.com
		</td>
		<td>
			<img src="../../assets/img/logo_iso.png" width="80" height="90" style="padding-left: 5px;padding-right: 5px;">
		</td>
	</tr>	
</table>
	<div style="padding-top: 2px;padding-bottom: 1cm;padding-right: 2cm;padding-left: 3cm; ">

<center><br>
	<table height="50">
		<tr  align="center">
			<td>
				<b><u>SURAT TUGAS MEMBIMBING PENYUSUNAN LAPORAN PRAKERIN</u></b>
			</td>
		</tr>
		<tr  align="center">
			<td>
				Nomor : <?php echo $no_surat;?>
			</td>
		</tr>
	</table>
</center>
<table style="margin-top: 30px; margin-left: -40px;">
	<tr>
		<td colspan="3" style="padding-bottom: 10px;">
			Yang bertanda tangan dibawah ini :
		</td>
	</tr>
	<tr>
		<td> Nama </td>
		<td> : </td>
		<td> Drs. H. Agus Rusdiana, M.Si </td>
	</tr>
	<tr>
		<td> NIP </td>
		<td> : </td>
		<td> 19590829 198603 1 006 </td>
	</tr>
	<tr>
		<td> Pangkat/Gol </td>
		<td> : </td>
		<td> Pembina/IV.b </td>
	</tr>
	<tr>
		<td> Jabatan </td>
		<td> : </td>
		<td> Kepala Sekolah </td>
	</tr>
	<tr>
		<td style="padding-top: 10px; padding-bottom: 10px;"  width="180">Memberikan Tugas Kepada </td>
		<td style="padding-top: 10px; padding-bottom: 10px;"> : </td>
		<td> &nbsp; </td>
	</tr>
	<tr>
		<td> Nama </td>
		<td> : </td>
		<td> <?php echo $hasil['nama_guru'];?> </td>
	</tr>
	<tr>
		<td> NIP </td>
		<td> : </td>
		<td> <?php echo $hasil['nip'];?> </td>
	</tr>
	<tr>
		<td> Pangkat/Gol </td>
		<td> : </td>
		<td> <?php echo $hasil['pangkat_gol'];?> </td>
	</tr>
	<tr>
		<td> Jabatan </td>
		<td> : </td>
		<td> <?php echo $hasil['jabatan'];?> </td>
	</tr>
	<tr>
		<td colspan="3" style="padding-top: 10px; padding-bottom: 10px;">Untuk membimbing penyusunan laporan siswa prakerin dengan waktu dan tempat terlampir <br><br>Demikian surat tugas ini dibuat, agar dilaksanakan dengan penuh tanggung jawab. Atas perhatian dan kerjasamanya, saya ucapkan terima kasih.</td>
	</tr>
</table>
<table align="right" style="margin-top: 10px;">
	<tr>
		<td style="padding-left: 70px;">
			Bandung, <?php echo $tgl_cetak; ?>
		</td>
	</tr>
	<tr>
		<td>
			<img src="../../assets/img/ttd-cap.png" style="width: 310px;">
		</td>
	</tr>
</table>
</div>
	<table  style="margin-left: 55px; border-bottom: 2px solid #000; margin-top: 510px;">
	<tr>
		<td>
			<img src="../../assets/img/logo.png" width="80">
		</td>
		<td align="center" width="440">
			<h4>YAYASAN PENDIDIKAN WAHIDIN BANDUNG</h4>
			<h3>SMK “MERDEKA”</h3>
			(STATUS TERAKREDITASI A)<br>
			Jl. Pahlawan No 54. Telepon/Fax 022 7201621 (PAGI-SORE)<br>
			E-mail: smkmerdekabdg@yahoo.com, Website:www.smkmerdekabdg.com
		</td>
		<td>
			<img src="../../assets/img/logo_iso.png" width="80" height="90" style="padding-left: 5px;padding-right: 5px;">
		</td>
	</tr>	
</table>
	<div style="padding-top: 2px;padding-bottom: 1cm;padding-right: 2cm;padding-left: 3cm; ">
	<center><br>
	<table height="50">
		<tr  align="center">
			<td>
				<b><u>LAMPIRAN SURAT TUGAS MEMBIMBING PENYUSUNAN LAPORAN SISWA PRAKERIN</u></b>
			</td>
		</tr>
		<tr  align="center">
			<td>
				Nomor : <?php echo $no_surat;?>
			</td>
		</tr>
	</table>
	</center>
	<table style="margin-top: 30px; margin-left: -40px;">
		<tr>
			<td>
				Berikut adalah nama siswa yang akan dibimbing penyusunan laporan prakerin
			</td>
		</tr>
	</table>
	<table style="margin-top: 10px; margin-bottom: 10px; border-collapse: collapse; width: 100%;" align="center" border="1">
		<tr align="center">
			<td>No</td>
			<td>NIS</td>
			<td>Kelas</td>
		</tr>
<?php 
$query1="SELECT tb_detail_bimbingan.nis, nama_siswa, kelas, nama_guru, nip, nuptk, nama_jurusan, pangkat_gol, jabatan FROM tb_bimbingan JOIN tb_detail_bimbingan ON tb_bimbingan.no_surat_bimbingan=tb_detail_bimbingan.no_surat_bimbingan JOIN tb_siswa ON tb_detail_bimbingan.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan JOIN tb_guru ON tb_bimbingan.kode_guru=tb_guru.kode_guru WHERE tb_bimbingan.no_surat_bimbingan='$no_surat'";
$res1=mysql_query($query1) or die(mysql_error());
$no=1;
while ($hasil1=mysql_fetch_array($res1)) { ?>
	<tr align="center">
		<td><?php echo $no;?></td>
		<td><?php echo $hasil1['nama_siswa'];?></td>
		<td><?php echo $hasil1['kelas'];?></td>

	</tr>		
<?php
$no++;
}
?>
						
	</table>
	<table style="margin-top: 15px; margin-left: -40px;">
		<tr align="justify">
			<td>
				Bapak/Ibu dapat menggunakan aplikasi SIPRAKERIN SMK MERDEKA BANDUNG dengan membuka situs https://siprakerinmdk.com/ dan login dengan akun berikut
			</td>
		</tr>
	</table>
	<center>
	<table align="center" border="1" style="margin-top: 10px; border-collapse: collapse;">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><?php echo $akun['username'];?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><?php echo $akun['pass'];?></td>
		</tr>
	</table>
	</center>
	<table style="margin-top: 10px; margin-left: -40px;">
		<tr>
			<td align="justify">
				Gunakan aplikasi SIPRAKERIN SMK MERDEKA BANDUNG untuk memudahkan pekerjaan dalam kegiatan PRAKERIN dan perhatikan Huruf besar dan kecil pada username dan password
			</td>
		</tr>
	</table>
	<table align="right" style="margin-top: 10px;">
	<tr>
		<td style="padding-left: 70px;">
			Bandung, <?php echo $tgl_cetak; ?>
		</td>
	</tr>
	<tr>
		<td>
			<img src="../../assets/img/ttd-cap.png" style="width: 310px;">
		</td>
	</tr>
</table>
</div>
</body>
</html>