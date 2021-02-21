<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Guru</title>
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
  <style type="text/css">
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
    .form-top-table{
        width: 80%;
    }
    .form-top-table-td{
      width: 25%;
      text-align: right;
      padding-right: 10px;
    }
  </style>
</head>
<body>
	<?php 
		include '../includes/koneksi.php';
		include '../includes/header-menu-admin.php';
		$query="SELECT kode_guru FROM tb_guru";
		$row=mysql_num_rows(mysql_query($query))+1;
  		if ($row<=9) {
    		$no_urut="00".$row;
  		}elseif ($row>=9&&$row<=99) {
    		$no_urut="0".$row;
  		}else{
    		$no_urut=$row;
  		}
	?>
	<div class="container">
  <form name="data_guru" method="POST">
    <div class="col-md-12"> 
      <table align="center" class="form-top-table">
        <tr>
          <td class="form-top-table-td">
            <label>Kode Guru</label>
          </td>
          <td><input type="text" name="kode_guru" class="form-control" value="G<?php echo $no_urut;?>" style="pointer-events: none;"></td>
        </tr>
        <tr>
          <tr>
          <td class="form-top-table-td">
            <label>NIP</label>
          </td>
          <td><input type="text" name="nip" class="form-control" placeholder="Jika Tidak Ada Silahkan Kosongkan"></td>
        </tr>
        <tr>
        <tr>
          <td class="form-top-table-td">
            <label>NUPTK</label>
          </td>
          <td><input type="text" name="nuptk" class="form-control" placeholder="Jika Tidak Ada Silahkan Kosongkan"></td>
        </tr>
        <tr>
        <tr>
          <td class="form-top-table-td">
            <label>Nama Guru</label>
          </td>
          <td><input type="text" name="nama_guru" class="form-control"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Jenis Kelamin</label>
          </td>
          <td>  <input type="radio" name="jk" value="1">Laki-Laki
				<input type="radio" name="jk" value="0">Perempuan</td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Pangkat - Golongan</label>
          </td>
          <td><input type="text" name="pangkat_gol" class="form-control"></td>
        </tr>
        <tr>
          <td class="form-top-table-td">
            <label>Jabatan</label>
          </td>
          <td><input type="text" name="jabatan" class="form-control"></td>
        </tr>
      </table>
      <center><input type="submit" name="simpan" value="Simpan" class="btn btn-outline-success"></center>
</div><br>

</form>
</div>
<?php
	if (isset($_POST['simpan'])) {
		$kode_guru=$_POST['kode_guru'];
		$nama_guru=addslashes($_POST['nama_guru']);
		$jenis_kelamin=$_POST['jk'];
		$jabatan=$_POST['jabatan'];
		if ($_POST['nip']==null) {
			$nip='-';
		}else{
			$nip=$_POST['nip'];
		}

		if ($_POST['nuptk']==null) {
			$nuptk='-';
		}else{
			$nuptk=$_POST['nuptk'];
		}

		if ($_POST['pangkat_gol']==null) {
			$pangkat_gol='-';
		}else{
			$pangkat_gol=$_POST['pangkat_gol'];
		}

		$query="INSERT INTO `tb_guru` (`kode_guru`, `nip`, `nuptk`, `nama_guru`, `jk`, `pangkat_gol`, `jabatan`) VALUES ('$kode_guru','$nip','$nuptk','$nama_guru','$jenis_kelamin','$pangkat_gol','$jabatan');";
		$res=mysql_query($query) or die(mysql_error());
		if ($res) { ?>
			<script type="text/javascript">alert('berhasil');window.location.assign('data_guru.php');</script>
		<?php
		}else{ ?>
			<script type="text/javascript">alert('gagal');</script>
		<?php
		}
	}
?>
</body>
</html>