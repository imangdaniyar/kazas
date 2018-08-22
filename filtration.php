<?php session_start();
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=kazas','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
}else{
	$data = $_POST;
	$cards = '';
	if($_POST['foint']){
		$f = $data['foint'];
		if($f == 'all'){
			$autos  = R::findAll( 'autos' );
		}elseif($f == 'no'){
			$autos = R::findAll('autos','city != "Астана" AND city != "Алматы" AND city != "Уральск" AND city != "Шымкент" AND city != "Актау" AND city != "Атырау" ');
			
		}else {
			$autos  = R::findAll( 'autos' , 'city = ?', [$f]);
		}

		if($autos){
			foreach ($autos as $auto) {
				$cards = $cards.'<a href="as.php?id='.$auto->id.'"><div  class="card">
        <img class="card-img" src="slider/slide1.jpg" alt="">
        <span class="card-title">'.$auto->name.'</span>
        <hr style="border: 0.05vw solid rgb(0, 122, 255);">
        <span class="card-content">
          город: '.$auto->city.'
        </span>
      </div></a>';
			};
			exit($cards);
		}else{
			exit('no');
		}
	}


	if($_POST['search']){
		$lang = $_POST['lang'];
		$city = $_POST['city'];
		$car = $_POST['car'];
		$exp = (int)$_POST['exp'];
		if($car == 'all'){
			if($city == 'all'){
				if($lang == 'b'){
					$insts = R::findAll('insts','exp >= ? ORDER BY date DESC',[$exp]);
				}else{
					#lang
					$insts = R::findAll('insts','exp >= ? AND (lang = ? OR lang ="b") ORDER BY date DESC',[$exp,$lang]);
				}
			}else{
				#city
				if($lang == 'b'){
					$insts = R::findAll('insts','exp >= ? AND (city =? OR city = "all") ORDER BY date DESC',[$exp,$city]);
				}else{
					#lang
					$insts = R::findAll('insts','exp >= ? AND (lang = ? OR lang ="b") AND (city = ? OR city = "all") ORDER BY date DESC',[$exp,$lang,$city]);
				}
			}
		}else{
			#car
			if($city == 'all'){
				if($lang == 'b'){
					$insts = R::findAll('insts','exp >= ? AND car = ? ORDER BY date DESC',[$exp,$car]);
				}else{
					#lang
					$insts = R::findAll('insts','exp >= ? AND (lang = ? OR lang ="b") AND car = ? ORDER BY date DESC',[$exp,$lang,$car]);
				}
			}else{
				#city
				if($lang == 'b'){
					$insts = R::findAll('insts','exp >= ? AND (city =? OR city = "all") AND car = ? ORDER BY date DESC',[$exp,$city,$car]);
				}else{
					#lang
					$insts = R::findAll('insts','exp >= ? AND (lang = ? OR lang ="b") AND (city = ? OR city = "all") AND car = ? ORDER BY date DESC',[$exp,$lang,$city,$car]);
				}
			}

		}

			if($insts){
				foreach ($insts as $inst) {
					$user = R::findOne('users','id = ?',[$inst->uid]);
				$image = R::findOne('images','purpose = "i" AND pid = ?',[$inst->id]);
				if($image){
					$img = $image->name;
				}else {
					$img = 'noimage.jpg';
				}
				if($inst->car == 1){
					$car = 'Да';
				}else {
					$car = 'Нет';
				}
				if($inst->city == 'all'){
					$inst->city = 'Все';
				}else if($inst->city == 'other'){
					$inst->city = 'Нет в списке';
				}
				echo('<a href="ins.php?id='.$inst->id.'"><div class="inst-card">
				<div class="card-container">
					<div class="card-row lp"><img class="card-picture" src="/images/'.$img.'" alt=""></div>
					<div class="card-row div"><div class="c-col1 fl">'.$user->name.' </div><div class="c-col2 fl">'.$user->sname.'</div></div>
					<div class="card-row div"><div class="c-col1">Город: </div><div class="c-col2">'.$inst->city.'</div></div>
					<div class="card-row div"><div class="c-col1">Стаж работы: </div><div class="c-col2">'.$inst->exp.' лет</div></div>
					
				</div>
			</div></a>');
			}
			}else{
				exit('no');
			}



		
	}
}


?>