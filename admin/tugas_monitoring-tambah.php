<?php 
session_start();
include '../includes/koneksi.php';  
  $year=date("Y");
  $sql="SELECT `no_surat_monitoring` FROM `tb_monitoring`";
  $row=mysql_num_rows(mysql_query($sql))+1;
  if ($row<=9) {
    $no_urut="00".$row;
  }elseif ($row>=9&&$row<=99) {
    $no_urut="0".$row;
  }else{
    $no_urut=$row;
  }
  $query="SELECT DISTINCT tb_permohonan.no_surat_permohonan, nama_perusahaan, tb_permohonan.kode_perusahaan, alamat_perusahaan FROM `tb_permohonan` JOIN `tb_perusahaan` ON tb_permohonan.kode_perusahaan=tb_perusahaan.kode_perusahaan JOIN `tb_detail_permohonan` ON tb_permohonan.no_surat_permohonan=tb_detail_permohonan.no_surat_permohonan";
  $result=mysql_query($query) or die(mysql_error());
  $dtpermohonan = "var dtpermohonan = new Array();\n";
  while ($h=mysql_fetch_array($result)) {
    $dtpermohonan .= "dtpermohonan['".$h['no_surat_permohonan']."'] = {kode:'".addslashes($h['kode_perusahaan'])."',nama:'".addslashes($h['nama_perusahaan'])."',alamat:'".addslashes($h['alamat_perusahaan'])."'};\n";
  }
  $q=mysql_query("SELECT tgl_monitoring FROM tb_settings");
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
        height: 300px;
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
      padding-top: 20px;
      padding-bottom: 10px;
      box-shadow: 1px 1px 10px 1px #888888;
    }
    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number] {
        -moz-appearance:textfield;
    }
    input[type="submit"]{
      margin-top: 20px;
    }
    .container label{
      margin-top: 10px;
    }  
    .scroll{
      overflow-x:none;
    }  
    .col-md-12{
      height: auto;
    }
    .col-md-12{
      padding: 0;
    }
    .btn-group{
      align-items: center;
    }
    .form-top-table{
        width: 70%;
    }
    .form-top-table-td{
      width: 30%;
      text-align: right;
      padding-right: 10px;
    }
    .form-bottom-table {
        width: 80%;
        margin-top: 15px;
    }
    .form-bottom-table table,.form-bottom-table th,.form-bottom-table td{
      border: 1px solid black;
    }
    .nis-kelas {
      width: 110px;
    }
    .ket{
      width: 150px;
    }    
    .form-bottom-table td{
      padding:5px;
    }
    #textarea,input[type=text],input[type=number]{
      color: #000;
      resize: none;
    }
    @media screen and (max-width: 600px) {
    .ui-autocomplete {
      font-size: 12px;
    }
    .form-top-table{
        width: 100%;
    }
    .container{
      padding:0;
      left:0;
    } 
    .col-md-12{  
      font-size: 10px;
    } 
    .scroll{
      overflow-x:scroll;
    } 
    .nis-kelas{
      width: 80px;
    }
    .ket {
      width: 90px;
    }
    .form-bottom-table{
        width: 130%;
    }
    .form-bottom-table input[type="text"]{
      height: 25px;
    }    
    .form-bottom-table td{
      padding:2px;
    }  
    #table{
      width: 440px;
    } 
    input[type="text"], #textarea{
      font-size: 10px;
      border-radius: 2px;
    } 
    input[type="submit"]{
      font-size: 10px;
      padding: 3px 5px 3px 5px;
      margin-bottom: 10px; 

    }
    }
  </style>
  <title>Permohonan Prakerin</title>
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
         source: "../includes/source_data-monitoring.php",  
           minLength:1, 
           select: function( event, ui ) {
      $('#kodeGuru').val(ui.item.id);
          }
        });        
    });

    $(document).on('keyup keypress', 'form input[type="text"]', function(e) {
    if(e.which == 13) {
      e.preventDefault();
      return false;
    }
  });
  </script>
</head>
<body>
<?php include '../includes/header-menu-admin.php';
  ?>
<div class="container">
  <form method="POST" name="monitoring">
    <div class="col-md-12"> 
      <table align="center" class="form-top-table">
        <tr>
          <td class="form-top-table-td">
            <label>Nomor Surat Monitoring</label>
          </td>
          <td><input class="form-control" type="text" name="noSuratMonitoring"  value="<?php echo $no_urut;?>/K/SMK-Mdk/E.11/<?php echo $year;?>" style="pointer-events: none;" ></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nama Guru</label>
          </td>
          <td>
            <input type="text" name="namaGuru" class="form-control" id="namaGuru" required>
          </td>
        </tr>
        <tr style="display: none;">
          <td class="form-top-table-td">
            <label>Kode Guru</label>
          </td>
          <td>
            <input type="text" name="kodeGuru" class="form-control" id="kodeGuru" >
          </td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Tanggal Pelaksanaan</label>
          </td>
          <td><input type="date"  name="tglPelaksanaan" class="form-control" id="tglPelaksanaan" style="pointer-events: none;" value="<?=$h['tgl_monitoring'];?>" required> </td>
        </tr>
      </table>
</div>    
  <div class="col-md-12 scroll">      
     <table align="center" class="form-bottom-table" id="table">     
      <tr align="center">
        <td style="width: 10px;">No</td>
        <td>No Surat Permohonan</td>
        <td>Nama Perusahaan</td>
        <td>Alamat Perusahaan</td>           
      </tr>
      <tr align="center">
        <td>1</td>
        <td class="nama">
          <select name="noSuratPermohonan[]" id="noSurat1" class="form-control" onchange="fillData(this.value,1)">
            <option value="0">--Pilih Surat Permohonan--</option>
            <?php 
              $query="SELECT no_surat_permohonan FROM tb_permohonan WHERE no_surat_permohonan NOT IN (SELECT DISTINCT no_surat_permohonan FROM tb_detail_monitoring) AND no_surat_permohonan IN (SELECT DISTINCT no_surat_permohonan FROM tb_pengantaran WHERE status_antar='1') ORDER BY no_surat_permohonan";
              $result=mysql_query($query) or die(mysql_error()); 
              while ($hasil=mysql_fetch_array($result)) { ?>
                <option value="<?php echo $hasil['no_surat_permohonan'];?>"><?php echo $hasil['no_surat_permohonan'];?></option>
              <?php
              }
            ?>
          </select>  
        <td class="nama" style="display: none;"><input type="text" name="kodePerusahaan[]" id="kodePerusahaan1"  class="form-control"></td>      
        <td class="nama"><input type="text" name="namaPerusahaan[]" id="namaPerusahaan1"  class="form-control" style="pointer-events:none;background-color:#E0E0E0;"></td>
        <td>
          <textarea class="form-control" name="alamatPerusahaan[]" id="alamatPerusahaan1" style="pointer-events:none;background-color:#E0E0E0; resize: none; color:#000;"></textarea>
        </td>
      </tr>
      <tr align="center">
        <td>2</td>        
        <td class="nama">
        <select name="noSuratPermohonan[]" id="noSurat2" class="form-control" onchange="fillData(this.value,2)">
            <option value="0">--Pilih Surat Permohonan--</option>
            <?php 
              $query="SELECT no_surat_permohonan FROM tb_permohonan WHERE no_surat_permohonan NOT IN (SELECT DISTINCT no_surat_permohonan FROM tb_detail_monitoring) AND no_surat_permohonan IN (SELECT DISTINCT no_surat_permohonan FROM tb_pengantaran WHERE status_antar='1') ORDER BY no_surat_permohonan";
              $result=mysql_query($query) or die(mysql_error()); 
              while ($hasil=mysql_fetch_array($result)) { ?>
                <option value="<?php echo $hasil['no_surat_permohonan'];?>"><?php echo $hasil['no_surat_permohonan'];?></option>
              <?php
              }
            ?>
          </select>
        </td>        
        <td class="nama" style="display: none;"><input type="text" name="kodePerusahaan[]" id="kodePerusahaan2"  class="form-control"></td>  
        <td class="nama"><input type="text" name="namaPerusahaan[]" id="namaPerusahaan2"  class="form-control" style="pointer-events:none;background-color:#E0E0E0;"></td>
        <td>
          <textarea class="form-control" name="alamatPerusahaan[]" id="alamatPerusahaan2" style="pointer-events:none;background-color:#E0E0E0; resize: none; color:#000;"></textarea>
        </td>
      </tr>
      <tr align="center">
        <td>3</td>        
        <td class="nama">
          <select name="noSuratPermohonan[]" id="noSurat3" class="form-control" onchange="fillData(this.value,3)">
            <option value="">--Pilih Surat Permohonan--</option>
            <?php 
              $query="SELECT no_surat_permohonan FROM tb_permohonan WHERE no_surat_permohonan NOT IN (SELECT DISTINCT no_surat_permohonan FROM tb_detail_monitoring) AND no_surat_permohonan IN (SELECT DISTINCT no_surat_permohonan FROM tb_pengantaran WHERE status_antar='1') ORDER BY no_surat_permohonan";
              $result=mysql_query($query) or die(mysql_error()); 
              while ($hasil=mysql_fetch_array($result)) { ?>
                <option value="<?php echo $hasil['no_surat_permohonan'];?>"><?php echo $hasil['no_surat_permohonan'];?></option>
              <?php
              }
            ?>
          </select>
        </td>    
        <td class="nama" style="display: none;"><input type="text" name="kodePerusahaan[]" id="kodePerusahaan3"  class="form-control"></td>    
        <td class="nama"><input type="text" name="namaPerusahaan[]" id="namaPerusahaan3"  class="form-control" style="pointer-events:none;background-color:#E0E0E0;"></td>
        <td>
          <textarea class="form-control" name="alamatPerusahaan[]" id="alamatPerusahaan3" style="pointer-events:none;background-color:#E0E0E0; resize: none; color:#000;"></textarea>
        </td>
      </tr>
    </table>
</div>
<center><input type="submit" name="simpan" id="simpan" value="Simpan" class="btn btn-success"></center>
</form>

</div><p>
<script type="text/javascript"> 
function fillData(noSurat,posisi){
    <?php echo $dtpermohonan;?>
     switch(posisi){
      case 1 : {   
      if (noSurat==0) {
          document.getElementById("kodePerusahaan1").value = "";
          document.getElementById("namaPerusahaan1").value = "";
          document.getElementById("alamatPerusahaan1").value = "";
      }else{
          document.getElementById("noSurat2").focus();
          document.getElementById("kodePerusahaan1").value = dtpermohonan[noSurat].kode;
          document.getElementById("namaPerusahaan1").value = dtpermohonan[noSurat].nama;
          document.getElementById("alamatPerusahaan1").value = dtpermohonan[noSurat].alamat;
      }         
      }break;
      case 2 : {       
      if (noSurat==0) {
          document.getElementById("kodePerusahaan2").value = "";
          document.getElementById("namaPerusahaan2").value = "";
          document.getElementById("alamatPerusahaan2").value = "";
      }else{
          document.getElementById("noSurat3").focus();
          document.getElementById("kodePerusahaan2").value = dtpermohonan[noSurat].kode;
          document.getElementById("namaPerusahaan2").value = dtpermohonan[noSurat].nama;
          document.getElementById("alamatPerusahaan2").value = dtpermohonan[noSurat].alamat;
      } 
      }break;
      case 3 : {             
      if (noSurat==0) {
          document.getElementById("kodePerusahaan3").value = "";
          document.getElementById("namaPerusahaan3").value = "";
          document.getElementById("alamatPerusahaan3").value = "";
      }else{
          document.getElementById("kodePerusahaan3").value = dtpermohonan[noSurat].kode;
          document.getElementById("namaPerusahaan3").value = dtpermohonan[noSurat].nama;
          document.getElementById("alamatPerusahaan3").value = dtpermohonan[noSurat].alamat;
      } 
      }break; 
    }
  }
</script>
<?php
if (isset($_POST['simpan'])) {
  $tglPelaksanaan=$_POST['tglPelaksanaan'];
  $kodeGuru=$_POST['kodeGuru'];
  $noSuratMonitoring=$_POST['noSuratMonitoring'];
  $noSuratPermohonan=$_POST['noSuratPermohonan'];
  $jmlperusahaan = count($_POST['noSuratPermohonan']);
  $query="INSERT INTO tb_monitoring (`no_surat_monitoring`,`tgl_monitoring`,`kode_guru`) VALUES ('$noSuratMonitoring','$tglPelaksanaan','$kodeGuru')";
  $result=mysql_query($query) or die(mysql_error());
  
    $username=$kodeGuru;
    $insert="UPDATE tb_user SET `aktif`='1' WHERE `username`='$username'";
    $eks=mysql_query($insert) or die(mysql_error());

  for ($i=0; $i<$jmlperusahaan ; $i++) { 
    if ($noSuratPermohonan[$i]!="") {
      $query1="INSERT INTO tb_detail_monitoring (`no_surat_monitoring`,`no_surat_permohonan`,`catatan_monitoring`, `saran_monitoring`) VALUES ('$noSuratMonitoring','$noSuratPermohonan[$i]','','')";
      $result1=mysql_query($query1) or die(mysql_error());
      $del=mysql_query("DELETE FROM tb_detail_monitoring WHERE no_surat_permohonan='0'");
    }
  }
 if ($i==$jmlperusahaan&&$result) { ?>
    <script type="text/javascript">
      alertify.confirm('Data Monitoring Berhasil Disimpan', 'Cetak Surat Tugas', function(){ window.open("assets/proses_surat_monitoring.php?n=<?php echo $noSuratMonitoring;?>&g=<?php echo $kodeGuru;?>", "MsgWindow", "width=1250,height=650") }
                , function(){window.location.assign('tugas_monitoring.php')});
      </script>
 <?php
  }
}
?>
</body>
</html>