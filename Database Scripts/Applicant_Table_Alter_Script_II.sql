ALTER TABLE Applicant_Table
ADD COLUMN Church_Part_Of_UD VARCHAR(3) NULL;

UPDATE Applicant_Table AS A
LEFT JOIN Application_Form AS F
ON A.User_ID = F.User_ID
SET A.Church_Part_Of_UD = F.Church_Part_Of_UD;
