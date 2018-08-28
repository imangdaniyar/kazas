<?php 
session_start();
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=kazas','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
} else{
	if($_POST['q']){
		$d = $_POST;
		$f = $_FILES;
		$test = R::dispense('test');
		$test->tid = $d['id'];
		$test->question = $d['q'];
		$test->ans1 = $d['a1'];
		$test->ans2 = $d['a2'];
		$test->ans3 = $d['a3'];
		R::store($test);
		$id = $test->id;
		if($f['file1']){
			if(($f['file1']['type'] = "image/jpg") or ($f['file1']['type'] = "image/jpeg")){
			$upload_path = __DIR__."/testimages/";
 			$user_filename = $_FILES['file1']['name'];
 			$userfile_name = pathinfo($user_filename,PATHINFO_FILENAME);
 			$userfile_ext = pathinfo($user_filename,PATHINFO_EXTENSION);

 			$server_filename = $userfile_name.".".$userfile_ext;
 			$server_filepath = $upload_path.$server_filename;
 			$j= 0;
 			while (file_exists($server_filepath)) {
 			$j++;
 			$server_filepath = $upload_path.$userfile_name."(".$j.").".$userfile_ext;
 			$server_filename = $userfile_name."(".$j.").".$userfile_ext;
 			}
 			if(copy($_FILES['file1']['tmp_name'], $server_filepath)){
 				
				$image = R::dispense('timg');
				$image->testid = $id;
				$image->name = $server_filename;
				R::store($image);
				}
			}
		}
		if($f['file2']){
			if(($f['file2']['type'] = "image/jpg") or ($f['file2']['type'] = "image/jpeg")){
			$upload_path = __DIR__."/testimages/";
 			$user_filename = $_FILES['file2']['name'];
 			$userfile_name = pathinfo($user_filename,PATHINFO_FILENAME);
 			$userfile_ext = pathinfo($user_filename,PATHINFO_EXTENSION);

 			$server_filename = $userfile_name.".".$userfile_ext;
 			$server_filepath = $upload_path.$server_filename;
 			$j= 0;
 			while (file_exists($server_filepath)) {
 			$j++;
 			$server_filepath = $upload_path.$userfile_name."(".$j.").".$userfile_ext;
 			$server_filename = $userfile_name."(".$j.").".$userfile_ext;
 			}
 			if(copy($_FILES['file2']['tmp_name'], $server_filepath)){
 				
				$image = R::dispense('timg');
				$image->testid = $id;
				$image->name = $server_filename;
				R::store($image);
				}
			}
		}
		if($f['file3']){
			if(($f['file3']['type'] = "image/jpg") or ($f['file3']['type'] = "image/jpeg")){
			$upload_path = __DIR__."/testimages/";
 			$user_filename = $_FILES['file3']['name'];
 			$userfile_name = pathinfo($user_filename,PATHINFO_FILENAME);
 			$userfile_ext = pathinfo($user_filename,PATHINFO_EXTENSION);

 			$server_filename = $userfile_name.".".$userfile_ext;
 			$server_filepath = $upload_path.$server_filename;
 			$j= 0;
 			while (file_exists($server_filepath)) {
 			$j++;
 			$server_filepath = $upload_path.$userfile_name."(".$j.").".$userfile_ext;
 			$server_filename = $userfile_name."(".$j.").".$userfile_ext;
 			}
 			if(copy($_FILES['file3']['tmp_name'], $server_filepath)){
 				
				$image = R::dispense('timg');
				$image->testid = $id;
				$image->name = $server_filename;
				R::store($image);
				}
			}
		}
		if($f['file4']){
			if(($f['file4']['type'] = "image/jpg") or ($f['file4']['type'] = "image/jpeg")){
			$upload_path = __DIR__."/testimages/";
 			$user_filename = $_FILES['file4']['name'];
 			$userfile_name = pathinfo($user_filename,PATHINFO_FILENAME);
 			$userfile_ext = pathinfo($user_filename,PATHINFO_EXTENSION);

 			$server_filename = $userfile_name.".".$userfile_ext;
 			$server_filepath = $upload_path.$server_filename;
 			$j= 0;
 			while (file_exists($server_filepath)) {
 			$j++;
 			$server_filepath = $upload_path.$userfile_name."(".$j.").".$userfile_ext;
 			$server_filename = $userfile_name."(".$j.").".$userfile_ext;
 			}
 			if(copy($_FILES['file4']['tmp_name'], $server_filepath)){
 				
				$image = R::dispense('timg');
				$image->testid = $id;
				$image->name = $server_filename;
				R::store($image);
				}
			}
		}
		exit('ok');

	}


	if($_POST['vid']){
		$v = R::load('theory',$_POST['vid']);
		$v->video = $_POST['video'];
		R::store($v);
		exit('ok');
	}






}