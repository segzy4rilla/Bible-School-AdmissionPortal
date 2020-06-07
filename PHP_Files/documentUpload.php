<?php 
	$targetDirectory = "../uploads/";

	for($x=0; $x < count($_FILES['img1']['name']); ++$x){
		try {
			$targetFilePath = $targetDirectory . basename($_FILES["img1"]["name"][$x]);
			$imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
			$validUpload = 0;

			if ($imageFileType == "jpg" || $imageFileType == "docx" || $imageFileType == "png" || $imageFileType == "txt"|| $imageFileType == "jpeg") {
				$validUpload = 1;
			}

			if ($validUpload == 1) {
				if (move_uploaded_file($_FILES["img1"]["tmp_name"][$x], $targetFilePath)) {
					echo "The file " . basename($_FILES["img1"]["name"][$x]) . " has been uploaded.<br/>";
				} else {
					echo "Sorry, there was an error uploading your file.<br/>";
				}
			}
			else {
				echo "File could not be uploaded due to restricted file type. must be: .jpg, .jpeg, .doxc, .png or .txt <br/>";
			}
		}
		catch (Exception $ex){
			echo "Sorry, there was an error uploading your file.<br/>";
		}
	}
?>