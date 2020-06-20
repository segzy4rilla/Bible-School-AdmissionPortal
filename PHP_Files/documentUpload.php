<?php

	include "dbconfig.php";
	session_start();
	$emailWhatsApp = $_SESSION['EmailWhatsapp'];
	$emailWhatsAppWithQuotes = "'".$emailWhatsApp."'";
	
	if($emailWhatsApp == ""){
		echo "Invalid login session, please log out and back in again.<br/>";
	}
	else{
		$userFolder = $emailWhatsApp;
		$targetDirectory = "../uploads/" .$userFolder ."/";
		
		if (!file_exists($targetDirectory)) {
			mkdir($targetDirectory, 0773, true);
		}
		
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $emailWhatsAppCheck = $conn->prepare('SELECT * FROM Documemt_Upload WHERE EXISTS(SELECT * FROM Documemt_Upload WHERE EmailWhatsapp = ' . $emailWhatsAppWithQuotes . ')');
		$emailWhatsAppCheck->execute();
		$emailWhatsAppExists = $emailWhatsAppCheck->fetchAll();
		
		$emailWhatsAppInserted = false;
		if(!$emailWhatsAppExists){
            $emailWhatsAppInsert = $conn->prepare('INSERT INTO Documemt_Upload(EmailWhatsapp) VALUES(' . $emailWhatsAppWithQuotes . ')');
			$emailWhatsAppInserted = $emailWhatsAppInsert->execute();
        }

        if (!$emailWhatsAppInserted && !$emailWhatsAppExists) {
			echo "Sorry, there was an error uploading your file. Error Code:AG1<br/>";
		}
		else {
			for($x=0; $x < count($_FILES['img1']['name']); ++$x){
				try {
					if($_FILES["img1"]["name"][$x] != ""){
						$targetFilePath = $targetDirectory . basename($_FILES["img1"]["name"][$x]);
						$targetFilePathWithQuotes = "'".$targetFilePath."'";
						$imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
						$validUpload = 0;

						if ($imageFileType == "jpg" || $imageFileType == "docx" || $imageFileType == "png" || $imageFileType == "txt"|| $imageFileType == "jpeg") {
							$validUpload = 1;
						}

						if ($validUpload == 1) {
							if (move_uploaded_file($_FILES["img1"]["tmp_name"][$x], $targetFilePath)) {
                                $storeFilepath = $conn->prepare('UPDATE Documemt_Upload SET DocFilepath' . ($x+1) . ' = ' . $targetFilePathWithQuotes . ' WHERE EmailWhatsapp = ' . $emailWhatsAppWithQuotes);
                                $filepathStored = $storeFilepath->execute();
								echo 'UPDATE Documemt_Upload SET DocFilepath' . ($x+1) . ' = ' . $targetFilePathWithQuotes . ' WHERE EmailWhatsapp = ' . $emailWhatsAppWithQuotes;
								
								if($filepathStored){
									echo "The file " . basename($_FILES["img1"]["name"][$x]) . " has been uploaded.<br/>";
								}
								else{
									echo "Sorry, there was an error uploading file".($x+1)." Error Code:AG2<br/>";
								}
							} else {
								echo "Sorry, there was an error uploading file".($x+1)." Error Code:AG3<br/>";
							}
						}
						else {
							echo "File could not be uploaded due to restricted file type. must be: .jpg, .jpeg, .doxc, .png or .txt <br/>";
						}
					}
					else{
						$comment = $_POST["comment"]["name"][$x];
						if(trim($comment) != ""){
                            $storeComment = $conn->prepare('UPDATE Documemt_Upload SET DocComment' . ($x+1) . ' = ' . $targetFilePathWithQuotes . ' WHERE EmailWhatsapp = ' . $emailWhatsAppWithQuotes);
                            $commentStored = $storeComment->execute();
							if($commentStored){
								echo "Your reason for not uploading file" .($x+1). " has been saved.<br/>";
							}
							else{
								echo "Sorry, there was an error saving your reason for not uploading file. Error Code:AG4".($x+1)."<br/>";
							}
						}
					}
				}
				catch (Exception $ex){
					echo "Sorry, there was an error uploading your file. Error Code:AG5<br/>";
				}
			}
		}
	}
?>