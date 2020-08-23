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
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_ResponsibilityFormFilepath", $ID, "locstudentform", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_AdminFeeProofFilepath", $ID, "adminfeepay", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_DeclarationFormFilepath", $ID, "declarationform", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_RoomAssignmentFormFilepath", $ID, "roomasignmentform", $targetDirectory);
	
	//International
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_VisaNotRequiredComment", $ID, HandleNullIndex('visacomment'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_ArrivalDateTime", $ID, HandleNullIndex('airportArrivalDateTime'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_BreakfastDate", $ID, HandleNullIndex('breakfastdate'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_LunchDate", $ID, HandleNullIndex('lunchdate'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_WantsStarterPack", $ID, HandleNullIndex('int_starterPack'));
	$alertMessage = $alertMessage . " " . sql_update_field($conn, "AdmittedStudents", "Int_InternationalStudentsHostel", $ID, HandleNullIndex('int_accommodation'));
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
	/*$UpdatePastoralPoints = $conn->prepare
								("
									UPDATE AdmittedStudents 
									SET PastoralPointsRegistration = '".$.
									"' WHERE User_ID = '" .$ID."'";
								);
								
	$pastoralPointsInfoUpdated = $UpdatePastoralPoints->execute();

	if (!$pastoralPointsInfoUpdated) {
		$alertMessage = $alertMessage . " " . "Sorry, there was an error submitting the Pastoral Points Tab information";
	}
	
	//SponsorAgreementPlan
	$UpdateSponsorAgreementPlan = $conn->prepare
								("
									UPDATE AdmittedStudents 
									SET SponsorAgreementPlan = '".$.
									"' WHERE User_ID = '" .$ID."'";
								);
								
	$sponsorAgreementPlanInfoUpdated = $UpdateSponsorAgreementPlan->execute();

	if (!$sponsorAgreementPlanInfoUpdated) {
		$alertMessage = $alertMessage . " " . "Sorry, there was an error submitting the Sponsor Agreement Plan Tab information";
	}
	
	//InternationalStudentConfirmations
	$UpdateInternationalStudentConfirmations = $conn->prepare
								("
									UPDATE AdmittedStudents 
									SET IntCon_PrintedAllDocuments = '".$."', 
									IntCon_HasMalariaMedication = '".$."', 
									IntCon_MobilePhoneUnlocked = '".$."', 
									IntCon_HasGhanaCharger = '".$."', 
									IntCon_PowerBank = '".$."', 
									IntCon_HasBeddings = '".$.
									"' WHERE User_ID = '" .$ID."'";
								);
								
	$internationalStudentConfirmationsInfoUpdated = $UpdateInternationalStudentConfirmations->execute();

	if (!$internationalStudentConfirmationsInfoUpdated) {
		$alertMessage = $alertMessage . " " . "Sorry, there was an error submitting the International Student Confirmations Tab information";
	}
	
	//SoftLandingChecklist
	$UpdateSoftLandingChecklist = $conn->prepare
								("
									UPDATE AdmittedStudents 
									SET Check_AirportPickup = '".$."',
										Check_ChangedMoneyAt = '".$."',
										Check_StarterPack = '".$."',
										Check_MTNSimCard = '".$."',
										Check_CollectTag = '".$."',
										Check_IssuesInTheRoom = '".$."',
										Check_IssuesInTheRoomSolved = '".$."',
										Check_PaidAdminFeesAndCollectedTextbooks = '".$."',
										Check_GalleryTour = '".$."',
										Check_OrphanageTour = '".$.
									"' WHERE User_ID = '" .$ID."'";
								);
	$softLandingChecklistInfoUpdated = $UpdateSoftLandingChecklist->execute();

	if (!$softLandingChecklistInfoUpdated) {
		$alertMessage = $alertMessage . " " . "Sorry, there was an error submitting the Soft Landing Checklist Tab information";
	}*/
	
	
}
echo $alertMessage;

if (empty($alertMessage)) {
    $alertMessage = "Admission Info Update Successful";
}

//AlertAndRedirect($alertMessage, $redirectUrl);
?>