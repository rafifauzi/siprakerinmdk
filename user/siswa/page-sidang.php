<?php 
session_start();
include '../../includes/koneksi.php';
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
    input[type="submit"]{
      margin-top: 20px;
    }
    input[type="text"]{
      pointer-events: none;
      color: #000;
    }
    .container label{
      margin-top: 10px;
    }  
    .form-top-table{
        width: 80%;
    }
    .form-top-table-td{
      width: 25%;
      text-align: right;
      padding-right: 10px;
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
<?php 
include '../../includes/header-menu.php';
$nis=$_SESSION['nis'];;
$query="SELECT tb_nilai.nis, nama_siswa, kelas, nama_jurusan, nama_guru, jabatan FROM tb_sidang JOIN tb_nilai ON tb_sidang.no_surat_sidang=tb_nilai.no_surat_sidang JOIN tb_guru ON tb_sidang.kode_guru=tb_guru.kode_guru JOIN tb_siswa ON tb_nilai.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE tb_nilai.nis='$nis'";
$result=mysql_query($query) or die(mysql_error());
$hasil=mysql_fetch_array($result);
?>
<div class="container">
  <form method="POST" name="pemohonan">
    <div class="col-md-12"> 
      <table align="center" class="form-top-table">
        <tr>
          <td class="form-top-table-td">
            <label>NIS</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat" value="<?=$nis;?>"></td>
        </tr>
        <tr>
          <tr>
          <td class="form-top-table-td">
            <label>Nama Siswa</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat" value="<?=$hasil['nama_siswa'];?>"></td>
        </tr>
        <tr>
        <tr>
          <td class="form-top-table-td">
            <label>Kelas</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat" value="<?=$hasil['kelas'];?>"></td>
        </tr>
        <tr>
        <tr>
          <td class="form-top-table-td">
            <label>Jurusan</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat" value="<?=$hasil['nama_jurusan'];?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nama Guru Penguji</label>
          </td>
          <td><input class="form-control" type="text" name="namaGuru" value="<?=$hasil['nama_guru'];?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Jabatan Guru Penguji</label>
          </td>
          <td><input class="form-control" type="text" name="jabatan" value="<?=$hasil['jabatan'];?>"></td>
        </tr>
      </table>
</div><br>

</form>
</div><p>
</body>
</html>