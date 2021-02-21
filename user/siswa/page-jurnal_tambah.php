<?php 
session_start();
include '../../includes/koneksi.php';
if (!isset($_SESSION['nis'])) {
    echo "<script>window.location='../../includes/error.php';</script>";
}

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
  <title>Pendaftaran</title>
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
$dateNow=date("Y-m-d");
$query="SELECT tanggal_kegiatan FROM tb_siswa JOIN tb_detail_jurnal ON tb_siswa.nomor_jurnal=tb_detail_jurnal.nomor_jurnal WHERE nis='$nis'";
$result=mysql_query($query) or die(mysql_error());
$hasil=mysql_fetch_array($result);
if ($hasil['tanggal_kegiatan']!="") { ?>
	<script type="text/javascript">
  		alertify.alert("Kegiatan Telah Diisi", function(){window.location.assign('page-jurnal.php')}).setHeader('Perhatian').set({closable:false,transition:'zoom'});
	</script>
<?php
}
$q1="SELECT nomor_jurnal FROM tb_siswa WHERE nis='$nis'";
$r1=mysql_query($q1) or die(mysql_error());
$h1=mysql_fetch_array($r1);
?>
<div class="container">
	<h5 align="center">Buku Jurnal Online</h5>
  	<div class="row">
    	<div class="col-sm-9">
    		<form name="bukuJurnal" method="POST">
    		<table width="750">
    			<tr>
    				<td width="70" align="right">Tanggal</td>
    				<td width="150"><input type="date" name="tgl" class="form-control" value="<?php echo date("Y-m-d");?>" style="pointer-events: none;"></td>
    				<td width="100" align="right">No Buku</td>
    				<td><input type="text" name="$noJurnal" class="form-control" value="<?php echo $h1['nomor_jurnal'];?>" style="pointer-events: none;"></td>
    			</tr>
    		</table><p>
    	</div>	
    	<div class="col-sm-9 col-md-12 scroll">   	
    	<table border="1" align="center">
        	<thead>
           		<tr align="center">                
					<th width="20">No</th>
					<th>Uraian Tugas</th>
					<th width="215">Keterangan</th>
				</tr>
        	</thead>
        	<tbody>
        	<tr align="center" height="40">
					<td>1</td>
					<td><textarea class="form-control" name="tugas" id="textarea" autocomplete="off" rows="2"></textarea></td>
					<td>
						<select class="form-control" name="jenis_kegiatan">
							<option value="1">Membantu</option>
							<option value="2">Mengamati</option>
							<option value="3">Mengerjakan Sendiri</option>
							<option value="4">Mengerjakan Kelompok</option>	
						</select>
					</td>
					
				</tr>		
			</tbody>
		</table><br>
		<center><input type="submit" name="simpan" class="btn btn-primary btn-sm" value="Simpan"></center><br>
		</div></p>

		</form>
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
  		alertify.alert("Kegiatan Telah Disimpan", function(){window.location.assign('page-jurnal.php')}).setHeader('Perhatian').set({closable:false,transition:'zoom'});
	</script>
	<?php
	}

}
?>
</body>
</html>
