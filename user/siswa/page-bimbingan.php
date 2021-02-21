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
    
    input[type="text"]{
      pointer-events: none;
      color: #000;
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
<?php 
include '../../includes/header-menu.php';
$nis=$_SESSION['nis'];;
$query="SELECT tb_detail_bimbingan.nis, nama_siswa, kelas, nama_jurusan, nama_guru, jabatan FROM tb_bimbingan JOIN tb_detail_bimbingan ON tb_bimbingan.no_surat_bimbingan=tb_detail_bimbingan.no_surat_bimbingan JOIN tb_siswa ON tb_detail_bimbingan.nis=tb_siswa.nis JOIN tb_guru ON tb_bimbingan.kode_guru=tb_guru.kode_guru JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE tb_detail_bimbingan.nis='$nis'";
$result=mysql_query($query) or die(mysql_error());
$hasil=mysql_fetch_array($result);
if ($hasil['nis']=="") {
  $button="disabled";
}else{
  $button="disabl";
}
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

</form>
<center>
  Download Kartu Bimbingan<br>
  <a href="#" onclick="cetak()"><button type="reset"  name="batal" class="btn btn-outline-primary" id="btn" <?php echo  $button;?>>Download &nbsp;<span class="fa fa-download"></span></button>
</center>
</div><p>
<script type="text/javascript">
function cetak(){
        alertify.alert('Perhatian', 'Ubah posisi menjadi portrait <br> Klik change lalu pilih save as pdf untuk menyimpan file', function(){ window.open("../../assets/berkas/kartu_bimbingan.php?n=<?php echo $hasil['nis'];?>", "MsgWindow", "width=1250,height=650") });
}
</script>
</body>
</html>