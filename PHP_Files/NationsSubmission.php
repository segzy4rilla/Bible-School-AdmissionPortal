<?php

include "dbconfig.php";
include "sql_update_field_II.php";
include "alertAndRedirect.php";
include_once "escapeQuotes.php";

function BoolToYesNo($value){
	$return = "No";
	if(isset($_POST[$value]) && $_POST[$value]){
		$return = "Yes";
	}
	return $return;
}

function HandleNullIndex($value){
	$return = "";
	if(isset($_POST[$value])){
		$return = $_POST[$value];
	}
	return $return;
}

$ID = EscapeQuotes($_POST['190number']);

$alertMessage = "";
$redirectUrl = "../190regform.php";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$idCheck = $conn->prepare("SELECT COUNT(WhatsAppNumber) FROM Nations WHERE WhatsAppNumber = '".$ID."'");
$idCheck->execute();
$result = $idCheck->fetchAll();
$idExists = ($result[0][0] > 0);

$idInserted = false;
if (!$idExists) {
	$idInsert = $conn->prepare("INSERT INTO Nations(WhatsAppNumber) VALUES('".$ID."')");
	$idInserted = $idInsert->execute();
}

if (!$idInserted || $idExists) {
	$alertMessage = $alertMessage . " " . "A submission with this whats app number has already been submitted";
} 
else {
	
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "FirstName", $ID, HandleNullIndex('190fname'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "LastName", $ID, HandleNullIndex('190lname'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "Email", $ID, HandleNullIndex('190emailaddress'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "Denomination", $ID, HandleNullIndex('denomination'), "WhatsAppNumber");
    $alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "Branch", $ID, HandleNullIndex('branch'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "Pastor", $ID, HandleNullIndex('190pastorname'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "Bishop", $ID, HandleNullIndex('190bishopname'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "Age", $ID, HandleNullIndex('190age'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "Nationality", $ID, HandleNullIndex('190nationality'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "CountryOfResidence", $ID, HandleNullIndex('190countryres'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "Education", $ID, HandleNullIndex('education'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "RoleInChurch", $ID, HandleNullIndex('role'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "YearsInChurch", $ID, HandleNullIndex('years'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "ParentalConsent", $ID, HandleNullIndex('consent'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "MaritalStatus", $ID, HandleNullIndex('marital'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "CurrentlyInABMTC", $ID, HandleNullIndex('current_ABMTC'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "CompletedABMTC", $ID, HandleNullIndex('completed_ABMTC'), "WhatsAppNumber");
	$alertMessage = $alertMessage . " " . sql_update_field_II($conn, "Nations", "StartDate", $ID, HandleNullIndex('startDate'), "WhatsAppNumber");

	//UPDATE PAYMENT TYPE - This is no longer used A join is used on the 190 nations page instead
	$query = $conn->prepare("UPDATE NATIONS
								SET PaymentType = 
								(
									SELECT
										CASE 
											WHEN A.Nationality = 'ghanaian'
											THEN B.Loc_PaymentType
											ELSE B.Int_PaymentType
										END
										AS PaymentType
									FROM Applicant_Table AS A
									JOIN AdmittedStudents AS B
									ON A.User_ID = B.User_ID
									WHERE A.First_Name = '".HandleNullIndex('190fname')."'
									AND A.Last_Name = '".HandleNullIndex('190lname')."'
								)
								WHERE WhatsAppNumber = '".$ID."'");
	$success = $query->execute();
}

if (empty($alertMessage) || ctype_space($alertMessage)) {
    $alertMessage = "190 Nations Info Submission Successful";
}

AlertAndRedirect($alertMessage, $redirectUrl);
?>