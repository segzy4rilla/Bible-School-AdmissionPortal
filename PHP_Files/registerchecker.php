<?php
$servername = "localhost";
$username = "u199045760_ABMTC";
$password = "ABMTC_PASS";
$dbname = "u199045760_ABMTC_APP";

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
    $sql = "INSERT INTO User_Table (User_ID, First_Name,Last_Name,Username,EmailWhatsapp,Password,Nationality)
  VALUES ('$uniqueid','$firstname', '$lastname','$username','$emailwhatsapp','$password','$nationality')";
    // use exec() because no results are returned
    $conn->exec($sql);
    header('Location: ../loginabmtc.html');
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>