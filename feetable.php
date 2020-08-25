<?php
session_start();

if ($_SESSION['loggedin'] == false) {
    header('Location: loginabmtc.html');
}

require("dbconfig/config.php");
require("PHP_Files/getAdminHomeLink.php");

$query = "select First_Name, Last_Name, Nationality, Reg_Denomination, Loc_AdminFeePaymentDate, Loc_AdminFeeProofFilepath, Loc_ConfirmationLetterFilepath, Int_AdminFeePaymentDate, Int_AdminFeeProofFilepath, Int_ConfirmationLetterFilepath FROM AdmittedStudents A JOIN Applicant_Table B ON A.User_ID = B.User_ID";
$result = $con->query($query);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Adminstration Fee Table</title>

    <!-- Favicon -->
    <link rel="icon" href="ABTMC.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="css/default-assets/smartwizard.css">

        <link rel="stylesheet" href="css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/select.bootstrap4.css">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
      @import url("https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,700,900");
    </style>



    <style type="text/css">
    .hide {
  display: none;
}
</style>


<style>
  .header__btn {
  transition-property: all;
  transition-duration: 0.2s;
  transition-timing-function: linear;
  transition-delay: 0s;
  padding: 10px 20px;
  display: inline-block;
  margin-right: 10px;
  background-color: #fff;
  border: 1px solid #2c2c2c;
  border-radius: 3px;
  cursor: pointer;
  outline: none;
}
.header__btn:last-child {
  margin-right: 0;
}
.header__btn:hover, .header__btn.js-active {
  color: #fff;
  background-color: #2c2c2c;
}

.header {
  max-width: 600px;
  margin: 50px auto;
  text-align: center;
}

.header__title {
  margin-bottom: 30px;
  font-size: 2.1rem;
}

.content__title {
  margin-bottom: 40px;
  font-size: 20px;
  text-align: center;
}

.content__title--m-sm {
  margin-bottom: 10px;
}

.multisteps-form__progress {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(0, 1fr));
}

.multisteps-form__progress-btn {
  transition-property: all;
  transition-duration: 0.15s;
  transition-timing-function: linear;
  transition-delay: 0s;
  position: relative;
  padding-top: 20px;
  color: rgba(108, 117, 125, 0.7);
  text-indent: -9999px;
  border: none;
  background-color: transparent;
  outline: none !important;
  cursor: pointer;
}
@media (min-width: 500px) {
  .multisteps-form__progress-btn {
    text-indent: 0;
  }
}
.multisteps-form__progress-btn:before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 13px;
  height: 13px;
  content: '';
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  transition: all 0.15s linear 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
  transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
  transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
  border: 2px solid currentColor;
  border-radius: 50%;
  background-color: #fff;
  box-sizing: border-box;
  z-index: 3;
}
.multisteps-form__progress-btn:after {
  position: absolute;
  top: 5px;
  left: calc(-50% - 13px / 2);
  transition-property: all;
  transition-duration: 0.15s;
  transition-timing-function: linear;
  transition-delay: 0s;
  display: block;
  width: 100%;
  height: 2px;
  content: '';
  background-color: currentColor;
  z-index: 1;
}
.multisteps-form__progress-btn:first-child:after {
  display: none;
}
.multisteps-form__progress-btn.js-active {
  color: #ffa500;
}
.multisteps-form__progress-btn.js-active:before {
  -webkit-transform: translateX(-50%) scale(1.2);
          transform: translateX(-50%) scale(1.2);
  background-color: currentColor;
}

.multisteps-form__form {
  position: relative;
}

.multisteps-form__panel {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 0;
  opacity: 0;
  visibility: hidden;
}
.multisteps-form__panel.js-active {
  height: auto;
  opacity: 1;
  visibility: visible;
}
.multisteps-form__panel[data-animation="scaleOut"] {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.multisteps-form__panel[data-animation="scaleOut"].js-active {
  transition-property: all;
  transition-duration: 0.2s;
  transition-timing-function: linear;
  transition-delay: 0s;
  -webkit-transform: scale(1);
          transform: scale(1);
}
.multisteps-form__panel[data-animation="slideHorz"] {
  left: 50px;
}
.multisteps-form__panel[data-animation="slideHorz"].js-active {
  transition-property: all;
  transition-duration: 0.25s;
  transition-timing-function: cubic-bezier(0.2, 1.13, 0.38, 1.43);
  transition-delay: 0s;
  left: 0;
}
.multisteps-form__panel[data-animation="slideVert"] {
  top: 30px;
}
.multisteps-form__panel[data-animation="slideVert"].js-active {
  transition-property: all;
  transition-duration: 0.2s;
  transition-timing-function: linear;
  transition-delay: 0s;
  top: 0;
}
.multisteps-form__panel[data-animation="fadeIn"].js-active {
  transition-property: all;
  transition-duration: 0.3s;
  transition-timing-function: linear;
  transition-delay: 0s;
}
.multisteps-form__panel[data-animation="scaleIn"] {
  -webkit-transform: scale(0.9);
          transform: scale(0.9);
}
.multisteps-form__panel[data-animation="scaleIn"].js-active {
  transition-property: all;
  transition-duration: 0.2s;
  transition-timing-function: linear;
  transition-delay: 0s;
  -webkit-transform: scale(1);
          transform: scale(1);
}
</style>

<style type="text/css">
  .scrollpage1{
    overflow-y: scroll;
      }
      .scrollpage1{
    overflow-y: scroll;
      }
</style>

<style>
  label.is-invalid {
  color: #ff0022;
}
/* Icons */
.hide {
  display: none;
}

.icon.validation {
  width: 13px;
  height: 13px;
  position: absolute;
  top: -5px;
  right: -5px;
  border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  font-size: 0.4rem;
  text-align: center;
  line-height: 0.9rem;
  color: #fff;
}

.icon.success {
  background: #00aa11;
}

.icon.error {
  background: #ff0022;
}

.success {
  color: #00aa11;
}

/* Fields */
.input-wrap.is-invalid input, .input-wrap.is-invalid select, .input-wrap.is-invalid textarea {
  border: 1px solid #ff0022;
}

/* Helper/Error */
.is-helpful {
  color: #999;
  font-size: 0.8rem;
  margin-top: 0.5rem;
}

.is-helpful.error-message {
  color: #ff0022;
}
</style>
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="preloader-load"></div>
</div>
<!-- Preloader -->

<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="ecaps-page-wrapper">

    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        <header class="top-header-area d-flex align-items-center justify-content-between">

            <div class="left-side-content-area d-flex align-items-center">
                <div class="ecaps-logo" style="width:75px">
                    <a href="applicantdash.php">
                        <img class="desktop-logo" style="min-height:70px; min-width:70px; margin:0px" src="ABTMC.png"
                             alt="Desktop Logo">
                        <img class="small-logo" src="ABTMC.png" alt="Mobile Logo">
                    </a>
                </div>

                <div id="google_translate_element"></div>

                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                    }
                </script>

                <script type="text/javascript"
                        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                <!-- Mobile Logo -->
                <div class="mobile-logo mr-3 mr-sm-4">
                    <a href="applicantdash.php"><img src="ABTMC.png" alt="Mobile Logo"></a>
                </div>

            </div>

            <div class="right-side-navbar d-flex align-items-center justify-content-end">
                <!-- Mobile Trigger -->
                <div class="right-side-trigger" id="rightSideTrigger">
                    <i class="fa fa-reorder"></i>
                </div>
                <!-- Three line menu button -->
                <div class="ecaps-triggers mr-1 mr-sm-3">
                    <div class="menu-collasped" id="menuCollasped">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                    <div class="mobile-menu-open" id="mobileMenuOpen">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <div class="main-content">
            <div class="container-fluid">
                 <div class="row">
                            <div class="col-12 box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-2">Administration Fee Payments</h4>
                                        <p class="text-muted font-14 mb-4">
                                            
                                        </p>

                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th style="font-size: 10px;">Name</th>
                                                    <th style="font-size: 10px;">Nationality</th>
                                                    <th style="font-size: 10px;">Denomination</th>
                                                    <th style="font-size: 10px;">Proof Of Payment (Picture Display)</th>
                                                    <th style="font-size: 10px;">Provided Payment Date</th>
                                                    <th style="font-size: 10px;">Bishops Letter Payment Approval</th>
                                                </tr>
                                            </thead>


                                            <tbody>
												<?php
													while ($row = $result->fetch_assoc()) {
														echo "<tr>";
														echo "<td>".$row['First_Name']." ".$row['Last_Name']."</td>";
														echo "<td>".$row['Nationality']."</td>";
														echo "<td>".$row['First_Name']."</td>";
														if($row['Nationality'] == "ghanaian"){
															echo "<td><a href='".$row['Loc_AdminFeeProofFilepath']."'>Proof Of Payment</a></td>";
															echo "<td>".$row['Loc_AdminFeePaymentDate']."</td>";
															echo "<td><a href='".$row['Loc_ConfirmationLetterFilepath']."'>Bishops Letter Payment Approval</a></td>";
														}
														else{
															echo "<td><a href='".$row['Int_AdminFeeProofFilepath']."'>Proof Of Payment</a></td>";
															echo "<td>".$row['Int_AdminFeePaymentDate']."</td>";
															echo "<td><a href='".$row['Int_ConfirmationLetterFilepath']."'>Bishops Letter Payment Approval</a></td>";
														}
														echo "</tr>";
													}
												?>
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


            </div>

            <!-- Footer Area -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Area -->
                        <footer class="footer-area d-flex align-items-center flex-wrap">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p>Created by <a href="#">ABTMC</a></p>
                            </div>
                            <!-- Footer Nav -->
                            <ul class="footer-nav d-flex align-items-center">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Purchase</a></li>
                            </ul>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bundle.js"></script>
<script src="js/default-assets/setting.js"></script>
<script src="js/default-assets/fullscreen.js"></script>

<!-- Active JS -->
<script src="js/default-assets/active.js"></script>

<!-- These plugins only need for the run this page -->
<script src="js/jquery.steps.min.js"></script>
<script src="js/jquery.form-validator.min.js"></script>
<script src="js/default-assets/wizard-form.js"></script>
<script src="js/default-assets/file-upload.js"></script>



    <!-- These plugins only need for the run this page -->
    <script src="js/default-assets/jquery.datatables.min.js"></script>
    <script src="js/default-assets/datatables.bootstrap4.js"></script>
    <script src="js/default-assets/datatable-responsive.min.js"></script>
    <script src="js/default-assets/responsive.bootstrap4.min.js"></script>
    <script src="js/default-assets/datatable-button.min.js"></script>
    <script src="js/default-assets/button.bootstrap4.min.js"></script>
    <script src="js/default-assets/button.html5.min.js"></script>
    <script src="js/default-assets/button.flash.min.js"></script>
    <script src="js/default-assets/button.print.min.js"></script>
    <script src="js/default-assets/datatables.keytable.min.js"></script>
    <script src="js/default-assets/datatables.select.min.js"></script>
    <script src="js/default-assets/demo.datatable-init.js"></script>


<script src='https://rawgit.com/guillaumepotier/Parsley.js/2.2.0-rc4/dist/parsley.js'></script>

<script type="text/javascript">
  $(document).ready(function () {


  
});
</script>




<script type="text/javascript">
  function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
} 

  function show3(){
  document.getElementById('div2').style.display ='none';
}
function show4(){
  document.getElementById('div2').style.display = 'block';
} 
</script>
  <!-- Disable and enable button for page 2 -->


    <script type="text/javascript">
      function submitClick(){
      var gendercheck = document.forms["applicantform"]["question4"].value;
      var churchcheck = document.forms["applicantform"]["question7"].value;
      var livecheck = document.forms["applicantform"]["question21"].value;
      var liveguardcheck = document.forms["applicantform"]["question22"].value;
      var parhousecheck = document.forms["applicantform"]["question23"].value;
      var parcarcheck = document.forms["applicantform"]["question24"].value;
      var parbuscheck = document.forms["applicantform"]["question25"].value;
      var selcoursecheck = document.forms["applicantform"]["question30"].value;
      var startbiblecheck = document.forms["applicantform"]["question31"].value;
      var hearbiblecheck = document.forms["applicantform"]["question75"].value;
      var bornagaincheck = document.forms["applicantform"]["question32"].value;
      var believecallcheck = document.forms["applicantform"]["question33"].value;
      var callingfromcheck = document.forms["applicantform"]["question38"].value;
      var nardrugscheck = document.forms["applicantform"]["question40"].value;
      var nardrugspastcheck = document.forms["applicantform"]["question42"].value;
      var arrpolcheck = document.forms["applicantform"]["question44"].value;
      var proscourtcheck = document.forms["applicantform"]["question46"].value;
      var jailbefcheck = document.forms["applicantform"]["question48"].value;
      var alcpastcheck = document.forms["applicantform"]["question50"].value;
      var virgincheck = document.forms["applicantform"]["question54"].value;
      var robcheck = document.forms["applicantform"]["question56"].value;
      var revcheck = document.forms["applicantform"]["question58"].value;
      var proscheck = document.forms["applicantform"]["question60"].value;
      var medconcheck = document.forms["applicantform"]["question64"].value;
      var regmedcheck = document.forms["applicantform"]["question65"].value;
      var majsurcheck = document.forms["applicantform"]["question66"].value;
      var allercheck = document.forms["applicantform"]["question68"].value;
      var problawcheck = document.forms["applicantform"]["question69"].value;

      

      



      if (gendercheck == null || gendercheck == '') {
        alert("General: Sex - Male, Female Is Incomplete");
        return false;
      }

      if (churchcheck == null || churchcheck == '') {
        alert("General: Is Your Church Part Of UD-OLGC Is Incomplete");
        return false;
      }

      if (livecheck == null || livecheck == '') {
        alert("General: Where Do You Live Is Incomplete");
        return false;
      }

      if (liveguardcheck == null || liveguardcheck == '') {
        alert("General: Do Your Parents/Guardian Own A House Is Incomplete");
        return false;
      }

      if (parhousecheck == null || parhousecheck == '') {
        alert("General: Are Your Parents/Guardian Renting A House Is Incomplete");
        return false;
      }

      if (parcarcheck == null || parcarcheck == '') {
        alert("General: Do Your Parents/Guardian Own A Car Is Incomplete");
        return false;
      }

      if (parbuscheck == null || parbuscheck == '') {
        alert("General: Do Your Parents/Guardian Own A Business Is Incomplete");
        return false;
      }

      if (selcoursecheck == null || selcoursecheck == '') {
        alert("General: Select Course You Would Like To Do Is Incomplete");
        return false;
      }

      if (startbiblecheck == null || startbiblecheck == '') {
        alert("General: What month would you like to start Bible school Is Incomplete");
        return false;
      }

      if (hearbiblecheck == null || hearbiblecheck == '') {
        alert("General: How did you hear about the Bible School Is Incomplete");
        return false;
      }

      if (bornagaincheck == null || bornagaincheck == '') {
        alert("Church: Are you born again Is Incomplete");
        return false;
      }

      if (believecallcheck == null || believecallcheck == '') {
        alert("Church: Do you believe you are called Is Incomplete");
        return false;
      }

      if (callingfromcheck == null || callingfromcheck == '') {
        alert("Church: Do You Have A Calling From God Is Incomplete");
        return false;
      }

      if (nardrugscheck == null || nardrugscheck == '') {
        alert("Social And Past History Background: Do You Use Narcortic Drugs (Cocaine, Heroin, Marijuana etc) Is Incomplete");
        return false;
      }

      if (nardrugspastcheck == null || nardrugspastcheck == '') {
        alert("Social And Past History Background: Have You Ever Used Narcortic Drugs In The Past Is Incomplete");
        return false;
      } 

      if (arrpolcheck == null || arrpolcheck == '') {
        alert("Social And Past History Background: Have You Been Arrested By The Police Before Is Incomplete");
        return false;
      }

      if (proscourtcheck == null || proscourtcheck == '') {
        alert("Social And Past History Background: Have You Been Prosecuted In Court Before Is Incomplete");
        return false;
      }          

      if (jailbefcheck == null || jailbefcheck == '') {
        alert("Social And Past History Background: Have You Been To Jail Before Is Incomplete");
        return false;
      }

      if (alcpastcheck == null || alcpastcheck == '') {
        alert("Social And Past History Background: Have You Taken Alcholic Drinks In The Past Is Incomplete");
        return false;
      }

      if (virgincheck == null || virgincheck == '') {
        alert("Social And Past History Background: Are You A Virgin Is Incomplete");
        return false;
      }

      if (robcheck == null || robcheck == '') {
        alert("Social And Past History Background: Armed Robbery Is Incomplete");
        return false;
      }

      if (revcheck == null || revcheck == '') {
        alert("Social And Past History Background: Revolution/Rebel Is Incomplete");
        return false;
      }

      if (proscheck == null || proscheck == '') {
        alert("Social And Past History Background: Prostitution Is Incomplete");
        return false;
      }

      if (medconcheck == null || medconcheck == '') {
        alert("Health Status: Do You Have Any Serious Medical Condition Is Incomplete");
        return false;
      }

      if (regmedcheck == null || regmedcheck == '') {
        alert("Health Status: Are You On Any Regular Medication Is Incomplete");
        return false;
      }

      if (majsurcheck == null || majsurcheck == '') {
        alert("Health Status: Have You Had Any Major Surgeries Is Incomplete");
        return false;
      }

      if (allercheck == null || allercheck == '') {
        alert("Health Status: Do You Have Any Allergies Is Incomplete");
        return false;
      }

      if (problawcheck == null || problawcheck == '') {
        alert("Health Status: Have You Had Any Problems With The Law Is Incomplete");
        return false;
      }

      if (document.getElementById("MaritalStat").value == "") {
    alert("You need to fill in all three dropboxes and not just some");
    return false;
  }
  if (document.getElementById("countrylist").value == "") {
    alert("You need to fill in all two dropboxes James!");
    return false;
  }

  if (document.getElementById("RecommendedBy").value == "") {
    alert("You need to fill in all two dropboxes James!");
    return false;
  }

  var e = document.getElementById("nationatbirth");
            var optionSelIndex = e.options[e.selectedIndex].value;
            var optionSelectedText = e.options[e.selectedIndex].text;
            if (optionSelIndex == 0) {
                alert("General: Nationality At Birth Is Incomplete");
                return false;
            }   

  var e = document.getElementById("MaritalStat");
            var optionSelIndex = e.options[e.selectedIndex].value;
            var optionSelectedText = e.options[e.selectedIndex].text;
            if (optionSelIndex == 0) {
                alert("General: Marital Status Is Incomplete");
                return false;
            }

  var e = document.getElementById("countrylist");
            var optionSelIndex = e.options[e.selectedIndex].value;
            var optionSelectedText = e.options[e.selectedIndex].text;
            if (optionSelIndex == 0) {
                alert("General: Country Of Residence Is Incomplete");
                return false;
            }       

            var e = document.getElementById("RecommendedBy");
            var optionSelIndex = e.options[e.selectedIndex].value;
            var optionSelectedText = e.options[e.selectedIndex].text;
            if (optionSelIndex == 0) {
                alert("Recommended By: I Am Recommended By Is Incomplete");
                return false;
            } 

             var India = document.getElementById('checkbox-p-2forn').checked;
 var France = document.getElementById('checkbox-p-2ad').checked;
 var Japan = document.getElementById('checkbox-p-2ab').checked;
 var Sweden = document.getElementById('checkbox-p-2mas').checked;
 var Trini = document.getElementById('checkbox-p-2porno').checked;
 var Germany = document.getElementById('checkbox-p-2homo').checked;
 var Spain = document.getElementById('checkbox-p-2les').checked;
 var China = document.getElementById('checkbox-p-2none').checked;
 
 
 
 
 
 if(India==false && France == false && Japan==false && Sweden==false && Trini==false && Germany==false && Spain==false && China==false){
 alert('Social And Past History: Background Indicate Which Of The Following You have Been Involved In Is Incomplete');
 return false;
 }

 var India2 = document.getElementById('checkbox-p-2asthma').checked;
 var France2 = document.getElementById('checkbox-p-2allergy').checked;
 var Japan2 = document.getElementById('checkbox-p-2otherallergy').checked;
 var Sweden2 = document.getElementById('checkbox-p-2drugallergy').checked;
 var Trini2 = document.getElementById('checkbox-p-2diabetes').checked;
 var Germany2 = document.getElementById('checkbox-p-2hypertension').checked;
 var Spain2 = document.getElementById('checkbox-p-2tb').checked;
 var China2 = document.getElementById('checkbox-p-2mental').checked;
 var Nigeria2 = document.getElementById('checkbox-p-2illness').checked;
 var Ghana2 = document.getElementById('checkbox-p-2epilepsy').checked;
 var Chad2 = document.getElementById('checkbox-p-2illness').checked;
 var UK2 = document.getElementById('checkbox-p-2epilepsy').checked;
 
 
 
 
 
 if(India2==false && France2 == false && Japan2==false && Sweden2==false && Trini2==false && Germany2==false && Spain2==false && China2==false && Nigeria2==false && Ghana2==false && Chad2==false && UK2==false){
 alert('Health And Status: Tick Which Of The Following Diseases You Have Been Treated For In The Past is Incomplete');
 return false;
 }          
            

    }


    </script>  

<!--   <script type="text/javascript">

    function submitClick() {
    if (formValidation()) {
      alert("Thank you for your time! Your details have been submitted!");
      return true;
    } else {
      return false;
    }
  }

  function formValidation() {
    flag = true;

    if ((document.myForm.question21[0].checked == false) && (document.myForm.question21[1].checked == false)) {
      alert("IT WORKS!");
      flag = false;
    }
    return flag;
  }


  </script> -->

  

</body>

</html>