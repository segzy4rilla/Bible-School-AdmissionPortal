<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ABTMC_Portal";

$uniqueid = uniqid();



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


    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Interview_Form(Are_You_Born_Again,What_Does_It_Mean,When_were_you,How_long_have_you,User_ID,New_Creature_Meaning,Old_Habits,Old_Habits_Other,Stop_Old_Habits,Stop_Old_Habits_Other
,Is_Pastor_Aware,Comment,Role_In_Church,Other_Role_In_Church,John_3_16,Genesis_1_1,Why_Bible_School)
  VALUES ('$question_1','$question_2','$question_3','$question_4','testuserid','$question_5','$question_6','$question_7','$question_8','$question_9','$question_10','$question_11','$question_12','$question_13','$question_14','$question_15','$question_16')";
    // use exec() because no results are returned
    $conn->exec($sql);
    header('Location: ../loginabmtc.html');
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>