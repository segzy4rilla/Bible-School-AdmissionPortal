<?php

//$servername = "localhost:3306";
//$username = "anagkaz1_wp780";
//$password = "AbMTC2020!!!";
//$dbname = "anagkaz1_wp780";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ABTMC_Portal";



	session_start();
	$userId = $_SESSION['User_Id'];
	
	if($userId == ""){
		echo "Invalid login session, please log out and back in again.<br/>";
	}
	else{
		$userFolder = $userId;
		$targetDirectory = "../uploads/" .$userFolder ."/";
		
		if (!file_exists($targetDirectory)) {
			mkdir($targetDirectory, 0773, true);
		}
		
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $idCheck = 'SELECT EXISTS(SELECT * FROM Documemt_Upload WHERE User_ID = ' . $userId . ')';
		$idExists = $conn->query($idCheck);

		if(!$idExists){
            $idInsert = 'INSERT INTO Documemt_Upload(User_ID) VALUES(' . $userId . ')';
            $idInserted = $conn->exec($idInsert);
        }


        if (!$idInserted && !$idExists) {
			echo "Sorry, there was an error uploading your file. Error Code:AG1<br/>";
		}
		else {
			for($x=0; $x < count($_FILES['img1']['name']); ++$x){
				try {
					if($_FILES["img1"]["name"][$x] != ""){
						$targetFilePath = $targetDirectory . basename($_FILES["img1"]["name"][$x]);
						$imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
						$validUpload = 0;

						if ($imageFileType == "jpg" || $imageFileType == "docx" || $imageFileType == "png" || $imageFileType == "txt"|| $imageFileType == "jpeg") {
							$validUpload = 1;
						}

						if ($validUpload == 1) {
							if (move_uploaded_file($_FILES["img1"]["tmp_name"][$x], $targetFilePath)) {
                                $storeFilepath = 'UPDATE Documemt_Upload SET DocFilepath' . $x . ' = ' . $targetFilePath . ' WHERE User_ID = ' . $userId . ' ';
                                $filepathStored = $conn->query($storeFilepath);
								if($filepathStored){
									echo "The file " . basename($_FILES["img1"]["name"][$x]) . " has been uploaded.<br/>";
								}
								else{
									echo "Sorry, there was an error uploading your file. Error Code:AG2<br/>";
								}
							} else {
								echo "Sorry, there was an error uploading your file. Error Code:AG3<br/>";
							}
						}
						else {
							echo "File could not be uploaded due to restricted file type. must be: .jpg, .jpeg, .doxc, .png or .txt <br/>";
						}
					}
					else{
						$comment = $_POST["comment"]["name"][$x];
						if(trim($comment) != ""){
                            $storeComment = 'UPDATE Documemt_Upload SET DocComment' . $x . ' = ' . $targetFilePath . ' WHERE User_ID = ' . $userId . ' ';
                            $commentStored = $conn->query($storeComment);
							if($commentStored){
								echo "Your reason for not uploading file" .$x. " has been saved.<br/>";
							}
							else{
								echo "Sorry, there was an error saving your reason for not uploading file. Error Code:AG4".$x."<br/>";
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