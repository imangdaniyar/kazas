<?php 
session_start();
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=kazas','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
} else{
	$data = $_POST;
	$files = $_FILES;
	$add = R::dispense('insts');
$add->uid = $data['uid'];
$add->city = $data['city'];
$add->exp = $data['exp'];
$add->car = $data['car'];
$add->lang = $data['lang'];
$add->info = $data['info'];
R::store($add);
$id = R::getInsertID();
if($_FILES){
	var_dump($_FILES['i-file1']);
	if($files['i-file1']){
		if(($files['i-file1']['type'] = "image/jpg") or ($files['i-file1']['type'] = "image/jpeg")){
			$upload_path = __DIR__."/images/";
 			$user_filename = $_FILES['i-file1']['name'];
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
 			if(copy($_FILES['i-file1']['tmp_name'], $server_filepath)){
 				
				$image = R::dispense('images');
				$image->pid = $id;
				$image->name = $server_filename;
				$image->purpose = 'i';
				R::store($image);
				}
			}

		}	
		if($files['i-file2']){
		if(($files['i-file2']['type'] = "image/jpg") or ($files['i-file2']['type'] = "image/jpeg")){
			$upload_path = __DIR__."/images/";
 			$user_filename = $_FILES['i-file2']['name'];
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
 			if(copy($_FILES['i-file2']['tmp_name'], $server_filepath)){
 				
				$image = R::dispense('images');
				$image->pid = $id;
				$image->name = $server_filename;
				$image->purpose = 'i';
				R::store($image);
				}
			}

		}
		$_FILES='';
		exit($id);	
	
 			
	


}
}