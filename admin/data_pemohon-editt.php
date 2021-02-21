<?php 
include '../includes/koneksi.php';
$nis=$_GET['n'];
$query="SELECT tb_detail_permohonan.nis, tb_detail_permohonan.no_surat_permohonan, tb_siswa.nama_siswa, tb_siswa.kelas, tb_jurusan.nama_jurusan, tb_siswa.foto, tb_perusahaan.nama_perusahaan, tb_perusahaan.alamat_perusahaan, tb_detail_permohonan.status_permohonan FROM `tb_detail_permohonan` JOIN `tb_siswa` ON tb_detail_permohonan.nis=tb_siswa.nis JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan JOIN `tb_permohonan` ON tb_detail_permohonan.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN `tb_perusahaan` ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan ORDER BY tb_permohonan.no_surat_permohonan DESC;";
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
		}
		select{
			color: #000;
		}
		.btn-md{
			border:0;
			border-radius: 3px;
			margin-top: 20px;
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
      		#textarea,input[type=text], #status, #btn-aksi{
        		font-size: 12px;
     		}
      		input[type=text]{
        		height: 25px;
      		}
    	}
	</style>
  <title><?php echo $r['nama_siswa'];?> | Edit</title>
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />
  <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../assets/css/default.min.css" type='text/css'  />
  <script src="../assets/js/alertify.min.js"></script>
</head>
<body>
<?php 
include '../includes/header-menu-admin.php';
$result=mysql_query($query) or die(mysql_error());
$r=mysql_fetch_array($result);
?>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
    				&nbsp;			
    </div>
    <div class="col-sm-3 col-md-8">
      <div class="form-group">
        <form method="POST" name="edit_permohonan">
        <table class="form-table">
          <tr>
            <td>
              <label>NIS</label>
            </td>
            <td>
              <input type="text" class="form-control" autocomplete="off" name="nis" required value="<?php echo $nis;?>" style="pointer-events: none;">
            </td>
          </tr>
          <tr>
          <td class="form-top-table-td">
            <label>Nama Lengkap</label>
          </td>
          <td><input type="text" class="form-control" autocomplete="off" value="<?php echo $r['nama_siswa'];?>" style="pointer-events: none;"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Kompetensi Keahlian</label>
          </td>
          <td><input type="text" class="form-control" autocomplete="off" required value="<?php echo $r['nama_jurusan'];?>" style="pointer-events: none;"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Kelas</label>
          </td>
          <td><input type="text" class="form-control" autocomplete="off" value="<?php echo $r['kelas'];?>" style="pointer-events: none;"></td>
        </tr>
          <tr>
          <td class="form-top-table-td">
            <label>Nama Perusahaan</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat"  value="<?php echo $r['nama_perusahaan'];?>" style="pointer-events: none;"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Alamat Perusahaan</label>
          </td>
          <td><textarea class="form-control" id="textarea" name="alamatPerusahaan" required  style="pointer-events: none;"><?php echo $r['alamat_perusahaan'];?></textarea></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Status</label>
          </td>
          <td>
          	<select  name="status" class="form-control" id="status">
                <option value="0" <?php if($r['status_permohonan']=='0') echo "selected";?>>Diproses</option>
                <option value="1" <?php if($r['status_permohonan']=='1') echo "selected";?>>Diterima</option>
                <option value="2" <?php if($r['status_permohonan']=='2') echo "selected";?>>Ditolak</option>
			      </select>
		  </td>
        </tr>
        </table>
            <center><input type="submit" name="update" class="btn btn-success btn-md" value="Simpan"></center>
        </form>
      </div>	   
      <p>
    </div>    
  </div>
</div>
<?php 
  if (isset($_POST['update'])) {
    $nis=$_POST['nis'];    
    $nos=$_GET['s'];
    $status_permohonan=$_POST['status'];
    $tgl_disetujui=date("Y-m-d");
    $query="UPDATE `tb_detail_permohonan` SET `status_permohonan`='$status_permohonan', `tgl_disetujui`='$tgl_disetujui' WHERE `no_surat_permohonan`='$nos' AND `nis`='$nis';";   
    $result=mysql_query($query) or die(mysql_error());
        if ($result) { ?>
              <script type="text/javascript">
              alertify.confirm('Update Status Berhasil', function(){window.history.go(-2)}).autoOk(3);
              </script>
          <?php
        }    
  }
?>
</body>
</html>