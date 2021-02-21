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
  <link rel="stylesheet" type="text/css" href="../asset/css/datatables.min.css"/> 
  <script type="text/javascript" src="../asset/js/datatables.min.js"></script>
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
  <h5 align="center">List Siswa PRAKERIN</h5>
    <div class="row" >
      <div class="col-sm-9 col-md-6">   
        <span class="span">Tampilkan Data Berdasarkan</span><br>
          <div class="dropdown">
          <button class="btn btn-primary btn-sm" id="button" data-toggle="dropdown">Jurusan</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="data_siswa.php?j=all&k=all">Tampil Semua</a>
              <?php 
              $query="SELECT * FROM tb_jurusan";
              $result=mysql_query($query) or die(mysql_error());
              while ($hasil=mysql_fetch_array($result)) { ?>
                <a class="dropdown-item" href="data_siswa.php?j=<?php echo $hasil['kode_jurusan'];?>&k=all"><?php echo $hasil['nama_jurusan'];?></a>
              <?php
              }
              ?>
                
            </div>
          </div>
          <div class="dropdown">
          <button class="btn btn-primary btn-sm" id="button" data-toggle="dropdown">Kelas</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="data_siswa.php?j=all&k=all">Tampil Semua</a>
              <?php 
              $query="SELECT DISTINCT kelas FROM tb_siswa";
              $result=mysql_query($query) or die(mysql_error());
              while ($hasil=mysql_fetch_array($result)) { ?>
                <a class="dropdown-item" href="data_siswa.php?j=all&k=<?php echo $hasil['kelas'];?>"><?php echo $hasil['kelas'];?></a>
              <?php
              }
              ?>
                
            </div>
        </div>
      </div>
      <div class="col-sm-9 col-md-12" style=" height: 480px; overflow-y: scroll;">
      <div class="form-table">      
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr style="text-align: center;">
                <th valign="center" width="120">No Urut</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Wali Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $j=$_GET['j'];
            $k=$_GET['k'];
            if ($j=='all'&&$k!='all') {
              $query="SELECT nis, nama_siswa, kelas, tb_siswa.jk, nama_jurusan, nama_guru from `tb_siswa` JOIN `tb_guru` ON tb_siswa.kode_guru=tb_guru.kode_guru JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE kelas='$k' ORDER BY nama_siswa";
            }else if ($j!='all'&&$k=='all') {
              $query="SELECT nis, nama_siswa, kelas, tb_siswa.jk, nama_jurusan, nama_guru from `tb_siswa` JOIN `tb_guru` ON tb_siswa.kode_guru=tb_guru.kode_guru JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE tb_siswa.kode_jurusan='$j' ORDER BY nama_siswa";
            }else{
              $query="SELECT nis, nama_siswa, kelas, tb_siswa.jk, nama_jurusan, nama_guru from `tb_siswa` JOIN `tb_guru` ON tb_siswa.kode_guru=tb_guru.kode_guru JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan";
            }            
            $result=mysql_query($query)or die(mysql_error());
            $no=1;
            while ($r=mysql_fetch_array($result)) {
              switch ($r['jk']) {
                case '1':
                      $jk='laki-laki';
                  break;
                case '0':
                      $jk='perempuan';
                  break;
              }
            ?>
              <tr>
                <td align="center"><?php echo $no;?></td>
                <td><?php echo $r['nis'];?></td>
                <td><?php echo $r['nama_siswa'];?></td>
                <td><?php echo $r['kelas'];?></td>
                <td><?php echo $jk;?></td>
                <td><?php echo $r['nama_jurusan'];?></td>
                <td><?php echo $r['nama_guru'];?></td>
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
