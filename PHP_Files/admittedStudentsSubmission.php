<?php

include "dbconfig.php";
include "sql_upload_doc.php";
include "alertAndRedirect.php";
include_once "escapeQuotes.php";

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
	/*$UpdateLocal = $conn->prepare
								("
									UPDATE AdmittedStudents 
									SET Loc_InternationalStudentsHostel = '".$."', 
									Loc_PrintedAllDocuments = '".$."', 
									Loc_HasBeddings = '".$."', 
									Loc_HasMTNCard = '".$.
									"' WHERE ID = '" .$ID."'";
								);
								
	$localInfoUpdated = $UpdateLocal->execute();

	if (!$localInfoUpdated) {
		$alertMessage = $alertMessage . " " . "Sorry, there was an error submitting the Local Tab information";
	}*/
	
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_ResponsibilityFormFilepath", $ID, "locstudentform", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_AdminFeeProofFilepath", $ID, "adminfeepay", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_DeclarationFormFilepath", $ID, "declarationform", $targetDirectory);
	$alertMessage = $alertMessage . " " . sql_upload_doc($conn, "AdmittedStudents", "Loc_RoomAssignmentFormFilepath", $ID, "roomasignmentform", $targetDirectory);
	
	//International
	/*$UpdateInternational = $conn->prepare
								("
									UPDATE AdmittedStudents 
									SET Int_AdmissionContractFormFilepath = '".$."', 
									Int_StudentResponsibilityFormFilepath = '".$."',
									Int_AdminFeeProofFilepath = '".$."',
									Int_ImmigrationFeeProofFilepath = '".$."',
									Int_PassportFilepath = '".$."',
									Int_VisaFilepath = '".$."',
									Int_VisaNotRequiredComment = '".$."',
									Int_FlightTicketFilepath = '".$."',
									Int_Arrival = '".$."', = '".$."',
									Int_Breakfast = '".$."', = '".$."',
									Int_Lunch = '".$."', = '".$."',
									Int_WantsStarterPack = '".$."',
									Int_InternationalStudentsHostel = '".$."',
									Int_DeclarationFormFilepath = '".$."',
									Int_RoomAssignmentFormFilepath = '".$.
									"' WHERE ID = '" .$ID."'";
								);
								
	$internationalInfoUpdated = $UpdateInternational->execute();

	if (!$internationalInfoUpdated) {
		$alertMessage = $alertMessage . " " . "Sorry, there was an error submitting the International Tab information";
	}
	
	//Registration
	$UpdateRegistration = $conn->prepare
								("
									UPDATE AdmittedStudents 
									SET Reg_Confirmed = '".$."', 
									Reg_SelectedSeptember2020Admission = '".$."', 
									Reg_ChurchBranch = '".$."', 
									Reg_Pastor = '".$."', 
									Reg_PastorsPhoneNumber = '".$."', 
									Reg_UDChurch = '".$."', 
									Reg_Denomination = '".$."', 
									Reg_Bishop = '".$.
									"' WHERE ID = '" .$ID."'";
								);
								
	$registrationInfoUpdated = $UpdateRegistration->execute();

	if (!$registrationInfoUpdated) {
		$alertMessage = $alertMessage . " " . "Sorry, there was an error submitting the Registration Tab information";
	}
	
	//PastoralPoints
	$UpdatePastoralPoints = $conn->prepare
								("
									UPDATE AdmittedStudents 
									SET PastoralPointsRegistration = '".$.
									"' WHERE ID = '" .$ID."'";
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
									"' WHERE ID = '" .$ID."'";
								);
								
	$sponsorAgreementPlanInfoUpdated = $UpdateSponsorAgreementPlan->execute();

	if (!$sponsorAgreementPlanInfoUpdated) {
		$alertMessage = $alertMessage . " " . "Sorry, there was an error submitting the Sponsor Agreement Plan Tab information";
	}
	
	//InternationalStudentConfirmations
	$UpdateInternationalStudentConfirmations = $conn->prepare
								("
									UPDATE AdmittedStudents 
									SET Loc_ResponsibilityFormFilepath = '".$."', 
									Loc_AdminFeeProofFilepath = '".$."', 
									Loc_InternationalStudentsHostel = '".$."', 
									Loc_DeclarationFormFilepath = '".$."', 
									Loc_RoomAssignmentFormFilepath = '".$."', 
									Loc_PrintedAllDocuments = '".$."', 
									Loc_HasBeddings = '".$."', 
									Loc_HasMTNCard = '".$.
									"' WHERE ID = '" .$ID."'";
								);
								
	$internationalStudentConfirmationsInfoUpdated = $UpdateInternationalStudentConfirmations->execute();

	if (!$internationalStudentConfirmationsInfoUpdated) {
		$alertMessage = $alertMessage . " " . "Sorry, there was an error submitting the International Student Confirmations Tab information";
	}
	
	//SoftLandingChecklist
	$UpdateSoftLandingChecklist = $conn->prepare
								("
									UPDATE AdmittedStudents 
									SET Loc_ResponsibilityFormFilepath = '".$."', 
									Loc_AdminFeeProofFilepath = '".$."', 
									Loc_InternationalStudentsHostel = '".$."', 
									Loc_DeclarationFormFilepath = '".$."', 
									Loc_RoomAssignmentFormFilepath = '".$."', 
									Loc_PrintedAllDocuments = '".$."', 
									Loc_HasBeddings = '".$."', 
									Loc_HasMTNCard = '".$.
									"' WHERE ID = '" .$ID."'";
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