<?php  	
session_start();
$passIng = strip_tags(sha1($_POST['pass']));
$mipass="5a9068706389c413b5edf93d2e8b8102caddcc91";
if ($passIng==$mipass){
$_SESSION['permisos'] = 1;
header("Location:index_dvswitch_buster.php");	
}
else{
header("Location:index.php");
}
?>