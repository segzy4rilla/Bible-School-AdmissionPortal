<?php
	include "dbconfig.php";
	include "alertAndRedirect.php";
	include_once "escapeQuotes.php";
	
	session_start();
	$alertMessage = "";
	$redirectUrl = "../summarytable.php";
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	$emailWhatsApp = $_POST['eID'];
	$emailWhatsAppWithQuotes = "'".$emailWhatsApp."'";
	
	$response = $_POST['response'];
	$responseWithQuotes = "'".$response."'";
	
	$reason = $_POST['rejectReason'];
	$reason = EscapeQuotes($reason);
	$reasonWithQuotes = "'".$reason."'";
	
	try{
		$emailWhatsAppCheck = $conn->prepare('SELECT * FROM DocResponse WHERE EXISTS(SELECT * FROM DocResponse WHERE EmailWhatsapp = ' . $emailWhatsAppWithQuotes . ')');
		$emailWhatsAppCheck->execute();
		$emailWhatsAppExists = $emailWhatsAppCheck->fetchAll();
		
		$emailWhatsAppInserted = false;
		if(!$emailWhatsAppExists){
			$emailWhatsAppInsert = $conn->prepare('INSERT INTO DocResponse(EmailWhatsapp) VALUES(' . $emailWhatsAppWithQuotes . ')');
			$emailWhatsAppInserted = $emailWhatsAppInsert->execute();
		}

		if (!$emailWhatsAppInserted && !$emailWhatsAppExists) {
			$alertMessage = $alertMessage. "Sorry, there was an error saving your response. Error Code: AG1";
		}
		else{
			$saveResponse = $conn->prepare('UPDATE DocResponse SET Status = '.$responseWithQuotes.', Reason = '.$reasonWithQuotes.' WHERE EmailWhatsapp = '.$emailWhatsAppWithQuotes);
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