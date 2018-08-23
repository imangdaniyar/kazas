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
}
 ?>
