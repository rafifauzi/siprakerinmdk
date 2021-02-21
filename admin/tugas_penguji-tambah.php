<?php 
session_start();
include '../includes/koneksi.php';  
  $year=date("Y");
  $sql="SELECT no_surat_sidang FROM tb_sidang";
  $row=mysql_num_rows(mysql_query($sql))+1;
  if ($row<=9) {
    $no_urut="00".$row;
  }elseif ($row>=9&&$row<=99) {
    $no_urut="0".$row;
  }else{
    $no_urut=$row;
  }
  $jur=$_GET['j'];
   $query="SELECT DISTINCT nama_guru, tb_bimbingan.kode_guru FROM tb_bimbingan JOIN tb_detail_bimbingan ON tb_bimbingan.no_surat_bimbingan=tb_detail_bimbingan.no_surat_bimbingan JOIN tb_guru ON tb_bimbingan.kode_guru=tb_guru.kode_guru WHERE status_ketuntasan='1'";
   $query1="SELECT DISTINCT nama_guru, tb_bimbingan.kode_guru FROM tb_bimbingan JOIN tb_detail_bimbingan ON tb_bimbingan.no_surat_bimbingan=tb_detail_bimbingan.no_surat_bimbingan JOIN tb_guru ON tb_bimbingan.kode_guru=tb_guru.kode_guru WHERE tb_bimbingan.kode_guru IN (SELECT kode_guru FROM tb_bimbingan) AND tb_bimbingan.kode_guru NOT IN (SELECT kode_guru FROM tb_sidang) AND status_ketuntasan='1'";
  

$res=mysql_query($query) or die(mysql_error());
$res1=mysql_query($query1) or die(mysql_error());
$q1=mysql_query("SELECT tgl_sidang FROM tb_settings");
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
      height: 400px;
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
  <title>Permohonan Prakerin</title>
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../assets/css/default.min.css" type='text/css'  />
  <script src="../assets/js/alertify.min.js"></script>
  <script src="../assets/js/jquery-1.12.4.js"></script>
  <script src="../assets/js/jquery-ui.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script>
    $(function() {  
        $( "#namaGuru" ).autocomplete({
         source: "../includes/sourcedataguru.php",  
           minLength:1, 
           select: function( event, ui ) {
      $('#kodeGuru').val(ui.item.id);
          }
        });        
    });

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
            <label>Nomor Surat Penguji</label>
          </td>
          <td><input class="form-control" type="text" name="noSuratPenguji"  value="<?php echo $no_urut;?>/K/SMK-Mdk/E.11/<?php echo $year;?>" style="pointer-events: none;" required></td>
        </tr> 
        <tr>
          <td class="form-top-table-td">
            <label>Nama Guru Pembimbing</label>
          </td>
          <td>
            <select name="namaGuruPembimbing" class="form-control" id="namaGuru" onchange="tTable(this.value)" required>
              <option value="0">--Pilih Guru Pembimbing--</option>
            <?php            
              $kode_guru=$_GET['j'];
              while ($h=mysql_fetch_array($res)) { ?>
                <option value="<?php echo $h['kode_guru'];?>" <?php if ($h['kode_guru']==$kode_guru) echo "selected";?> ><?=$h['nama_guru'];?></option>
              <?php
              }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nama Guru Penguji</label>
          </td>
          <td>
            <select name="namaGuruPenguji" class="form-control" id="namaGuru" required>
              <option value="0">--Pilih Guru Penguji--</option>
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
          <td><input type="date" name="tglPelaksanaan" class="form-control" id="tglPelaksanaan" value="<?php echo $h1['tgl_sidang'];?>" required> </td>
        </tr>
      </table>
</div>  

  <div class="col-md-12">  
     <div class="container-table">
       <table border="1" style="border-collapse: collapse;" width="500" class="form-bottom-table" id="table" align="center">
          <tr>
            <td>NIS</td>
            <td>Nama</td>
            <td>Kelas</td>
          </tr>  
          <?php
            $kode_guru=$_GET['j'];
            $query="SELECT tb_detail_bimbingan.nis, nama_siswa, kelas, nama_guru FROM tb_bimbingan JOIN tb_detail_bimbingan ON tb_bimbingan.no_surat_bimbingan=tb_detail_bimbingan.no_surat_bimbingan JOIN tb_siswa ON tb_detail_bimbingan.nis=tb_siswa.nis JOIN tb_guru ON tb_bimbingan.kode_guru=tb_guru.kode_guru WHERE tb_bimbingan.kode_guru='$kode_guru';";
            $res=mysql_query($query) or die(mysql_error());
            while ($h=mysql_fetch_array($res)) { ?>
          <tr>
            <td><input type="text" name="nis[]" value="<?=$h['nis'];?>" class="form-control" ></td>
            <td><input type="text" name="nama[]" value="<?=$h['nama_siswa'];?>" class="form-control" ></td>
            <td><input type="text" name="kelas[]" value="<?=$h['kelas'];?>" class="form-control"></td>
            <td style="display: none;"><input type="text" name="kper[]" value="<?=$h['kode_perusahaan'];?>" class="form-control"></td>
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
    $noSuratPenguji=$_POST['noSuratPenguji'];
    $namaGuruPenguji=$_POST['namaGuruPenguji'];
    $tglPelaksanaan=$_POST['tglPelaksanaan'];
    $ins="INSERT INTO tb_sidang (`no_surat_sidang`,`kode_guru`,`tgl_sidang`) VALUES ('$noSuratPenguji','$namaGuruPenguji','$tglPelaksanaan')";
    $resIns=mysql_query($ins) or die(mysql_error());

    $username=$namaGuruPenguji;
    $insert="UPDATE tb_user SET `aktif`='1' WHERE `username`='$username'";
    $eks=mysql_query($insert) or die(mysql_error());
    
    $nis=$_POST['nis'];
    $c_nis = count($nis);
    $tNis=$c_nis;
    for ($i=0; $i<$tNis ; $i++) { 
      $ins1="UPDATE `tb_nilai` SET `no_surat_sidang`='$noSuratPenguji' WHERE nis='$nis[$i]'";
      $resIns1=mysql_query($ins1) or die(mysql_error());
    }
    if ($resIns&&$i>0) { ?>
      <script type="text/javascript">
        alertify.confirm('Data Penguji Berhasil Disimpan', 'Cetak Surat Tugas', function(){ window.open("assets/proses_surat_menguji.php?n=<?=$noSuratPenguji;?>&g=<?=$namaGuruPenguji;?>", "MsgWindow", "width=1250,height=650") }
                , function(){window.location.assign('tugas_penguji.php')});
      </script>
    <?php
    }else{ ?>
      <script type="text/javascript">
        alertify.alert('Peringatan', 'Gagal Disimpan.. Cek Kembali Data', function(){window.location.assign('tugas_penguji.php')});
      </script>
    <?php
    }
  }
?>
<script type="text/javascript"> 
function tTable(jur){
  window.location.assign('tugas_penguji-tambah.php?j='+jur);
}
</script>
</body>
</html>