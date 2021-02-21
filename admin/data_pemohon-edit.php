<?php 
session_start();
include '../includes/koneksi.php';
$noSuratPermohonan=$_GET['n'];
$query="SELECT DISTINCT tb_permohonan.no_surat_permohonan, nama_jurusan, nama_perusahaan, alamat_perusahaan, tb_detail_permohonan.status_permohonan, surat_balasan FROM `tb_detail_permohonan` JOIN `tb_siswa` ON tb_detail_permohonan.nis=tb_siswa.nis JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan JOIN `tb_permohonan` ON tb_detail_permohonan.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN `tb_perusahaan` ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan WHERE tb_permohonan.no_surat_permohonan='$noSuratPermohonan'";
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
    .form-bottom-table td,.form-bottom-table th{
      padding:5px;
    }
    #textarea,input[type=text],input[type=date], #textarea{
      color: #000;
      resize: none;
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
    .nis-kelas{
      width: 90px;
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
    .form-bottom-table td,.form-bottom-table th{
      padding:2px;
    }  
    #table{
      width: 440px;
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
</head>
<body>
<?php 
include '../includes/header-menu-admin.php';
$result=mysql_query($query) or die(mysql_error());
$rs=mysql_fetch_array($result);
if ($rs['surat_balasan']=='') {
  $suratBalasan="Siswa Belum Mengunggah Surat Balasan";
  $st='disabled';
}else{
  $suratBalasan="Siswa Sudah Mengunggah Surat Balasan";
  $st='';
}
?>
<div class="container">
    <div class="col-md-12"> 
      <table align="center" class="form-top-table">
        <tr>
          <td class="form-top-table-td">
            <label>Nomor Surat</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat"  value="<?php echo $rs['no_surat_permohonan'];?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nama Perusahaan</label>
          </td>
          <td><input type="text" name="namaPerusahaan" class="form-control" id="perusahaan" value="<?php echo $rs['nama_perusahaan'];?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Alamat Perusahaan</label>
          </td>
          <td><textarea class="form-control" name="alamatPerusahaan" id="textarea" required><?php echo $rs['alamat_perusahaan'];?></textarea></td>
        </tr>
      </table>
</div>    
<br><center><?php echo $suratBalasan;?></center>
  <div class="col-md-12 scroll">     
  <form method="POST" name="edit_permohonan"> 
     <table align="center" class="form-bottom-table" id="table">     
      <tr align="center">
        <th style="width: 2%;">No</th>
        <th style="width: 20%;">NIS</th>
        <th style="width: 40%;">Nama Lengkap</th>
        <th>Kelas</th>  
        <th>Status</th>           
      </tr>
        <?php 
          $query1="SELECT DISTINCT tb_detail_permohonan.nis, nama_siswa, kelas, status_permohonan FROM `tb_detail_permohonan` JOIN `tb_siswa` ON tb_detail_permohonan.nis=tb_siswa.nis JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan JOIN `tb_permohonan` ON tb_detail_permohonan.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN `tb_perusahaan` ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan WHERE tb_permohonan.no_surat_permohonan='$noSuratPermohonan'";
          $result1=mysql_query($query1) or die(mysql_error());
          $no=1;
          while ($rs1=mysql_fetch_array($result1)) { ?>
          <tr align="center">
            <td><?php echo $no;?></td>
            <td class="nama"><input type="text" name="nis[]" class="form-control" style="border: none; text-align: center;" value="<?php echo $rs1['nis'];?>"></td>
            <td class="nama"><?php echo $rs1['nama_siswa'];?></td>
            <td><?php echo $rs1['kelas'];?></td>
            <td>
            <select  name="status[]" class="form-control" id="status" <?php echo $st;?>>
                <option value="0" <?php if($rs1['status_permohonan']=='0') echo "selected";?>>Diproses</option>
                <option value="1" <?php if($rs1['status_permohonan']=='1') echo "selected";?>>Diterima</option>
                <option value="2" <?php if($rs1['status_permohonan']=='2') echo "selected";?>>Ditolak</option>
            </select>
          </td>
          </tr>
          <?php
          $no++;
          }
        ?>
    </table><br> 
      <center>
        <div class="btn-group">
          <button type="submit" name="simpan" class="btn btn-success btn-sm">Simpan</button>
          <button type="reset"  name="batal" class="btn btn-danger btn-sm" id="btn" onclick="window.location.assign('data_pemohon.php?j=all');">Kembali</button>
        </div>
      </center>
  </form>
  </div>
</div><p>
<?php 
  if (isset($_POST['simpan'])) {
    $nis=$_POST['nis'];
    $status=$_POST['status'];
    for ($i=0; $i < count($nis) ; $i++) { 
      $query="UPDATE tb_detail_permohonan SET status_permohonan='$status[$i]' WHERE nis='$nis[$i]'";
      $result=mysql_query($query) or die(mysql_error());
    }
    if ($result) {
      ?>
      <script type="text/javascript">
        alertify.confirm('Update Status Berhasil', function(){window.location.assign('data_pemohon.php?j=all')}).setHeader('Perhatian').autoOk(3);
      </script>
      <?php
    }else{
      ?>
      <script type="text/javascript">
        alertify.confirm('Update Status Gagal').autoOk(3);
      </script>
      <?php
    }
  }
?>
</body>
</html>