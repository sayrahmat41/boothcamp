<?php
session_start();
if ($_POST['username']=='admin' && $_POST['password']=='admin') {
	//echo "hore berhasil login ";
	// echo "selamat datang ".$_POST['username'];
	$_SESSION["username"] = $_POST['username'];
	header('Location: berhasillogin.php');
}
else {
	header('Location: login.php');
}
// header('Location: 
?>