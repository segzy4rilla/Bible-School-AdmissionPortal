CREATE TABLE AdmittedStudents(
	User_ID VARCHAR(255) PRIMARY KEY,
	-- Local
	Loc_ResponsibilityFormFilepath VARCHAR(255),
	Loc_AdminFeeProofFilepath VARCHAR(255),
	Loc_InternationalStudentsHostel VARCHAR(255),
	Loc_DeclarationFormFilepath VARCHAR(255),
	Loc_RoomAssignmentFormFilepath VARCHAR(255),
	Loc_PrintedAllDocuments VARCHAR(3),
	Loc_HasBeddings VARCHAR(3),
	Loc_HasMTNCard VARCHAR(3),
	
	-- International
	Int_AdmissionContractFormFilepath VARCHAR(255),
	Int_StudentResponsibilityFormFilepath VARCHAR(255),
	Int_AdminFeeProofFilepath VARCHAR(255),
	Int_ImmigrationFeeProofFilepath VARCHAR(255),
	Int_PassportFilepath VARCHAR(255),
	Int_VisaFilepath VARCHAR(255),
	Int_VisaNotRequiredComment VARCHAR(255),
	Int_FlightTicketFilepath VARCHAR(255),
	Int_ArrivalDateTime DATETIME,
	Int_BreakfastDate DATE,
	Int_LunchDate DATE,
	Int_WantsStarterPack VARCHAR(3),
	Int_InternationalStudentsHostel VARCHAR(255),
	Int_DeclarationFormFilepath VARCHAR(255),
	Int_RoomAssignmentFormFilepath VARCHAR(255),
	
	-- Registration
	Reg_Confirmed VARCHAR(3),
	Reg_SelectedSeptember2020Admission VARCHAR(3),
	Reg_ChurchBranch VARCHAR(255),
	Reg_Pastor VARCHAR(255),
	Reg_PastorsPhoneNumber VARCHAR(255),
	Reg_UDChurch VARCHAR(3),
	Reg_Denomination VARCHAR(255),
	Reg_Bishop VARCHAR(255),
	
	-- PastoralPoints
	PastoralPointsRegistration VARCHAR(3),
	
	-- SponsorAgreementPlan
	SponsorAgreementPlan VARCHAR(3),
	
	-- InternationalStudentConfirmations
	IntCon_PrintedAllDocuments VARCHAR(3),
	IntCon_HasMalariaMedication VARCHAR(3),
	IntCon_MobilePhoneUnlocked VARCHAR(3),
	IntCon_HasGhanaCharger VARCHAR(3),
	IntCon_PowerBank VARCHAR(3),
	IntCon_HasBeddings VARCHAR(3),
	
	-- SoftLandingChecklist
	Check_AirportPickup VARCHAR(3),
	Check_ChangedMoneyAt VARCHAR(3),
	Check_StarterPack VARCHAR(3),
	Check_MTNSimCard VARCHAR(3),
	Check_CollectTag VARCHAR(3),
	Check_IssuesInTheRoom VARCHAR(3),
	Check_IssuesInTheRoomSolved VARCHAR(3),
	Check_PaidAdminFeesAndCollectedTextbooks VARCHAR(3),
	Check_GalleryTour VARCHAR(3),
	Check_OrphanageTour VARCHAR(3)
);