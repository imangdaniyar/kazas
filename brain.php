<?php 
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=u2d','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
} else{
if($_POST['loginc']){
	$user = R::findOne('users' , 'login = ?', array($_POST['login']));
  if($user){
    exit('0');
  } else exit('1');
};

if($_POST['register']){
 $data['id'] = '';
$user = R::dispense('users');
$user->id = $data['id'];
$user->login = $data['login'];
$user->password = password_hash($data['password'], PASSWORD_DEFAULT);

$user->name = ucfirst($data['name']);
$user->sname = ucfirst($data['sname']);
$user->email = $data['email'];
R::store($user);
#$_SESSION['logged'] = $user;
exit('logged');
}
}
 ?>
