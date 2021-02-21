 <?php 
include '../includes/koneksi.php';
  $query="SELECT * FROM tb_settings";
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
      padding-top: 10px;
      border-radius: 3px;
      color: #000;
    }
    .container h3{
      text-align:center;
      padding:20px 0px 2px 0px;
    }
    .container label{
      margin-top: 10px;
    }
    .form-table{
        width: 92%;
    }
    .form-top-table-td{
        width: 210px;
    }
    @media screen and (max-width: 600px) {
          .container{
            margin-top:20px;
          }
          .form-top-table-td{
            width: 100px;
          }
          .form-table{
             width: 100%;
             margin-top: 10px;
            font-size: 12px;
          }
      }
  </style>
  <title>Data Pengantaran PRAKERIN</title>
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />  
  <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../assets/css/default.min.css" type='text/css'  />
  <link href="../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="../assets/js/jquery-1.12.4.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/alertify.min.js"></script>
</head>
<body>
<?php 
include '../includes/header-menu-admin.php';
$year=date("Y");
?>
<div class="container"><h3 align="center">Pengaturan Web</h3> <hr>
  <div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-3 col-md-8">
      <div class="form-group">
        <form method="POST" name="pengaturan">
        <table class="form-table">
          <tr>
            <td>
              <label>Nama Sekolah</label>
            </td>
            <td>
              <input type="text" class="form-control" autocomplete="off" name="nm_web" id="nm_web" value="<?php echo $hasil['nm_web'];?>" disabled>
            </td>
          </tr>
        <tr>
          <td>
            <label>Tanggal Dibuka Pendaftaran</label>
          </td>
          <td>
              <input type="date" class="form-control" autocomplete="off" name="tgl_daftar" id="tgl_daftar" value="<?php echo $hasil['tgl_daftar'];?>" disabled>
            </td>
        </tr>
        <tr>
          <td>
            <label>Tanggal Mulai PRAKERIN</label>
          </td>
          <td>
              <input type="date" class="form-control" autocomplete="off" name="tgl_mulai_kp" id="tgl_mulai_kp" value="<?php echo $hasil['tgl_mulai_kp'];?>" onchange="hitungAkhir(this.value)" disabled>
            </td>
        </tr>
        <tr>
          <td>
            <label>Tanggal Akhir PRAKERIN</label>
          </td>
          <td>
              <input type="date" class="form-control" autocomplete="off" name="tgl_akhir_kp" id="tgl_akhir_kp" value="<?php echo $hasil['tgl_akhir_kp'];?>" disabled >
            </td>
        </tr>
        <tr>
          <td>
            <label>Tanggal Pengantaran</label>
          </td>
          <td>
              <input type="date" class="form-control" autocomplete="off" name="tgl_pengantaran" id="tgl_pengantaran" value="<?php echo $hasil['tgl_pengantaran'];?>" disabled onchange="hitung(this.value)">
            </td>
        </tr>
        <tr>
          <td>
            <label>Waktu Pengantaran</label>
          </td>
          <td>
              <input type="time" class="form-control" autocomplete="off" name="waktu_pengantaran" id="waktu_pengantaran" value="<?php echo $hasil['waktu_antar'];?>" disabled >
            </td>
        </tr>        
        <tr>
          <td>
            <label>Tanggal Mulai Monitoring</label>
          </td>
          <td>
              <input type="date" class="form-control" autocomplete="off" name="tgl_monitoring" id="tgl_monitoring" value="<?php echo $hasil['tgl_monitoring'];?>" disabled >
            </td>
        </tr>
        <tr>
          <td>
            <label>Tanggal Mulai  Bimbingan</label>
          </td>
          <td>
              <input type="date" class="form-control" autocomplete="off" name="tgl_bimbingan" id="tgl_bimbingan" onchange="hitungTgl(this.value)" value="<?php echo $hasil['tgl_bimbingan'];?>" disabled >
            </td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Tanggal Mulai  Sidang</label>
          </td>
          <td>
              <input type="date" class="form-control" autocomplete="off" name="tgl_sidang" id="tgl_sidang" value="<?php echo $hasil['tgl_sidang'];?>" disabled >
            </td>
        </tr>
        </table><br>
            <center>              
              <button type="button" class="btn btn-outline-info btn-md" style="margin-bottom: 5px;" onclick="window.location.assign('data_guru-akun.php')">Buat Akun Guru</button><br>
              <div class="btn-group" style="margin-bottom: 10px;">  
              <button type="button" class="btn btn-primary btn-md" id="btn" onclick="buka()">Edit</button>       
              <input type="submit" name="simpan" class="btn btn-success btn-md" id="btn" disabled value="Simpan">
              <input type="reset" name="reset" class="btn btn-danger btn-md" id="btn" disabled value="Reset">
              </div>
            </center> 
        </form>
      </div>     
      <p>
    </div>    
  </div>
</div>
<script type="text/javascript">  
  function buka(){
      document.getElementById("nm_web").disabled = false;
      document.getElementById("tgl_daftar").disabled = false;
      document.getElementById("tgl_mulai_kp").disabled = false;
      document.getElementById("tgl_akhir_kp").disabled = false;
      document.getElementById("tgl_pengantaran").disabled = false;
      document.getElementById("waktu_pengantaran").disabled = false;
      document.getElementById("tgl_bimbingan").disabled = false;
      document.getElementById("tgl_monitoring").disabled = false;
      document.getElementById("tgl_sidang").disabled = false;      
      document.pengaturan.simpan.disabled = false;  
      document.pengaturan.reset.disabled = false; 
  }
function hitung(dtAntar){
    var date = new Date(dtAntar);
    var newDate = new Date(date);
    newDate.setDate(newDate.getDate()+30);
    MyDateString = newDate.getFullYear() + '-'
             + ('0' + (newDate.getMonth()+1)).slice(-2) + '-'
             + ('0' + newDate.getDate()).slice(-2);
    document.getElementById('tgl_monitoring').value=MyDateString;
  }
function hitungAkhir(dtAwal){
    var date = new Date(dtAwal);
    var newDate = new Date(date);
    newDate.setDate(newDate.getDate()+82);
    MyDateString = newDate.getFullYear() + '-'
             + ('0' + (newDate.getMonth()+1)).slice(-2) + '-'
             + ('0' + newDate.getDate()).slice(-2);
    document.getElementById('tgl_akhir_kp').value=MyDateString;
  }
function hitungTgl(dtbimbing){
    var date = new Date(dtbimbing);
    var newDate = new Date(date);
    newDate.setDate(newDate.getDate()+30);
    MyDateString = newDate.getFullYear() + '-'
             + ('0' + (newDate.getMonth()+1)).slice(-2) + '-'
             + ('0' + newDate.getDate()).slice(-2);
    document.getElementById('tgl_sidang').value=MyDateString;
  }
</script>
<?php
if (isset($_POST['simpan'])) {
  $nm_web=strtoupper($_POST['nm_web']);
  $tgl_daftar=$_POST['tgl_daftar'];
  $tgl_akhir_kp=$_POST['tgl_akhir_kp'];
  $tgl_mulai_kp=$_POST['tgl_mulai_kp'];
  $tgl_pengantaran=$_POST['tgl_pengantaran'];
  $waktu_pengantaran=$_POST['waktu_pengantaran'];
  $tgl_monitoring=$_POST['tgl_monitoring'];
  $tgl_bimbingan=$_POST['tgl_bimbingan'];
  $tgl_sidang=$_POST['tgl_sidang'];
  $query="UPDATE `tb_settings` SET `nm_web` = '$nm_web', `tgl_daftar` = '$tgl_daftar', `tgl_mulai_kp` = '$tgl_mulai_kp', `tgl_akhir_kp` = '$tgl_akhir_kp', `tgl_monitoring`='$tgl_monitoring', `tgl_bimbingan`='$tgl_bimbingan', `tgl_sidang`='$tgl_sidang', `tgl_pengantaran`='$tgl_pengantaran', `waktu_antar`='$waktu_pengantaran'";
  $result=mysql_query($query);
  if ($result) { ?>
    <script type="text/javascript">
      alertify.confirm('Berhasil Diedit', function(){window.location.assign('index.php')}).autoOk(3);
    </script>
  <?php
  }
}
?>

</body>
</html>