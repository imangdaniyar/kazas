<?php 
session_start();
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=kazas','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
} else{
if($_POST['dis']){
		$id =$_POST['id'];
		$inst = R::load('insts',$id);
		$inst->active = "0";
		R::store($inst);
		exit('Успешно');
	}
if($_POST['act']){
		$id =$_POST['id'];
		$inst = R::load('insts',$id);
		$inst->active = "1";
		R::store($inst);
		exit('Успешно');
	}
if($_POST['del']){
	$id =$_POST['id'];
	$inst = R::load('insts',$id);
	R::trash($inst);
	exit('Успешно');
}
if($_POST['ecar']){
	$id =$_POST['id'];
	$purpose = $_POST['purpose'];
	$inst = R::load('insts',$id);
	$inst->$purpose = $_POST['value'];
	R::store($inst);
	exit('Успешно');
}
if($_POST['tel']){
		$id =$_POST['id'];
		$inst = R::load('insts',$id);
		$id = $inst->uid;
		$user = R::load('users',$id);
		$user->phone = $_POST['value'];
		R::store($user);
		exit('Успешно');
	}
}
 ?>
