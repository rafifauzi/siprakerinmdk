<?php 
session_start();
include '../../includes/koneksi.php';
if (!isset($_SESSION['nis'])) {
    echo "<script>window.location='../../includes/error.php';</script>";
}else{  
  $year=date("Y");
  $nis=$_SESSION['nis'];
  $sql="SELECT `no_surat_permohonan` FROM `tb_permohonan`";
  $row=mysql_num_rows(mysql_query($sql))+1;
  if ($row<=9) {
    $no_urut="00".$row;
  }elseif ($row>=9&&$row<=99) {
    $no_urut="0".$row;
  }else{
    $no_urut=$row;
  }

  $query="SELECT `nis`,`nama_siswa`,`kelas`,tb_siswa.kode_jurusan FROM `tb_siswa` JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE `nis` = '$nis'";
  $result=mysql_query($query) or die(mysql_error());
  $r=mysql_fetch_array($result);
  $jur=$r['kode_jurusan'];

  $query1="SELECT `nis`,`nama_siswa`,`kelas`,`kode_jurusan` FROM `tb_siswa`";
  $rs=mysql_query($query1);
  $dtsiswa = "var dtsiswa = new Array();\n";
  while ($h=mysql_fetch_array($rs)) {
    $dtsiswa .= "dtsiswa['".$h['nis']."'] = {nis:'".addslashes($h['nis'])."',nama:'".addslashes($h['nama_siswa'])."',kelas:'".addslashes($h['kelas'])."',jurusan:'".addslashes($h['kode_jurusan'])."'};\n";
 }

  $query2="SELECT `nis` FROM `tb_detail_permohonan`";
  $rs2=mysql_query($query2);
  $dtsiswa2 = "var dtsiswa2 = new Array();\n";
  while ($h2=mysql_fetch_array($rs2)) {
    $dtsiswa2 .= "dtsiswa2['".$h2['nis']."'] = {niss:'".addslashes($h2['nis'])."'};\n";
 }

  $query1=mysql_query("SELECT kode_perusahaan FROM tb_perusahaan");
  $row1=mysql_num_rows($query1)+1;
  if ($row1<=9) {
    $kd="P00".$row1;
  }elseif ($row1>=9&&$row1<=99) {
    $kd="P0".$row1;
  }else{
    $kd="P".$row1;
  }
}

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
      padding-top: 20px;
      padding-bottom: 10px;
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
      width: 20%;
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
  <link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />  
  <link rel="stylesheet" href="../../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../../assets/css/default.min.css" type='text/css'  />
  <link href="../../assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="../../assets/js/jquery-1.12.4.js"></script>
  <script src="../../assets/js/jquery-ui.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/alertify.min.js"></script>
  <script>
     $(function() {  
        $( "#perusahaan" ).autocomplete({
         source: "../../includes/sourcedata.php",  
           minLength:1, 
           select: function( event, ui ) {
      $('#textarea').val(ui.item.alamat_perusahaan);
      $('#kode').val(ui.item.id);
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
<?php include '../../includes/header-menu.php';
  $n=$_GET['n'];
  if ($n!="") {
    $query=mysql_query("SELECT kode_perusahaan, nama_perusahaan,alamat_perusahaan FROM tb_perusahaan WHERE kode_perusahaan='$n'") or die(mysql_error());    
  }else{
    $query=mysql_query("SELECT kode_perusahaan,alamat_perusahaan FROM tb_perusahaan") or die(mysql_error());
  }$p=mysql_fetch_array($query);
  ?>
<div class="container">
  <form method="POST" name="pemohonan">
    <div class="col-md-12"> 
      <table align="center" class="form-top-table">
        <tr style="display: none;">
          <td>
            <label>jur</label>
          </td>
          <td><input type="text" id="kdjur" value="<?php echo $jur;?>"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nomor Surat</label>
          </td>
          <td><input class="form-control" type="text" name="noSurat"  value="<?php echo $no_urut;?>/K/SMK-Mdk/E.11/<?php echo $year;?>"></td>
        </tr>
        <tr style="display: none;">
          <td class="form-top-table-td">
            <label>Kode Perusahaan</label>
          </td>
          <td><input type="text" name="kodePerusahaan" class="form-control" id="kode" value="<?php if ($_GET['n']!="") echo $p['kode_perusahaan']; else echo $kd;?>" required></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nama Perusahaan</label>
          </td>
          <td><input type="text" name="namaPerusahaan" class="form-control" id="perusahaan" value="<?php if ($_GET['n']!="") echo $p['nama_perusahaan']; else echo "";?>" required></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Alamat Perusahaan</label>
          </td>
          <td><textarea class="form-control" name="alamatPerusahaan" id="textarea" required><?php if ($_GET['n']!="") echo $p['alamat_perusahaan']; else echo "";?></textarea></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Jenis</label>
          </td>
          <td>
            <label class="radio-inline"><input type="radio" name="jenis" value="1" id="jenis1" onclick="validasiJenis();" checked>Individu</label>
            <label class="radio-inline"><input type="radio" name="jenis" value="0" id="jenis2" onclick="validasiJenis();">Kelompok</label>
        </td>
        </tr>
      </table>
</div>    
  <div class="col-md-12 scroll">      
     <table align="center" class="form-bottom-table" id="table">     
      <tr align="center">
        <td style="width: 10px;">No</td>
        <td>NIS</td>
        <td>Nama Lengkap</td>
        <td>Kelas</td>
        <td>Keterangan</td>           
      </tr>
      <tr align="center">
        <?php 
           $query="SELECT `nis`,`nama_siswa`,`kelas`,tb_siswa.kode_jurusan FROM `tb_siswa` JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan WHERE `nis` = '$nis'";
           $result=mysql_query($query) or die(mysql_error());
           $a=mysql_fetch_array($result);
        ?>
        <td>1</td>
        <td class="nis-kelas"><input type="text" name="nis[]" id="nis" class="form-control" value="<?php echo $a['nis'];?>" style="pointer-events: none;background-color: #E0E0E0;" ></td>
        <td class="nama"><input type="text" name="nama[]" id="nama"  class="form-control" value="<?php echo $a['nama_siswa'];?>" style="pointer-events:none;background-color:#E0E0E0;"></td>
        <td class="nis-kelas"><input type="text" name="kelas[]" id="kelas" class="form-control" value="<?php echo $a['kelas'];?>" style="pointer-events: none;background-color: #E0E0E0;"></td>
        <td class="ket"><input type="text" name="ket[]" id="ket" class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
      </tr>
      <tr align="center">
        <td>2</td>
        <td><input type="text" name="nis[]" id="nis1" class="form-control" onkeypress="return fillData(this.value,1,event);" onchange="data(this.value,1);" autocomplete="off" style="pointer-events: none;background-color: #E0E0E0;" ></td>
        <td><input type="text" name="nama[]" id="nama1" class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
        <td><input type="text" name="kelas[]" id="kelas1" class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
        <td><input type="text" name="ket[]" id="ket1" class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
      </tr>
      <tr align="center">
        <td>3</td>
        <td><input type="text" name="nis[]" id="nis2" class="form-control" onkeypress="return fillData(this.value,2,event);" autocomplete="off" style="pointer-events: none;background-color: #E0E0E0;" ></td>
        <td><input type="text" name="nama[]" id="nama2" class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
        <td><input type="text" name="kelas[]" id="kelas2" class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
        <td><input type="text" name="ket[]" id="ket2" class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
      </tr>
      <tr align="center">
        <td>4</td>
        <td><input type="text" name="nis[]" id="nis3" class="form-control" onkeypress="return fillData(this.value,3,event);" autocomplete="off" style="pointer-events: none;background-color: #E0E0E0;" ></td>
        <td><input type="text" name="nama[]" id="nama3"  class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
        <td><input type="text" name="kelas[]" id="kelas3"  class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
        <td><input type="text" name="ket[]" id="ket3"  class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
      </tr> 
      <tr align="center">
        <td>5</td>
        <td><input type="text" name="nis[]" id="nis4" class="form-control" onkeypress="return fillData(this.value,4,event);" autocomplete="off" style="pointer-events: none;background-color: #E0E0E0;" ></td>
        <td><input type="text" name="nama[]" id="nama4"  class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
        <td><input type="text" name="kelas[]" id="kelas4"  class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
        <td><input type="text" name="ket[]" id="ket4"  class="form-control" style="pointer-events: none;background-color: #E0E0E0;"></td>
      </tr> 
    </table>
</div>
<center><input type="submit" name="simpan" id="simpan" value="Simpan" class="btn btn-success"></center>
</form>

</div><p>
<script type="text/javascript">
  
  function fillData(nis,posisi,e){
    <?php echo $dtsiswa, $dtsiswa2;?>
    var jur=document.getElementById("kdjur").value;
     switch(posisi){
      case 1 : {    
      if (e.keyCode === 13) {
        document.getElementById('nama1').value=dtsiswa[nis].nama;
        if (dtsiswa[nis].jurusan==jur) {
          document.getElementById("nis2").focus();
          document.getElementById("nama1").value = dtsiswa[nis].nama;
          document.getElementById("kelas1").value = dtsiswa[nis].kelas;
        }else{
          alertify.alert("Anggota Harus Satu Jurusan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById('nis1').value="";
          document.getElementById("nama1").value ="";
          document.getElementById("kelas1").value ="";
        }
        var nis1=dtsiswa[nis].nis;
        var nis2=dtsiswa2[nis].niss;
        if (nis1==nis2) {
          alertify.alert(dtsiswa[nis].nama+" Sudah Melakukan Permohonan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById("nis1").focus();
          document.getElementById('nis1').value="";
          document.getElementById('nama1').value="";
          document.getElementById('kelas1').value="";
        }       
      } 
      }break;
      case 2 : {
      if (e.keyCode === 13) {
        if (dtsiswa[nis].jurusan==jur) {
          document.getElementById("nis3").focus();
          document.getElementById("nama2").value = dtsiswa[nis].nama;
          document.getElementById("kelas2").value = dtsiswa[nis].kelas;
        }else{
          alertify.alert("Anggota Harus Satu Jurusan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById('nis2').value="";
          document.getElementById("nama2").value ="";
          document.getElementById("kelas2").value ="";
        }
        var nis1=dtsiswa[nis].nis;
        var nis2=dtsiswa2[nis].niss;
        if (nis1==nis2) {
          alertify.alert(dtsiswa[nis].nama+" Sudah Melakukan Permohonan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById("nis2").focus();
          document.getElementById('nis2').value="";
          document.getElementById('nama2').value="";
          document.getElementById('kelas2').value="";
        }         
      }
      }break;
      case 3 : {        
      if (e.keyCode === 13) {
        if (dtsiswa[nis].jurusan==jur) {
        document.getElementById("nis4").focus();
        document.getElementById("nama3").value = dtsiswa[nis].nama;
        document.getElementById("kelas3").value = dtsiswa[nis].kelas;
      }else{
          alertify.alert("Anggota Harus Satu Jurusan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById('nis3').value="";
          document.getElementById("nama3").value ="";
          document.getElementById("kelas3").value ="";
        }
        var nis1=dtsiswa[nis].nis;
        var nis2=dtsiswa2[nis].niss;
        if (nis1==nis2) {
          alertify.alert(dtsiswa[nis].nama+" Sudah Melakukan Permohonan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById("nis3").focus();
          document.getElementById('nis3').value="";
          document.getElementById('nama3').value="";
          document.getElementById('kelas3').value="";
        }        
      }
      }break;
      case 4 : {        
      if (e.keyCode === 13) {
        if (dtsiswa[nis].jurusan==jur) {
        document.getElementById("nama4").value = dtsiswa[nis].nama;
        document.getElementById("kelas4").value = dtsiswa[nis].kelas;
      }else{
          alertify.alert("Anggota Harus Satu Jurusan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById("nama4").value ="";
          document.getElementById("kelas4").value ="";
        }
        var nis1=dtsiswa[nis].nis;
        var nis2=dtsiswa2[nis].niss;
        if (nis1==nis2) {
          alertify.alert(dtsiswa[nis].nama+" Sudah Melakukan Permohonan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById("nis4").focus();
          document.getElementById('nis4').value="";
          document.getElementById('nama4').value="";
          document.getElementById('kelas4').value="";
        }        
      }
      }break;
    }
  }
function data(nis,posisi){
    <?php echo $dtsiswa;?>
    var jur=document.getElementById("kdjur").value;
     switch(posisi){
      case 1 : {    
        if (dtsiswa[nis].jurusan==jur) {
          document.getElementById("nis2").focus();
          document.getElementById("nama1").value = dtsiswa[nis].nama;
          document.getElementById("kelas1").value = dtsiswa[nis].kelas;
        }else{
          alertify.alert("Anggota Harus Satu Jurusan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById("nis1").value ="";
          document.getElementById("nis1").focus();
          document.getElementById("nama1").value ="";
          document.getElementById("kelas1").value ="";
        }         
      }break;
      case 2 : {
        if (dtsiswa[nis].jurusan==jur) {
          document.getElementById("nis3").focus();
          document.getElementById("nama2").value = dtsiswa[nis].nama;
          document.getElementById("kelas2").value = dtsiswa[nis].kelas;
        }else{
          alertify.alert("Anggota Harus Satu Jurusan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById("nis2").value ="";
          document.getElementById("nis2").focus();
          document.getElementById("nama2").value ="";
          document.getElementById("kelas2").value ="";
        }
      }break;
      case 3 : {        
        if (dtsiswa[nis].jurusan==jur) {
        document.getElementById("nis4").focus();
        document.getElementById("nama3").value = dtsiswa[nis].nama;
        document.getElementById("kelas3").value = dtsiswa[nis].kelas;
      }else{
          alertify.alert("Anggota Harus Satu Jurusan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById("nis3").value ="";
          document.getElementById("nis3").focus();
          document.getElementById("nama3").value ="";
          document.getElementById("kelas3").value ="";
        } 
      }break;
      case 4 : {       
        if (dtsiswa[nis].jurusan==jur) {
        document.getElementById("nama4").value = dtsiswa[nis].nama;
        document.getElementById("kelas4").value = dtsiswa[nis].kelas;
      }else{
          alertify.alert("Anggota Harus Satu Jurusan").setHeader('Perhatian').set({'closable':false,});
          document.getElementById("nis4").value ="";
          document.getElementById("nis4").focus();
          document.getElementById("nama4").value ="";
          document.getElementById("kelas4").value ="";
        } 
      }break;
    }
  
  }
  function validasiJenis() {
    if (document.getElementById("jenis2").checked == true) {
        document.getElementById("nis1").style.backgroundColor = "rgb(245,245,245)";
        document.getElementById("nis2").style.backgroundColor = "rgb(245,245,245)";
        document.getElementById("nis3").style.backgroundColor = "rgb(245,245,245)";
        document.getElementById("nis4").style.backgroundColor = "rgb(245,245,245)";
        document.getElementById("nis1").style.pointerEvents = "auto";
        document.getElementById("nis2").style.pointerEvents = "auto";
        document.getElementById("nis3").style.pointerEvents = "auto";   
        document.getElementById("nis4").style.pointerEvents = "auto";     
    }else{
        document.getElementById("nis1").style.backgroundColor = "rgb(224,224,224)";
        document.getElementById("nis2").style.backgroundColor = "rgb(224,224,224)";
        document.getElementById("nis3").style.backgroundColor = "rgb(224,224,224)";
        document.getElementById("nis4").style.backgroundColor = "rgb(224,224,224)";     
        document.getElementById("nis1").style.pointerEvents = "none";
        document.getElementById("nis2").style.pointerEvents = "none";
        document.getElementById("nis3").style.pointerEvents = "none";
        document.getElementById("nis4").style.pointerEvents = "none";
        document.getElementById("nis1").value = "";
        document.getElementById("nis2").value = "";
        document.getElementById("nis3").value = "";
        document.getElementById("nis4").value = "";
        document.getElementById("nama1").value = "";
        document.getElementById("nama2").value = "";
        document.getElementById("nama3").value = "";
        document.getElementById("nama4").value = "";
        document.getElementById("kelas1").value = "";
        document.getElementById("kelas2").value = "";
        document.getElementById("kelas3").value = "";
        document.getElementById("kelas4").value = "";
    }    
    }
</script>
<?php
if (isset($_POST['simpan'])) {
  $q=mysql_query("SELECT tgl_mulai_kp, tgl_akhir_kp FROM tb_settings");
  $h=mysql_fetch_array($q);
  $noSurat = $_POST['noSurat'];
  $kodePerusahaan = $_POST['kodePerusahaan'];
  $namaPerusahaan = $_POST['namaPerusahaan'];
  $alamatPerusahaan = $_POST['alamatPerusahaan'];
  $tgl_permohonan=date("Y-m-d");
  $tgl_mulai_kp=$h['tgl_mulai_kp'];
  $tgl_akhir_kp=$h['tgl_akhir_kp'];
  $nis = $_POST['nis'];
  $anggota = count($nis);

  $cekKode=$query1=mysql_query("SELECT kode_perusahaan FROM tb_perusahaan WHERE nama_perusahaan LIKE '%$namaPerusahaan%'");
  $row2=mysql_num_rows($query1);
  if ($row2==0) {
    $qq="SELECT kode_perusahaan FROM tb_perusahaan";
    $rr=mysql_query($qq) or die(mysql_error());
    $nn=mysql_num_rows($rr)+1;
    if ($nn<=9) {
      $noperusahaan="P00".$nn;
    }elseif ($nn>=9&&$nn<=99) {
      $noperusahaan="P0".$nn;
    }else{
      $noperusahaan="P".$nn;
    }
    $query1="INSERT INTO `tb_perusahaan` (kode_perusahaan, nama_perusahaan, alamat_perusahaan, p1, p2, p3, p4, p5, p6) VALUES ('$noperusahaan', '$namaPerusahaan', '$alamatPerusahaan', '0','0','0','0','0','0')";
    $r1=mysql_query($query1) or die(mysql_error());
  }
  
  $query="INSERT INTO `tb_permohonan` (`no_surat_permohonan`, `tgl_mulai_kp`, `tgl_akhir_kp`, `kode_perusahaan`) VALUES ('$noSurat', '$tgl_mulai_kp', '$tgl_akhir_kp', '$kodePerusahaan');";
  $result=mysql_query($query) or die(mysql_error());
  for($x=0;$x<$anggota;$x++){
    if ($nis[$x]!="") {
     $query="INSERT INTO `tb_detail_permohonan` (`no_surat_permohonan`, `nis`, `tgl_permohonan`,`tgl_disetujui`,`status_permohonan`) VALUES ('$noSurat','$nis[$x]','$tgl_permohonan','','0');";
     $result=mysql_query($query) or die(mysql_error());
    }    
  }
  if ($result&&$x>0) {    
  ?>
    <script type="text/javascript"> 
    alertify.alert('Surat Akan Diproses<br>Silahkan Cek Status Permohonan', function(){ window.location.assign('page-permohonan_control.php')}).setHeader('Perhatian').set({'closable':false,}); 
  </script>
  <?php
  }
}
?>
</body>
</html>