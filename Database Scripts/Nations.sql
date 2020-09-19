CREATE TABLE Nations(
	WhatsAppNumber VARCHAR(255) PRIMARY KEY,
	FirstName VARCHAR(255),
	LastName VARCHAR(255),
	Email VARCHAR(255),
	Denomination VARCHAR(255),
	Branch VARCHAR(255),
	Pastor VARCHAR(255),
	Bishop VARCHAR(255),
	Age INT,
	Nationality VARCHAR(255),
	CountryOfResidence VARCHAR(255),
	Education VARCHAR(255),
	RoleInChurch VARCHAR(255),
	YearsInChurch INT,
	ParentalConsent VARCHAR(255)
	MaritalStatus VARCHAR(255),
	CurrentlyInABMTC VARCHAR(255),
	CompletedABMTC VARCHAR(255),
	StartDate VARCHAR(255),
	PaymentType VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;