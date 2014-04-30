<?php
if (!($_COOKIE['siteauth']=="666")) {
	header("Location: ../404");
	exit;
}
/*
PHP Multiple Image Uploader
Written by Ewen McCahon
Licensed under the Apache open source license

MAX_UPLOAD_FILE_SIZE should be set to above 10MB
*/
$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*1024*10; //10MB
$path = "../uploads/"; // Upload directory
$count = 0;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to upload
	foreach ($_FILES['files']['name'] as $f => $name) {     
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(strtolower(pathinfo($name, PATHINFO_EXTENSION)), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
	            $count++; // Number of successfully uploaded file
	        }
	    }
	}
}
header("Location: result.php?ok=".$count);
?>