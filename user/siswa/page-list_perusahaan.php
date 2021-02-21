<?php 
session_start();
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
    .cari input[type=text]{
      width: 200px;
      margin-right: 10px;
    }
    #btn-cari{
      font-size: 12pt;
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
      .cari input[type=text]{
        font-size: 10pt;
      }
      #btn-cari{
      margin-top: 5px;
      font-size: 10pt;
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
include '../../includes/koneksi.php';
?>
<div class="container">
	<h5 align="center">List Perusahaan</h5>
  	<div class="row" >
    	<div class="col-sm-9">
    		<table>
    			<tr>
    				<td align="left">Sebagai referensi tempat PRAKERIN</td>
    			</tr>
    		</table>

        <form method="GET" action="page-list_perusahaan.php">
           <div class="cari form-inline">
             <input type="text" name="search" class="form-control" placeholder="Cari Perusahaan" autocomplete="off">             
              <div class="btn-group">  
                <input type="submit" value="Search" class="btn btn-primary" id="btn-cari"> 
                <button type="button" class="btn btn-danger" id="btn-cari" onclick="window.location.assign('page-list_perusahaan.php')">Tampilkan Semua</button>
              </div>
           </div>
        </form>

    	</div>	
    	<div class="col-sm-9 col-md-12" style=" height: 520px; overflow-y: scroll;">
       <div class="form-table">   
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr valign="center">
                  <th valign="center" width="120">No Urut</th>
                  <th>Nama Perusahaan</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
            <?php
              if(isset($_GET['search'])){
                $cari = $_GET['search'];
                $query="SELECT kode_perusahaan, nama_perusahaan, alamat_perusahaan from tb_perusahaan WHERE nama_perusahaan LIKE '%".$cari."%'";
                $result=mysql_query($query)or die(mysql_error());       
              }else{
                $query="SELECT kode_perusahaan, nama_perusahaan, alamat_perusahaan from tb_perusahaan";
                $result=mysql_query($query)or die(mysql_error());   
              }
              
              $no=1;
              while ($r=mysql_fetch_array($result)) {?>
                <tr>
                  <td align="center" style="width: 88px;"><?php echo $no;?></td>
                  <td><?php echo $r['nama_perusahaan'];?></td>
                  <td><?php echo $r['alamat_perusahaan'];?></td>
                  <td class="action">
                    <a href="page-permohonan.php?n=<?php echo $r['kode_perusahaan'];?>"><button class="btn btn-primary" id="btn-aksi">Buat Permohonan</button></a>
                  </td>
                </tr>
              <?php
              $no++;
              }
              ?>
          </tbody>
        </table>
       </div> 
		</div>
	</div>
</div><p>
</body>
</html>
