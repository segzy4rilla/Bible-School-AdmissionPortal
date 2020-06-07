<?php 
	$targetDirectory = "../image_uploads/";


        for($x=0; $x < sizeof($_FILES["img1"]); ++$x){

            try {
                echo $x;
                $targetFilePath = $targetDirectory . basename($_FILES["img1"]["name"][$x]);
                $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $validUpload = 0;


                if ($imageFileType == "jpg" || $imageFileType == "docx" || $imageFileType == "png" || $imageFileType == "txt") {
                    $validUpload = 1;
                }


                if ($validUpload == 1) {
                    if (move_uploaded_file($_FILES["img1"]["tmp_name"][$x], $targetFilePath)) {
                        echo "The file " . basename($_FILES["img1"]["name"][$x]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
            }catch (Exception $ex){

            }
	}

?>