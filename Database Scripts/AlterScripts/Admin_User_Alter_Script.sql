ALTER TABLE Admin_User
ADD COLUMN IsMedicalAdmin BOOLEAN NOT NULL DEFAULT FALSE;

ALTER TABLE Admin_User
DROP COLUMN User_Level;