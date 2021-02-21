<?php include '../includes/koneksi.php';?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.container-fluid{
			margin-top: 30px;	
			font-size: 14px;
		}
		.container-fluid h5{
			padding-top: 20px;
		}
		input[type=number]::-webkit-outer-spin-button,
		input[type=number]::-webkit-inner-spin-button {
    		-webkit-appearance: none;
   			margin: 0;
		}
		input[type=number] {
    		-moz-appearance:textfield;
		}
		select{
			-webkit-appearance: none; -moz-appearance:textfield;
		}
		.btn-group{
			align-items: center;
		}
		.btn-sm{
			margin-top: 5px;
		}
		#btn-aksi{
			font-size: 14px;
			padding: 5px 10px 5px 10px;
		}
		.form-table{
			margin-top: 10px;
			margin-bottom: 10px;
		}
		#table{
			width: 1250px;
		}
		.scroll{
			overflow-x: scroll;
		}
		@media screen and (max-width: 600px) {
      		.container-fluid{
       			 margin-top:20px;
        		font-size: 12px;
      		}
      		#judul{
      			font-size: 14px;
      		}
     		.form-top-table-td{
        		width: 100px;
      		}
      		.form-table{
       		 	margin-top: 10px;
        		font-size: 12px;
      		}
			#btn-aksi{
				font-size: 10px;
			}
      		#table{
				width: 900px;
			}
      		#button,.dropdown-item{
			font-size: 12px;
			}
    	}
	</style>
  <title>Data Monitoring PRAKERIN</title>
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
<?php include '../includes/header-menu-admin.php';?>
<div class="container-fluid">
	<h5 align="center" id="judul">Data Monitoring PRAKERIN</h5>
  	<div class="row">
    	<div class="col-sm-9 col-md-6">    		
    		<button class="btn btn-outline-info btn-sm" id="btn-aksi" onclick="window.location.assign('tugas_monitoring-tambah.php');">Tambah Data Monitoring</button>
  		</div>
    	</div>	
    	<div class="col-sm-9 col-md-12 scroll">
    	<div class="form-table">
    	<table border="1" align="center" id="table" class="table table-striped table-bordered">
        	<thead>
           		<tr align="center">                
					<th width="280">No Surat Monitoring</th>				
					<th>Nama Perusahaan</th>
					<th>Alamat Perusahaan</th>
					<th>Tanggal Pelaksanaan</th>
					<th>Status</th>
					<th width="110">Aksi</th>
				</tr>
        	</thead>
        	<tbody>
        		<?php
        			$query="SELECT tb_monitoring.no_surat_monitoring, tb_permohonan.kode_perusahaan, tb_monitoring.kode_guru, nama_guru, tb_permohonan.no_surat_permohonan, tb_perusahaan.kode_perusahaan, nama_perusahaan, alamat_perusahaan, tgl_monitoring, status_monitoring FROM tb_monitoring JOIN tb_detail_monitoring ON tb_monitoring.no_surat_monitoring=tb_detail_monitoring.no_surat_monitoring JOIN tb_guru ON tb_monitoring.kode_guru=tb_guru.kode_guru JOIN tb_permohonan ON tb_detail_monitoring.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan";
        			$result=mysql_query($query) or die(mysql_error());
        			$rowspan=mysql_num_rows($result);
        			while ($hasil=mysql_fetch_array($result)) { 
        				if ($hasil['status_monitoring']=='0') {
        					$status='Belum Terlaksana';
        				}else{
        					$status='Terlaksana';
        				}
        				$cetak="window.open('assets/proses_surat_monitoring.php?n=".$hasil['no_surat_monitoring']."&g=".$hasil['kode_guru']."','MsgWindow','width=1250,height=650');";
        				?>
        				<tr align="center">
							<td><?php echo $hasil['no_surat_monitoring'];?></td>
							<td><?php echo $hasil['nama_perusahaan'];?></td>
							<td><?php echo $hasil['alamat_perusahaan'];?></td>						
							<td><?php echo $hasil['tgl_monitoring'];?></td>
							<td><?php echo $status;?></td>
							<td align='center'>
								<button name="cetak" class="btn btn-primary" id="btn-aksi" onclick="<?=$cetak;?>"><span class="fa fa-print"></span></button>
								<button name="detail" class="btn btn-danger" id="btn-aksi" onclick="window.location.assign('tugas_monitoring-detail.php?n=<?php echo $hasil['no_surat_monitoring'];?>&p=<?php echo $hasil['no_surat_permohonan'];?>');"><span class="fa fa-expand" title="Detail"></span></button>
    						</td>
						</tr>
        		<?php
        			}
        		?>
				
			</tbody>
		</table>
		</div>
		</div>
	</div>

</div>
</body>
</html>
