<?php 
session_start();
include '../../includes/koneksi.php';
$kodeGuru=$_SESSION['kdGuru'];
$query="SELECT tb_monitoring.no_surat_monitoring, tb_permohonan.kode_perusahaan, nama_guru, nama_perusahaan, alamat_perusahaan, catatan_monitoring, saran_monitoring FROM tb_monitoring JOIN tb_detail_monitoring ON tb_monitoring.no_surat_monitoring=tb_detail_monitoring.no_surat_monitoring JOIN tb_guru ON tb_monitoring.kode_guru=tb_guru.kode_guru JOIN tb_permohonan ON tb_detail_monitoring.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan WHERE tb_monitoring.kode_guru='$kodeGuru'";
$result=mysql_query($query) or die(mysql_error());
$hasil=mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .container{
      margin-top:30px;  
      box-shadow: 1px 1px 10px 1px #888888; 
      padding-top: 20px;
      padding-bottom: 10px;
    }
    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number] {
        -moz-appearance:textfield;
    }
    input[type="submit"]{
      margin-top: 20px;
    }
    .container label{
      margin-top: 10px;
    }  
    .scroll{
      overflow-x:none;
    }  
    .col-md-12{
      height: auto;
    }
    .col-md-12{
      padding: 0;
    }
    .btn-group{
      align-items: center;
    }
    .form-top-table{
        width: 70%;
    }
    .form-top-table-td{
      width: 25%;
      text-align: right;
      padding-right: 10px;
    }
    .form-bottom-table {
        width: 87%;
        margin-top: 15px;
    }
    .form-under-table{
        width: 87%;
        margin-top: 15px;
    }
    .form-bottom-table table,.form-bottom-table td{
      border: 1px solid black;
    }
    .nis-kelas {
      width: 110px;
    }
    .ket{
      width: 150px;
    }    
    .form-bottom-table td{
      padding:5px;
    }
    #textarea,input[type=text],input[type=number]{
      color: #000;
      resize: none;
    }
    @media screen and (max-width: 600px) {
    .form-top-table{
        width: 100%;
    }
    .container{
      padding:0;
      left:0;
    } 
    .col-md-12{  
      font-size: 10px;
    } 
    .scroll{
      overflow-x:scroll;
    } 
    .nis-kelas{
      width: 80px;
    }
    .ket {
      width: 90px;
    }
    
    #table{
      width: 440px;
    } 
    .form-bottom-table {
        width: 57%;
        margin-top: 15px;
    }
    input[type="text"], #textarea, #perusahaan{
      font-size: 10px;
      border-radius: 2px;
    } 
    #textarea{
    	font-size: 10px;
    }
    input[type="radio"]{
    	width: 12px;
    }
    input[type="submit"]{
      font-size: 10px;
      padding: 3px 5px 3px 5px;
      margin-bottom: 10px; 

    }
    }
  </style>
  <title>Tugas Monitoring</title>
  <link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />  
  <link rel="stylesheet" href="../../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../../assets/css/default.min.css" type='text/css'  />
  <link href="../../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="../../assets/js/jquery-1.12.4.js"></script>  
  <script src="../../assets/js/jquery-ui.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/alertify.min.js"></script>
  <script>

    $(document).on('keyup keypress', 'form input[type="text"]', function(e) {
    if(e.which == 13) {
      e.preventDefault();
      return false;
    }
  });
  </script>
</head>
<body>
<?php include '../../includes/header-menu-guru.php';
  ?>
<div class="container">
  <form name="kuisioner" method="POST">  
    <div class="col-md-12"> 
      <table align="center" class="form-top-table">
        <tr>
          <td class="form-top-table-td">
            <label>Nomor Surat Monitoring</label>
          </td>
          <td><input class="form-control" type="text" name="noSuratMonitoring" value="<?php echo $hasil['no_surat_monitoring'];?>" disabled></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nama Pemonitoring</label>
          </td>
          <td><input type="text" name="namaGuru" class="form-control" id="namaGuru" value="<?php echo $hasil['nama_guru'];?>" disabled> </td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nama Perusahaan</label>
          </td>
          <td>
          	<select name="nama_perusahaan" class="form-control" id="perusahaan" style="color: #000;" onchange="fillData(this.value)">
          		<option value="0">--Pilih Perusahaan--</option>
          	<?php 
          		$queryP="SELECT tb_monitoring.no_surat_monitoring, tb_permohonan.kode_perusahaan,tb_detail_monitoring.no_surat_permohonan, nama_guru, nama_perusahaan, alamat_perusahaan, catatan_monitoring, saran_monitoring FROM tb_monitoring JOIN tb_detail_monitoring ON tb_monitoring.no_surat_monitoring=tb_detail_monitoring.no_surat_monitoring JOIN tb_guru ON tb_monitoring.kode_guru=tb_guru.kode_guru JOIN tb_permohonan ON tb_detail_monitoring.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan WHERE tb_monitoring.kode_guru='$kodeGuru' AND catatan_monitoring=''";
          		$rs=mysql_query($queryP) or die(mysql_error());
          		$dtperusahaan = "var dtperusahaan = new Array();\n";
          		while ($r=mysql_fetch_array($rs)) { ?>
          			<option value="<?php echo $r['kode_perusahaan'];?>"><?php echo $r['nama_perusahaan'];?></option>
          		<?php
          		$dtperusahaan .= "dtperusahaan['".$r['kode_perusahaan']."'] = {kode:'".addslashes($r['no_surat_permohonan'])."', kode1:'".addslashes($r['kode_perusahaan'])."'};\n";
          		}
          	?>
          	</select>
          </td>
        </tr>
        <tr style="display: none;">
          <td class="form-top-table-td">
            <label>No Permohonan</label>
          </td>
          <td><input type="text" name="noSuratPermohonan" class="form-control" id="noSuratPermohonan" autocomplete="off"></td>
        </tr>

        <tr style="display: none;">
          <td class="form-top-table-td">
            <label>Kode Perusahaan</label>
          </td>
          <td><input type="text" name="kodePerusahaan" class="form-control" id="kodePerusahaan"> </td>
        </tr>
      </table>
</div>    
  <div class="col-md-12 scroll">     
    <table align="center" class="form-bottom-table" id="table">     
      <tr align="center">
        <td width="20">No.</td>
        <td>Komponen Yang Dinilai</td>
        <td width="110">Amat Puas</td>
        <td width="110">Puas</td>
        <td width="110">Cukup Puas</td>
        <td width="110">Kurang Puas</td>
        <td width="110">Tidak Puas</td>
      </tr>
      <tr>
        <td align="center">1.</td>
        <td>Kompetensi / Keterampilan Siswa</td>
        <td align="center"><input type="radio" name="skill" value="5"></td>
        <td align="center"><input type="radio" name="skill" value="4"></td>
        <td align="center"><input type="radio" name="skill" value="3"></td>
        <td align="center"><input type="radio" name="skill" value="2"></td>
        <td align="center"><input type="radio" name="skill" value="1"></td>
      </tr>
      <tr>
        <td align="center">2.</td>
        <td>Tanggung Jawab siswa terhadap pekerjaannya</td>
        <td align="center"><input type="radio" name="tanggungJawab" value="5"></td>
        <td align="center"><input type="radio" name="tanggungJawab" value="4"></td>
        <td align="center"><input type="radio" name="tanggungJawab" value="3"></td>
        <td align="center"><input type="radio" name="tanggungJawab" value="2"></td>
        <td align="center"><input type="radio" name="tanggungJawab" value="1"></td>
      </tr>
      <tr>
        <td align="center">3.</td>
        <td>Motivasi / Kemauan Kerja</td>
        <td align="center"><input type="radio" name="motivasi" value="5"></td>
        <td align="center"><input type="radio" name="motivasi" value="4"></td>
        <td align="center"><input type="radio" name="motivasi" value="3"></td>
        <td align="center"><input type="radio" name="motivasi" value="2"></td>
        <td align="center"><input type="radio" name="motivasi" value="1"></td>
      </tr>
      <tr>
        <td align="center">4.</td>
        <td>Kerjasama</td>
        <td align="center"><input type="radio" name="kerjasama" value="5"></td>
        <td align="center"><input type="radio" name="kerjasama" value="4"></td>
        <td align="center"><input type="radio" name="kerjasama" value="3"></td>
        <td align="center"><input type="radio" name="kerjasama" value="2"></td>
        <td align="center"><input type="radio" name="kerjasama" value="1"></td>
      </tr>
      <tr>
        <td align="center">5.</td>
        <td>Perilaku / Sikap selama Prakerin</td>
        <td align="center"><input type="radio" name="perilaku" value="5"></td>
        <td align="center"><input type="radio" name="perilaku" value="4"></td>
        <td align="center"><input type="radio" name="perilaku" value="3"></td>
        <td align="center"><input type="radio" name="perilaku" value="2"></td>
        <td align="center"><input type="radio" name="perilaku" value="1"></td>
      </tr>
      <tr>
        <td align="center">6.</td>
        <td>Disiplin siswa</td>
        <td align="center"><input type="radio" name="disiplin" value="5"></td>
        <td align="center"><input type="radio" name="disiplin" value="4"></td>
        <td align="center"><input type="radio" name="disiplin" value="3"></td>
        <td align="center"><input type="radio" name="disiplin" value="2"></td>
        <td align="center"><input type="radio" name="disiplin" value="1"></td>
      </tr>     
    </table>
    <table align="center" class="form-under-table" id="table">
      <tr>
        <td colspan="7">Akan Menerima Kembali Siswa PRAKERIN<br>
          <label class="radio-inline">
            <input type="radio" name="status_perusahaan" value="1">Ya
          </label>
          <label class="radio-inline">
            <input type="radio" name="status_perusahaan" value="0">Tidak
          </label>
        </td>
      </tr>
       <tr>
        <td colspan="7">Catatan dari Perusahaan<br><textarea type="text" name="catPerusahaan" class="form-control" id="textarea" autocomplete="off" style="resize: none;"></textarea></td>
      </tr>
      <tr>
        <td colspan="7">Saran dari Perusahaan<br><textarea type="text" name="saranPerusahaan" class="form-control" id="textarea" autocomplete="off" style="resize: none;"></textarea></td>
      </tr>
    </table>
</div>
<center><input type="submit" name="proses" id="simpan" value="Simpan" class="btn btn-success"></center>
</form>
<?php
  if (isset($_POST['proses'])) {     
  if ($_POST['nama_perusahaan']=='0') { ?>
    <script type="text/javascript"> 
      alertify.alert('Tugas Monitoring Selesai atau Anda Belum Memilih Perusahaan', function(){ window.location.assign('dashboard.php')}).setHeader('Perhatian').set({'closable':false,}); 
    </script>
  <?php
  }else{
    $skill=$_POST['skill'];
    $tanggungJawab=$_POST['tanggungJawab'];
    $motivasi=$_POST['motivasi'];
    $kerjasama=$_POST['kerjasama'];
    $perilaku=$_POST['perilaku'];
    $disiplin=$_POST['disiplin'];
    $status_perusahaan=$_POST['status_perusahaan'];
    $noSuratPermohonan=$_POST['noSuratPermohonan'];
    $kodePerusahaan=$_POST['kodePerusahaan'];
    $catPerusahaan=$_POST['catPerusahaan'];
    $saranPerusahaan=$_POST['saranPerusahaan'];
    
    $queryUpdate="UPDATE tb_detail_monitoring SET catatan_monitoring='$catPerusahaan', saran_monitoring='$saranPerusahaan', status_monitoring='1' WHERE no_surat_permohonan='$noSuratPermohonan'";
    $result=mysql_query($queryUpdate) or die(mysql_error());
    $queryUpdate1="UPDATE tb_perusahaan SET p1='$skill', p2='$tanggungJawab', p3='$motivasi', p4='$kerjasama', p5='$perilaku', p6='$disiplin', status_perusahaan='$status_perusahaan' WHERE kode_perusahaan='$kodePerusahaan'";
    $result1=mysql_query($queryUpdate1) or die(mysql_error());
    if ($result&&$result1) { ?>
      <script type="text/javascript"> 
        alertify.alert('Laporan Monitoring Berhasil Disimpan', function(){ window.location.assign('tugas-monitoring.php')}).setHeader('Perhatian').set({'closable':false,}); 
      </script>
    <?php
    }
  } 
}
?>
</div><p>
<script type="text/javascript">
	<?php echo $dtperusahaan;?>
	function fillData(kode){
		document.getElementById("noSuratPermohonan").value = dtperusahaan[kode].kode;
    document.getElementById("kodePerusahaan").value = dtperusahaan[kode].kode1;
	}
</script>

</body>
</html>