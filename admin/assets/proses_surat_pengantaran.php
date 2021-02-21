<?php  
include '../../includes/koneksi.php';
$no_surat=$_GET['n'];
$query="SELECT no_surat_pengantar, nama_guru, tb_guru.kode_guru, nip, pangkat_gol, jabatan, nama_perusahaan, alamat_perusahaan, tb_detail_permohonan.nis, nama_siswa, kelas, nama_jurusan, thn_ajaran FROM tb_pengantaran JOIN tb_guru ON tb_pengantaran.kode_guru=tb_guru.kode_guru JOIN tb_permohonan ON tb_pengantaran.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE tb_pengantaran.no_surat_pengantar='$no_surat';";
$res=mysql_query($query) or die(mysql_error());
$hasil=mysql_fetch_array($res);
$kdGuru=$hasil['kode_guru'];
$q1=mysql_query("SELECT username, pass FROM tb_user WHERE username='$kdGuru'") or die(mysql_error());
$hasil2=mysql_fetch_array($q1);
$q2=mysql_query("SELECT tgl_pengantaran, waktu_antar FROM tb_settings");
$h2=mysql_fetch_array($q2);
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

$hariTgl=$dayList[date('D', strtotime($h2['tgl_pengantaran']))].", ". date('d', strtotime($h2['tgl_pengantaran']))." ". $bulan[date('m', strtotime($h2['tgl_pengantaran']))]." ".date('Y', strtotime($h2['tgl_pengantaran']));
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
	<table style="margin-left: 55px; border-bottom: 2px solid #000;">
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
				<b><u>SURAT TUGAS PENGANTARAN SISWA PRAKERIN</u></b>
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
		<td colspan="3" style="padding-top: 10px; padding-bottom: 10px;">Untuk Mengantarkan Siswa/Siswi SMK Merdeka Bandung tahun ajaran <?php echo $hasil['thn_ajaran'];?> ke tempat PRAKERIN, yang akan dilaksanakan pada :</td>
	</tr>
	<tr>
		<td> Hari/Tanggal </td>
		<td> : </td>
		<td> <?php echo $hariTgl;?> </td>
	</tr>
	<tr>
		<td> Waktu </td>
		<td> : </td>
		<td> <?php echo "Pukul ".date("H:i", strtotime($h2['waktu_antar']))." WIB";?>  </td>
	</tr>
	<tr  style="padding-top: 10px;">
		<td valign="top"> Tempat </td>
		<td valign="top"> : </td>
		<td> <?php echo $hasil['nama_perusahaan'];?> <br> <?php echo $hasil['alamat_perusahaan'];?> </td>
	</tr>
	<tr>
		<td colspan="3" style="padding-top: 10px; padding-bottom: 10px;">Adapun nama DUDI dan alamat tempat terlampir. Demikian surat tugas ini dibuat, atas perhatiannya saya ucapkan terima kasih.</td>
	</tr>
</table>
<table align="right">
	<tr>
		<td  style="padding-left: 70px;">
			Bandung, <?php echo date('d').' '.$bulan[date('m')].' '.date('Y'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<img src="../../assets/img/ttd-cap.png" style="width: 310px;">
		</td>
	</tr>
</table>
</div>
	<table style="margin-left: 55px; border-bottom: 2px solid #000; margin-top: 410px;">
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
				<b><u>LAMPIRAN SURAT TUGAS PENGANTARAN SISWA PRAKERIN</u></b>
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
				Berikut adalah nama-nama yang akan diantar oleh bapak/ibu
			</td>
		</tr>
	</table>
	<table border="1" style="border-collapse: collapse; margin-top: 10px; margin-bottom: 10px; border-color: #000;" align="center">
			<tr align="center">
				<td width="60">Nomor</td>
				<td width="185">Nama</td>
				<td width="81">NIS</td>
				<td width="85">Kelas</td>
				<td width="100">Keterangan</td>
			</tr>
			<?php 
			$no=1;
			$nop=$_GET['n'];
			$sql="SELECT tb_siswa.nis, nama_siswa, kelas FROM tb_pengantaran JOIN tb_permohonan ON tb_pengantaran.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis WHERE no_surat_pengantar='$nop' AND status_permohonan='1'";
			$r=mysql_query($sql) or die(mysql_error());
			while ($dt_siswa=mysql_fetch_array($r)) { ?>
			<tr align="center">
				<td><?php echo $no;?></td>
				<td><?php echo $dt_siswa['nama_siswa'];?></td>
				<td><?php echo $dt_siswa['nis'];?></td>
				<td><?php echo $dt_siswa['kelas'];?></td>
				<td></td>
			</tr>
			<?php
			$no++;
			}
			?>			
	</table>
	<table style="margin-top: 30px; margin-left: -40px;">
		<tr align="justify">
			<td>
				Bapak/Ibu dapat menggunakan aplikasi SIPRAKERIN SMK MERDEKA BANDUNG dengan membuka situs https://siprakerinmdk.com/ dan login dengan akun berikut
			</td>
		</tr>
	</table>
	<center>
	<table border="1" align="center" style="margin-top: 10px; border-collapse: collapse;">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><?php echo $hasil2['username'];?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><?php echo $hasil2['pass'];?></td>
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
<table align="right">
	<tr>
		<td  style="padding-left: 70px;">
			Bandung, <?php echo date('d').' '.$bulan[date('m')].' '.date('Y'); ?>
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