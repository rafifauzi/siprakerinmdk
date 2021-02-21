<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pendaftaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' /> 
  <script src="../assets/js/jquery-1.12.4.js"></script>
  <script src="../assets/js/popper.min.js"></script>
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
    .cari input[type=text]{
      width: 250px;
      margin-right: 10px;
      font-size: 11pt;
    }
    #btn-cari{
      font-size: 11pt;
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
      #table{
        width: 1200px;
      }
          #button,.dropdown-item{
      font-size: 12px;
      color: #000;
      }
      }
  </style>
</head>
<body>
<?php 
include '../includes/header-menu-admin.php'; 
include '../includes/koneksi.php';
?>
<div class="container-fluid">
  <br><h5 align="center">Daftar Pemohon Surat Permohonan PRAKERIN</h5><hr>
    <div class="row">
      <div class="col-sm-9 col-md-6">
          <form method="GET" action="data_pemohon.php">
             <div class="cari form-inline">
               <input type="text" name="search" class="form-control" placeholder="Cari No Surat Permohonan" autocomplete="off">             
                <div class="btn-group">  
                  <input type="submit" value="Search" class="btn btn-primary" id="btn-cari"> 
                  <button type="button" class="btn btn-danger" id="btn-cari" onclick="window.location.assign('data_pemohon.php')">Tampilkan Semua</button>
                </div>
             </div>
          </form>
        </div>
      <div class="col-sm-9 col-md-6">          
             <div class="cari form-inline">      
                  <button type="button" class="btn btn-success" id="btn-cari" style="pointer-events: none; margin-right: 5px;"><span class="fa fa-file-text"></span></button>  Siswa Telah Mengunggah Surat Balasan        
                  <button type="button" class="btn btn-danger" id="btn-cari" style="pointer-events: none; margin-right: 5px; margin-left: 5px;"><span class="fa fa-file-text"></span></button>  Siswa Belum Mengunggah Surat Balasan
             </div>
        </div>
      </div>  
      <div class="col-sm-9 col-md-12 scroll">
      <div class="form-table">      
      <table border="1" align="center" id="table" class="table table-striped table-bordered" >
        <thead>
            <tr align="center">                
          <th width="180">No Surat</th>
          <th>Nama Perusahaan</th>
          <th>Alamat Perusahaan</th>
          <th width="140">Aksi</th>
        </tr>
          </thead>
          <tbody>
          <?php
            include '../includes/koneksi.php';
            if(isset($_GET['search'])){
                $cari = $_GET['search'];
                $query="SELECT DISTINCT tb_permohonan.no_surat_permohonan, surat_balasan, nama_perusahaan, alamat_perusahaan, nama_jurusan FROM tb_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE tb_permohonan.no_surat_permohonan LIKE '%$cari%' ORDER BY no_surat_permohonan DESC";
                $result=mysql_query($query)or die(mysql_error());       
              }else{
                $query="SELECT DISTINCT tb_permohonan.no_surat_permohonan, surat_balasan, nama_perusahaan, alamat_perusahaan, nama_jurusan FROM tb_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan ORDER BY no_surat_permohonan DESC";
                $result=mysql_query($query)or die(mysql_error());   
              }
              $result=mysql_query($query) or die(mysql_error());
              while ($hasil=mysql_fetch_array($result)) { 
                $cetak="window.open('assets/proses_surat_permohonan.php?n=".$hasil['no_surat_permohonan']."','MsgWindow','width=1250,height=650');";
                if ($hasil['surat_balasan']!='') {
                  $button='pointer-events:auto;';
                  $btncss='btn btn-success';
                }else{
                  $button='pointer-events:none;';
                  $btncss='btn btn-danger';
                }
                ?>
                <tr align="center" height="40">
                  <td><?php echo $hasil['no_surat_permohonan'];?></td>   
                  <td width="170"><?php echo $hasil['nama_perusahaan']; ?></td>
                  <td width="170"><?php echo $hasil['alamat_perusahaan']; ?></td>
                  <td align='center'>  
                    <button name="cetak" class="btn btn-primary" id="btn-aksi" onclick="<?=$cetak;?>"><span class="fa fa-print"></span></button>
                    <button name="edit" class="btn btn-warning" id="btn-aksi" onclick="window.location.assign('data_pemohon-edit.php?n=<?=$hasil['no_surat_permohonan'];?>')"><span class="fa fa-edit"></span></button>
                    <button name="edit" class="<?=$btncss;?>" id="btn-aksi" style="<?=$button;?>" onclick="window.open('../assets/berkas/suratBalasan/<?=$hasil['surat_balasan'];?>', '_blank')"><span class="fa fa-file-text"></span></button>

                  </td>
              </tr>
          <?php
            }
          ?>
        </tbody></table>
    </div>
    </div>
  </div>
</body>
</html>
