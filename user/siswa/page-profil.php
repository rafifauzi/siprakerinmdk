<?php 
session_start();
include '../../includes/koneksi.php';
if (!isset($_SESSION['nis'])) {
    echo "<script>window.location='../../includes/error.php';</script>";
}else if($_SESSION['nis']!=$_GET['n']){
    echo "<script>window.location='../../includes/error.php';</script>"; 
}else{
    $nis=$_GET['n'];
    $query="SELECT foto, nama_siswa, nis, kelas, alamat_siswa, tb_siswa.jk, tempat_lahir, tanggal_lahir, nama_jurusan, nama_guru, gd, cat_kes, no_hp, nm_ortu, kerja_ortu, alamat_ortu, no_hp_ortu, tb_siswa.kode_jurusan, tb_siswa.kode_guru FROM `tb_siswa` JOIN `tb_jurusan` ON tb_siswa.kode_jurusan=tb_jurusan.kode_jurusan JOIN `tb_guru` ON tb_siswa.kode_guru=tb_guru.kode_guru WHERE `nis`='$nis'";
    $result=mysql_query($query) or die(mysql_error());
    $hasil=mysql_fetch_array($result);
    if ($hasil['jk']=='1') {
      $jk='Laki-Laki';
    }
    else{
      $jk='Perempuan';
    }
    $tgl_lahir=date("Y-m-d",strtotime($hasil['tanggal_lahir']));
    $date=date("Y");
    $date1=$date+1;
    $thn_ajaran=$date."/".$date1;
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
    }.container h3{
      text-align:center;
      padding:20px 0px 2px 0px;
    }
    .display-picture{
      width: 160px;
      height: 240px;
      padding-right: 5px;
    }
    .pass{
      margin-bottom: 10px;
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
    .container label{
      margin-top: 10px;
    }
    .btn-group{
      align-items: center;
    }
    #textarea,#textarea1,input[type=text],input[type=number]{
      color: #000;
      resize: none;
      pointer-events: none
    }
    .verifikasi{
      background-color: #e5e5e5;
      padding: 10px;
      font-size: 12pt;
      border-radius: 5px;
    }
    @media screen and (max-width: 600px) {
      .display-picture{
        width: 120px;
        height: 180px;
      }
      .col-sm-3,#date1,#sel1,#textarea,#textarea1,#btn,#jurusan,#walikelas,#gd,#jk,#kerja_ortu,input[type=date],input[type=text],input[type=number],input[type=file]{  
            font-size: 12px;
        } 
     
      }
  </style>
  <title><?php echo $hasil['nama_siswa'];?></title>
  <link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='../../assets/img/favicon.ico' />  
  <link rel="stylesheet" href="../../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../../assets/css/default.min.css" type='text/css'  />
  <link href="../../assets/css/bootstrap.min.css" rel='stylesheet' type='text/css'/> 
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/alertify.min.js"></script>
</head>
<body>
<?php 
include '../../includes/header-menu.php';
//email cek
    $q=mysql_query("SELECT kode, email FROM tb_user WHERE username='$nis'") or die(mysql_error());
    $r1=mysql_fetch_array($q);
    if ($r1['kode']=='') {
      $c='#B2FF59;';
      $d="display:none;";
    }else{      
      $c='#FF4081;';
      $d="display:block;";
      echo "<script>
      alertify.set('notifier','position', 'bottom-center'); 
      alertify.error('Segera Verifikasi Email Anda');
      </script>";
    }
?>
<form method="POST" name="biodata">
<div class="container">
  <div class="row">
    <div class="col-sm-3 col-md-6">
      <table>
        <tr>
          <td width="170">
            <img src="../../assets/img/fp/<?php echo $hasil['foto'];?>?<?php echo $hasil['nis'];?>" class="display-picture">
        </td>     
        <td width="400">
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" autocomplete="off" value="<?php echo $hasil['nama_siswa'];?>" style="pointer-events: none;">
              <label>NIS</label>
              <input type="number" class="form-control" id="nis" name="nis" autocomplete="off" value="<?php echo $hasil['nis'];?>" style="pointer-events: none;">
              <label>Kelas</label>
              <input type="text" class="form-control" id="kelas" name="kelas" autocomplete="off" value="<?php echo $hasil['kelas'];?>" style="pointer-events: none;">
          </div>
        </td>
        </tr>
      </table>
    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat_siswa" id="textarea" autocomplete="off" rows="3" style="pointer-events: none;"><?php echo $hasil['alamat_siswa'];?></textarea>
        <label>Jenis Kelamin</label>
        <select class="form-control" id="jk" name="jk" style="pointer-events: none; color: #000;">
          <option value="<?php echo $hasil['jk'];?>"><?php echo $jk;?></option>
          <option value="1">Laki-Laki</option>
          <option value="0">Perempuan</option>
        </select>
        <label>Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" id="tmpt_lahir" autocomplete="off" value="<?php echo $hasil['tempat_lahir'];?>" style="pointer-events: none;">        
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" autocomplete="off" value="<?php echo $tgl_lahir;?>" style="pointer-events: none; color: #000;">
        <label>Kompetensi Keahlian</label>
        <select class="form-control" id="jurusan" name="kode_jurusan" style="color: #000;pointer-events: none;">
          <option value="<?php echo $hasil['kode_jurusan'];?>"><?php echo $hasil['nama_jurusan'];?></option>
          <?php 
          $query="SELECT * FROM `tb_jurusan` ORDER BY nama_jurusan";
          $result=mysql_query($query) or mysql_error();
          while ($r=mysql_fetch_array($result)) { ?>
            <option value="<?php echo $r['kode_jurusan'];?>"><?php echo $r['nama_jurusan'];?></option>
          <?php
          }
          ?>
        </select>
        <label>Wali Kelas</label>
        <select class="form-control" id="walikelas" name="kode_guru" style="color: #000;pointer-events: none;">
          <option value="<?php echo $hasil['kode_guru'];?>"><?php echo $hasil['nama_guru'];?></option>
          <?php 
          $query="SELECT * FROM `tb_guru` ORDER BY kode_guru";
          $result=mysql_query($query) or mysql_error();
          while ($r=mysql_fetch_array($result)) { ?>
            <option value="<?php echo $r['kode_guru'];?>"><?php echo $r['nama_guru'];?></option>
          <?php
          }
          ?>
        </select>
        <label>Tahun Ajaran</label>
        <input type="text" class="form-control" id="thn_ajaran" name="thn_ajaran" autocomplete="off" value="<?php echo $thn_ajaran;?>" style="pointer-events: none;">        
      </div>
    </div>
    <div class="col-sm-3 col-md-6">
      <label>Golongan Darah</label>
        <select class="form-control" id="gd" name="gd" style="pointer-events: none; color: #000;">
          <option><?php echo $hasil['gd'];?></option>
          <option>A</option>
          <option>B</option>
          <option>AB</option>
          <option>O</option>
        </select> 
      <div class="form-group">        
        <label>Catatan Kesehatan</label>
        <input type="text" class="form-control" id="cat_kes" name="cat_kes" autocomplete="off" value="<?php echo $hasil['cat_kes'];?>" style="pointer-events: none;">
        <label>Email</label>
        <input type="text" class="form-control" id="email" name="email" autocomplete="off" value="<?php echo $r1['email'];?>" style="pointer-events: none; background-color:<?=$c;?>">
        <p>

        <div class="verifikasi" style="<?=$d;?>">
            <form name="ver" method="POST">
            <input type="text" name="kdVerifikasi" id="kdVer" class="form-control" placeholder="Masukan Kode Verifikasi" style="pointer-events: auto; margin-bottom: 5px;" disabled>
            <button type="submit" name="ubahVer" id="upVer" class="btn btn-outline-dark btn-sm" disabled>Verifikasi Email</button>
            </form>
            <button type="button" id="sendVer" class="btn btn-outline-info btn-sm" onclick="verification(<?php echo $hasil['nis'];?>)">Kirim Kode Verifikasi</button>
        </div>

        <label>No Hp</label>
        <input type="text" class="form-control" id="no_hp" name="no_hp" autocomplete="off" value="<?php echo $hasil['no_hp'];?>" style="pointer-events: none;">  
             
        <label>Nama Orang Tua/Wali</label>
        <input type="text" class="form-control" id="nm_ortu" name="nm_ortu" autocomplete="off" value="<?php echo $hasil['nm_ortu'];?>" style="pointer-events: none;">
        <label>Pekerjaan Orang Tua/Wali</label>
        <select class="form-control" id="kerja_ortu" name="kerja_ortu" style="pointer-events: none; color: #000;">
          <option><?php echo $hasil['kerja_ortu'];?></option>
          <option>Pegawai Negeri Sipil (PNS)</option>
          <option>Pegawai Swasta</option>
          <option>Wiraswasta</option>
          <option>POLRI / TNI </option>
          <option>Belum memiliki pekerjaan</option>
        </select>
        <label >Alamat Orang Tua/Wali</label>
        <textarea class="form-control" id="textarea1" id="alamat_ortu" name="alamat_ortu" autocomplete="off" rows="3" style="pointer-events: none;"><?php echo $hasil['alamat_ortu'];?></textarea>
        <label>No Hp Orang Tua/Wali</label>
        <input type="number" class="form-control" id="no_hp_ortu" name="no_hp_ortu" autocomplete="off" value="<?php echo $hasil['no_hp_ortu'];?>" style="pointer-events: none;"> 
        </div> 

          <div class="verifikasi">
            <form name="ver" method="POST" enctype="multipart/form-data">
              <label id="l2">Ubah Foto Profil (Hanya JPG)</label>
              <input type="file" class="form-control" id="foto" name="foto" autocomplete="off" style="margin-bottom: 10px;">
              <button type="submit" name="btnfoto" id="btnfoto" class="btn btn-outline-primary btn-sm">Simpan Foto Profil</button>
            </form>
        </div>

    </div>    
  </div>
 <p>
  <center>
      <div class="btn-group" style="margin-bottom: 10px;">  
        <button type="button" class="btn btn-info" id="btn" onclick="editForm()">Edit</button>       
        <input type="submit" name="simpan" class="btn btn-success" id="btn" disabled value="Simpan">
        <button type="button"  name="Ubahpass" class="btn btn-dark"  data-toggle="modal" data-target="#myModal" disabled>Ubah Password</button>
        <button type="reset"  name="batal" class="btn btn-danger" onclick="window.location.assign('page-profil.php?n=<?=$nis;?>');" disabled>Batal</button>
      </div>
      </center> 
</div><p>
</form>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">      
        <!-- Modal Header -->
        <div class="modal-header">
          <center><h5>- Ubah Password -</h5></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form method="POST" name="quetion">
              <input type="text" name="username" class="form-control pass" placeholder="Username"  autocomplete="off" required style="pointer-events: auto;">
              <input type="password" name="passLama" class="form-control pass" placeholder="Password Lama"  autocomplete="off" required>
              <input type="password" name="passBaru" class="form-control pass" placeholder="Password Baru"  autocomplete="off" required>
              <input type="submit" class="btn btn-outline-primary form-control" name="ubah" value="Ubah">
            </form>
        </div>             
      </div>
    </div>
  </div> 

<?php
  if (isset($_POST['simpan'])) {
    $nis=$_POST['nis'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat_siswa'];
    $jk=$_POST['jk'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tgl_lahir=substr($_POST['tgl_lahir'],8,2);
    $bln_lahir=substr($_POST['tgl_lahir'],5,2);
    $thn_lahir=substr($_POST['tgl_lahir'],0,4);
    $tanggal_lahir=$thn_lahir."-".$bln_lahir."-".$tgl_lahir;
    $gd=$_POST['gd'];
    $cat_kes=$_POST['cat_kes'];
    $kode_jurusan=$_POST['kode_jurusan'];
    $kode_guru=$_POST['kode_guru'];
    $thn_ajaran=$_POST['thn_ajaran'];
    $no_hp=$_POST['no_hp'];
    $nm_ortu=$_POST['nm_ortu'];
    $kerja_ortu=$_POST['kerja_ortu'];
    $alamat_ortu=$_POST['alamat_ortu'];
    $no_hp_ortu=$_POST['no_hp_ortu'];
    $email=$_POST['email'];
    $username=$_POST['nis'];
    $query="UPDATE `tb_siswa` SET `nis` = '$nis', `nama_siswa` = '$nama_lengkap', `kelas` = '$kelas', `tempat_lahir` = '$tempat_lahir', `tanggal_lahir` = '$tanggal_lahir', `jk` = '$jk', `gd` = '$gd', `alamat_siswa` = '$alamat', `cat_kes` = '$cat_kes', `nm_ortu` = '$nm_ortu', `alamat_ortu` = '$alamat_ortu', `kerja_ortu` = '$kerja_ortu', `no_hp_ortu` = '$no_hp_ortu', `thn_ajaran` = '$thn_ajaran', `no_hp` = '$no_hp', `kode_jurusan` = '$kode_jurusan', `kode_guru` = '$kode_guru' WHERE `tb_siswa`.`nis` = '$nis';";
    $result=mysql_query($query) or die(mysql_error());
    if ($result) { ?>
        <script type="text/javascript">
        alertify.confirm('Berhasil Diedit', function(){window.location.assign('page-profil.php?n=<?=$nis?>')}).autoOk(3);
        </script>
        <?php
    }
  }
  if (isset($_POST['btnfoto'])) {
    $ekstensi_diperbolehkan = array('jpg');
    $file = $_FILES['foto']['name'];
    $x = explode('.', $file);
    $nama=strtolower(current($x));
    $ekstensi = strtolower(end($x));
    $namaBaru=$nis.".".$ekstensi;
    $ukuran = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070 && $ukuran !=0){      
      move_uploaded_file($file_tmp, '../../assets/img/fp/'.$namaBaru);
      $query2 = "UPDATE tb_siswa SET foto='$namaBaru'";
      $result2 = mysql_query($query2) or die(mysql_error()); 
      if ($result2) { ?>
        <script type="text/javascript">
        alertify.confirm('Foto Berhasil Diubah', function(){window.location.assign('page-profil.php?n=<?=$nis?>')}).autoOk(3);
        </script>
        <?php
      }     
    }else{?>
      <script type="text/javascript">
      alertify.error('File Terlalu Besar');
      </script>
    <?php
    }
    }else{?>
      <script type="text/javascript">
      alertify.error('Tipe File Tidak Didukung');
      </script>
    <?php
    }
  }
  if (isset($_POST['ubah'])) {
    $username=$_POST['username'];
    $passLama=$_POST['passLama'];
    $passBaru=$_POST['passBaru'];
    $cekPass="SELECT pass FROM tb_user WHERE pass='$passLama'";
    $rsPass=mysql_query($cekPass) or die(mysql_error());
    $hsPass=mysql_fetch_array($rsPass);
    if ($hsPass['pass']==$passLama) {
      $updatePass="UPDATE tb_user SET pass='$passBaru' WHERE username='$username' AND pass='$passLama'";
      $rsUpdate=mysql_query($updatePass) or die(mysql_error());
      if ($rsUpdate) { 
        ?>
          <script type="text/javascript">
            alertify.alert('Password Telah Diubah').setHeader('Perhatian').autoOk(3);
          </script>
        <?php
      }else{
        ?>
          <script type="text/javascript">
            alertify.alert('Password Gagal Diubah').setHeader('Perhatian').autoOk(3);
          </script>
        <?php
      }
    }else{
      ?>
        <script type="text/javascript">
          alertify.alert('Password Lama Salah atau Username Tidak Sesuai').setHeader('Perhatian').autoOk(3);
        </script>
      <?php
    }
  }
  
  if (isset($_POST['ubahVer'])) {
    $nis=$_POST['nis'];
    $kode=$_POST['kdVerifikasi'];
    $q=mysql_query("SELECT kode FROM tb_user WHERE username='$nis'");
    $r=mysql_fetch_array($q);
    if ($r['kode']==$kode) {
      $up="UPDATE tb_user SET kode='' WHERE username='$nis'";
      $rp=mysql_query($up) or die(mysql_error());
      if ($rp) { ?>
        <script type="text/javascript">
          alertify.set('notifier','position', 'bottom-center'); 
          alertify.success('Email Anda Telah Terverifikasi');
          window.location.assign('page-profil.php?n='+<?=$nis?>);
        </script>
      <?php
      }
    }
    else{ ?>
        <script type="text/javascript">
          alertify.set('notifier','position', 'bottom-center'); 
          alertify.error('Kode Verifikasi Tidak Sesuai');
        </script>
      <?php      
    }
  }
?>
<script type="text/javascript">
  function editForm(){
    document.biodata.simpan.disabled = false;  
    document.biodata.batal.disabled = false;    
    document.biodata.Ubahpass.disabled = false; 
    document.getElementById("nama_lengkap").style.pointerEvents = "auto";
    document.getElementById("nis").style.pointerEvents = "auto";
    document.getElementById("kelas").style.pointerEvents = "auto";
    document.getElementById("textarea").style.pointerEvents = "auto";
    document.getElementById("jk").style.pointerEvents = "auto";
    document.getElementById("tgl_lahir").style.pointerEvents = "auto";
    document.getElementById("tmpt_lahir").style.pointerEvents = "auto";
    document.getElementById("jurusan").style.pointerEvents = "auto";
    document.getElementById("walikelas").style.pointerEvents = "auto";
    document.getElementById("gd").style.pointerEvents = "auto";
    document.getElementById("cat_kes").style.pointerEvents = "auto";
    document.getElementById("email").style.pointerEvents = "auto";
    document.getElementById("no_hp").style.pointerEvents = "auto";
    document.getElementById("nm_ortu").style.pointerEvents = "auto";
    document.getElementById("kerja_ortu").style.pointerEvents = "auto";
    document.getElementById("textarea1").style.pointerEvents = "auto";
    document.getElementById("no_hp_ortu").style.pointerEvents = "auto";
    document.getElementById("thn_ajaran").style.pointerEvents = "auto";
    document.getElementById("foto").style.display = "block";
    document.getElementById("l2").style.display = "block";
  }
  function verification(nis){
    document.getElementById("kdVer").disabled = false; 
    document.getElementById("upVer").disabled = false; 
    window.open('../../mail.php?n='+<?=$nis;?>,'_blank');
  }
</script>
</body>
</html>