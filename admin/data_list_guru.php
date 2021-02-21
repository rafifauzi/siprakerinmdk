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
  <title>List Guru</title>
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
  <h5 align="center" id="judul">List Guru</h5>
    <div class="row" >
      <div class="col-sm-9 col-md-6">       
        <button class="btn btn-primary btn-sm" id="btn-aksi" onclick="window.location.assign('tambah_data_guru.php');">Tambah Data Guru</button>
      </div>
      <div class="col-sm-9 col-md-12" style=" height: 480px; overflow-y: scroll;">
      <div class="form-table">      
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr valign="center">
                <th width="120">No Urut</th>
                <th>Nama Guru</th>
                <th>Kode Guru</th>
                <th>NIP</th>
                <th>NUPTK</th>
                <th>Jenis Kelamin</th>
                <th>Pangkat - Gol</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $query="SELECT * from `tb_guru`";
            $result=mysql_query($query)or die(mysql_error());
            $no=1;
            while ($r=mysql_fetch_array($result)) {
              switch ($r['jk']) {
                case '1':
                      $jk='Laki-Laki';
                  break;
                case '0':
                      $jk='Perempuan';
                  break;
              }
            ?>
              <tr>
                <td align="center"><?php echo $no;?></td>
                <td><?php echo $r['nama_guru'];?></td>
                <td><?php echo $r['kode_guru'];?></td>
                <td><?php echo $r['nip'];?></td>
                <td><?php echo $r['nuptk'];?></td>
                <td><?php echo $jk;?></td>
                <td><?php echo $r['pangkat_gol'];?></td>
                <td><?php echo $r['jabatan'];?></td>
                <td class="action"  style="width: 100px;">                       
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
