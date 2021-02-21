 <?php 
include '../includes/koneksi.php';
  $query="SELECT tb_permohonan.no_surat_permohonan, tb_detail_permohonan.nis,nama_jurusan,nama_perusahaan, alamat_perusahaan FROM tb_permohonan JOIN tb_perusahaan ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan JOIN tb_siswa ON tb_detail_permohonan.nis=tb_siswa.nis JOIN tb_jurusan ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan";
  $result=mysql_query($query) or die(mysql_error());
  $dtpemohon = "var dtpemohon = new Array();\n";
  while ($hasil=mysql_fetch_array($result)) { 
  $dtpemohon .= "dtpemohon['" . $hasil['no_surat_permohonan'] . "'] = {namaJurusan:'" . addslashes($hasil['nama_jurusan']) . "',namaPerusahaan:'" . addslashes($hasil['nama_perusahaan']) . "',alamatPerusahaan:'" . addslashes($hasil['alamat_perusahaan']) . "'};\n";
  }
  $q=mysql_query("SELECT tgl_pengantaran, waktu_antar FROM tb_settings");
  $h=mysql_fetch_array($q);
?> 

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
    .ui-autocomplete {
        position: absolute;
        z-index: 1000;
        cursor: default;
        padding: 0;
        list-style: none;
        background-color: #EEEEEE;
        height: 400px;
        overflow-y: scroll;
        overflow-x: scroll;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
    .ui-autocomplete li, .ui-autocomplete li a {
        padding:10px;
        text-decoration:none; 
        color: #000;
    }
    .ui-autocomplete li:hover{
        background-color: #E0E0E0;
        text-decoration:none;
    }
    .ui-helper-hidden-accessible {
        display: none;
    }
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
		.display-picture{
			width: 160px;
			height: 240px;
			padding-right: 5px;
      		margin-top: 10px;
		}
		.container label{
			margin-top: 10px;
		}
    	.form-table{
      		width: 90%;
    	}
    	.form-top-table-td{
    	  	width: 170px;
    	}
		#textarea,input[type=text]{
			color: #000;
      		resize: none;
		}
		select{
			color: #000;
		}
		.btn-md{
			border:0;
			border-radius: 3px;
			margin-top: 20px;
		}
		@media screen and (max-width: 600px) {
      		.container{
       			margin-top:20px;
      		}
      		.display-picture{
				    width: 120px;
				    height: 180px;
			   }
      		.form-top-table-td{
        		width: 100px;
      		}
      		.form-table{
       		   width: 100%;
       		   margin-top: 10px;
        		font-size: 12px;
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
    	}
	</style>
  <title>Data Pengantaran PRAKERIN</title>
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />  
  <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../assets/css/default.min.css" type='text/css'  />
  <link href="../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="../assets/js/jquery-1.12.4.js"></script>  
  <script src="../assets/js/jquery-ui.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/alertify.min.js"></script>
  <script>
    $(function() {  
        $( "#namaGuru" ).autocomplete({
         source: "../includes/source_data-pengantar.php",  
           minLength:1, 
           select: function( event, ui ) {
      $('#kodeGuru').val(ui.item.id);
          }
        });        
    });
  </script>
</head>
<body>
<?php 
include '../includes/header-menu-admin.php';
$year=date("Y");
$sql="SELECT * FROM tb_pengantaran;";
$row=mysql_num_rows(mysql_query($sql))+1;
  if ($row<=9) {
    $no_urut="00".$row;
  }elseif ($row>=9&&$row<=99) {
    $no_urut="0".$row;
  }else{
    $no_urut=$row;
  }
?>
<div class="container">
  <div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-3 col-md-8">
      <div class="form-group">
        <form method="POST" name="edit_permohonan">
        <table class="form-table">
          <tr>
            <td>
              <label>No Surat Pengantaran</label>
            </td>
            <td>
              <input type="text" class="form-control" autocomplete="off" name="no_surat_pengantar" required value="<?php echo $no_urut;?>/K/SMK-Mdk/E.11/<?php echo $year;?>" style="pointer-events: none;">
            </td>
          </tr>
        <tr>
          <td class="form-top-table-td">
            <label>No Surat Permohonan</label>
          </td>
          <td>
            <select  name="no_surat_permohonan" class="form-control" id="noPermohonan" onchange="prosesData(this.value);" required>
              <option value=0>--Nomor Permohonan--</option>
            <?php 
              $query="SELECT DISTINCT tb_permohonan.no_surat_permohonan FROM tb_permohonan JOIN tb_detail_permohonan ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan WHERE tb_permohonan.no_surat_permohonan NOT IN (SELECT no_surat_permohonan FROM tb_pengantaran) AND status_permohonan='1' ORDER BY no_surat_permohonan ASC";
              $result=mysql_query($query) or die(mysql_error());
              while ($hasil=mysql_fetch_array($result)) { ?>
                <option value="<?php echo $hasil['no_surat_permohonan'];?>"><?php echo $hasil['no_surat_permohonan'];?></option>
            <?php
              }
            ?>               
            </select>
          </td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Kompetensi Keahlian</label>
          </td>
          <td><input type="text" class="form-control" autocomplete="off" id="nama_jurusan" name="nama_jurusan" required></td>
        </tr>
          <tr>
          <td class="form-top-table-td">
            <label>Nama Perusahaan</label>
          </td>
          <td><input class="form-control" type="text" name="nama_perusahaan" id="nama_perusahaan" required></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Alamat Perusahaan</label>
          </td>
          <td><textarea class="form-control" id="textarea" name="alamat_perusahaan" required></textarea></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Guru Pengantar</label>
          </td>
          <td>
            <input type="text" name="namaGuru" class="form-control" id="namaGuru" required>
		      </td>
        </tr>
         <tr style="display: none;">
          <td class="form-top-table-td">
            <label>Kode Pengantar</label>
          </td>
          <td>
            <input type="text" name="kodeGuru" class="form-control" id="kodeGuru" required>
          </td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Tanggal Pelaksanaan</label>
          </td>
          <td><input type="date" name="tgl_pelaksanaan" class="form-control" autocomplete="off" required value="<?php echo $h['tgl_pengantaran'];?>" required></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Waktu Pelaksanaan</label>
          </td>
          <td><input type="time" name="waktu_pelaksanaan" class="form-control" autocomplete="off" required value="<?php echo $h['waktu_antar'];?>" required></td>
        </tr>
        </table>
            <center><input type="submit" name="simpan_pengantaran" class="btn btn-success btn-md" value="Simpan"></center>
        </form>
      </div>	   
      <p>
    </div>    
  </div>
</div>
<script type="text/javascript">
  <?php echo $dtpemohon; ?>
  function prosesData(nomor){
      document.getElementById("nama_jurusan").value = dtpemohon[nomor].namaJurusan; 
      document.getElementById("nama_perusahaan").value = dtpemohon[nomor].namaPerusahaan;
      document.getElementById("textarea").value = dtpemohon[nomor].alamatPerusahaan;
  }
</script>
<?php 
  if (isset($_POST['simpan_pengantaran'])) {
    $no_surat_permohonan=$_POST['no_surat_permohonan'];
    $no_surat_pengantar=$_POST['no_surat_pengantar'];
    $guru_pengantar=$_POST['kodeGuru'];
    $query="INSERT INTO `tb_pengantaran` (`no_surat_pengantar`, `tgl_pengantar`, `waktu_pengantar`, `jenis_usaha`, `hasil_kunjungan`, `pesan_perusahaan`, `no_surat_permohonan`, `kode_guru`, `status_antar`) VALUES ('$no_surat_pengantar','','','','','','$no_surat_permohonan','$guru_pengantar', '0')";
    $result=mysql_query($query) or die(mysql_error());

    //user//
    $username=$guru_pengantar;
    $insert="UPDATE tb_user SET `aktif`='1' WHERE `username`='$username'";
    $eks=mysql_query($insert) or die(mysql_error());

    //buku jurnal//
    $qNIS=mysql_query("SELECT nis FROM tb_detail_permohonan WHERE no_surat_permohonan='$no_surat_permohonan'") or die(mysql_error());
    $row=mysql_num_rows(mysql_query("SELECT * FROM tb_buku_jurnal"))+1;
    $no=0;
    while ($a=mysql_fetch_array($qNIS)) {
      $nis=$a['nis'];
      if ($row<=9) {
        $no_urut="00".$row;
      }elseif ($row>=9&&$row<=99) {
        $no_urut="0".$row;
      }else{
        $no_urut=$row;
      }
      $no_jurnal=$no_urut."/".$nis."/"."SMK-Mdk"."/".date("Y");
      $update="UPDATE `tb_siswa` SET `nomor_jurnal`='$no_jurnal' WHERE `nis`='$nis'";
      $rUpdate=mysql_query($update) or die(mysql_error());
      $insert="INSERT INTO tb_buku_jurnal(nomor_jurnal,status_jurnal) VALUES ('$no_jurnal','1')";
      $rInsert=mysql_query($insert) or die(mysql_error()); 
      $row++;
      $no++;    
    }
    if ($result&&$eks&&$no>0) {
      ?>
      <script type="text/javascript">
      alertify.confirm('Data Pengantaran Berhasil Disimpan', 'Cetak Surat Tugas', function(){ window.open("assets/proses_surat_pengantaran.php?n=<?php echo $no_surat_pengantar;?>&p=<?php echo $no_surat_permohonan;?>", "MsgWindow", "width=1250,height=650") }
                , function(){window.location.assign('tugas_pengantaran.php')});
      </script>
    <?php
    }
      
  }
?>
</body>
</html>