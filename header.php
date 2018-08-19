<?php session_start(); ?>
<?php
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=kazas','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Autoschool</title>
	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/search.css">
	<link rel="stylesheet" href="css/auth.css">
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Faster+One|Montserrat+Alternates" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/swiper.css">
</head>
<body>
	<div class="header" >
	<div class="logo">
		<a href="index.php"><div class="logo-container">
		</div>
		<span class="logo-title">KAZAS</span><span class="logo-subtitle">рули своей жизнью</span></a>
	</div>
	<ul class="navbar">
		<li class="nav-item" id="menu"><a  href="#as" class="nav-link"><i class="fas fa-car"><span> Автошколы</span></i></a></li>
		<li class="nav-item"><a href="" class="nav-link"><i class="fas fa-book"><span> Подготовка</span></i></a></li>
		<li class="nav-item"><a href="" class="nav-link"><i class="fas fa-address-book"><span> Контакты</span></i></a></li>
		<li class="nav-item"><a href="/auth.php" class="nav-link"><i class="fas fa-sign-in-alt"><span> Войти</span></i></a></li>

	</ul>
</div>
