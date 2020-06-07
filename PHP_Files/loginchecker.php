<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ABTMC_Portal";

$uniqueid = uniqid();



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


    $email_whatsapp = $_POST['email/whatsapp'];
    $password = $_POST['password'];
    $sql ="SELECT * FROM User_Table where EmailWhatsapp= :emwhat AND Password = :pwd";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':emwhat', $email_whatsapp, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':pwd', $password, PDO::PARAM_STR_CHAR);

    $stmt->execute();


    $result = $stmt->fetchAll();
    if($result){
        header('Location: ../applicantdash.html');
    }else{
        header('Location: ../loginabmtc.html');
    }

}catch(Exception $ex){

}

    ?>

