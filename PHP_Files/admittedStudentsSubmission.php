<?php

include "dbconfig.php";
include "sql_upload_doc.php";
include "sql_update_field.php";
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

$alertMessage = "";
$redirectUrl = "../admittedStudentsinfo.html";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

session_start();
$ID = $_SESSION['User_Id'];

$userFolder = $ID;
$targetDirectory = "../../uploads_admitted/".$userFolder."/";
		
if (!file_exists($targetDirectory)) {
	mkdir($targetDirectory, 0773, true);
}

$idCheck = $conn->prepare("SELECT COUNT(User_ID) FROM AdmittedStudents WHERE User_ID = '".$ID."'");
$idCheck->execute();
$result = $idCheck->fetchAll();
$idExists = ($result[0][0] > 0);

$idInserted = false;
if (!$idExists) {
	$idInsert = $conn->prepare("INSERT INTO AdmittedStudents(User_ID) VALUES('".$ID."')");
	$idInserted = $idInsert->execute();
}

if (!$idInserted && !$idExists) {
	$alertMessage = $alertMessage . " " . "Sorry, there was an error submitting the admission info. Error Code: ER1";
} 
else {
	
	//Local
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Loc_InternationalStudentsHostel", $ID, HandleNullIndex('local_accommodation'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Loc_PrintedAllDocuments", $ID, BoolToYesNo('docsconfirm'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Loc_HasBeddings", $ID, BoolToYesNo('beddingconfirm'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Loc_HasMTNCard", $ID, BoolToYesNo('mtncardconfirm'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Loc_AdminFeePaymentDate", $ID, HandleNullIndex('loc_datepayfulladmin'));
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_ResponsibilityFormFilepath", $ID, "locstudentform", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_AdminFeeProofFilepath", $ID, "adminfeepay", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_DeclarationFormFilepath", $ID, "declarationform", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_RoomAssignmentFormFilepath", $ID, "roomasignmentform", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_ConfirmationLetterFilepath", $ID, "loc_ConfirmPayment", $targetDirectory);
	
	//International
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_AdminFeePaymentDate", $ID, HandleNullIndex('int_datepayfulladmin'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_VisaNotRequiredComment", $ID, HandleNullIndex('visacomment'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_ArrivalDateTime", $ID, HandleNullIndex('airportArrivalDateTime'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_BreakfastDate", $ID, HandleNullIndex('breakfastdate'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_LunchDate", $ID, HandleNullIndex('lunchdate'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_WantsStarterPack", $ID, HandleNullIndex('int_starterPack'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_InternationalStudentsHostel", $ID, HandleNullIndex('int_accommodation'));
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Int_ConfirmationLetterFilepath", $ID, "int_ConfirmPayment", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Int_AdmissionContractFormFilepath", $ID, "admissioncontract", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Int_StudentResponsibilityFormFilepath", $ID, "intstudentresponform", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Int_AdminFeeProofFilepath", $ID, "adminfeeimgigpay", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Int_ImmigrationFeeProofFilepath", $ID, "adminfeeimgigpay2", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Int_PassportFilepath", $ID, "passportbiodata", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Int_VisaFilepath", $ID, "visaletter", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Int_FlightTicketFilepath", $ID, "flightticket", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Int_DeclarationFormFilepath", $ID, "intdecform", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Int_RoomAssignmentFormFilepath", $ID, "introomassignform", $targetDirectory);
	
	//Registration
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Reg_Confirmed", $ID, BoolToYesNo('confirmregistrationcheck2'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Reg_SelectedSeptember2020Admission", $ID, BoolToYesNo('confirmregistrationcheck2'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Reg_ChurchBranch", $ID, HandleNullIndex('churchbranchreg'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Reg_Pastor", $ID, HandleNullIndex('pastornamereg'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Reg_PastorsPhoneNumber", $ID, HandleNullIndex('pastornumreg'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Reg_UDChurch", $ID, HandleNullIndex('UDOLGCCheck'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Reg_Denomination", $ID, HandleNullIndex('seldenomreg'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Reg_Bishop", $ID, HandleNullIndex('bishopnamereg'));
	
	//PastoralPoints
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "PastoralPointsRegistration", $ID, BoolToYesNo('UDcheck'));
	
	//SponsorAgreementPlan							
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "SponsorAgreementPlan", $ID, HandleNullIndex('sponsor'));
	
	//InternationalStudentConfirmations						
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "IntCon_PrintedAllDocuments", $ID, BoolToYesNo('printrequesteddocs'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "IntCon_HasMalariaMedication", $ID, BoolToYesNo('malariacheck'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "IntCon_MobilePhoneUnlocked", $ID, BoolToYesNo('ghanasimcheck'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "IntCon_HasGhanaCharger", $ID, BoolToYesNo('3pinghanacheck'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "IntCon_PowerBank", $ID, BoolToYesNo('chargepowercheck'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "IntCon_HasBeddings", $ID, BoolToYesNo('beddingscheck'));
	
	//SoftLandingChecklist
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_AirportPickup", $ID, HandleNullIndex('airportpick'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_ChangedMoneyAt", $ID, HandleNullIndex('changeMoney'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_StarterPack", $ID, HandleNullIndex('starterPackCheck'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_MTNSimCard", $ID, BoolToYesNo('simcredcheck'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_CollectTag", $ID, BoolToYesNo('tagcheck'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_RoomNumber", $ID, HandleNullIndex('roomnumber'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_IssuesInTheRoom", $ID, HandleNullIndex('roomissues'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_IssuesInTheRoomDescription", $ID, HandleNullIndex('roomissuecomment'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_IssuesInTheRoomSolved", $ID, HandleNullIndex('issuesResolved'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_PaidAdminFeesAndCollectedTextbooks", $ID, BoolToYesNo('feeandbookcheck'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_GalleryTour", $ID, BoolToYesNo('tourcheck'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Check_OrphanageTour", $ID, BoolToYesNo('orphancheck'));
}

if (empty($alertMessage)) {
    $alertMessage = "Admission Info Update Successful";
}

AlertAndRedirect($alertMessage, $redirectUrl);
?>