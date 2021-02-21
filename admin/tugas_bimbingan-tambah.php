<?php 
session_start();
include '../includes/koneksi.php';  
  $year=date("Y");
  $sql="SELECT no_surat_bimbingan FROM tb_bimbingan";
  $row=mysql_num_rows(mysql_query($sql))+1;
  if ($row<=9) {
    $no_urut="00".$row;
  }elseif ($row>=9&&$row<=99) {
    $no_urut="0".$row;
  }else{
    $no_urut=$row;
  }
$jur=$_GET['j'];
if ($jur=='all') {
  $query="SELECT tb_detail_permohonan.nis, nama_siswa, kelas FROM tb_detail_monitoring JOIN tb_permohonan ON tb_detail_monitoring.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis WHERE tb_siswa.kode_jurusan='ap' AND tb_detail_permohonan.nis NOT IN (SELECT nis FROM tb_detail_bimbingan)";
   $query1="SELECT kode_guru, nama_guru FROM tb_guru WHERE kode_jurusan='ap' AND kode_guru NOT IN (SELECT kode_guru FROM tb_bimbingan) ORDER BY nama_guru";
 }else{
  $query="SELECT tb_detail_permohonan.nis, nama_siswa, kelas FROM tb_detail_monitoring JOIN tb_permohonan ON tb_detail_monitoring.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis WHERE tb_siswa.kode_jurusan='ap' AND tb_detail_permohonan.nis NOT IN (SELECT nis FROM tb_detail_bimbingan)";
  $query1="SELECT kode_guru, nama_guru FROM tb_guru WHERE kode_jurusan='$jur' AND kode_guru NOT IN (SELECT kode_guru FROM tb_bimbingan) ORDER BY nama_guru";
}
$res=mysql_query($query) or die(mysql_error());
$res1=mysql_query($query1) or die(mysql_error());
$q1=mysql_query("SELECT tgl_bimbingan FROM tb_settings");
$h1=mysql_fetch_array($q1);
?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .ui-autocomplete {
        position: absolute;
        z-index: 1000;
        cursor: default;
        padding: 0;
        list-style: none;
        background-color: #EEEEEE;
        height: 300px;
        overflow-y: scroll;
        overflow-x: scroll;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
    .ui-autocomplete li, .ui-autocomplete li a {
        padding:10px;
        text-decoration:none; 
        color: #000;
    }
    .ui-autocomplete li:hover{
        background-color: #E0E0E0;
        text-decoration:none;
    }
    .ui-helper-hidden-accessible {
        display: none;
    }
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
      width: 30%;
      text-align: right;
      padding-right: 10px;
    }
    .form-bottom-table {
        width: 80%;
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
      padding:5px;
    }
    .container-table{
      width: auto;
      height: 500px;
      overflow-x: scroll;
      overflow-y: scroll;
      margin-top: 15px;
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
  <title>Bimbingan Prakerin</title>
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../assets/css/default.min.css" type='text/css'  />
  <script src="../assets/js/alertify.min.js"></script>
  <script src="../assets/js/jquery-1.12.4.js"></script>
  <script src="../assets/js/jquery-ui.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script>
    //$(function() {  
        //$( "#namaGuru" ).autocomplete({
         //source: "../includes/sourcedataguru.php",  
          // minLength:1, 
           //select: function( event, ui ) {
      //$('#kodeGuru').val(ui.item.id);
          //}
        //});        
    //});

    $(document).on('keyup keypress', 'form input[type="text"]', function(e) {
    if(e.which == 13) {
      e.preventDefault();
      return false;
    }
  });
  </script>
</head>
<body>
<?php include '../includes/header-menu-admin.php';
  ?>
<div class="container">
  <form method="POST" name="monitoring">
    <div class="col-md-12"> 
      <table align="center" class="form-top-table">
        <tr>
          <td class="form-top-table-td">
            <label>Nomor Surat Bimbingan</label>
          </td>
          <td><input class="form-control" type="text" name="noSuratBimbingan"  value="<?php echo $no_urut;?>/K/SMK-Mdk/E.11/<?php echo $year;?>" style="pointer-events: none;" required></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Jurusan</label>
          </td>
          <td>
            <select class="form-control" id="sel1" name="kode_jurusan" id="kJurusan" onchange="tTable(this.value)"  required>
              <?php 
              $jurusan=$_GET['j'];
                $query="SELECT * FROM `tb_jurusan` ORDER BY nama_jurusan";
                $result=mysql_query($query) or mysql_error();
                while ($r=mysql_fetch_array($result)) { ?>
                  <option value="<?php echo $r['kode_jurusan'];?>" <?php if ($r['kode_jurusan']==$jurusan) echo "selected";?> ><?php echo $r['nama_jurusan'];?></option>
              <?php
                }
              ?>
            </select>
          </td>
        </tr>        
        <tr>
          <td class="form-top-table-td">
            <label>Nama Guru</label>
          </td>
          <td>
            <select name="namaGuru" class="form-control" id="namaGuru" required>
            <?php
              while ($h=mysql_fetch_array($res1)) { ?>
                <option value="<?=$h['kode_guru'];?>"><?=$h['nama_guru'];?></option>
              <?php
              }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Tanggal Pelaksanaan</label>
          </td>
          <td><input type="date"  name="tgl_bimbingan" class="form-control" id="tgl_bimbingan" style="pointer-events: none;" value="<?=$h1['tgl_bimbingan'];?>" required> </td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Jumlah siswa bimbingan</label>
          </td>
          <td><input type="number"  name="jmlSiswa" class="form-control" required> </td>
        </tr>
      </table>
</div>  
  <div class="col-md-12">  
     <div class="container-table">
       <table border="1" style="border-collapse: collapse;" width="500" class="form-bottom-table" id="table" align="center">
          <tr>
            <td>No</td>
            <td>NIS</td>
            <td>Nama</td>
            <td>Kelas</td>
          </tr>  
          <?php
            $j=$_GET['j'];
            if ($j=='all') {
              $query="SELECT tb_detail_permohonan.nis, nama_siswa, kelas FROM tb_detail_monitoring JOIN tb_permohonan ON tb_detail_monitoring.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis WHERE tb_siswa.kode_jurusan='ap' AND tb_detail_permohonan.nis NOT IN (SELECT nis FROM tb_detail_bimbingan)";
            }else{
              $query="SELECT tb_detail_permohonan.nis, nama_siswa, kelas FROM tb_detail_monitoring JOIN tb_permohonan ON tb_detail_monitoring.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis WHERE tb_siswa.kode_jurusan='$j' AND tb_detail_permohonan.nis NOT IN (SELECT nis FROM tb_detail_bimbingan) AND status_permohonan='1'";
            }
            $res=mysql_query($query) or die(mysql_error());
            $no=1;
            while ($h=mysql_fetch_array($res)) { ?>
          <tr>
            <td><?=$no++;?></td>
            <td><input type="text" name="nis[]" value="<?=$h['nis'];?>" class="form-control" ></td>
            <td><input type="text" name="nama[]" value="<?=$h['nama_siswa'];?>" class="form-control" ></td>
            <td><input type="text" name="kelas[]" value="<?=$h['kelas'];?>" class="form-control"></td>
            <!--<td><input type="text" name="kper[]" value="<?=$h['kode_perusahaan'];?>" class="form-control"></td>-->
          </tr>
          <?php
          }
          ?>
      </table>
     </div>
</div>
<center><input type="submit" name="simpan" id="simpan" value="Simpan" class="btn btn-success"></center>
</form>
</div><p>
<?php
  if (isset($_POST['simpan'])) {
    $jmlSiswa=$_POST['jmlSiswa'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $kode_jurusan=$_POST['kode_jurusan'];
    $kode_guru=$_POST['namaGuru'];
    $noSuratBimbingan=$_POST['noSuratBimbingan'];
    $tgl_bimbingan=$_POST['tgl_bimbingan'];
    $ins="INSERT INTO tb_bimbingan (`no_surat_bimbingan`, `tgl_bimbingan`, `kode_guru`) VALUES ('$noSuratBimbingan', '$tgl_bimbingan', '$kode_guru')";
    $resIns=mysql_query($ins) or die(mysql_error());
    
    $username=$kode_guru;
    $insert="UPDATE tb_user SET `aktif`='1' WHERE `username`='$username'";
    $eks=mysql_query($insert) or die(mysql_error());
       
    for ($i=0; $i<$jmlSiswa ; $i++) { 
      $ins1="INSERT INTO `tb_detail_bimbingan` (`no_surat_bimbingan`, `nis`, `status_ketuntasan`) VALUES ('$noSuratBimbingan','$nis[$i]','0');";
      $resIns1=mysql_query($ins1) or die(mysql_error());
    }
    if ($resIns&&$resIns1) { ?>
    <script type="text/javascript">
      alertify.confirm('Data Monitoring Berhasil Disimpan', 'Cetak Surat Tugas', function(){ window.open("assets/proses_surat_membimbing.php?n=<?=$noSuratBimbingan;?>&g=<?=$kode_guru;?>", "MsgWindow", "width=1250,height=650") }
                , function(){window.location.assign('tugas_bimbingan.php')});
      </script>
    <?php
    }
  }
?>
<script type="text/javascript"> 
function tTable(jur){
  window.location.assign('tugas_bimbingan-tambah.php?j='+jur);
}
</script>
<?php
if (isset($_POST['simpan'])) {
  
}
?>
</body>
</html>