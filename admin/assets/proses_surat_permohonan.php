<?php  
include '../../includes/koneksi.php';
$no_surat=$_GET['n'];
$query="SELECT tb_permohonan.no_surat_permohonan, tgl_mulai_kp, tgl_akhir_kp, nama_perusahaan, alamat_perusahaan, tb_detail_permohonan.nis, nama_siswa, kelas, thn_ajaran, nama_jurusan FROM `tb_permohonan` JOIN `tb_perusahaan` ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan JOIN `tb_detail_permohonan` ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN `tb_siswa` ON tb_detail_permohonan.nis=tb_siswa.nis JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE tb_detail_permohonan.no_surat_permohonan='$no_surat';";
$res=mysql_query($query) or die(mysql_error());
$hasil=mysql_fetch_array($res);
$row=mysql_num_rows($res);
if ($row==1) {
	$mTop="300px";
}else if ($row>=1&&$row<=3){
	$mTop="100px";
}else{
	$mTop="-100px";
}
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
$tgl_cetak=date('d')." ". $bulan[date('m')]." ".date('Y');

$tgl_awal=date('d', strtotime($hasil['tgl_mulai_kp']))." ". $bulan[date('m', strtotime($hasil['tgl_mulai_kp']))]." ".date('Y', strtotime($hasil['tgl_mulai_kp']));
$tgl_akhir=date('d', strtotime($hasil['tgl_akhir_kp']))." ". $bulan[date('m', strtotime($hasil['tgl_akhir_kp']))]." ".date('Y', strtotime($hasil['tgl_akhir_kp']));
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
			E-mail: smkmerdekabdg@yahoo.com, Website:www.smkmerdekabdg.com		</td>
		<td>
			<img src="../../assets/img/logo_iso.png" width="80" height="90" style="padding-left: 5px;padding-right: 5px;">
		</td>
	</tr>	
</table>
	<div style="padding-top: 2px;padding-bottom: 1cm;padding-right: 2cm;padding-left: 3cm; ">

<h1 align="center"><u>SURAT PERMOHONAN PRAKERIN</u></h1>
<table>
	<tr>
		<td width="55">Nomor</td>
		<td>:</td>
		<td width="280"><?php echo $no_surat;?></td>
		<td>Bandung, <?php echo $tgl_cetak;?></td>
	</tr>
	<tr>
		<td>Lamp</td>
		<td>:</td>
		<td colspan="2"> 1 </td>
	</tr>
	<tr>
		<td>hal</td>
		<td>:</td>
		<td colspan="2"><u><b><i>Permohonan PRAKERIN</i></b></u></td>
	</tr>
	<tr>
		<td valign="top" style="padding-top: 2px;">Kepada<br>Yth</td>
		<td valign="top" style="padding-top: 2px;">:</td>
		<td colspan="2" style="padding-top: 2px;">
		Bapak/Ibu Pimpinan<br>
		<?php echo $hasil['nama_perusahaan'];?><br>
		Di <?php echo $hasil['alamat_perusahaan'];?><br>
		Bandung
</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="2">
		<p>Berdasarkan pedoman Kurikulum SMK Merdeka Bandung, maka seluruh siswa diwajibkan melaksanakan Praktek Kerja Industri (PRAKERIN) pada perusahaan/Industri/Instansi yang relevan. Dalam PRAKERIN ini siswa Kompetensi Keahlian <?php echo $hasil['nama_jurusan'];?></p>
		<p>Sesuai dengan rencana kegiatan tahun pelajaran  <?php echo $hasil['thn_ajaran'];?>, maka pelaksanaan PRAKERIN direncanakan selama 3 (tiga) bulan dari tanggal :  <?php echo $tgl_awal;?> s.d  <?php echo $tgl_akhir;?></p>
		<p>Mengingat hal tersebut &nbsp;diatas, kami mengharapkan bantuan Bapak/Ibu kiranyan &nbsp;dapat &nbsp; memberikan kesempatan PRAKERIN kepada siswa sebagai berikut :</p>
		<table border="1" style="border-collapse: collapse; margin-top: 10px; margin-bottom: 10px; border-color: #000;" align="center">
			<tr align="center">
				<td width="15">No</td>
				<td width="185">Nama</td>
				<td width="81">NIS</td>
				<td width="85">Kelas</td>
				<td width="100">Keterangan</td>
			</tr>
			<?php 
			$no=1;
			$no_surat=$_GET['n'];
			$sql="SELECT tb_detail_permohonan.nis, nama_siswa, kelas FROM `tb_detail_permohonan` JOIN `tb_siswa` ON tb_detail_permohonan.nis=tb_siswa.nis WHERE no_surat_permohonan='$no_surat';";
			$r=mysql_query($sql) or die(mysql_error());
			while ($dt_siswa=mysql_fetch_array($r)) { ?>
			<tr align="center">
				<td><?php echo $no;?></td>
				<td><?php echo $dt_siswa['nama_siswa'];?></td>
				<td><?php echo $dt_siswa['nis'];?></td>
				<td><?php echo $dt_siswa['kelas'];?></td>
				<td>-</td>
			</tr>
			<?php
			$no++;
			}
			?>
			
		</table>
		<p style="margin-top: 10px;">Kebijaksanaan Bapak/Ibu dapat menerima PRAKERIN merupakan bantuan yang sangat besar bagi dunia pendidikan dalam upaya menciptakan sumber daya manusia yang professional.</p>
		<p>Sehubungan dengan diperlukan pembinaan kesiswaan dalam rangka kedisiplinan dan singkronisasi pembelajaran antara sekolah dan Industri, maka seluruh siswa yang sedang PRAKERIN pada setiap hari Sabtu wajib kembali ke sekolah sesuai dengan jadwal yang telah ditetapkan, sedang waktu pelaksanaan PRAKERIN di Industri pada hari Senin s/d Jum’at.</p>
		<p>Atas kerja sama yang baik, serta bantuan yang Bapak berikan, kami sampaikan terima kasih.</p>
		</td>
	</tr>
</table>
<table>
	<tr>
		<td>Tembusan</td>
		<td>:</td>
		<td>Kepala Sekolah SMK Merdeka Bandung</td>
		<td rowspan="3"><img src="../../assets/img/ttd-cap.png" style="width: 300px;"></td>
	</tr>
	<tr>
		<td colspan="3"><b><u><i>Catatan :</i></u></b></td>
	</tr>
	<tr>
		<td colspan="3">Pelaksanaan dan lamanya PRAKERIN 
		<br>dapat berubah sesuai dengan kondisi <br>
		dunia usaha dan industri ybs</td>
	</tr>
</table>

</div>
<!--page 2 lampiran surat balasam-->
	<table  style="border-bottom: 2px solid #000;  margin-left: 55px; border-color: #000; margin-top:<?php echo $mTop;?>
 ;">
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
<table style="margin-top: 10px;">
	<tr>
		<td width="55">Nomor</td>
		<td>:</td>
		<td width="280"> </td>
		<td>............. , ............................ </td>
	</tr>
	<tr>
		<td>Lamp</td>
		<td>:</td>
		<td colspan="2">  </td>
	</tr>
	<tr>
		<td>hal</td>
		<td>:</td>
		<td colspan="2"><u><b><i>Jawaban Permohonan PRAKERIN</i></b></u></td>
	</tr>
	<tr>
		<td valign="top" style="padding-top: 2px;">Kepada<br>Yth</td>
		<td valign="top" style="padding-top: 2px;">:</td>
		<td colspan="2" style="padding-top: 2px;">
		Bapak Wakasek Humas Hubin<br>
		SMK Merdeka Bandung <br>
		Jalan Pahlawan No.54<br>
		di,-<br>
		Bandung<br>

</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="2">
		<p>Menunjuk surat saudara Nomor: <?php echo $no_surat;?> Tertanggal <?php echo $tgl_cetak;?> perihal Permohonan PRAKERIN, maka saya menyatakan bahwa Siswa/siswi dibawah ini :</p>
		<table border="1" style="border-collapse: collapse; margin-top: 10px; margin-bottom: 10px; border-color: #000;" align="center">
			<tr align="center">
				<td width="15">No</td>
				<td width="185">Nama</td>
				<td width="81">NIS</td>
				<td width="85">Kelas</td>
				<td width="100">Keterangan</td>
			</tr>
			<?php 
			$no=1;
			$no_surat=$_GET['n'];
			$sql="SELECT tb_detail_permohonan.nis, nama_siswa, kelas FROM `tb_detail_permohonan` JOIN `tb_siswa` ON tb_detail_permohonan.nis=tb_siswa.nis WHERE no_surat_permohonan='$no_surat';";
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
		<b><i>Diterima / Tidak dapat diterima *)</i></b>
		<br>Demikian surat jawaban ini saya sampaikan, atas perhatiannya saya ucapkan terima kasih.
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td  align="center">...............,...............<br>...............................</td>
	</tr>
	<tr>
		<td colspan="4" height="50">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center">(...............................)</td>
	</tr>
	<tr>
		
	</tr>
</table>
</div>
</body>
</html>