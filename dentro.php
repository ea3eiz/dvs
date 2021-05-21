<?php  	
session_start();
$passIng = strip_tags(sha1($_POST['pass']));
$mipass="7f8e6dcf857891892afadc2b8b0a640a297afaed";
if ($passIng==$mipass){
$_SESSION['permisos'] = 1;
header("Location:index_dvswitch_buster.php");	
}
else{
header("Location:index.php");
}
?>