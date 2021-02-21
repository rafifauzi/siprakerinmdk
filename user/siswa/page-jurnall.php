<?php 
include '../../includes/koneksi.php';?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .container-fluid{
      font-size: 14px;
    }
    .container-fluid h5{
      padding-top: 10px;
    }
    .container-fluid a:hover{
      text-decoration: none;
    }
    .container-fluid hr{
      margin-top: 10px;
      padding-bottom: 0px;
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
      width: 1300px;
    }
    .scroll{
      overflow-x: scroll;
    }
    @media screen and (max-width: 600px) {
          .container{
             margin-top:20px;
            font-size: 12px;
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
          #table{
        width: 1200px;
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
  <link rel="stylesheet" href="../../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../../assets/css/default.min.css" type='text/css'  />
  <script src="../../assets/js/alertify.min.js"></script>
  <script src="../../assets/js/jquery-1.12.4.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
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
  <br><h5 align="center">Buku Jurnal PRAKERIN</h5><hr>
    <div class="row">
      <div class="col-sm-9 col-md-6">
        <label>No Buku Jurnal</label>
      	<input type="text" class="form-control" disabled>
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
              $query="SELECT tb_detail_permohonan.nis, tb_detail_permohonan.no_surat_permohonan, tb_siswa.nama_siswa, tb_siswa.kelas, tb_jurusan.nama_jurusan, tb_siswa.foto, tb_perusahaan.nama_perusahaan, tb_perusahaan.alamat_perusahaan, tb_detail_permohonan.status_permohonan FROM `tb_detail_permohonan` JOIN `tb_siswa` ON tb_detail_permohonan.nis=tb_siswa.nis JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan JOIN `tb_permohonan` ON tb_detail_permohonan.no_surat_permohonan=tb_permohonan.no_surat_permohonan JOIN `tb_perusahaan` ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan ORDER BY tb_permohonan.no_surat_permohonan DESC";
				$result=mysql_query($query) or die(mysql_error());
              while ($hasil=mysql_fetch_array($result)) { 
              switch ($hasil['status_permohonan']) {
                case '0':$s='Diproses';break;
                case '1':$s='Diterima';break;
                case '2':$s='Ditolak';break;
              }
          ?>
          <tr align="center" height="40">
            <td><?php echo $hasil['no_surat_permohonan']; ?></td>
            <td><?php echo $hasil['nis']; ?></td>
            <td><?php echo $hasil['nama_siswa']; ?></td>
          </tr>
          <?php
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
