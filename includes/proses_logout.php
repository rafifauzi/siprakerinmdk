<?php
session_start();
session_destroy();
header("Location:../index.php");
setcookie("PHPSSID","",time()-3600,"/");
?>