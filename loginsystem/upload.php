<?php
include_once "dbh.inc.php";
if(isset($_POST['submit'])){
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png');
	if(in_array($fileActualExt,$allowed)){
		if($fileError==0){
			if($fileSize<1000000){
				$folderNameNew= uniqid('',true);
				$path=getcwd();
				if(mkdir($path."/".$folderNameNew)){
					echo "Directory created successfully";
				}
				else{
					echo "Error";
				}
				$fileNameNew ="cover".".".$fileActualExt;
				$fileDestination = $path."/".$folderNameNew."/".$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$uid = $_SESSION['u_uid'];
				$sql = "INSERT INTO users (username,books) VALUES ($uid,);";
			}
			else{
				echo "Your file is too large";
			}

		}else{
			echo "There was an error uploading your file";
		}

	} else{
		echo "You cannot upload files of this type";
	}
}