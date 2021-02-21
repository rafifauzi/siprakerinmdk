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
			padding-bottom: 20px;
		}
		#btn-aksi{
			font-size: 14px;
			padding: 5px 10px 5px 10px;
		}
		#textarea{
			width: 650px;
			resize: none;
		}
		.scroll{
			overflow-x: scroll;
		}
		@media screen and (max-width: 600px) {
      		.container-fluid{
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
  <title>Data Penguji PRAKERIN</title>
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../assets/css/default.min.css" type='text/css'  />
  <script src="../assets/js/alertify.min.js"></script>
  <script src="../assets/js/jquery-1.12.4.js"></script>
  <script src="../assets/js/popper.min.js"></script>
</head>
<body>
<?php 
include '../includes/header-menu-admin.php';
include '../includes/koneksi.php';
?>
<div class="container-fluid">
	<h5 align="center">Data Sidang Laporan PRAKERIN</h5>
  	<div class="row" >
      <div class="col-sm-9 col-md-6">
        <button class="btn btn-outline-info btn-sm" id="btn-aksi" onclick="window.location.assign('tugas_penguji-tambah.php?j=all');">Tambah Data Penguji</button>
          <p>
      </div>
    	<div class="col-sm-9 col-md-12" style=" height: 420px; overflow-y: scroll;">
    	<div class="form-table">    	
    	<table class="table table-striped table-bordered" style="width:100%">
          <tr align="center">                
            <th width="280">No Surat Pengujian</th>         
            <th>Nama Guru Penguji</th>
            <th>Tanggal Pengujian</th>
            <th width="110">Aksi</th>
          </tr>     
        <?php 
        $q="SELECT no_surat_sidang, nama_guru, tgl_sidang, tb_sidang.kode_guru FROM `tb_sidang` JOIN tb_guru ON tb_sidang.kode_guru=tb_guru.kode_guru";
        $r=mysql_query($q) or die(mysql_error());
        while ($h=mysql_fetch_array($r)) { 
          $cetak="window.open('assets/proses_surat_menguji.php?n=".$h['no_surat_sidang']."&g=".$h['kode_guru']."','MsgWindow','width=1250,height=650');";
          ?>
          <tr align="center">
            <td><?=$h['no_surat_sidang']?></td>
            <td><?=$h['nama_guru']?></td>
            <td><?=$h['tgl_sidang']?></td>
            <td align='center'>
                <button name="cetak" class="btn btn-primary" id="btn-aksi" onclick="<?=$cetak;?>"><span class="fa fa-print"></span></button>
                <button name="detail" class="btn btn-danger" id="btn-aksi" onclick="window.location.assign('tugas_penguji-detail.php?n=<?=$h['no_surat_sidang']?>')"><span class="fa fa-expand"></span></button>
          </tr>
        <?php
        }
        ?>   
    </table>
		</div>
		</div>
	</div>
</div><p>
<script type="text/javascript"> 
function off(){
      alertify.alert("Fitur Belum Aktif").setHeader('Perhatian').set({closable:false,transition:'zoom'}); 
}
  </script>
</body>
</html>
