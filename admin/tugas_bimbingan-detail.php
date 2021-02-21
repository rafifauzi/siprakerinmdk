<?php 
session_start();
include '../includes/koneksi.php';

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
        width: 80%;
    }
    .form-top-table-td{
      width: 25%;
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
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />  
  <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../assets/css/default.min.css" type='text/css'  />
  <link href="../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="../assets/js/jquery-1.12.4.js"></script>
  <script src="../assets/js/jquery-ui.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/alertify.min.js"></script>
  <script>
    $(document).on('keyup keypress', 'form input[type="text"]', function(e) {
    if(e.which == 13) { e.preventDefault(); return false;  }  });
  </script>
</head>
<body>
<?php 
include '../includes/header-menu-admin.php';
$noSurat=$_GET['n'];
$query="SELECT tb_bimbingan.no_surat_bimbingan, nama_guru, jabatan FROM tb_bimbingan JOIN tb_guru ON tb_bimbingan.kode_guru=tb_guru.kode_guru WHERE tb_bimbingan.no_surat_bimbingan='$noSurat'";
$result=mysql_query($query) or die(mysql_error());
$hasil=mysql_fetch_array($result);
?>
<div class="container">
  <form method="POST" name="pemohonan">
    <div class="col-md-12"> 
      <table align="center" class="form-top-table">
        <tr>
          <td class="form-top-table-td">
            <label>Nomor Surat</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat" value="<?=$noSurat;?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nama Guru Pembimbing</label>
          </td>
          <td><input class="form-control" type="text" name="namaGuru" value="<?=$hasil['nama_guru'];?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Jabatan Guru Pembimbing</label>
          </td>
          <td><input class="form-control" type="text" name="jabatan" value="<?=$hasil['jabatan'];?>"></td>
        </tr>
      </table>
</div><br>
<center><span>Siswa Yang Dibimbing</span></center>
  <div class="col-md-12 scroll">      
     <table align="center" class="form-bottom-table" id="table">     
      <tr align="center">
        <td style="width: 10px;">No</td>
        <td>NIS</td>
        <td>Nama Lengkap</td>
        <td>Kelas</td>        
        <td>Status Ketuntasan</td>
      </tr>
      <tr>
        <?php
          $query="SELECT tb_detail_bimbingan.nis, nama_siswa, kelas, status_ketuntasan FROM tb_bimbingan JOIN tb_detail_bimbingan ON tb_bimbingan.no_surat_bimbingan=tb_detail_bimbingan.no_surat_bimbingan JOIN tb_siswa ON tb_detail_bimbingan.nis=tb_siswa.nis WHERE tb_bimbingan.no_surat_bimbingan='$noSurat'";
          $result=mysql_query($query) or die(mysql_error());
          $no=1;
          while ($h=mysql_fetch_array($result)) { 
            if ($h['status_ketuntasan']=='0') {
              $status_ketuntasan='Belum Tuntas';
            }else{
              $status_ketuntasan='Tuntas';
            }
            ?>
            <tr>
              <td style="width: 10px;"><?=$no++;?></td>
              <td><?=$h['nis'];?></td>
              <td><?=$h['nama_siswa'];?></td>
              <td><?=$h['kelas'];?></td>
              <td><?=$status_ketuntasan;?></td>
            </tr>  
          <?php
          }
        ?>
      </tr>
    </table>
</div><br>
<center><button type="reset"  name="batal" class="btn btn-danger" id="btn" onclick="window.location.assign('tugas_bimbingan.php');">Kembali &nbsp;<span class="fa fa-compress"></span></button></center>
</form>

</div><p>
</body>
</html>