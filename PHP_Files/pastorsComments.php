<?php

include "dbconfig.php";
include "alertAndRedirect.php";
include_once "escapeQuotes.php";

$alertMessage = "";
$redirectUrl = "../schedulezoom.php";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$comments = "'" . EscapeQuotes($_POST['pastorsComments']) . "'";

for ($x = 0; $x < count($_POST['applicantID']); ++$x) {
    $id = "'" . $_POST['applicantID'][$x] . "'";
    $idCheck = $conn->prepare('SELECT * FROM ZoomInterview WHERE EXISTS(SELECT * FROM ZoomInterview WHERE ID = ' . $id . ')');
    $idCheck->execute();
    $idExists = $idCheck->fetchAll();

    $idInserted = false;
    if (!$idExists) {
        $idInsert = $conn->prepare('INSERT INTO ZoomInterview(ID) VALUES(' . $id . ')');
        $idInserted = $idInsert->execute();
    }

    if (!$idInserted && !$idExists) {
        $alertMessage = $alertMessage . "Sorry, there was an error submitting the pastor's comments. Error Code: ER1";
    } else {
        $updateZoomInfo = $conn->prepare("UPDATE ZoomInterview SET `PastorsComments` = " . $comments . " WHERE ID = " . $id);
        $infoUpdated = $updateZoomInfo->execute();

        if (!$infoUpdated) {
            $alertMessage = $alertMessage . "Sorry, there was an error submitting the pastor's comments for applicant ID: " . $id . " Error Code: ER2";
        }
    }
    echo $alertMessage;
}

if (empty($alertMessage)) {
    $alertMessage = "Zoom Interview Update Successful";
}

AlertAndRedirect($alertMessage, $redirectUrl);
?>