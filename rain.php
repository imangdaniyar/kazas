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
	$id = $_POST['id'];
	$images = R::find('images', 'pid = ? AND purpose = "i"',[$id]);
	foreach ($images as $image) {
		$img = $image->name;
		$upload_path = __DIR__."/images/";
		$server_filepath = $upload_path.$img;
		unlink($server_filepath);
	}
	R::trashAll($images);
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
if($_POST['afeed']){
		$pid = $_POST['id'];
		$uid = $_POST['uid'];
		$user = R::findOne('users','id = ?',[$uid]);
		$com = R::dispense('comments');
		$com->uid = $uid;
		$com->pid = $pid;
		$com->text = $_POST['text'];
		$com->purpose = 'a';
		R::store($com);
		exit('<li class="comment" id="a-'.$com->id.'">
              <span>'.$user->sname.' '.$user->name.' '.$com->date.'<span onclick="delete_acom('.$com->id.')" class="delete-com"><i class="fas fa-trash-alt"></i>
 Удалить</span></span>
              <div class="com-text">'.$com->text.'</div>
          </li>');
	}
if($_POST['adel']){
	$id = $_POST['id'];
	$com = R::load('comments',$id);
	R::trash($com);
	exit('aaa');
}
if($_POST['ifeed']){
		$pid = $_POST['id'];
		$uid = $_POST['uid'];
		$user = R::findOne('users','id = ?',[$uid]);
		$com = R::dispense('comments');
		$com->uid = $uid;
		$com->pid = $pid;
		$com->text = $_POST['text'];
		$com->purpose = 'i';
		R::store($com);
		exit('<li class="comment" id="i-'.$com->id.'">
              <span>'.$user->sname.' '.$user->name.' '.$com->date.$app.'<span onclick="delete_acom('.$com->id.')" class="delete-com"><i class="fas fa-trash-alt"></i></span></span>
              <div class="com-text">'.$com->text.'</div>
          </li>');
	}
if($_POST['idel']){
	$id = $_POST['id'];
	$com = R::load('comments',$id);
	R::trash($com);
	exit('aaa');
}
}
 ?>
