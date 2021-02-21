<?php 
session_start();
include '../includes/koneksi.php';
$noSuratMonitoring=$_GET['n'];
$query="SELECT tb_sidang.no_surat_sidang, tgl_sidang, nama_guru, jabatan FROM tb_sidang JOIN tb_guru ON tb_sidang.kode_guru=tb_guru.kode_guru JOIN tb_nilai ON tb_sidang.no_surat_sidang=tb_nilai.no_surat_sidang WHERE tb_sidang.no_surat_sidang='$noSuratMonitoring'";
$result=mysql_query($query) or die(mysql_error());
$rs=mysql_fetch_array($result);
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
        width: 80%;
        margin-top: 15px;
    }
    .form-bottom-table table,.form-bottom-table th,.form-bottom-table td{
      border: 1px solid black;
    }
    .nis-kelas {
      width: 120px;
    }
    .ket{
      width: 150px;
    }    
    .form-bottom-table td, .form-bottom-table th{
      padding:5px;
    }
    #textarea,input[type=text],input[type=date]{
      color: #000;
      pointer-events: none;
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
    .form-bottom-table{
        width: 130%;
    }
    .form-bottom-table input[type="text"]{
      height: 25px;
    }    
    .form-bottom-table td,.form-bottom-table th{
      padding:2px;
    }
    input[type="text"]{
      font-size: 10px;
      border-radius: 2px;
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
     $(function() {  
        $( "#perusahaan" ).autocomplete({
         source: "../includes/sourcedata.php",  
           minLength:1, 
           select: function( event, ui ) {
      $('#textarea').val(ui.item.alamat_perusahaan);
      $('#kode').val(ui.item.id);
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
<?php include '../includes/header-menu-admin.php';?>
<div class="container">
    <div class="col-md-12"> 
      <table align="center" class="form-top-table">
        <tr>
          <td class="form-top-table-td">
            <label>Nomor Surat</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat"  value="<?php echo $rs['no_surat_sidang'];?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nama Guru Penguji</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat"  value="<?php echo $rs['nama_guru'];?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Jabatan Guru Penguji</label>
          </td>
          <td><input type="text" name="namaPerusahaan" class="form-control" id="perusahaan" value="<?php echo $rs['jabatan'];?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Tanggal Sidang</label>
          </td>
          <td><input type="date" name="namaPerusahaan" class="form-control" id="perusahaan" value="<?php echo $rs['tgl_sidang'];?>"></td>
        </tr>
      </table>
</div>    
<br><center>Siswa PRAKERIN</center>
  <div class="col-md-12 scroll">      
     <table align="center" class="form-bottom-table" id="table">     
      <tr align="center">
        <th style="width: 2%;">No</th>
        <th style="width: 15%;">NIS</th>
        <th style="width: 50%;">Nama Lengkap</th>
        <th>Kelas</th>          
      </tr>
        <?php 
          $query1="SELECT tb_siswa.nis, nama_siswa, kelas FROM tb_sidang JOIN tb_guru ON tb_sidang.kode_guru=tb_guru.kode_guru JOIN tb_nilai ON tb_sidang.no_surat_sidang=tb_nilai.no_surat_sidang JOIN tb_siswa ON tb_nilai.nis=tb_siswa.nis WHERE tb_sidang.no_surat_sidang='$noSuratMonitoring'";
          $result1=mysql_query($query1) or die(mysql_error());
          $no=1;
          while ($rs1=mysql_fetch_array($result1)) { ?>
          <tr align="center">
            <td><?php echo $no;?></td>
            <td><?php echo $rs1['nis'];?></td>
            <td class="nama"><?php echo $rs1['nama_siswa'];?></td>
            <td><?php echo $rs1['kelas'];?></td>
          </tr>
          <?php
          $no++;
          }
        ?>
    </table>
</div><br>
<center><button type="reset"  name="batal" class="btn btn-danger" id="btn" onclick="window.location.assign('tugas_bimbingan.php');">Kembali &nbsp;<span class="fa fa-compress"></span></button></center>

</div><p>
</body>
</html>