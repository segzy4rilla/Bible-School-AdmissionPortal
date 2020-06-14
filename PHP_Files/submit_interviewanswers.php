<?php
//$servername = "localhost:3306";
//$username = "anagkaz1_wp780";
//$password = "AbMTC2020!!!";
//$dbname = "anagkaz1_wp780";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ABTMC_Portal";
$uniqueid = uniqid();

session_start();

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $question_1 =$_POST['question1'];
    $question_2 =$_POST['question2'];
    $question_3 =$_POST['question3'];
    $question_4 =$_POST['question4'];
    $question_5 =$_POST['question5'];
    $question_6 =$_POST['question6'];
    $question_7 =$_POST['question7'];
    $question_8 =$_POST['question8'];
    $question_9 =$_POST['question9'];
    $question_10 =$_POST['question10'];
    $question_11 =$_POST['question11'];
    $question_12 =$_POST['question12'];
    $question_13 =$_POST['question13'];
    $question_14 =$_POST['question14'];
    $question_15 =$_POST['question15'];
    $question_16 =$_POST['question16'];

    $userid =$_SESSION["User_Id"];

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Interview_Form(Are_You_Born_Again,What_Does_It_Mean,When_were_you,How_long_have_you,User_ID,New_Creature_Meaning,Old_Habits,Old_Habits_Other,Stop_Old_Habits,Stop_Old_Habits_Other
,Is_Pastor_Aware,Comment,Role_In_Church,Other_Role_In_Church,John_3_16,Genesis_1_1,Why_Bible_School)
  VALUES (:q1,:q2,:q3,:q4,'$userid',:q5,:q6,:q7,:q8,:q9,:q10,:q11,:q12,:q13,:q14,:q15,:q16)";
    // use exec() because no results are returned

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':q1', $question_1, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q2', $question_2, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q3', $question_3, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q4', $question_4, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q5', $question_5, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q6', $question_6, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q7', $question_7, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q8', $question_8, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q9', $question_9, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q10', $question_10, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q11', $question_11, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q12', $question_12, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q13', $question_13, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q14', $question_14, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q15', $question_15, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':q16', $question_16, PDO::PARAM_STR_CHAR);


    echo '<script>alert("Interiew Test Submitted Successfully")</script>';


    $sql2 = "UPDATE User_Table SET Interview_Form_Submitted=TRUE WHERE User_ID='$uniqueid'";

    $conn->exec($sql2);
//    $stmt->execute();
    $_SESSION['Interview_Form_Submitted'] = 1;

//    header('Location: ../applicantdash.php');
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    echo '<script>alert("Interiew Test Not Submitted")</script>';
}
$conn = null;
?>