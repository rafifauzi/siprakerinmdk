<?php 
session_start();
include '../../includes/koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.container{
			margin-top: 30px;	
			box-shadow: 1px 1px 10px 1px #888888;	
			font-size: 14px;
		}
		.container h5{
			padding-top: 20px;
			padding-bottom: 20px;
		}
		#btn-aksi{
			font-size: 14px;
			padding: 5px 10px 5px 10px;
		}
		.form-table{
			margin-top: 10px;
			margin-bottom: 10px;
		}
		#textarea{
			width: 650px;
			resize: none;
		}
		.scroll{
			overflow-x: scroll;
		}
		@media screen and (max-width: 600px) {
      		.container{
       			 margin-top:20px;
        		font-size: 12px;
      		}
      		.display-picture{
				width: 120px;
				height: 180px;
			}
     		.form-top-table-td{
        		width: 100px;
      		}
      		.form-table{
       		 	margin-top: 10px;
        		font-size: 12px;
      		}
			#btn-aksi{
				font-size: 13px;
				padding: 5px 10px 5px 10px;
			}
      		#button,.dropdown-item{
			font-size: 12px;
			color: #000;
			}
    	}
	</style>
  <title>Buku Jurnal</title>
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
</head>
<body>
<?php 
include '../../includes/header-menu.php';


$nis=$_SESSION['nis'];
$q1="SELECT nomor_jurnal FROM tb_siswa WHERE nis='$nis'";
$r1=mysql_query($q1) or die(mysql_error());
$h1=mysql_fetch_array($r1);
?>
<div class="container">
	<h5 align="center">Buku Jurnal Online</h5>
  	<div class="row">
  		<div class="col-sm-9 col-md-6">
  			<table width="600">
  				<tr>
  					<td width="100">No Buku Jurnal</td>
  					<td width="260"><input type="text" class="form-control" style="pointer-events: none;" value="<?php echo $h1['nomor_jurnal'];?>"</td>
  					<td style="padding-left: 10px;"><button class="btn btn-outline-primary" onclick="window.location.assign('page-jurnal_tambah.php')">Tambah Kegiatan</button></td>
  				</tr>
  			</table>     	
      	</div>	
    	<div class="col-sm-9 col-md-12 scroll" >
      <div class="form-table">      
      <table border="1" align="center" class="table table-striped table-bordered" >
        <thead>
            <tr align="center">                
          <th width="50">Tanggal</th>
          <th width="280">Uraian Kegiatan</th>
          <th width="150">Jenis Kegiatan</th>
        </tr>
          </thead>
          <tbody>
          <?php
              $query="SELECT tanggal_kegiatan, uraian_tugas, jenis_kegiatan FROM tb_siswa JOIN tb_detail_jurnal ON tb_siswa.nomor_jurnal=tb_detail_jurnal.nomor_jurnal WHERE nis='$nis'";
				$result=mysql_query($query) or die(mysql_error());
              while ($hasil=mysql_fetch_array($result)) { 
              switch ($hasil['jenis_kegiatan']) {
                case '1':$s='Membantu';break;
                case '2':$s='Mengamati';break;
                case '3':$s='Mengerjakan Sendiri';break;
                case '4':$s='Mengerjakan Kelompok';break;
              }
          ?>
          <tr align="center" height="40">
            <td><?php echo $hasil['tanggal_kegiatan']; ?></td>
            <td><?php echo $hasil['uraian_tugas']; ?></td>
            <td><?php echo $s; ?></td>
          </tr>
          <?php
            }
          ?>
        </tbody></table>
		</div>
		</div></p>
		</div>
		</div>
	</div>
</div>
<?php
if (isset($_POST['simpan'])) {
	$tgl=$_POST['tgl'];
	$noJurnal=$_POST['$noJurnal'];
	$tugas=$_POST['tugas'];
	$jenis_kegiatan=$_POST['jenis_kegiatan'];
	$q="INSERT INTO tb_detail_jurnal(`nomor_jurnal`,`tanggal_kegiatan`,`uraian_tugas`,`jenis_kegiatan`) VALUES ('$noJurnal','$tgl','$tugas','$jenis_kegiatan')";
	$r=mysql_query($q) or die(mysql_error());
	if ($r) { ?>
	<script type="text/javascript">
  		alertify.alert("Kegiatan Telah Disimpan", function(){window.location.assign('page-profil.php')}).setHeader('Perhatian').set({closable:false,transition:'zoom'});
	</script>
	<?php
	}

}
?>
</body>
</html>
