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
	<h5 align="center">List Perusahaan</h5>
  	<div class="row" >
    	<div class="col-sm-9 col-md-12" style=" height: 480px; overflow-y: scroll;">
    	<div class="form-table">    	
    	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr valign="center">
            	  <th valign="center" width="120">No Urut</th>
                <th>Nama Perusahaan</th>
                <th>Alamat</th>
                <th>p1</th>
                <th>p2</th>
                <th>p3</th>
                <th>p4</th>
                <th>p5</th>
                <th>p6</th>
                <th>Hasil Angket</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        	<?php
            $query="SELECT * from `tb_perusahaan`";
            $result=mysql_query($query)or die(mysql_error());
            $no=1;
            while ($r=mysql_fetch_array($result)) {?>
            	<tr>
                <td align="center" style="width: 88px;"><?php echo $no;?></td>
            		<td><?php echo $r['nama_perusahaan'];?></td>
            		<td><?php echo $r['alamat_perusahaan'];?></td>
                <td><?php echo $r['p1'];?></td>
                <td><?php echo $r['p2'];?></td>
                <td><?php echo $r['p3'];?></td>
                <td><?php echo $r['p4'];?></td>
                <td><?php echo $r['p5'];?></td>
                <td><?php echo $r['p6'];?></td>
                <td><?php echo $r['hasil_angket'];?></td>
                <td class="action">                       
                  <a href="assets/proses_surat_permohonan.php?n=<?php echo $hasil['no_surat_permohonan'];?>" target="_blank"></a>
                    <button name="cetak" class="btn btn-primary" id="btn-aksi" onclick="off();"><span class="fa fa-expand"></span></button>                  
                  <a href="data_pemohon-edit.php?n=<?php echo $hasil['nis'];?>&s=<?php echo $hasil['no_surat_permohonan'];?>"></a>
                    <button name="edit" class="btn btn-warning" id="btn-aksi" onclick="off();"><span class="fa fa-edit"></span></button>
                  
                </td>
            	</tr>
            <?php
            $no++;
            }
            ?>
        </tbody></table>
		</div>
		</div>
	</div>
</div>
<script type="text/javascript"> 
function off(){
      alertify.alert("Fitur Belum Aktif").setHeader('Perhatian').set({'closable':false,}); 
}
  </script>
</body>
</html>
