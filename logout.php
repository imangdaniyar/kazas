<?php session_start(); 
	unset($_SESSION['logged']);
	$_SESSION['id'] = '';

	header('Location: /index.php');

 ?>

