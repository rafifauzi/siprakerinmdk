<?php 
session_start();
include '../../includes/koneksi.php';
if (!isset($_SESSION['nis'])) {
    echo "<script>window.location='../../includes/error.php';</script>";
}else{ 
  $nis=$_SESSION['nis'];
  $query="SELECT tb_permohonan.no_surat_permohonan,tb_detail_permohonan.nis, tb_siswa.nama_siswa, tb_siswa.kelas, tb_jurusan.nama_jurusan, tb_siswa.foto, tb_perusahaan.nama_perusahaan, tb_perusahaan.alamat_perusahaan, tb_detail_permohonan.status_permohonan FROM tb_detail_permohonan JOIN `tb_siswa` ON tb_detail_permohonan.nis=tb_siswa.nis JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan JOIN `tb_permohonan` ON tb_detail_permohonan.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN `tb_perusahaan` ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan WHERE tb_detail_permohonan.nis='$nis'  ORDER BY status_permohonan ASC LIMIT 1;";
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
    .container a:hover{
      text-decoration: none;
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
    a{
      outline: none;
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
<?php 
include '../../includes/header-menu.php';
$result=mysql_query($query) or die(mysql_error());
$r=mysql_fetch_array($result);
$n=$r['no_surat_permohonan'];

$nq="SELECT berkas_absen, berkas_nilai FROM tb_siswa WHERE nis='$nis'";
$rq=mysql_query($nq) or die(mysql_error());
$hq=mysql_fetch_array($rq);
if ($hq['berkas_absen']!='') {
  $button1='disabled';
}else{
  $button1='';
}
if ($hq['berkas_nilai']!='') {
  $button='disabled';
}else{
  $button='';
}

$qq="SELECT status_ketuntasan FROM tb_bimbingan JOIN tb_detail_bimbingan ON tb_bimbingan.no_surat_bimbingan=tb_detail_bimbingan.no_surat_bimbingan WHERE tb_detail_bimbingan.nis='$nis'";
$rr=mysql_query($qq) or die(mysql_error());
$hh=mysql_fetch_array($rr);
if ($hh['status_ketuntasan']!='1') {
  echo "<script>alertify.alert('Belum Tuntas Melakukan Bimbingan', function(){window.location.assign('page-bimbingan.php')}).setHeader('Perhatian');</script>";
}
?>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
    				<img src="../../assets/img/fp/<?php echo $r['foto'];?>" class="display-picture">				
    </div>        
    <div class="col-sm-3 col-md-8">
      <form name="hasil" enctype="multipart/form-data" method="POST">
      <div class="form-group">
          <table class="form-table">
            <tr style="display: none;">
              <td>
                <label>&nbsp;</label>
              </td>
              <td colspan="2">
                <input type="text" class="form-control" name="nsp" autocomplete="off" required value="<?php echo $r['no_surat_permohonan'];?>">
              </td>
            </tr>
            <tr>
              <td>
                <label>NIS</label>
              </td>
              <td colspan="2">
                <input type="text" class="form-control" name="nis" autocomplete="off" required value="<?php echo $nis;?>">
              </td>
            </tr>
            <tr>
            <td class="form-top-table-td">
              <label>Nama Lengkap</label>
            </td>
            <td colspan="2"><input type="text" class="form-control" autocomplete="off" value="<?php echo $r['nama_siswa'];?>"></td>
          </tr>
          <tr>
            <td class="form-top-table-td">
              <label>Kompetensi Keahlian</label>
            </td>
            <td colspan="2"><input type="text" class="form-control" autocomplete="off" required value="<?php echo $r['nama_jurusan'];?>"></td>
          </tr>
          <tr>
            <td class="form-top-table-td">
              <label>Kelas</label>
            </td>
            <td colspan="2"><input type="text" class="form-control" autocomplete="off" value="<?php echo $r['kelas'];?>"></td>
          </tr>
            <tr>
            <td class="form-top-table-td">
              <label>Nama Perusahaan</label>
            </td>
            <td colspan="2"><input class="form-control" type="text" name="noSurat"  value="<?php echo $r['nama_perusahaan'];?>"></td>
          </tr>
          <tr>
            <td class="form-top-table-td">
              <label>Alamat Perusahaan</label>
            </td>
            <td colspan="2"><textarea class="form-control" id="textarea" name="alamatPerusahaan" required><?php echo $r['alamat_perusahaan'];?></textarea></td>
          </tr>
          <tr>
            <td class="form-top-table-td">
              <label>Upload Nilai <br>(pdf-max 300kb)</label>
            </td>
            <td width="430">
              <input type="file" class="form-control" name="nilai" id="file" autocomplete="off" <?=$button;?>>              
            </td>
            <td>
              <input type="submit" class="btn btn-outline-primary btn-sm" id="file-btn" name="uploadNilai" value="Upload" style="margin-left: 2px;" <?=$button;?>>
            </td>
          </tr>
          <tr>
            <td class="form-top-table-td">
              <label>Upload Absensi <br>(pdf-max 300kb)</label>
            </td>
            <td width="430">
              <input type="file" class="form-control" name="absen" id="file1" autocomplete="off" <?=$button1;?>>              
            </td>
            <td>
              <input type="submit" class="btn btn-outline-primary btn-sm" id="file-btn1" name="uploadAbsen" value="Upload" style="margin-left: 2px;" <?=$button1;?>>
            </td>
          </tr>
          </table>        
      </div>	
      </form>   
      <p>
    </div>       
  </div>
</div><p>
<?php 
  if (isset($_POST['uploadAbsen'])) {
      $nis=$_POST['nis'];
      $ekstensi_diperbolehkan = array('pdf');
      $file = $_FILES['absen']['name'];
      $x = explode('.', $file);
      $nama=strtolower(current($x));
      $ekstensi = strtolower(end($x));
      $namaBaru="ab-".$nis.".".$ekstensi;
      $ukuran = $_FILES['absen']['size'];
      $file_tmp = $_FILES['absen']['tmp_name'];
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 350000){      
          move_uploaded_file($file_tmp, '../../assets/berkas/suratAbsen/'.$namaBaru);
          $query="UPDATE tb_siswa SET berkas_absen='$namaBaru' WHERE nis='$nis'";
          $result=mysql_query($query) or die(mysql_error());
          if ($result) {
            ?>
              <script type="text/javascript">
                alertify.set('notifier','position', 'bottom-center');
                alertify.success('Surat Balasan Telah Diupload');
                document.getElementById('file1').disabled=true;
                document.getElementById('file-btn1').disabled=true;
              </script>
            <?php
          }else{
            ?>
              <script type="text/javascript">
                alertify.set('notifier','position', 'bottom-center');
                alertify.success('Surat Balasan Gagal Diupload');
              </script>
            <?php
          }          
        }else{?>
            <script type="text/javascript">
              alertify.set('notifier','position', 'bottom-center');
              alertify.error('File Terlalu Besar');
            </script>
        <?php
        }
      }else{?>
           <script type="text/javascript">
              alertify.set('notifier','position', 'bottom-center');
              alertify.error('Tipe File Tidak Didukung');
           </script>
        <?php
      }
    }


  if (isset($_POST['uploadNilai'])) {
      $nis=$_POST['nis'];
      $ekstensi_diperbolehkan = array('pdf');
      $file = $_FILES['nilai']['name'];
      $x = explode('.', $file);
      $nama=strtolower(current($x));
      $ekstensi = strtolower(end($x));
      $namaBaru="ns-".$nis.".".$ekstensi;
      $ukuran = $_FILES['nilai']['size'];
      $file_tmp = $_FILES['nilai']['tmp_name'];
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 350000){      
          move_uploaded_file($file_tmp, '../../assets/berkas/suratNilai/'.$namaBaru);
          $query="UPDATE tb_siswa SET berkas_nilai='$namaBaru' WHERE nis='$nis'";
          $result=mysql_query($query) or die(mysql_error());
          if ($result) {
            ?>
              <script type="text/javascript">
                alertify.set('notifier','position', 'bottom-center');
                alertify.success('Surat Balasan Telah Diupload');
                document.getElementById('file').disabled=true;
                document.getElementById('file-btn').disabled=true;
              </script>
            <?php
          }else{
            ?>
              <script type="text/javascript">
                alertify.set('notifier','position', 'bottom-center');
                alertify.success('Surat Balasan Gagal Diupload');
              </script>
            <?php
          }          
        }else{?>
            <script type="text/javascript">
              alertify.set('notifier','position', 'bottom-center');
              alertify.error('File Terlalu Besar');
            </script>
        <?php
        }
      }else{?>
           <script type="text/javascript">
              alertify.set('notifier','position', 'bottom-center');
              alertify.error('Tipe File Tidak Didukung');
           </script>
        <?php
      }
  }
?>

</body>
</html>