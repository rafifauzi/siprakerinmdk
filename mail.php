<?php
include "assets/lib/classes/class.phpmailer.php";
include "includes/koneksi.php";
$nis=$_GET['n'];
$q=mysql_query("SELECT email FROM tb_user WHERE username='$nis'");
$r=mysql_fetch_array($q);
$email=$r['email'];
$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->SMTPSecure = 2; 
$mail->Host = "smtp.gmail.com"; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 587; 
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "mrafisfauzi@email.unikom.ac.id"; //user email
$mail->Password = "rafifauzi14"; //password email 
$mail->SetFrom("siprakerinmdk-support","siprakerinmdk-verification"); //set email pengirim
$mail->Subject = "Verifikasi Email"; //subyek email
$mail->AddAddress($email);  //tujuan email
$mail->isHTML(true);
ob_start();
include('includes/contents.php');
$mailContent = ob_get_contents();
$mail->Body = $mailContent;
ob_end_clean();
if($mail->Send()){
    echo "<script>close();</script>";
}
?>