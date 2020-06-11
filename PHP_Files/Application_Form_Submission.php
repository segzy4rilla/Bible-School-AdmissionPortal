<?php
$servername = "localhost";
$username = "u199045760_ABMTC";
$password = "ABMTC_PASS";
$dbname = "u199045760_ABMTC_APP";

session_start();
$uniqueid = $_SESSION['User_Id'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $question1 = @$_POST['question1'];
    $question2 = @$_POST['question2'];
    $question3 = @$_POST['question3'];
    $question4 = @$_POST['question4'];
    $question5 = @$_POST['question5'];
    $question6 = @$_POST['question6'];
    $question7 = @$_POST['question7'];
    $question8 = @$_POST['question8'];
    $question9 = @$_POST['question9'];
    $question10 = @$_POST['question10'];
    $question11 = @$_POST['question11'];
    $question12 = @$_POST['question12'];
    $question13 = @$_POST['question13'];
    $question14 = @$_POST['question14'];
    $question15 = @$_POST['question15'];
    $question16 = @$_POST['question16'];
    $question17 = @$_POST['question17'];
    $question18 = @$_POST['question18'];
    $question19 = @$_POST['question19'];
    $question20 = @$_POST['question20'];
    $question21 = @$_POST['question21'];
    $question22 = @$_POST['question22'];
    $question23 = @$_POST['question23'];
    $question24 = @$_POST['question24'];
    $question25 = @$_POST['question25'];
    $question26 = @$_POST['question26'];
    $question27 = @$_POST['question27'];
    $question28 = @$_POST['question28'];
    $question29 = @$_POST['question29'];
    $question30 = @$_POST['question30'];
    $question31 = @$_POST['question31'];
    $question32 = @$_POST['question32'];
    $question33 = @$_POST['question33'];
    $question34 = @$_POST['question34'];
    $question35 = @$_POST['question35'];
    $question36 = @$_POST['question36'];
    $question37 = @$_POST['question37'];
    $question38 = @$_POST['question38'];
    $question39 = @$_POST['question39'];
    $question40 = @$_POST['question40'];
    $question41 = @$_POST['question41'];
    $question44 = @$_POST['question44'];
    $question45 = @$_POST['question45'];
    $question46 = @$_POST['question46'];
    $question47 = @$_POST['question47'];
    $question48 = @$_POST['question48'];
    $question49 = @$_POST['question49'];
    $question50 = @$_POST['question50'];
    $question51 = @$_POST['question51'];
    $question54 = @$_POST['question54'];
    $question55 = @$_POST['question55'];
    $question56 = @$_POST['question56'];
    $question57 = @$_POST['question57'];
    $question58 = @$_POST['question58'];
    $question59 = @$_POST['question59'];
    $question60 = @$_POST['question60'];
    $question61 = @$_POST['question61'];
    $question62 = @$_POST['question62'];
    $question63 = @$_POST['question63'];
    $question64 = @$_POST['question64'];
    $question65 = @$_POST['question65'];
    $question66 = @$_POST['question66'];
    $question67 = @$_POST['question67'];
    $question68 = @$_POST['question68'];
    $question69 = @$_POST['question69'];
    $question70 = @$_POST['question70'];
    $question71 = @$_POST['question71'];
    $question72 = @$_POST['question72'];
    $question73 = @$_POST['question73'];
    $question74 = @$_POST['question74'];


//    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Application_Form (User_ID, First_Name,Last_Name,Date_Of_Birth,Sex,Age,Nationality_At_Birth,Church_Part_Of_UD,Marital_Status,Country_Of_Residence,Residential_Address,Email_Address,
WhatsApp_Number,Profession,Current_Occupation,Name_Of_Father,Name_Of_Mother,Name_Of_Gurdian,Profession_Of_Father,Profession_Of_Mother,Profession_Of_Guardian,Where_Do_You_Live,Parents_Guardian_OwnHouse,
Parents_Guardian_RentHouse,Parents_Guardian_OwnCar,Parents_Guardian_OwnBusiness,Name_Of_Sponsor,Sponsor_Phone_Number,Next_Of_Kin,Next_Of_Kin_Contact_Number,Course,Start_Month,Born_Again,Believe_Called,
Name_Of_Church,Church_Role,Pastoral_Length,Why_Bible_School,Do_You_Have_A_Calling,Do_You_Have_A_Calling_Explain,Narcotic_Drugs,Narcotic_Drugs_Explain,Arrested_Police,Arrested_Police_Explain,Court_Prosecution,
Court_Prosecution_Explain,Been_Jail,Been_Jail_Explain,Alcoholic_Drinks,Alcoholic_Drinks_Explain,Virgin,Immoral_Involvement,Armed_Robbery,Armed_Robbery_Explain,Revolution_Rebel,Revolution_Rebel_Explain,
Prostitution,Prostitution_Explain,Treated_Disease_List,Treated_Disease_List_Other,Serious_MedicalCondition,Regular_Medication,Major_Surgeries,Major_Surgeries_Specify,Allergies,Law_Problems,Law_Problems_Specify,
Recommended_By,Recommended_By_Specify,Signature,Submission_Date)
  VALUES ('$uniqueid','$question1',
    '$question2',
    '$question3',
    '$question4',
    '$question5',
    '$question6',
    '$question7',
    '$question8',
    '$question9',
    '$question10',
    '$question11',
    '$question12',
    '$question13',
    '$question14',
    '$question15',
    '$question16',
    '$question17',
    '$question18',
    '$question19',
    '$question20',
    '$question21',
    '$question22',
    '$question23',
    '$question24',
    '$question25',
    '$question26',
    '$question27',
    '$question28',
    '$question29',
    '$question30',
    '$question31',
    '$question32',
    '$question33',
    '$question34',
    '$question35',
    '$question36',
    '$question37',
    '$question38',
    '$question39',
    '$question40',
    '$question41',
    '$question44',
    '$question45',
    '$question46',
    '$question47',
    '$question48',
    '$question49',
    '$question50',
    '$question51',
    '$question54',
    '$question55',
    '$question56',
    '$question57',
    '$question58',
    '$question59',
    '$question60',
    '$question61',
    '$question62',
    '$question63',
    '$question64',
    '$question65',
    '$question66',
    '$question67',
    '$question68',
    '$question69',
    '$question70',
    '$question71',
    '$question72',
    '$question73',
    '$question74')";
    // use exec() because no results are returned
    $conn->exec($sql);
    header('Location: applicantdash.php');
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>