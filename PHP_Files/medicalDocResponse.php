<?php
	include "dbconfig.php";
	include "alertAndRedirect.php";
	include_once "escapeQuotes.php";
	
	session_start();
	$alertMessage = "";
	$redirectUrl = "../medicalSummary.php";
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	$adminUsername = $_SESSION['Username'];
	$adminUsernameWithQuotes = "'".$_SESSION['Username']."'";
	
	$emailWhatsApp = $_POST['eID'];
	$emailWhatsAppWithQuotes = "'".$emailWhatsApp."'";
	
	$response = $_POST['response'];
	$responseWithQuotes = "'".$response."'";
	
	$reason = $_POST['rejectReason'];
	$reason = EscapeQuotes($reason);
	$reasonWithQuotes = "'".$reason."'";
	
	try{
		$entryCheck = $conn->prepare('SELECT * FROM MedicalDocResponse WHERE EXISTS(SELECT * FROM MedicalDocResponse WHERE EmailWhatsapp = ' . $emailWhatsAppWithQuotes .' AND AdminUsername = '.$adminUsernameWithQuotes.')');
		$entryCheck->execute();
		$entryExists = $entryCheck->fetchAll();
		
		$entryInserted = false;
		if(!$entryExists){
			$entryInsert = $conn->prepare('INSERT INTO MedicalDocResponse(EmailWhatsapp, AdminUsername) VALUES(' . $emailWhatsAppWithQuotes . ',' .$adminUsernameWithQuotes. ')');
			$entryInserted = $entryInsert->execute();
		}

		if (!$entryInserted && !$entryExists) {
			$alertMessage = $alertMessage. "Sorry, there was an error saving your response. Error Code: AG1";
		}
		else{
			$saveResponse = $conn->prepare('UPDATE MedicalDocResponse SET Status = '.$responseWithQuotes.', Reason = '.$reasonWithQuotes.' WHERE EmailWhatsapp = '.$emailWhatsAppWithQuotes .' AND AdminUsername = '.$adminUsernameWithQuotes);
			$saveResponse->execute();
			
			if(!$saveResponse){
				$alertMessage = $alertMessage. "Sorry, there was an error saving your response. Error Code: AG2";
			}
		}
	}
	catch (\Exception $ex){
		$alertMessage = $alertMessage. "Sorry, there was an error saving your respnse. Error Code: AG3";
	}
	
	if(empty($alertMessage)){
		$alertMessage = $alertMessage. "Response saved successfully";
	}
	
	AlertAndRedirect($alertMessage, $redirectUrl);
?>