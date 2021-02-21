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
  <title>List Perusahaan</title>
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
<div class="container">
	<h5 align="center">List Data Nilai Siswa</h5>
  	<div class="row" >
      <div class="col-sm-9 col-md-6">       
        <button class="btn btn-outline-info btn-sm" id="btn-aksi" onclick="window.location.assign('data_nilai-tambah.php');">Tambah Data Nilai Siswa</button><p>
      </div>
    	<div class="col-sm-9 col-md-12" style=" height: 480px; overflow-y: scroll;">
    	<div class="form-table">    	
    	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr align="center">                
            <th width="280">NIS</th>          
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Jumlah Prakerin</th>
            <th>Nilai Sekolah</th>
            <th>Nilai Perusahaan</th>
            <th>Nilai Akhir</th>
            <th width="110">Aksi</th>
          </tr>
        </thead>
        <tbody>           
              <?php 
                $q="SELECT tb_nilai.nis, nama_siswa, kelas, nama_jurusan, jml_prakerin, jumlah_ns, nilai_perusahaan, nilai_komulatif FROM tb_nilai JOIN tb_siswa ON tb_nilai.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan";
                $r=mysql_query($q) or die(mysql_error());
                while ($h=mysql_fetch_array($r)) { ?>               
                <tr align="center">
                  <td><?=$h['nis'];?></td>
                  <td><?=$h['nama_siswa'];?></td>
                  <td><?=$h['kelas'];?></td>
                  <td><?=$h['nama_jurusan'];?></td>
                  <td><?=$h['jml_prakerin'];?></td>
                  <td><?=$h['jumlah_ns'];?></td>
                  <td><?=$h['nilai_perusahaan'];?></td>
                  <td><?=$h['nilai_komulatif'];?></td>              
                  <td align='center'>
                    <button name="edit" class="btn btn-primary" id="btn-aksi" onclick="off()"><span class="fa fa-edit" style="color: #fff;"></span></button>
                    <button name="expad" class="btn btn-warning" id="btn-aksi" onclick="window.location.assign('data_nilai-detail.php?n=<?=$h['nis'];?>')"><span class="fa fa-expand" title="Detail" style="color: #fff;"></span></button>
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
<script type="text/javascript"> 
function off(){
      alertify.alert("Fitur Belum Aktif").setHeader('Perhatian').set({closable:false,transition:'zoom'}); 
}
  </script>
</body>
</html>
