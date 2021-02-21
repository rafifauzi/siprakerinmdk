 <?php 
include '../includes/koneksi.php';
if(isset($_GET['search'])){
  $cari = $_GET['search'];
  $query="SELECT tb_detail_permohonan.nis, nama_siswa, kelas, nama_jurusan, nama_guru, nama_perusahaan, berkas_absen, berkas_nilai  FROM tb_permohonan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan JOIN tb_guru ON tb_siswa.kode_guru=tb_guru.kode_guru WHERE tb_detail_permohonan.nis NOT IN (SELECT nis FROM tb_nilai) AND status_permohonan='1' AND tb_detail_permohonan.nis LIKE '%$cari%' ORDER BY tb_permohonan.no_surat_permohonan";
  $result=mysql_query($query) or die(mysql_error());      
  }else{
     $query="SELECT tb_detail_permohonan.nis, nama_siswa, kelas, nama_jurusan, nama_guru, nama_perusahaan, berkas_absen, berkas_nilai  FROM tb_permohonan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan JOIN tb_guru ON tb_siswa.kode_guru=tb_guru.kode_guru WHERE tb_detail_permohonan.nis NOT IN (SELECT nis FROM tb_nilai) AND status_permohonan='1' ORDER BY tb_permohonan.no_surat_permohonan";
    $result=mysql_query($query) or die(mysql_error());   
  }
  
?> 

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.container{
			margin-top:30px;	
			box-shadow: 1px 1px 10px 1px #888888;	
			padding-top: 10px;
      border-radius: 3px;
      color: #000;
		}
		.container h3{
			text-align:center;
			padding:20px 0px 2px 0px;
		}
		.container table{
			width: 1050px;
		}
		select{
			color: #000;
		}
		.btn-md{
			border:0;
			border-radius: 3px;
			margin-top: 20px;
		}
    .scroll{
      overflow-y: scroll;
      overflow-x: auto;
      height: 400px;
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

      		}
      		.display-picture{
				    width: 120px;
				    height: 180px;
			    }
          .container table{
            width: 600px;
            font-size: 12pt;
          }
          #btn-aksi{
            font-size: 12px;
          }
      		#textarea,input[type=text],input[type=date],#noPermohonan,#guru{
        		font-size: 12px;
            color: #000;
     		  }
      		input[type=text],input[type=text],input[type=date],#noPermohonan,#guru{
        		height: 35px;
      		}

      .cari input[type=text]{
        font-size: 10pt;
      }
      #btn-cari{
      margin-top: 5px;
      font-size: 10pt;
      }
    	}
	</style>
  <title>Nilai Perusahaan</title>
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
<?php include '../includes/header-menu-admin.php'; ?>
<div class="container">
  <h3>Input Nilai Perusahaan</h3><hr>
  <div class="row">
    <div class="col-sm-9 col-md-6">
          <form method="GET" action="data_nilai-tambah.php">
             <div class="cari form-inline">
               <input type="text" name="search" class="form-control" placeholder="Cari Nomor Induk Siswa" autocomplete="off">             
                <div class="btn-group">  
                  <input type="submit" value="Search" class="btn btn-primary" id="btn-cari"> 
                  <button type="button" class="btn btn-danger" id="btn-cari" onclick="window.location.assign('data_nilai-tambah.php')">Tampilkan Semua</button>
                </div>
             </div>
          </form><p>
    </div>
    <div class="col-sm-3 col-md-12 ">
        <form method="POST" name="edit_permohonan">
          <div class="scroll">
        <table align="center" class="table table-bordered table-hover">
          <tr style="text-align: center;">
            <th style="vertical-align: middle;" rowspan="2">NIS</th>
            <th style="vertical-align: middle;" rowspan="2">Nama Siswa</th>
            <th style="vertical-align: middle;" rowspan="2">Kelas</th>
            <th style="vertical-align: middle;" rowspan="2">Wali Kelas</th>
            <th style="vertical-align: middle;" rowspan="2">Nama Perusahaan</th>
            <th style="vertical-align: middle;" rowspan="2">Jumlah Prakerin (Minggu)</th>
            <th style="vertical-align: middle;" rowspan="2">Nilai Perusahaan</th>
            <th style="vertical-align: middle;" colspan="2">Berkas</th>
          </tr>
          <tr style="text-align: center;">
            <th style="vertical-align: middle;">Absensi</th>
            <th style="vertical-align: middle;">Nilai</th>
          </tr>
          <?php 
             $no=1;
             while ($hasil=mysql_fetch_array($result)) { 
                if ($hasil['berkas_nilai']!='') {
                  $button='';
                }else{
                  $button='disabled';
                }
                if ($hasil['berkas_absen']!='') {
                  $button1='';
                }else{
                  $button1='disabled';
                }
              ?>
              <tr style="text-align: center;">
                <td><?=$hasil['nis']?></td>
                <td style="display: none;"><input type="text" name="nis[]" value="<?=$hasil['nis']?>"></td>
                <td><?=$hasil['nama_siswa']?></td>
                <td><?=$hasil['kelas']?></td>
                <td><?=$hasil['nama_guru']?></td>
                <td><?=$hasil['nama_perusahaan']?></td>
                <td><input class="form-control" type="number" name="jmlPrakerin[]" id="jmlPrakerin" max="12"></td>
                <td><input class="form-control" type="number" name="nilaiPerusahaan[]" id="nilaiPerusahaan" max="100"></td>
                <td>
                  <button name="berkas" class="btn btn-info" id="btn-aksi" onclick="window.open('../assets/berkas/suratAbsen/<?=$hasil['berkas_absen'];?>', '_blank')" <?=$button;?>><span class="fa fa-file-text"></span></button>
                </td>
                <td>
                  <button name="berkas" class="btn btn-primary" id="btn-aksi" onclick="window.open('../assets/berkas/suratNilai/<?=$hasil['berkas_nilai'];?>', '_blank')" <?=$button1;?>><span class="fa fa-file-text"></span></button>
                </td>
              </tr>  
             <?php
             }
          ?>
        </table>
        </div>
            <center><input type="submit" name="simpanNilai" class="btn-md btn-success" id="btn-aksi" value="Simpan"></center>
        </form>   
      <p>
    </div>    
  </div>
</div> 
<?php
  if (isset($_POST['simpanNilai'])) {
    $nis=$_POST['nis'];
    $nilaiPerusahaan=$_POST['nilaiPerusahaan'];
    $jmlPrakerin=$_POST['jmlPrakerin'];
    $rNis=count($nis);
    for ($i=0; $i<$rNis ; $i++) { 
      if ($nilaiPerusahaan[$i]!="") {
        $query="INSERT INTO tb_nilai (`nis`, `jml_prakerin`, `nilai_perusahaan`) VALUES ('$nis[$i]', '$jmlPrakerin[$i]', '$nilaiPerusahaan[$i]')";
        $result=mysql_query($query) or die(mysql_error());
      }      
    }
    $row=mysql_num_rows(mysql_query("SELECT nis FROM tb_siswa"));
    if ($row>0) {?>
      <script type="text/javascript">
        alertify.alert('Nilai Perusahaan Telah Ditambahkan', function(){ window.location.assign('data_nilai.php')}).setHeader('Sukses').set({closable:false,transition:'zoom'});
      </script>
    <?php
    }
  }
?>
</body>
</html>