<?php 
session_start();
include '../includes/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
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
        width: 80%;
    }
    .form-top-table-td{
      width: 25%;
      text-align: right;
      padding-right: 10px;
    }
    .form-bottom-table {
        width: auto;
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
      padding:4px;
      border: 1px solid #000;
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
      pointer-events: none;
    } 
    input[type="number"]{
      pointer-events: none;
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
  <link rel="stylesheet" href="../assets/css/alertify.min.css" type='text/css' />
  <link rel="stylesheet" href="../assets/css/default.min.css" type='text/css'  />
  <script src="../assets/js/alertify.min.js"></script>
  <script src="../assets/js/jquery-1.12.4.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script>
    $(document).on('keyup keypress', 'form input[type="text"]', function(e) {
    if(e.which == 13) { e.preventDefault(); return false;  }  });
  </script>
</head>
<body>
<?php include '../includes/header-menu-admin.php';?>
<div class="container">
    <div class="col-md-12"> 
            <label>NIS</label>
            <input class="form-control" type="text" name="noSurat" style="pointer-events: none;" value="<?=$_GET['n'];?>">
</div><br>
  <div class="col-md-12 scroll">      
     <table border="1" class="form-bottom-table" style="border-collapse: collapse;">     
      <tr align="center">
        <td style="width: 10px;" rowspan="2">No</td>
        <td rowspan="2">jumlah prakerin</td>
        <td colspan="6">Penilaian Laporan</td>  
        <td rowspan="2">Nilai Sekolah</td> 
        <td rowspan="2">Nilai Perusahaan</td> 
        <td rowspan="2">Nilai Rata-Rata</td> 
        <td rowspan="2">Nilai Kompulatif</td>        
      </tr>
      <tr align="center">
        <td>Isi Laporan</td>
        <td>Penggunaan Bahasa</td>
        <td>Kerapihan Laporan</td>
        <td>Sikap</td>
        <td>Penguasaan Materi</td>
        <td>Menggungkapkan Pendapat</td>          
      </tr>
      <?php 
        $nis=$_GET['n'];
        $query="SELECT * FROM tb_nilai WHERE nis='$nis'";          
        $result=mysql_query($query) or die(mysql_error());
          $no=1;
            while ($hasil=mysql_fetch_array($result)) { ?>
              <tr align="center">
                <td><?php echo $no++;?></td>
                <td><input type="number" name="n1" class="form-control" value="<?=$hasil['jml_prakerin'];?>" id="n1"></td>
                <td><input type="number" name="n2" class="form-control" value="<?=$hasil['nilai_isi_laporan'];?>" id="n2"></td> 
                <td><input type="number" name="n2" class="form-control" value="<?=$hasil['nilai_penggunaan_bhs'];?>" id="n2"></td> 
                <td><input type="number" name="n2" class="form-control" value="<?=$hasil['nilai_kerapihan_laporan'];?>" id="n2"></td> 
                <td><input type="number" name="n2" class="form-control" value="<?=$hasil['nilai_sikap'];?>" id="n2"></td> 
                <td><input type="number" name="n2" class="form-control" value="<?=$hasil['nilai_penguasaan_materi'];?>" id="n2"></td> 
                <td><input type="number" name="n2" class="form-control" value="<?=$hasil['nilai_mengungkapkan_pendapat'];?>" id="n2"></td> 
                <td><input type="number" name="n2" class="form-control" value="<?=$hasil['jumlah_ns'];?>" id="n2"></td>       
                <td><input type="number" name="n2" class="form-control" value="<?=$hasil['nilai_perusahaan'];?>" id="n2"></td> 
                <td><input type="text" name="n2" class="form-control" value="<?=$hasil['nilai_rata_rata'];?>" id="n2"></td> 
                <td><input type="text" name="n2" class="form-control" value="<?=$hasil['nilai_komulatif'];?>" id="n2"></td> 
              </tr>
          <?php
          }
      ?>
    </table>
    <label>Spesifikasi Pekerjaan</label>
    <?php 
    $nis2=$_GET['n'];
    $query2="SELECT * FROM tb_nilai WHERE nis='$nis2'";          
    $result2=mysql_query($query2) or die(mysql_error());
    $job=mysql_fetch_array($result2);
    ?>
    <textarea name="jobDesk" class="form-control" id="jobDesk" style="resize: none;"><?=$job['spesifikasi_pekerjaan'];?></textarea>
</div><br>
<center>
  <button name="hitung" id="hitung" class="btn btn-info" onclick="hitung()">Hitung</button>
</center>
</div><p>

</body>
</html>