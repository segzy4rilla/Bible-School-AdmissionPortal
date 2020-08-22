CREATE TABLE AdmittedStudents(
	--Local
	ResponsibilityFormFilepath VARCHAR(255),
	AdminFeeProofFilepath VARCHAR(255),
	InternationalStudentsHostel VARCHAR(255),
	DeclarationFormFilepath VARCHAR(255),
	RoomAssignmentFormFilepath VARCHAR(255),
	PrintedAllDocuments VARCHAR(3),
	HasBeddings VARCHAR(3),
	HasMTNCard VARCHAR(3),
	
	--International
	AdmissionContractFormFilepath VARCHAR(255),
	StudentResponsibilityFormFilepath VARCHAR(255),
	AdminFeeProofFilepath VARCHAR(255),
	ImmigrationFeeProofFilepath VARCHAR(255),
	PassportFilepath VARCHAR(255),
	VisaFilepath VARCHAR(255),
	VisaNotRequiredComment VARCHAR(255),
	FlightTicketFilepath VARCHAR(255),
	ArrivalDateTime DATETIME,
	BreakfastDate DATE,
	LunchDate DATE,
	WantsStarterPack VARCHAR(3),
	InternationalStudentsHostel VARCHAR(255),
	DeclarationFormFilepath VARCHAR(255),
	RoomAssignmentFormFilepath VARCHAR(255),
	
	--Registration
	Confirmed VARCHAR(3),
	SelectedSeptember2020Admission VARCHAR(3),
	ChurchBranch VARCHAR(255),
	Pastor VARCHAR(255),
	PastorsPhoneNumber VARCHAR(255),
	UDChurch VARCHAR(3),
	Denomination VARCHAR(255),
	Bishop VARCHAR(255),
	
	--PastoralPoints
	PastoralPointsRegistration VARCHAR(3),
	
	--SponsorAgreementPlan
	SponsorAgreementPlan VARCHAR(3),
	
	--InternationalStudentConfirmations
	PrintedAllDocuments VARCHAR(3),
	HasMalariaMedication VARCHAR(3),
	MobilePhoneUnlocked VARCHAR(3),
	HasGhanaCharger VARCHAR(3),
	PowerBank VARCHAR(3),
	HasBeddings VARCHAR(3),
	
	--SoftLandingChecklist
	AirportPickup VARCHAR(3),
	ChangedMoneyAt VARCHAR(3),
	StarterPack VARCHAR(3),
	MTNSimCard VARCHAR(3),
	CollectTag VARCHAR(3),
	IssuesInTheRoom VARCHAR(3),
	IssuesInTheRoomSolved VARCHAR(3),
	PaidAdminFeesAndCollectedTextbooks VARCHAR(3),
	GalleryTour VARCHAR(3),
	OrphanageTour VARCHAR(3),
);