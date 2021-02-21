<?php 
session_start();
include '../../includes/koneksi.php';
$kode_guru=$_SESSION['kdGuru'];
$query="SELECT no_surat_sidang, tb_sidang.kode_guru, nama_guru FROM tb_sidang JOIN tb_guru ON tb_sidang.kode_guru=tb_guru.kode_guru WHERE tb_sidang.kode_guru='$kode_guru'";;
$result=mysql_query($query) or die(mysql_error());
$hasil=mysql_fetch_array($result);
$noSurat=$hasil['no_surat_sidang'];
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
        width: 80px;
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
        width: 80%;
    }
    .form-top-table-td{
      width: 25%;
      text-align: right;
      padding-right: 10px;
    }
    .form-bottom-table {
        width: auto;
        margin-top: 15px;
    }
    .form-bottom-table table,.form-bottom-table th,.form-bottom-table td{
      border: 1px solid black;
    }
    .nis-kelas {
      width: 110px;
    }
    .ket{
      width: 150px;
    }    
    .form-bottom-table td{
      padding:4px;
      border: 1px solid #000;
    }
    #textarea,input[type=text],input[type=number]{
      color: #000;
      resize: none;
    }
    @media screen and (max-width: 600px) {
    .ui-autocomplete {
      font-size: 12px;
    }
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
    .form-bottom-table{
        width: 130%;
    }
    .form-bottom-table input[type="text"]{
      height: 25px;
    }    
    .form-bottom-table td{
      padding:2px;
    }  
    #table{
      width: 440px;
    } 
    input[type="text"], #textarea{
      font-size: 10px;
      border-radius: 2px;
    } 
    input[type="submit"]{
      font-size: 10px;
      padding: 3px 5px 3px 5px;
      margin-bottom: 10px; 

    }
    }
  </style>
  <title>Permohonan Prakerin</title>
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
    if(e.which == 13) { e.preventDefault(); return false;  }  });
  </script>
</head>
<body>
<?php include '../../includes/header-menu-guru.php';?>
<div class="container">
  <form method="POST" name="pemohonan">
    <div class="col-md-12"> 
      <table align="center" class="form-top-table">
        <tr>
          <td class="form-top-table-td">
            <label>Nomor Surat</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat" style="pointer-events: none;" value="<?=$hasil['no_surat_sidang']?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nama Guru Penguji</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat" style="pointer-events: none;" value="<?=$hasil['nama_guru']?>"></td>
        </tr>
      </table>
</div><br>
<center>
  <span>Pilih Siswa Yang Di Uji</span>
  <select name="nis" class="form-control" style="width: 300px;" onchange="tableNilai(this.value)">
    <option value="0">--Pilih Siswa--</option>
  <?php
  $query="SELECT tb_nilai.nis, nama_siswa, jml_prakerin, jumlah_ns  FROM tb_sidang JOIN tb_nilai ON tb_sidang.no_surat_sidang=tb_nilai.no_surat_sidang JOIN tb_siswa ON tb_nilai.nis=tb_siswa.nis WHERE tb_nilai.no_surat_sidang='$noSurat' AND tb_nilai.nilai_isi_laporan IN(0)";
  $result=mysql_query($query) or die(mysql_error());
  while ($hasil=mysql_fetch_array($result)) { ?>
    <option value="<?=$hasil['nis'];?>" <?php if ($hasil['nis']==$_GET['n']) {echo "selected";}?>><?=$hasil['nama_siswa'];?></option>
  <?php
  }
  ?>
  </select><br>
  <span>Nilai tidak dapat diubah jika nilai sudah disimpan</span>
</center>
  <div class="col-md-12 scroll">      
     <table border="1" class="form-bottom-table" style="border-collapse: collapse;">     
      <tr align="center">
        <td style="width: 10px;" rowspan="2">No</td>
        <td rowspan="2">jumlah prakerin</td>
        <td colspan="6">Penilaian Laporan</td>  
        <td rowspan="2">Nilai Sekolah</td> 
        <td rowspan="2">Nilai Perusahaan</td> 
        <td rowspan="2">Nilai Rata-Rata</td> 
        <td rowspan="2">Nilai Kompulatif</td>        
      </tr>
      <tr align="center">
        <td>Isi Laporan</td>
        <td>Penggunaan Bahasa</td>
        <td>Kerapihan Laporan</td>
        <td>Sikap</td>
        <td>Penguasaan Materi</td>
        <td>Menggungkapkan Pendapat</td>          
      </tr>      
      <tr>
        <td></td>
        <td></td>
        <td style="text-align: center;">*10</td>
        <td style="text-align: center;">*10</td>
        <td style="text-align: center;">*20</td>
        <td style="text-align: center;">*10</td>
        <td style="text-align: center;">*20</td>
        <td style="text-align: center;">*30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <?php 
        $nis=$_GET['n'];
        if ($nis=='all') {
          $query="SELECT jml_prakerin, nilai_perusahaan  FROM tb_nilai WHERE nis='all'";
        }else{
          $query="SELECT jml_prakerin, nilai_perusahaan  FROM tb_nilai WHERE nis='$nis'";
        }
          
          $result=mysql_query($query) or die(mysql_error());
          $no=1;
            while ($hasil=mysql_fetch_array($result)) { ?>
              <tr align="center">
                <td><?php echo $no++;?></td>
                <td><input type="number" name="n1" class="form-control" value="<?=$hasil['jml_prakerin'];?>" id="n1" style="background-color: #e5e5e5; pointer-events: none;"></td>
                <td><input type="number" name="n2" class="form-control" id="n2" onkeyup="cek1(this.value)"></td>
                <td><input type="number" name="n3" class="form-control" id="n3" onkeyup="cek2(this.value)"></td>    
                <td><input type="number" name="n4" class="form-control" id="n4" onkeyup="cek3(this.value)"></td>
                <td><input type="number" name="n5" class="form-control" id="n5" onkeyup="cek4(this.value)"></td>
                <td><input type="number" name="n6" class="form-control" id="n6" onkeyup="cek5(this.value)"></td> 
                <td><input type="number" name="n7" class="form-control" id="n7" onkeyup="cek6(this.value)"></td>
                <td><input type="number" name="n8" class="form-control" id="n8" style="background-color: #e5e5e5; pointer-events: none;"></td></td> 
                <td><input type="number" name="n9" class="form-control" value="<?=$hasil['nilai_perusahaan'];?>" id="n9" style="background-color: #e5e5e5; pointer-events: none;"></td>
                <td><input type="text" name="n10" class="form-control" id="n10" style="background-color: #e5e5e5; pointer-events: none;"></td></td>
                <td><input type="text" name="n11" class="form-control" id="n11" style="background-color: #e5e5e5; pointer-events: none;"></td>                
              </tr>
          <?php
          }
      ?>
    </table>
    * Nilai Maksimal<br>
    <label>Spesifikasi Pekerjaan</label>
    <textarea name="jobDesk" class="form-control" id="jobDesk" style="resize: none;" placeholder="Isi sesuai dengan job yang diterima siswa sewaktu PRAKERIN"></textarea>
</div>
<center><br>
  <input type="submit" name="simpan" id="simpan" value="Simpan" class="btn btn-success" style="display: none;">
</center>
</form><center>
  <button name="hitung" id="hitung" class="btn btn-info" onclick="hitung()">Hitung</button>
</center>
</div><p>
<script type="text/javascript"> 
function hitung(){
  var n1=parseInt(document.getElementById("n1").value);
  var n2=parseInt(document.getElementById("n2").value);
  var n3=parseInt(document.getElementById("n3").value);
  var n4=parseInt(document.getElementById("n4").value);
  var n5=parseInt(document.getElementById("n5").value);
  var n6=parseInt(document.getElementById("n6").value);
  var n7=parseInt(document.getElementById("n7").value);
  var n9=parseInt(document.getElementById("n9").value);
  var ns=n2+n3+n4+n5+n6+n7;
  document.getElementById("n8").value=Math.round(ns);
  var nav=(ns+n9)/2;
  var na=nav.toFixed(2);
  document.getElementById("n10").value=na;
  var na=(ns+n9)/2;
  if (na>=90&&na<=100) {
    var hm='A';
  }else if(na>=80&&na<=89.99){
    var hm='B';
  }else if(na>=70&&na<=79.99){
    var hm='C';
  }else if(na>=60&&na<=69.99){
    var hm='D';
  }
  document.getElementById("n11").value=hm;
  document.getElementById("simpan").style.display="block";
  document.getElementById("hitung").style.display="none";
  document.getElementById("n1").style.pointerEvents="none";
  document.getElementById("n2").style.pointerEvents="none";
  document.getElementById("n3").style.pointerEvents="none";
  document.getElementById("n4").style.pointerEvents="none";
  document.getElementById("n5").style.pointerEvents="none";
  document.getElementById("n6").style.pointerEvents="none";
  document.getElementById("n7").style.pointerEvents="none";
  document.getElementById("n9").style.pointerEvents="none";
  document.getElementById("n1").style.backgroundColor="#e5e5e5";
  document.getElementById("n2").style.backgroundColor="#e5e5e5";
  document.getElementById("n3").style.backgroundColor="#e5e5e5";
  document.getElementById("n4").style.backgroundColor="#e5e5e5";
  document.getElementById("n5").style.backgroundColor="#e5e5e5";
  document.getElementById("n6").style.backgroundColor="#e5e5e5";
  document.getElementById("n7").style.backgroundColor="#e5e5e5";
  document.getElementById("n9").style.backgroundColor="#e5e5e5";
}
function tableNilai(nis){
  window.location.assign('tugas-penguji.php?n='+nis);
}
function cek1(nilai){  
  var res = nilai.replace(",", ".");
  var n = res.indexOf(".");
  if (nilai>10) {
    alertify.alert("Melebihi nilai maksimal",function(){document.getElementById("n2").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }else if(n>=0){
    alertify.alert("Nilai tidak boleh desimal",function(){document.getElementById("n2").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }
}
function cek2(nilai){  
  var res = nilai.replace(",", ".");
  var n = res.indexOf(".");
  if (nilai>10) {
    alertify.alert("Melebihi nilai maksimal",function(){document.getElementById("n3").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }else if(n>=0){
    alertify.alert("Nilai tidak boleh desimal",function(){document.getElementById("n3").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }
}
function cek3(nilai){  
  var res = nilai.replace(",", ".");
  var n = res.indexOf(".");
  if (nilai>20) {
    alertify.alert("Melebihi nilai maksimal",function(){document.getElementById("n4").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }else if(n>=0){
    alertify.alert("Nilai tidak boleh desimal",function(){document.getElementById("n4").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }
}
function cek4(nilai){  
  var res = nilai.replace(",", ".");
  var n = res.indexOf(".");
  if (nilai>10) {
    alertify.alert("Melebihi nilai maksimal",function(){document.getElementById("n5").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }else if(n>=0){
    alertify.alert("Nilai tidak boleh desimal",function(){document.getElementById("n5").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }
}
function cek5(nilai){  
  var res = nilai.replace(",", ".");
  var n = res.indexOf(".");
  if (nilai>20) {
    alertify.alert("Melebihi nilai maksimal",function(){document.getElementById("n6").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }else if(n>=0){
    alertify.alert("Nilai tidak boleh desimal",function(){document.getElementById("n6").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }
}
function cek6(nilai){  
  var res = nilai.replace(",", ".");
  var n = res.indexOf(".");
  if (nilai>30) {
    alertify.alert("Melebihi nilai maksimal",function(){document.getElementById("n7").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }else if(n>=0){
    alertify.alert("Nilai tidak boleh desimal",function(){document.getElementById("n7").value='';}).setHeader('Perhatian').set({transition:'zoom'}).show();
  }
}
</script>
<?php 
if (isset($_POST['simpan'])) {
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n5=$_POST['n5'];
$n6=$_POST['n6'];
$n7=$_POST['n7'];
$n8=$_POST['n8'];
$n9=$_POST['n9'];
$n10=$_POST['n10'];
$n11=$_POST['n11'];
$nis=$_POST['nis'];
$jobDesk=$_POST['jobDesk'];
$q="UPDATE tb_nilai SET `nilai_isi_laporan`='$n2', `nilai_penggunaan_bhs`='$n3', `nilai_kerapihan_laporan`='$n4', `nilai_sikap`='$n5', `nilai_penguasaan_materi`='$n6', `nilai_mengungkapkan_pendapat`='$n7', `jumlah_ns`='$n8', `nilai_rata_rata`='$n10', `nilai_komulatif`='$n11', `spesifikasi_pekerjaan`='$jobDesk' WHERE nis='$nis'";
$r=mysql_query($q) or die(mysql_error());
if ($r) { ?>
<script type="text/javascript">
  alertify.alert("Nilai Telah Disimpan", function(){window.location.assign('tugas-penguji.php?n=all')}).setHeader('Perhatian').set({closable:false,transition:'zoom'});
</script>
<?php
}
}
?>
</body>
</html>