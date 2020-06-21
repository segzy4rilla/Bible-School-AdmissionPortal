ALTER TABLE Applicant_Table
CHANGE Document_Uploads_Submitted `Document_Uploads_Status` varchar(20) DEFAULT "Incomplete" NOT NULL;
UPDATE Applicant_Table
SET Document_Uploads_Status = "Incomplete"
