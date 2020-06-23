<?php

include "dbconfig.php";
$uniqueid = uniqid();


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE TEMP2
SELECT A.EmailWhatsApp
FROM Applicant_Table AS A 
JOIN Ghana_Table AS J 
ON A.EmailWhatsApp = J.Email_Address
OR A.EmailWhatsApp = J.Phone_Number;

UPDATE Ghana_Table
SET Created_an_ABMTC_Account = TRUE
WHERE Email_Address IN (SELECT EmailWhatsApp FROM TEMP2)
OR Phone_Number IN (SELECT EmailWhatsApp FROM TEMP2);

DROP TABLE TEMP2";
    // use exec() because no results are returned
    $conn->exec($sql);


} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>