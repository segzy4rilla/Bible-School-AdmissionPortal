<?php
$servername = "localhost:3306";
$username = "anagkaz1_wp780";
$password = "AbMTC2020!!!";
$dbname = "anagkaz1_wp780";

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "ABTMC_Portal";

$uniqueid = uniqid();

session_start();

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
        $_SESSION['loggedin'] = true;
        $_SESSION['isAdmin'] = false;
        $_SESSION['User_Id']= $result[0][0];
        $_SESSION['First_Name']= $result[0][1];
        $_SESSION['Last_Name']= $result[0][2];
        $_SESSION['EmailWhatsapp']= $result[0][3];
        $_SESSION['Password']= $result[0][4];
        $_SESSION['Application_Form_Submitted'] = $result[0][6];
        $_SESSION['Interview_Form_Submitted'] = $result[0][7];
        $_SESSION['Document_Uploads_Submitted'] = $result[0][8];

        header('Location: ../applicantdash.php');
    }else{

        $sql = "SELECT * FROM Admin_User where Username= :emwhat AND Password = :pwd";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':emwhat', $email_whatsapp, PDO::PARAM_STR_CHAR);
        $stmt->bindParam(':pwd', $password, PDO::PARAM_STR_CHAR);
        $stmt->execute();
        $result = $stmt->fetchAll();

        if ($result) {
            $_SESSION['loggedin'] = true;
            $_SESSION['isAdmin'] = true;
            header('Location: ../summarytable.php');

        } else {
            $_SESSION['loggedin'] = false;
            $_SESSION['isAdmin'] = false;
            header('Location: ../loginabmtc.html');

        }

    }

}catch(Exception $ex){

}

    ?>

