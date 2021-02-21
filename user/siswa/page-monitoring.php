<?php 
session_start();
include '../../includes/koneksi.php';
if (!isset($_SESSION['nis'])) {
    echo "<script>window.location='../../includes/error.php';</script>";
}else{ 
  $nis=$_SESSION['nis'];
  $query="SELECT tb_detail_permohonan.nis, tb_siswa.nama_siswa, tb_siswa.kelas, tb_jurusan.nama_jurusan, tb_siswa.foto, tb_perusahaan.nama_perusahaan, tb_perusahaan.alamat_perusahaan, tb_detail_permohonan.status_permohonan FROM tb_detail_permohonan JOIN `tb_siswa` ON tb_detail_permohonan.nis=tb_siswa.nis JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan JOIN `tb_permohonan` ON tb_detail_permohonan.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN `tb_perusahaan` ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan WHERE tb_detail_permohonan.nis='$nis'  ORDER BY status_permohonan ASC LIMIT 1;";
  $result=mysql_query($query) or die(mysql_error());
  $r=mysql_fetch_array($result);
  
  switch ($r['status_permohonan']) {
    case '0':
      $s='Diproses';
      $color='#EEFF41';
      $p="Sedang Diproses Oleh HUBIN";
      break;
    case '1':
      $s='Diterima';
      $color='#B2FF59';
      $p="Persiapkan Diri Untuk PRAKERIN";
      break;
    case '2':
      $s='Ditolak';
      $color='#FF4081';
      $p="Silahkan Buat Permohonan Kembali <a href='page-permohonan.php?n='>Disini</a>";
      break;
  }
}
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
		.display-picture{
			width: 160px;
			height: 240px;
			padding-right: 5px;
      margin-top: 10px;
		}
		.container label{
			margin-top: 10px;
		}
    .form-table{
      width: 90%;
    }
    .form-top-table-td{
      width: 170px;
    }
		#textarea,input[type=text]{
			color: #000;
      resize: none;
      pointer-events: none
		}
		@media screen and (max-width: 600px) {
      .container{
        margin-top:20px;
      }
      .display-picture{
				width: 120px;
				height: 180px;
			}
      .form-top-table-td{
        width: 100px;
      }
      .form-table{
        width: 100%;
        margin-top: 10px;
        font-size: 12px;
      }
      #textarea,input[type=text]{
        font-size: 12px;
      }
      input[type=text]{
        height: 25px;
      }
    	}
	</style>
  <title>Status Permohonan</title>
  <link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />  
  <link rel="stylesheet" href="../../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../../assets/css/default.min.css" type='text/css'  />
  <link href="../../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="../../assets/js/jquery-1.12.4.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/alertify.min.js"></script>
</head>
<body>
<?php include '../../includes/header-menu.php';?>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
    				<img src="../../assets/img/fp/<?php echo $r['foto'];?>" class="display-picture">				
    </div>
    <div class="col-sm-3 col-md-8">
      <div class="form-group">
        <table class="form-table">
          <tr>
            <td>
              <label>NIP / NUPTK</label>
            </td>
            <td>
              <input type="text" class="form-control" autocomplete="off" required value="<?php echo $nis;?>">
            </td>
          </tr>
          <tr>
          <td class="form-top-table-td">
            <label>Nama Lengkap</label>
          </td>
          <td><input type="text" class="form-control" autocomplete="off" value="<?php echo $r['nama_siswa'];?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Jabatan</label>
          </td>
          <td><input type="text" class="form-control" autocomplete="off" value="<?php echo $r['kelas'];?>"></td>
        </tr>
          <tr>
          <td class="form-top-table-td">
            <label>Nama Perusahaan</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat"  value="<?php echo $r['nama_perusahaan'];?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Alamat Perusahaan</label>
          </td>
          <td><textarea class="form-control" id="textarea" name="alamatPerusahaan" required><?php echo $r['alamat_perusahaan'];?></textarea></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Keterangan</label>
          </td>
          <td><input type="text" class="form-control" autocomplete="off" required value="<?php echo $s;?>" style="pointer-events: none; background-color:<?php echo $color;?>;"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><?php echo $p;?></td>
        </tr>
        </table>
      </div>	   
      <p>
    </div>    
  </div>
</div><p>
</body>
</html>