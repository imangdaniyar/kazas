<?php 
session_start();
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=kazas','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
} else{
if($_POST['loginc']){
	$user = R::findOne('users' , 'login = ?', array($_POST['up-login']));
  if($user){
    exit('0');
  } else exit('1');
};

if($_POST['register']){
	$data = $_POST;
 $data['id'] = '';
$user = R::dispense('users');
$user->id = $data['id'];
$user->login = $data['login'];
$user->password = password_hash($data['password'], PASSWORD_DEFAULT);

$user->name = ucfirst($data['name']);
$user->sname = ucfirst($data['sname']);
$user->email = $data['email'];
R::store($user);
$_SESSION['logged'] = $user;
exit('{ "ans": "http://as/index.php"}');
};
if ($_POST['signin']) {
	$data = $_POST;
	$usera = R::findOne('users' , 'login = ?', array($data['login']));

	if ($usera) {

			if( password_verify($data['password'], $usera->password)) {
						$_SESSION['logged'] = $usera;
						exit('{ "ans": "http://as/index.php"}');
							
		}
		 else {exit('{ "ans": "1" }');}
					
			
	} else { exit('{ "ans": "0" }'); }
					
}
}
 ?>
