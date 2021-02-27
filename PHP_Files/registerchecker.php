<?php

include "dbconfig.php";
include "../send_email.php";
$uniqueid = uniqid();



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $username =$_POST['username'];
    $emailwhatsapp =$_POST['emailwhatsapp'];
    $password =$_POST['password'];
    $nationality =$_POST['nationality'];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Applicant_Table (User_ID, First_Name,Last_Name,EmailWhatsapp,Password,Nationality)
  VALUES ('$uniqueid','$firstname', '$lastname','$emailwhatsapp','$password','$nationality')";
    // use exec() because no results are returned
    $conn->exec($sql);
    send_email($firstname . " " . $lastname, $nationality, $emailwhatsapp, $username, $emailwhatsapp);
    header('Location: ../loginabmtc.html');
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>