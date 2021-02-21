<?php include '../includes/koneksi.php';?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.container-fluid{		
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
  <title>Data Pembimbing Laporan PRAKERIN</title>
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
	<h5 align="center" id="judul">Data Pembimbing Laporan PRAKERIN</h5><hr>
  	<div class="row">
    	<div class="col-sm-9 col-md-6">    		
    		<button class="btn btn-outline-info btn-sm" id="btn-aksi" onclick="window.location.assign('tugas_bimbingan-tambah.php?j=all');">Tambah Data Bimbingan</button>
  		</div>
    	</div>	
    	<div class="col-sm-9 col-md-12 scroll">
    	<div class="form-table">
    	<table border="1" align="center" id="table" class="table table-striped table-bordered">
        	<thead>
           		<tr align="center">                
					<th width="280">No Surat Bimbingan</th>					
					<th>Nama Guru Pembimbing</th>
					<th>Jabatan Guru Pembimbing</th>
					<th>Tanggal Pelaksanaan</th>
					<th width="110">Aksi</th>
				</tr>
        	</thead>
        	<tbody>
        		<?php
        			$query="SELECT tb_bimbingan.no_surat_bimbingan, tb_bimbingan.kode_guru, nama_guru, jabatan, tgl_bimbingan FROM tb_bimbingan JOIN tb_guru ON tb_bimbingan.kode_guru=tb_guru.kode_guru ORDER BY no_surat_bimbingan DESC";
        			$result=mysql_query($query) or die(mysql_error());
        			while ($hasil=mysql_fetch_array($result)) { 
        				$cetak="window.open('assets/proses_surat_membimbing.php?n=".$hasil['no_surat_bimbingan']."&g=".$hasil['kode_guru']."','MsgWindow','width=1250,height=650');";
        				?>
        				<tr align="center">
							<td><?php echo $hasil['no_surat_bimbingan'];?></td>
							<td><?php echo $hasil['nama_guru'];?></td>
							<td><?php echo $hasil['jabatan'];?></td>
							<td><?php echo date("d-m-Y", strtotime($hasil['tgl_bimbingan']));?></td>
							<td align='center'>
							   </button>
                			   <button name="cetak" class="btn btn-primary" id="btn-aksi" onclick="<?=$cetak;?>"><span class="fa fa-print"></span></button>
							   <button name="detail" class="btn btn-danger" id="btn-aksi" onclick="window.location.assign('tugas_bimbingan-detail.php?n=<?php echo $hasil['no_surat_bimbingan']; ?>')"><span class="fa fa-expand" title="Detail"></span></button>
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
