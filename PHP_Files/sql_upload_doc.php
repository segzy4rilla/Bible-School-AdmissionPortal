<?php
	function sql_upload_doc($conn, $table, $field, $ID, $fileName, $targetDirectory){
		$alertMessage = "";
		if($_FILES[$fileName]["name"] != ""){
			$alertMessage = "";
			$targetFilePath = $targetDirectory.basename($_FILES[$fileName]["name"]);
			$imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
			$validUpload = 0;

			if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"|| $imageFileType == "pdf") {
				if (move_uploaded_file($_FILES[$fileName]["tmp_name"], $targetFilePath)) {
					$storeFilepath = $conn->prepare("UPDATE ".$table." SET ".$field." = '".$targetFilePath."' WHERE User_ID = '".$ID."'");
					$filepathStored = $storeFilepath->execute();
					
					if(!$filepathStored){
						$alertMessage = $alertMessage. "Sorry, there was an error uploading file".($fileName)." Error Code:AG2";
					}
				} else {
					$alertMessage = $alertMessage. "Sorry, there was an error uploading file".($fileName)." Error Code:AG3";
				}
			}
			else {
				$alertMessage = $alertMessage. "File (".$fileName.") could not be uploaded due to restricted file type. must be: .jpg, .jpeg, .png or pdf";
			}
		}
		return $alertMessage;
	}
?>