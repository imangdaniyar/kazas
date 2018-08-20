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
}


?>