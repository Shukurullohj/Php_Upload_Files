<?php

$db = mysqli_connect("localhost", "root", "")or die ("Error Connection");
mysqli_select_db($db, "user");

if(isset($_POST['submit'])){
	if($_FILES['file']['error'] == 0){
		if(!file_exists("upload")){
			mkdir("upload");
		}
	// $errors = array();
	
	// $file_type = $_FILES['file']['type'];
	
	
	
	if($file_size > 2097152){
		$errors[] = 'File need to 2mb';
	}
	if($_FILES['file']['type'] == "image/jpeg"){
		$ext = ".jpg";
		$papka = "images";
		if(!file_exists("upload/images")){
			mkdir("upload/images");
		}
	}elseif ($_FILES['file']['type'] == "audio/mp3"){
		$ext = ".mp3";
		$papka = "audio";
		if(!file_exists("upload/audio")){
			mkdir("upload/audio");
		}
	}else {
		echo "bunday format uklab bolmaydi";
	}
	$file_name = "/upload/$papka/".time().$ext;
	$file = __dir__ . $file_name;
	$file_tmp = $_FILES['file']['tmp_name'];
	move_uploaded_file($file_tmp, $file);
	$file_size = $_FILES['file']['size'] / 1024;
	$sql = "INSERT INTO `files` (`id`, `name`, `date`, `size`) VALUES (NULL, '$file_name', CURRENT_DATE(), '$file_size');";
	 mysqli_query($db, $sql);
	// if($result) {
	// 	echo "uploaded file";
	// }else {
	// 	echo "xatolik";
	// }


} else {
	echo "error";
}
	}
	
?>