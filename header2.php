<?php session_start();
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=kazas','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
}else{
	date_default_timezone_set('Europe/Moscow');
	$insts = R::findAll('insts','active = "1"');
	foreach ($insts as $inst) {
		$date = new DateTime($inst->date);
		$date->add(new DateInterval('P31D'));
		$tmp_date1 =  date('d.m.Y');
		$tmp_date2 = $date->format('d.m.Y');
		if(strtotime($tmp_date1) >= strtotime($tmp_date2)){
			$cat = R::load('insts', $inst->id);
			$cat->active = '0';
			R::store($cat);
		}
	}
}


?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Autoschool</title>
	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/header.css">
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Faster+One|Montserrat+Alternates" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/auth.css">
	<link rel="stylesheet" href="css/inst.css">
	<link rel="stylesheet" href="css/edu.css">
	<link rel="stylesheet" href="css/test.css">
	<link rel="stylesheet" href="css/v-l.css">
	<link rel="stylesheet" href="css/theory.css">
	<link rel="stylesheet" href="css/driver.css">
	<link rel="stylesheet" href="css/profile.css">
	<link rel="stylesheet" href="css/make.css">
	<link rel="stylesheet" href="css/as.css">
	<link rel="stylesheet" href="css/media.css">
<style>
	@media screen and (max-width: 480px) {
		.container{
			margin-top: 70px;

		}
	}
</style>

</head>
<body>
<input type="checkbox" name="check" id="check">
	<label class="burger" for="check"><div class="relative" ><span class="icon-burger"></span></div></label>
<div class="header2">
	<div class="logo">
		<a href="index.php"><div class="logo-container">
		</div>
		<span class="logo-title">KAZAS</span><span class="logo-subtitle">рули своей жизнью</span></a>
	</div>
	<ul class="navbar">
		<li class="nav-item" ><a href="/#as" class="nav-link"><i class="fas fa-car"><span> Автошколы</span></i></a></li>
		<li class="nav-item"  id="menu"><a href="/inst.php" class="nav-link"><i class="fas fa-users"><span> Инструкторы</span></i></a></li>
		<li class="nav-item"><a href="/lessons.php" class="nav-link"><i class="fas fa-book"><span> Подготовка</span></i></a></li>
		<li class="nav-item"><a href="" class="nav-link"><i class="fas fa-address-book"><span> Контакты</span></i></a></li>
		<?php if(isset($_SESSION['logged'])):  ?>
		<li class="draw">
			<div class="draw1">
				<a href="/profile.php" class="nav-link"><i class="fas fa-user"><span> Профиль</span></i></a>
			</div>
			<div class="draw2">
				<a href="/logout.php" class="nav-link"><i class="fas fa-sign-out-alt"><span> Выход</span></i></a>
			</div>
		</li>
		<input class="disabled" type="hidden" class="hidden" name="" id="id" value="<?php echo $_COOKIE['id']; ?>">
		<?php else: ?>
		<li class="nav-item"><a href="/auth.php" class="nav-link"><i class="fas fa-sign-in-alt"><span> Вход</span></i></a></li>
		<?php endif ?>

	</ul>
</div>
