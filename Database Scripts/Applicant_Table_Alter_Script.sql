ALTER TABLE Applicant_Table
CHANGE Document_Uploads_Completed `Document_Uploads_Status` varchar(20) DEFAULT "Incomplete" NOT NULL;
UPDATE applicant_table
SET Document_Uploads_Status = "Incomplete"
