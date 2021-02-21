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
			font-size: 12px;
			padding: 2px 10px 2px 10px;
      margin-left: 360px;
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
      <span style="padding-left: 10px;">* SP = Sangat Puas | P = Puas | CP = Cukup Puas | TP = Tidak Puas | STP = Sangat Tidak Puas</span>
      <button class="btn btn-outline-info" id="btn-aksi" onclick="window.location.assign('data_angket.php');">Angket Kepuasan Perusahaan</button>
    	<div class="col-sm-9 col-md-12" style="height: 480px; overflow-y: scroll;">
    	<div class="form-table"> 	
    	<table class="table-striped table-bordered" style="width:100%">
        <thead>
            <tr style="text-align: center;">
            	  <td rowspan="2">No Urut</td>
                <td rowspan="2">Nama Perusahaan</td>
                <td rowspan="2">Alamat</td>
                <td colspan="6">Angket Kepuasan Perusahaan</td> 
            </tr>
            <tr style="text-align: center;">
                <td>Skill</td>
                <td>Tanggung Jawab</td>
                <td>Motivasi</td>
                <td>Kerjasama</td>
                <td>Perilaku</td>
                <td>Disiplin</td>
            </tr>
        </thead>
        <tbody>
        	<?php
            $query="SELECT * from `tb_perusahaan`";
            $result=mysql_query($query)or die(mysql_error());
            $no=1;
            while ($r=mysql_fetch_array($result)) {
              switch ($r['p1']) {
                case 5:
                  $p1='SP';
                  break;
                case 4:
                  $p1='P';
                  break;
                case 3:
                  $p1='CP';
                  break;
                case 2:
                  $p1='TP';
                  break;
                case 1:
                  $p1='STP';
                  break;
                default:
                  $p1='-';
                  break;
              }
              switch ($r['p2']) {
                case 5:
                  $p2='SP';
                  break;
                case 4:
                  $p2='P';
                  break;
                case 3:
                  $p2='CP';
                  break;
                case 2:
                  $p2='TP';
                  break;
                case 1:
                  $p2='STP';
                  break;
                default:
                  $p2='-';
                  break;
              }
              switch ($r['p3']) {
                case 5:
                  $p3='SP';
                  break;
                case 4:
                  $p3='P';
                  break;
                case 3:
                  $p3='CP';
                  break;
                case 2:
                  $p3='TP';
                  break;
                case 1:
                  $p3='STP';
                  break;
                default:
                  $p3='-';
                  break;
              }
              switch ($r['p4']) {
                case 5:
                  $p4='SP';
                  break;
                case 4:
                  $p4='P';
                  break;
                case 3:
                  $p4='CP';
                  break;
                case 2:
                  $p4='TP';
                  break;
                case 1:
                  $p4='STP';
                  break;
                default:
                  $p4='-';
                  break;
              }
              switch ($r['p5']) {
                case 5:
                  $p5='SP';
                  break;
                case 4:
                  $p5='P';
                  break;
                case 3:
                  $p5='CP';
                  break;
                case 2:
                  $p5='TP';
                  break;
                case 1:
                  $p5='STP';
                  break;
                default:
                  $p5='-';
                  break;
              }
              switch ($r['p6']) {
                case 5:
                  $p6='SP';
                  break;
                case 4:
                  $p6='P';
                  break;
                case 3:
                  $p6='CP';
                  break;
                case 2:
                  $p6='TP';
                  break;
                case 1:
                  $p6='STP';
                  break;
                default:
                  $p6='-';
                  break;
              }
              ?>
            	<tr>
                <td align="center" style="width: 88px;"><?php echo $no;?></td>
            		<td><?php echo $r['nama_perusahaan'];?></td>
            		<td><?php echo $r['alamat_perusahaan'];?></td>
                <td align="center" ><?php echo $p1;?></td>
                <td align="center" ><?php echo $p2;?></td>
                <td align="center" ><?php echo $p3;?></td>
                <td align="center" ><?php echo $p4;?></td>
                <td align="center" ><?php echo $p5;?></td>
                <td align="center" ><?php echo $p6;?></td>
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
