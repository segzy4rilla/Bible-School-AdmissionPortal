<?php 
	$targetDirectory = "uploads/";
	$targetFilePath = $targetDirectory.basename($_FILES["img1[0]"]["name"]);
	$imageFileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));
	$validUpload = 0;
	
	if(isset($_POST["submit"])){
		if($imageFileType == "jpg" || $imageFileType == "docx" || $imageFileType == "txt"){
			$validUpload = 1;
		}
	}
	
	if($validUpload == 1){
		if (move_uploaded_file($_FILES["img1[0]"]["tmp_name"], $targetFilePath)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}

?>