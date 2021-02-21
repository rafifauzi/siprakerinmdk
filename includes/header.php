<?php
mysql_connect("localhost","siph4736_siprakerinmdk","rafifauzi14");
mysql_select_db("siph4736_siprakerinmdk_db"); //nama database
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    .navbar{
      padding: 2px 0px 2px 20px;
      border-radius: 0px;
    }
    .navbar-brand,.navbar-brand:hover{
      color: #3F51B5;
    }
    .navbar-brand{
      margin-right: 500px;
      font-weight: bold;
      font-size:16pt;
       text-shadow: 1px 1px 3px #fff;
    }
    .navbar-brand span{
      color: #000;
    }
    @media screen and (max-width: 600px) {
      .navbar-brand{
        font-size: 14px;
        margin-right: 10px;
      }
    }
  </style>
</head>
<body>
  <?php 
    $q=mysql_query("SELECT nm_web FROM tb_settings");
    $r=mysql_fetch_array($q);
    $namaWeb=$r['nm_web'];
  ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <a class="navbar-brand" href="#"><span>SIPRAKERIN</span><?php echo $namaWeb;?></a> 
</nav>
</body>
</html>
