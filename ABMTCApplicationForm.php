<?php
session_start();

if ($_SESSION['loggedin'] == false) {
    header('Location: loginabmtc.html');
}
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
    <title>ABMTC Application Form</title>

    <!-- Favicon -->
    <link rel="icon" href="ABTMC.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="css/default-assets/smartwizard.css">

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
                    <div class="col-12 box-margin height-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="content">
  <!--content inner-->
  <div class="">
    <div class="container overflow-hidden">
      <!--multisteps-form-->
      <div class="multisteps-form">
        <br><br>
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">

              <button class="multisteps-form__progress-btn js-active" style="cursor: default;" type="button" title="User Info" disabled>GENERAL</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Address" disabled>CHURCH</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Order Info" disabled>CALLING</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Comments" disabled>SOCIAL AND PAST</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Comments" disabled>HEALTH STATUS</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Comments" disabled>CRIMINAL HISTORY</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Comments" disabled>NATIONALITY</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" style="font-size: 13px;" type="button" title="Comments" disabled>RECOMMENDED BY</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Comments" disabled>FINISH</button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-12 m-auto">
            <form class="multisteps-form__form" id="myForm" action="PHP_Files/Application_Form_Submission.php"
                                          method="POST" onsubmit="return submitClick();">
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn" disabled>
                <h3 class="multisteps-form__title">GENERAL</h3>
                <br>
                <div class="multisteps-form__content">
                  
                    <div id="demo-form" data-parsley-validate="" class="scrollpage1" style="height: 300px;">
                <div class="relative input-wrap is-required">
                  <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" name="question1" class="form-control required"
                                                           placeholder="Enter first name" aria-required="true" >
                                                           
                                                </div>
                                                </div>
                                                <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                       
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" name="question2" class="form-control required"
                                                           placeholder="Enter last name" aria-required="true" required="">

                                                           <span class="icon validation small success hide">
                  <span class="fa fa-check"></span>
                </span>
                <span class="icon validation small error hide">
                  <span class="fa fa-remove"></span>
                </span>
                <div class="is-helpful" data-helper="Validates if not empty." data-error="Please enter your first name."></div>
                                                </div>
                                              </div>
                                                
                                              <div class="relative input-wrap is-required">  
                                                <div class="form-group">
                                                    <label>Date Of Birth</label>

                                                    <input class="form-control rounded-0 form-control-md required" type="date" required
                                                           value="2011-08-19" id="example-date-input" name="question3 required"
                                                           aria-required="true" required="">
                                                      <span class="icon validation small success hide">
                    <span class="fa fa-check"></span>
                  </span>
                  <span class="icon validation small error hide">
                    <span class="fa fa-remove"></span>
                  </span>
                  <div class="is-helpful" data-helper="You must be at least 13." data-error="You must be at least 13."></div>
                                                </div>
                                              </div>

                                                <div class="form-group">
                                                    <label class="control-label">Sex</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="question4"
                                                               value="Male" class="custom-control-input"
                                                               aria-required="true">
                                                        <label class="custom-control-label"
                                                               for="customRadio1">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="question4"
                                                               value="Female" class="custom-control-input"
                                                               aria-required="true">
                                                        <label class="custom-control-label"
                                                               for="customRadio2">Female</label>
                                                    </div>
                                                </div>
                                                <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Age</label>
                                                    <input type="number" name="question5" class="form-control"
                                                           placeholder="Enter age" required>
                                                </div>
                                                <span class="icon validation small success hide">
                  <span class="fa fa-check"></span>
                </span>
                <span class="icon validation small error hide">
                  <span class="fa fa-remove"></span>
                </span>
                <div class="is-helpful" data-helper="Validates if not empty." data-error="Please enter your first name."></div>
              </div>
                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Nationality At Birth</label>
                                                    <input type="text" class="form-control required" name="question6"
                                                           placeholder="Enter birth nationality" required>
                                                </div>
                                                <span class="icon validation small success hide">
                  <span class="fa fa-check"></span>
                </span>
                <span class="icon validation small error hide">
                  <span class="fa fa-remove"></span>
                </span>
                <div class="is-helpful" data-helper="Validates if not empty." data-error="Please enter your first name."></div>

              </div>
                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Is Your Church Part Of UD-OLGC?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customUD" name="question7" value="Yes"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="customUD">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customUD2" name="question7" value="No"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="customUD2">No</label>
                                                    </div>
                                                </div>
                                                

              </div>  
                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Marital Status</label>
                                                    <div class="form-group">
                                                       <div class="relative input-wrap is-required"> 
                                                        <select class="form-control rounded-0 required" name="question8"
                                                                id="MaritalStat">
                                                            <option value="0">--Select Marital Status--</option>    
                                                            <option value="1">Married</option>
                                                            <option value="2">Single</option>
                                                            <option value="3">Divorced</option>
                                                            <option value="4">Widowed</option>
                                                            <option value="5">Other</option>
                                                        </select>
                                                    </div>
                                                   <span class="icon validation small success hide">
                  <span class="fa fa-check"></span>
                </span>
                <span class="icon validation small error hide">
                  <span class="fa fa-remove"></span>
                </span>
                <div class="is-helpful" data-helper="Validates if not empty." data-error="Please enter your first name."></div>

              </div>    
                                                </div>
                                              </div>
                                                 


                                                <div class="form-group">
                                                    <label class="control-label">Country Of Residence</label>
                                                    <div class="relative input-wrap is-required"> 
                                                    <select class="form-control" name="question9"
                                                            id="countrylist" required>
                                                            <option value="0">--Select A Country--</option>
                                                        <option value="1">Afghanistan</option>
                                                        <option value="2">Åland Islands</option>
                                                        <option value="3">Albania</option>
                                                        <option value="4">Algeria</option>
                                                        <option value="5">American Samoa</option>
                                                        <option value="6">Andorra</option>
                                                        <option value="7">Angola</option>
                                                        <option value="8">Anguilla</option>
                                                        <option value="9">Antarctica</option>
                                                        <option value="10">Antigua and Barbuda</option>
                                                        <option value="11">Argentina</option>
                                                        <option value="12">Armenia</option>
                                                        <option value="13">Aruba</option>
                                                        <option value="14">Australia</option>
                                                        <option value="15">Austria</option>
                                                        <option value="16">Azerbaijan</option>
                                                        <option value="17">Bahamas</option>
                                                        <option value="18">Bahrain</option>
                                                        <option value="19">Bangladesh</option>
                                                        <option value="20">Barbados</option>
                                                        <option value="21">Belarus</option>
                                                        <option value="22">Belgium</option>
                                                        <option value="23">Belize</option>
                                                        <option value="24">Benin</option>
                                                        <option value="25">Bermuda</option>
                                                        <option value="26">Bhutan</option>
                                                        <option value="27">Bolivia, Plurinational State of</option>
                                                        <option value="28">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="29">Bosnia and Herzegovina</option>
                                                        <option value="30">Botswana</option>
                                                        <option value="31">Bouvet Island</option>
                                                        <option value="32">Brazil</option>
                                                        <option value="33">British Indian Ocean Territory</option>
                                                        <option value="34">Brunei Darussalam</option>
                                                        <option value="35">Bulgaria</option>
                                                        <option value="36">Burkina Faso</option>
                                                        <option value="37">Burundi</option>
                                                        <option value="38">Cambodia</option>
                                                        <option value="39">Cameroon</option>
                                                        <option value="40">Canada</option>
                                                        <option value="41">Cape Verde</option>
                                                        <option value="42">Cayman Islands</option>
                                                        <option value="43">Central African Republic</option>
                                                        <option value="44">Chad</option>
                                                        <option value="45">Chile</option>
                                                        <option value="46">China</option>
                                                        <option value="47">Christmas Island</option>
                                                        <option value="48">Cocos (Keeling) Islands</option>
                                                        <option value="49">Colombia</option>
                                                        <option value="50">Comoros</option>
                                                        <option value="51">Congo</option>
                                                        <option value="52">Congo, the Democratic Republic of the
                                                        </option>
                                                        <option value="53">Cook Islands</option>
                                                        <option value="54">Costa Rica</option>
                                                        <option value="55">Côte d'Ivoire</option>
                                                        <option value="56">Croatia</option>
                                                        <option value="57">Cuba</option>
                                                        <option value="58">Curaçao</option>
                                                        <option value="59">Cyprus</option>
                                                        <option value="60">Czech Republic</option>
                                                        <option value="61">Denmark</option>
                                                        <option value="62">Djibouti</option>
                                                        <option value="63">Dominica</option>
                                                        <option value="64">Dominican Republic</option>
                                                        <option value="65">Ecuador</option>
                                                        <option value="66">Egypt</option>
                                                        <option value="67">El Salvador</option>
                                                        <option value="68">Equatorial Guinea</option>
                                                        <option value="69">Eritrea</option>
                                                        <option value="70">Estonia</option>
                                                        <option value="71">Ethiopia</option>
                                                        <option value="72">Falkland Islands (Malvinas)</option>
                                                        <option value="73">Faroe Islands</option>
                                                        <option value="74">Fiji</option>
                                                        <option value="75">Finland</option>
                                                        <option value="76">France</option>
                                                        <option value="77">French Guiana</option>
                                                        <option value="78">French Polynesia</option>
                                                        <option value="79">French Southern Territories</option>
                                                        <option value="80">Gabon</option>
                                                        <option value="81">Gambia</option>
                                                        <option value="82">Georgia</option>
                                                        <option value="83">Germany</option>
                                                        <option value="84">Ghana</option>
                                                        <option value="85">Gibraltar</option>
                                                        <option value="86">Greece</option>
                                                        <option value="87">Greenland</option>
                                                        <option value="88">Grenada</option>
                                                        <option value="89">Guadeloupe</option>
                                                        <option value="90">Guam</option>
                                                        <option value="91">Guatemala</option>
                                                        <option value="92">Guernsey</option>
                                                        <option value="93">Guinea</option>
                                                        <option value="94">Guinea-Bissau</option>
                                                        <option value="95">Guyana</option>
                                                        <option value="96">Haiti</option>
                                                        <option value="97">Heard Island and McDonald Islands</option>
                                                        <option value="98">Holy See (Vatican City State)</option>
                                                        <option value="99">Honduras</option>
                                                        <option value="100">Hong Kong</option>
                                                        <option value="101">Hungary</option>
                                                        <option value="102">Iceland</option>
                                                        <option value="103">India</option>
                                                        <option value="104">Indonesia</option>
                                                        <option value="105">Iran, Islamic Republic of</option>
                                                        <option value="106">Iraq</option>
                                                        <option value="107">Ireland</option>
                                                        <option value="108">Isle of Man</option>
                                                        <option value="109">Israel</option>
                                                        <option value="110">Italy</option>
                                                        <option value="111">Jamaica</option>
                                                        <option value="112">Japan</option>
                                                        <option value="113">Jersey</option>
                                                        <option value="114">Jordan</option>
                                                        <option value="115">Kazakhstan</option>
                                                        <option value="116">Kenya</option>
                                                        <option value="117">Kiribati</option>
                                                        <option value="118">Korea, Democratic People's Republic of
                                                        </option>
                                                        <option value="119">Korea, Republic of</option>
                                                        <option value="120">Kuwait</option>
                                                        <option value="121">Kyrgyzstan</option>
                                                        <option value="122">Lao People's Democratic Republic</option>
                                                        <option value="123">Latvia</option>
                                                        <option value="124">Lebanon</option>
                                                        <option value="125">Lesotho</option>
                                                        <option value="126">Liberia</option>
                                                        <option value="127">Libya</option>
                                                        <option value="128">Liechtenstein</option>
                                                        <option value="129">Lithuania</option>
                                                        <option value="130">Luxembourg</option>
                                                        <option value="131">Macao</option>
                                                        <option value="132">Macedonia, the former Yugoslav Republic of
                                                        </option>
                                                        <option value="133">Madagascar</option>
                                                        <option value="134">Malawi</option>
                                                        <option value="135">Malaysia</option>
                                                        <option value="136">Maldives</option>
                                                        <option value="137">Mali</option>
                                                        <option value="138">Malta</option>
                                                        <option value="139">Marshall Islands</option>
                                                        <option value="140">Martinique</option>
                                                        <option value="141">Mauritania</option>
                                                        <option value="142">Mauritius</option>
                                                        <option value="143">Mayotte</option>
                                                        <option value="144">Mexico</option>
                                                        <option value="145">Micronesia, Federated States of</option>
                                                        <option value="146">Moldova, Republic of</option>
                                                        <option value="147">Monaco</option>
                                                        <option value="148">Mongolia</option>
                                                        <option value="149">Montenegro</option>
                                                        <option value="150">Montserrat</option>
                                                        <option value="151">Morocco</option>
                                                        <option value="152">Mozambique</option>
                                                        <option value="153">Myanmar</option>
                                                        <option value="154">Namibia</option>
                                                        <option value="155">Nauru</option>
                                                        <option value="156">Nepal</option>
                                                        <option value="157">Netherlands</option>
                                                        <option value="158">New Caledonia</option>
                                                        <option value="159">New Zealand</option>
                                                        <option value="160">Nicaragua</option>
                                                        <option value="161">Niger</option>
                                                        <option value="162">Nigeria</option>
                                                        <option value="163">Niue</option>
                                                        <option value="164">Norfolk Island</option>
                                                        <option value="165">Northern Mariana Islands</option>
                                                        <option value="166">Norway</option>
                                                        <option value="167">Oman</option>
                                                        <option value="168">Pakistan</option>
                                                        <option value="169">Palau</option>
                                                        <option value="170">Palestinian Territory, Occupied</option>
                                                        <option value="171">Panama</option>
                                                        <option value="172">Papua New Guinea</option>
                                                        <option value="173">Paraguay</option>
                                                        <option value="174">Peru</option>
                                                        <option value="175">Philippines</option>
                                                        <option value="176">Pitcairn</option>
                                                        <option value="177">Poland</option>
                                                        <option value="178">Portugal</option>
                                                        <option value="179">Puerto Rico</option>
                                                        <option value="180">Qatar</option>
                                                        <option value="181">Réunion</option>
                                                        <option value="182">Romania</option>
                                                        <option value="183">Russian Federation</option>
                                                        <option value="184">Rwanda</option>
                                                        <option value="185">Saint Barthélemy</option>
                                                        <option value="186">Saint Helena, Ascension and Tristan da
                                                            Cunha
                                                        </option>
                                                        <option value="187">Saint Kitts and Nevis</option>
                                                        <option value="188">Saint Lucia</option>
                                                        <option value="189">Saint Martin (French part)</option>
                                                        <option value="190">Saint Pierre and Miquelon</option>
                                                        <option value="191">Saint Vincent and the Grenadines</option>
                                                        <option value="192">Samoa</option>
                                                        <option value="193">San Marino</option>
                                                        <option value="194">Sao Tome and Principe</option>
                                                        <option value="195">Saudi Arabia</option>
                                                        <option value="196">Senegal</option>
                                                        <option value="197">Serbia</option>
                                                        <option value="198">Seychelles</option>
                                                        <option value="199">Sierra Leone</option>
                                                        <option value="200">Singapore</option>
                                                        <option value="201">Sint Maarten (Dutch part)</option>
                                                        <option value="202">Slovakia</option>
                                                        <option value="203">Slovenia</option>
                                                        <option value="204">Solomon Islands</option>
                                                        <option value="205">Somalia</option>
                                                        <option value="206">South Africa</option>
                                                        <option value="207">South Georgia and the South Sandwich
                                                            Islands
                                                        </option>
                                                        <option value="208">South Sudan</option>
                                                        <option value="209">Spain</option>
                                                        <option value="210">Sri Lanka</option>
                                                        <option value="211">Sudan</option>
                                                        <option value="212">Suriname</option>
                                                        <option value="213">Svalbard and Jan Mayen</option>
                                                        <option value="214">Swaziland</option>
                                                        <option value="215">Sweden</option>
                                                        <option value="216">Switzerland</option>
                                                        <option value="217">Syrian Arab Republic</option>
                                                        <option value="218">Taiwan, Province of China</option>
                                                        <option value="219">Tajikistan</option>
                                                        <option value="220">Tanzania, United Republic of</option>
                                                        <option value="221">Thailand</option>
                                                        <option value="222">Timor-Leste</option>
                                                        <option value="223">Togo</option>
                                                        <option value="224">Tokelau</option>
                                                        <option value="225">Tonga</option>
                                                        <option value="226">Trinidad and Tobago</option>
                                                        <option value="227">Tunisia</option>
                                                        <option value="228">Turkey</option>
                                                        <option value="229">Turkmenistan</option>
                                                        <option value="230">Turks and Caicos Islands</option>
                                                        <option value="231">Tuvalu</option>
                                                        <option value="232">Uganda</option>
                                                        <option value="233">Ukraine</option>
                                                        <option value="234">United Arab Emirates</option>
                                                        <option value="235">United Kingdom</option>
                                                        <option value="236">United States</option>
                                                        <option value="237">United States Minor Outlying Islands</option>
                                                        <option value="238">Uruguay</option>
                                                        <option value="239">Uzbekistan</option>
                                                        <option value="240">Vanuatu</option>
                                                        <option value="241">Venezuela, Bolivarian Republic of</option>
                                                        <option value="242">Viet Nam</option>
                                                        <option value="243">Virgin Islands, British</option>
                                                        <option value="244">Virgin Islands, U.S.</option>
                                                        <option value="245">Wallis and Futuna</option>
                                                        <option value="246">Western Sahara</option>
                                                        <option value="247">Yemen</option>
                                                        <option value="248">Zambia</option>
                                                        <option value="249">Zimbabwe</option>
                                                    </select>
                                                </div>
                                              </div>
                                                <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Residential Address</label>
                                                    <input type="text" class="form-control required" name="question10"
                                                           placeholder="Enter residential address" required="">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Email Address</label>
                                                    <input type="text" class="form-control required" name="question11"
                                                           placeholder="Enter email address">
                                                </div>
                                                </div>

                                                <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">WhatsApp Number</label>
                                                    <input type="text" class="form-control required" name="question12"
                                                           placeholder="Enter whatsapp number">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Profession</label>
                                                    <input type="text" class="form-control" name="question13"
                                                           placeholder="Enter profession">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">What Work Are You Doing Currently?</label>
                                                    <input type="text" class="form-control required" name="question14"
                                                           placeholder="Enter current work">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Name Of Father</label>
                                                    <input type="text" class="form-control required" name="question15"
                                                           placeholder="Enter name of your father">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Name Of Mother</label>
                                                    <input type="text" class="form-control required" name="question16"
                                                           placeholder="Enter name of your mother">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Name Of Guardian</label>
                                                    <input type="text" class="form-control required" name="question17"
                                                           placeholder="Enter name of your guardian">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Profession Of Father</label>
                                                    <input type="text" class="form-control required" name="question18"
                                                           placeholder="Enter profession of your father">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Profession Of Mother</label>
                                                    <input type="text" class="form-control required" name="question19"
                                                           placeholder="Enter profession of your mother">
                                                </div>
                                              </div>

                                                <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Profession Of Guardian</label>
                                                    <input type="text" class="form-control required" name="question20"
                                                           placeholder="Enter profession of your guardian">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Where Do You Live?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocity1" name="question21"
                                                               value="City" class="custom-control-input required">
                                                        <label class="custom-control-label"
                                                               for="radiocity1">City</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiotown1" name="question21"
                                                               value="Town" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radiotown1">Town</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiovillage1" name="question21"
                                                               value="Village" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radiovillage1">Village</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioslum1" name="question21"
                                                               value="Slum" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioslum1">Slum</label>
                                                    </div>
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Do Your Parents/Guardian Own A
                                                        House?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioownhouse1" name="question22"
                                                               value="Yes" class="custom-control-input required">
                                                        <label class="custom-control-label"
                                                               for="radioownhouse1">Yes</label>
                                                    </div>

                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioownhouse2" name="question22"
                                                               value="No" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioownhouse2">No</label>
                                                    </div>
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Are Your Parents/Guardian Renting A
                                                        House?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiorent1" name="question23"
                                                               value="Yes" class="custom-control-input required">
                                                        <label class="custom-control-label" for="radiorent1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiorent2" name="question23" value="No"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiorent2">No</label>
                                                    </div>
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Do Your Parents/Guardian Own A
                                                        Car?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocar1" name="question24" value="Yes"
                                                               class="custom-control-input required">
                                                        <label class="custom-control-label" for="radiocar1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocar2" name="question24" value="No"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiocar2">No</label>
                                                    </div>
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Do Your Parents/Guardian Own A
                                                        Business?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiobusiness1" name="question25"
                                                               value="Yes" class="custom-control-input required">
                                                        <label class="custom-control-label"
                                                               for="radiobusiness1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiobusiness2" name="question25"
                                                               value="No" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radiobusiness2">No</label>
                                                    </div>
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Name Of Sponsor</label>
                                                    <input type="text" class="form-control required" name="question26"
                                                           placeholder="Enter sponsor name">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Sponsor Phone Number</label>
                                                    <input type="number" class="form-control required" name="question27"
                                                           placeholder="Enter sponsor phone number">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Next Of Kin</label>
                                                    <input type="text" class="form-control required" name="question28"
                                                           placeholder="Enter next of kin">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Next Of Kin Contact Number</label>
                                                    <input type="number" class="form-control required" name="question29"
                                                           placeholder="Enter next of kin contact number">
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">Select Course You Would Like To
                                                        Do?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocourse1" name="question30"
                                                               value="9 Months Ordinary Program"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiocourse1">9 Months
                                                            Ordinary Program</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocourse2" name="question30"
                                                               value="18 Months Standard Program"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiocourse2">18 Months
                                                            Standard Program</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocourse3" name="question30"
                                                               value="27 Months Premium Program"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiocourse3">27 Months
                                                            Premium Program</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocourse4" name="question30"
                                                               value="36 Months Advanced Program"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiocourse4">36 Months
                                                            Advanced Program</label>
                                                    </div>
                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">What month would you like to start
                                                        Bible school?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiomonth1" name="question31"
                                                               value="2020 3rd Quarter (July/August/September)"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiomonth1">2020 3rd
                                                            Quarter (July/August/September)</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiomonth2" name="question31"
                                                               value="2020 4th Quarter (October/November/December)"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiomonth2">2020 4th
                                                            Quarter (October/November/December)</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiomonth3" name="question31"
                                                               value="2021 1st Quarter (January/Feburary/March)"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiomonth3">2021 1st
                                                            Quarter (January/Feburary/March)</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiomonth4" name="question31"
                                                               value="2021 2nd Quarter (April/May/June)"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiomonth4">2021 2nd
                                                            Quarter (April/May/June)</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiomonth5" name="question31"
                                                               value="2021 3rd Quarter (July/August/September)"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiomonth5">2021 3rd
                                                            Quarter (July/August/September)</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiomonth6" name="question31"
                                                               value="2021 4th Quarter (October/November/December)"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiomonth6">2021 4th
                                                            Quarter (October/November/December)</label>
                                                    </div>

                                                </div>
                                              </div>

                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label class="control-label">How did you hear about the Bible School?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear1" name="question75"
                                                               value="Ghana Healing Jesus Campaign"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear1">Ghana Healing Jesus Campaign</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear2" name="question75"
                                                               value="Other Healing Jesus Campaign"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear2">Other Healing Jesus Campaign</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear3" name="question75"
                                                               value="Mountain of the Lord 2019"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear3">Mountain of the Lord 2019</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear4" name="question75"
                                                               value="Give Thyself Wholly 2019"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear4">Give Thyself Wholly 2019</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear5" name="question75"
                                                               value="Hamattan Bible Seminar 2020"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear5">Hamattan Bible Seminar 2020</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear6" name="question75"
                                                               value="Takoradi Conference 2019"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear6">Takoradi Conference 2019</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear7" name="question75"
                                                               value="Other Conference"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear7">Other Conference</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear8" name="question75"
                                                               value="Bible School Website"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear8">Bible School Website</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear9" name="question75"
                                                               value="TV"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear9">TV</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear10" name="question75"
                                                               value="Social Media"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear10">Social Media</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear11" name="question75"
                                                               value="Radio"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear11">Radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear12" name="question75"
                                                               value="UD-OLGC Church"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear12">UD-OLGC Church</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="howhear13" name="question75"
                                                               value="Other Church"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="howhear13">Other Church</label>
                                                    </div>
                                                  </div>

                                                </div>
                                              </div>

                                                

                
                
                 
                </div>
                <div class="card">
                            <div class="card-body">
                                <div class="content">
                                                <div class="button-row d-flex mt-4">
                                                  <!-- <button class="btn">
                                                  <div class="btn">Here is my clickable div</div>
                                               </button> -->

                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
            </div>
              </div>

              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">CHURCH</h3>
                <div class="multisteps-form__content">
                  <div id="demo-form2" data-parsley-validate="" class="scrollpage1" style="height: 300px;">
                    <div class="form-group">
                                                    <label class="control-label">Are you born again?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioborn1" name="question32"
                                                               value="Yes" class="custom-control-input">
                                                        <label class="custom-control-label" for="radioborn1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioborn2" name="question32" value="No"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radioborn2">No</label>
                                                    </div>
                                                </div>
                                                <div id="bornagain" class="form-group">
                                                    <label class="control-label">Do you believe you are called?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocall1" name="question33"
                                                               value="Yes" class="custom-control-input">
                                                        <label class="custom-control-label" for="radiocall1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocall2" name="question33" value="No"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiocall2">No</label>
                                                    </div>
                                                </div>

                                                <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label>Which Church Do You Fellowship With?</label>
                                                    <input type="text" class="form-control required" name="question34"
                                                           aria-describedby="emailHelp" placeholder="Enter church name">
                                                </div>
                                              </div>
                                              <div class="relative input-wrap is-required">
                                                <div class="form-group">
                                                    <label>Which Role Do You Play In Your Church?</label>
                                                    <input type="text" class="form-control required" name="question35"
                                                           placeholder="Enter church role">
                                                </div>
                                              </div>
                                              <div class="relative input-wrap is-required"> 
                                                <div class="form-group">
                                                    <label>If You Are A Pastor, Please Indicate How Long You Have Been
                                                        Pastoring?</label>
                                                    <input type="text" class="form-control required" name="question36"
                                                           placeholder="Enter how long you have been pastoring">
                                                </div>
                                              </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">CALLING</h3>
                <div class="multisteps-form__content">
                  <div class="scrollpage1" style="height: 300px;">
                    <div class="relative input-wrap is-required"> 
                    <label for="exampleTextarea1">Why Do You Want To Come To The Bible
                                                    School?</label>
                                                <textarea class="form-control required" id="exampleTextarea1" name="question37"
                                                          rows="3"></textarea>
                                                        </div>
                                                <br>

                                                <label for="exampleTextarea1">Do You Have A Calling From God?</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiocalling1" name="question38" value="Yes"
                                                           class="custom-control-input" onclick="show1a();">
                                                    <label class="custom-control-label" for="radiocalling1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiocalling2" name="question38" value="No"
                                                           class="custom-control-input" onclick="show1();">
                                                    <label class="custom-control-label" for="radiocalling2">No</label>
                                                </div>

                                                <div id="hidecall" class="hide">

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question39" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                           </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h5 class="multisteps-form__title">SOCIAL AND PAST HISTORY BACKGROUND</h5>

                <div class="scrollpage1" style="height: 300px;">
                  <label for="exampleTextarea1">Do You Use Narcortic Drugs (Cocaine,
                                                    Heroin, Marijuana etc)</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radionardrugs1" name="question40"
                                                           value="Yes" class="custom-control-input" onclick="show2a();">
                                                    <label class="custom-control-label" for="radionardrugs1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radionardrugs2" name="question40" value="No"
                                                           class="custom-control-input" onclick="show2();">
                                                    <label class="custom-control-label" for="radionardrugs2">No</label>
                                                </div>

                                                <div id="hidenardrug" class="hide">

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question41" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                           </div>

                                                <br>

                                                <label for="exampleTextarea1">Have You Ever Used Narcortic Drugs In The
                                                    Past?</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radionardrugspast1" name="question42"
                                                           value="Yes" class="custom-control-input" onclick="show3a();">
                                                    <label class="custom-control-label" for="radionardrugspast1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radionardrugspast2" name="question42"
                                                           value="No" class="custom-control-input" onclick="show3();">
                                                    <label class="custom-control-label" for="radionardrugspast2">No</label>
                                                </div>

                                                <div id="nardrugpast" class="hide">

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" id="exampleTextarea1" name="question43"
                                                          rows="3">

                                             </textarea>

                                           </div>

                                                <br>

                                                <label for="exampleTextarea1">Have You Been Arrested By The Police
                                                    Before</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioarrest1" name="question44" value="Yes" class="custom-control-input" onclick="show4a();">
                                                    <label class="custom-control-label" for="radioarrest1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioarrest2" name="question44" value="No" class="custom-control-input" onclick="show4();">
                                                    <label class="custom-control-label" for="radioarrest2">No</label>
                                                </div>

                                                <div id="poarrest" class="hide">

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question45" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                           </div>

                                                <br>

                                                <label for="exampleTextarea1">Have You Been Prosecuted In Court
                                                    Before?</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioprose1" name="question46" value="Yes"
                                                           class="custom-control-input" onclick="show5a();">
                                                    <label class="custom-control-label" for="radioprose1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioprose2" name="question46" value="No"
                                                           class="custom-control-input" onclick="show5();">
                                                    <label class="custom-control-label" for="radioprose2">No</label>
                                                </div>

                                                <div id="proscourt" class="hide">

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question47" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                           </div>

                                                <br>

                                                <label for="exampleTextarea1">Have You Been To Jail Before?</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiojail1" name="question48" value="Yes"
                                                           class="custom-control-input" onclick="show6a();">
                                                    <label class="custom-control-label" for="radiojail1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiojail2" name="question48" value="No"
                                                           class="custom-control-input" onclick="show6();">
                                                    <label class="custom-control-label" for="radiojail2">No</label>
                                                </div>

                                                <div id="jailbef" class="hide">

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question49" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                           </div>

                                                <br>

                                                <label for="exampleTextarea1">Have You Taken Alcholic Drinks In The
                                                    Past?</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioalcholic1" name="question50"
                                                           value="Yes" class="custom-control-input">
                                                    <label class="custom-control-label" for="radioalcholic1" onclick="show7a();">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioalcholic2" name="question50" value="No"
                                                           class="custom-control-input" onclick="show7();">
                                                    <label class="custom-control-label" for="radioalcholic2">No</label>
                                                </div>

                                                <div id="drinkpast" class="hide">

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question51" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                           </div>

                                                <br>


                                                <label for="exampleTextarea1">Are You A Virgin?</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiovirgin1" name="question54" value="Yes"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiovirgin1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiovirgin2" name="question54" value="No"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiovirgin2">No</label>
                                                </div>

                                                <br>

                                                <label for="exampleTextarea1">Indicate Which Of The Following You have Been Involved In:</label>

                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question55[]" value="Fornication"
                                                               id="checkbox-p-2forn">
                                                        <label for="checkbox-p-2forn" class="cr">Fornication</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question55[]" value="Adultery"
                                                               id="checkbox-p-2ad">
                                                        <label for="checkbox-p-2ad" class="cr">Adultery</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question55[]" value="Abortion"
                                                               id="checkbox-p-2ab">
                                                        <label for="checkbox-p-2ab" class="cr">Abortion</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question55[]" value="Masturbation"
                                                               id="checkbox-p-2mas">
                                                        <label for="checkbox-p-2mas" class="cr">Masturbation</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question55[]" value="Pornography"
                                                               id="checkbox-p-2porno">
                                                        <label for="checkbox-p-2porno" class="cr">Pornography</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question55[]" value="Homosexuality"
                                                               id="checkbox-p-2homo">
                                                        <label for="checkbox-p-2homo" class="cr">Homosexuality</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question55[]" value="Lesbianism"
                                                               id="checkbox-p-2les">
                                                        <label for="checkbox-p-2les" class="cr">Lesbianism</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question55[]" value="None"
                                                               id="checkbox-p-2none">
                                                        <label for="checkbox-p-2none" class="cr">None</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <label for="exampleTextarea1">Have You Ever Been Involved In Any Of The
                                                    Following Activities?</label>

                                                <br>

                                                <label for="exampleTextarea1">Armed Robbery?</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiorob1" name="question56" value="Yes"
                                                           class="custom-control-input" onclick="show8a();">
                                                    <label class="custom-control-label" for="radiorob1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiorob2" name="question56" value="No"
                                                           class="custom-control-input" onclick="show8();">
                                                    <label class="custom-control-label" for="radiorob2">No</label>
                                                </div>

                                                <div id="armrob" class="hide">

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question57" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                           </div>

                                                <br>

                                                <label for="exampleTextarea1">Revolution/Rebel</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiorev1" name="question58" value="Yes"
                                                           class="custom-control-input" onclick="show9a();">
                                                    <label class="custom-control-label" for="radiorev1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiorev2" name="question58" value="No"
                                                           class="custom-control-input" onclick="show9();">
                                                    <label class="custom-control-label" for="radiorev2">No</label>
                                                </div>

                                                <div id="revreb" class="hide">

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question59" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                           </div>

                                                <br>

                                                <label for="exampleTextarea1">Prostitution</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiopros1" name="question60" value="Yes"
                                                           class="custom-control-input" onclick="show10a();">
                                                    <label class="custom-control-label" for="radiopros1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiopros2" name="question60" value="No"
                                                           class="custom-control-input" onclick="show10();">
                                                    <label class="custom-control-label" for="radiopros2">No</label>
                                                </div>

                                                <div id="pros" class="hide">

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question61" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                           </div>
                  </div>
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>

                <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">HEALTH STATUS</h3>
                <div class="scrollpage1" style="height: 300px;">
                  <label class="control-label">Tick Which Of The Following Diseases You
                                                    Have Been Treated For In The Past:</label>

                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]" value="Asthma"
                                                               id="checkbox-p-2asthma">
                                                        <label for="checkbox-p-2asthma" class="cr">Asthma</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]" value="Allergy"
                                                               id="checkbox-p-2allergy">
                                                        <label for="checkbox-p-2allergy" class="cr">Allergy</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]" value="Other Allergy"
                                                               id="checkbox-p-2otherallergy">
                                                        <label for="checkbox-p-2otherallergy" class="cr">Other
                                                            Allergy</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]" value="Drug Allergy"
                                                               id="checkbox-p-2drugallergy">
                                                        <label for="checkbox-p-2drugallergy" class="cr">Drug
                                                            Allergy</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]" value="Diabetes"
                                                               id="checkbox-p-2diabetes">
                                                        <label for="checkbox-p-2diabetes" class="cr">Diabetes</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]" value="Hypertension"
                                                               id="checkbox-p-2hypertension">
                                                        <label for="checkbox-p-2hypertension"
                                                               class="cr">Hypertension</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]" value="TB"
                                                               id="checkbox-p-2tb">
                                                        <label for="checkbox-p-2tb" class="cr">TB</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]" value="Mental"
                                                               id="checkbox-p-2mental">
                                                        <label for="checkbox-p-2mental" class="cr">Mental</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]" value="Illness"
                                                               id="checkbox-p-2illness">
                                                        <label for="checkbox-p-2illness" class="cr">Illness</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]" value="Epilepsy"
                                                               id="checkbox-p-2epilepsy">
                                                        <label for="checkbox-p-2epilepsy" class="cr">Epilepsy</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]"
                                                               value="Sickle Cell Disease" id="checkbox-p-2sick">
                                                        <label for="checkbox-p-2sick" class="cr">Sickle Cell
                                                            Disease</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary d-inline">
                                                        <input type="checkbox" name="question62[]" value="None"
                                                               id="checkbox-p-2none2">
                                                        <label for="checkbox-p-2none2" class="cr">None</label>
                                                    </div>
                                                </div>

                                                <label class="control-label">If You Have Selected Other Allergies,
                                                    Please Specify</label>

                                                <textarea class="form-control" name="question63" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                                <br>

                                                <div class="form-group">
                                                    <label class="control-label">Do You Have Any Serious Medical
                                                        Condition?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiomed1" name="question64" value="Yes"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiomed1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiomed2" name="question64" value="No"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiomed2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Are You On Any Regular
                                                        Medication?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioregmed1" name="question65"
                                                               value="Yes" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioregmed1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioregmed2" name="question65"
                                                               value="No" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioregmed2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Have You Had Any Major
                                                        Surgeries?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiosug1" name="question66" value="Yes"
                                                               class="custom-control-input" onclick="show13a();">
                                                        <label class="custom-control-label" for="radiosug1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiosug2" name="question66" value="No"
                                                               class="custom-control-input" onclick="show13();">
                                                        <label class="custom-control-label" for="radiosug2">No</label>
                                                    </div>
                                                </div>

                                                <div id="majsur" class="hide">
                                                <div class="form-group">
                                                    <label>If Yes, Please Specify</label>
                                                    <input type="text" class="form-control" name="question67"
                                                           placeholder="">
                                                </div>

                                              </div>
                                                <div class="form-group">
                                                    <label class="control-label">Do You Have Any Allergies?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioaller1" name="question68"
                                                               value="Yes" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioaller1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioaller2" name="question68"
                                                               value="No" class="custom-control-input">
                                                        <label class="custom-control-label" for="radioaller2">No</label>
                                                    </div>
                                                </div>
                  </div>
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>

                <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">CRIMINAL HISTORY</h3>
                <div class="scrollpage1" style="height: 300px;">
                  <div class="form-group">
                                                    <label class="control-label">Have You Had Any Problems With The
                                                        Law?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiolaw1" name="question69" value="Yes"
                                                               class="custom-control-input" onclick="show11a();">
                                                        <label class="custom-control-label" for="radiolaw1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiolaw2" name="question69" value="No"
                                                               class="custom-control-input" onclick="show11();">
                                                        <label class="custom-control-label" for="radiolaw2">No</label>
                                                    </div>
                                                </div>

                                                <div id="lawprob" class="hide">
                                                <div class="form-group">
                                                    <label>If Yes, Please Specify</label>
                                                    <input type="text" class="form-control" name="question70"
                                                           placeholder="">
                                                </div>
                                              </div>
                  </div>
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>

                  </div>
                </div>

                <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">NATIONALITY</h3>
                <div class="scrollpage1" style="height: 300px;">
                  <div class="form-group">
                                                    <label for="exampleTextarea1">Requirements For International
                                                        Students</label>
                                                    <textarea class="form-control" id="exampleTextarea1" rows="9"
                                                              disabled>

Requirements For All Students: 

School Certificate 
Bible School Medical Checklist 
Recommendation Letter
Responsibility Form
Administration Fee : Local students - 645 cedis. International students - $235.


International Students

Please make sure that you have obtained or done the following, before leaving your country of origin.

1. Valid Passport.
2. Ghana Visa for students travelling to Ghana.
3. International Yellow Fever Vaccination Card. (Injection should have been taken more than 10 days before date of arrival in Accra)
4. Recent Medical Report including TB and HIV status.
5. Police Clearance Reports, please attach the Report with the form.
6. Start Prophylactic Anti Malaria Medications two weeks before leaving your country. Please obtain enough dosages to continue for another 6 weeks whilst in Ghana.
                                            </textarea>
                                                </div>
                  </div>
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>

                <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h4 class="multisteps-form__title">RECOMMENDED BY</h4>
                <div class="scrollpage1" style="height: 300px;">
                  <div class="form-group">

                                                    <label for="example-select">I Am Recommended By</label>
                                                    <select class="form-control" name="question71" id="RecommendedBy">
                                                        <option value="0" onclick="show12();">--Select Recommended By--</option>
                                                        <option value="1" onclick="show12();">My Local Church Pastor</option>
                                                        <option value="2" onclick="show12();">General Overseer</option>
                                                        <option value="3" onclick="show12();">Senior Associate</option>
                                                        <option value="4" onclick="show12();">Pastor</option>
                                                        <option value="5" onclick="show12();">Bishop</option>
                                                        <option value="6" onclick="show12a();">Other</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>If You Selected Other, Please Specify</label>
                                                    <input type="text" name="question72" class="form-control"
                                                           placeholder="">
                                                </div>
                                              
                  </div>
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>

                <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">FINISH</h3>
                <div class="scrollpage1" style="height: 300px;">
                  <div class="form-check">
                                                    <label class="ckbox">
                                                        <span></span>
                                                        <span class="text-dark submit-text"> I <div class="form-group">
                                                        <div class="relative input-wrap is-required">
                                                        <input type="text" name="question73" class="form-control required"
                                                               placeholder="">
                                                             </div>
                                                    </div> certify that the information given above is true and correct to the best of my knowledge.</span>
                                                        <br>
                                                        <br>
                                                        <div class="relative input-wrap is-required">
                                                        <div class="form-group ">
                                                            <label>Date</label>
                                                            <input type="text" name="question74" class="form-control required"
                                                                   placeholder="">
                                                        </div>
                                                      </div>
                                                    </label>
                                                </div>
                  </div>
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button id="clickable" class="btn btn-primary ml-auto toggle-disabled" type="submit" title="Send" disabled>Submit</button>
                  </div>
                </div>          
                               
              <!--single form panel-->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
                            </div>
                        </div>
                    </div>
                </div>


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

<script>
  //DOM elements
const DOMstrings = {
  stepsBtnClass: 'multisteps-form__progress-btn',
  stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
  stepsBar: document.querySelector('.multisteps-form__progress'),
  stepsForm: document.querySelector('.multisteps-form__form'),
  stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
  stepFormPanelClass: 'multisteps-form__panel',
  stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
  stepPrevBtnClass: 'js-btn-prev',
  stepNextBtnClass: 'js-btn-next' };


//remove class from a set of items
const removeClasses = (elemSet, className) => {

  elemSet.forEach(elem => {

    elem.classList.remove(className);

  });

};

//return exect parent node of the element
const findParent = (elem, parentClass) => {

  let currentNode = elem;

  while (!currentNode.classList.contains(parentClass)) {
    currentNode = currentNode.parentNode;
  }

  return currentNode;

};

//get active button step number
const getActiveStep = elem => {
  return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

//set all steps before clicked (and clicked too) to active
const setActiveStep = activeStepNum => {

  //remove active state from all the state
  removeClasses(DOMstrings.stepsBtns, 'js-active');

  //set picked items to active
  DOMstrings.stepsBtns.forEach((elem, index) => {

    if (index <= activeStepNum) {
      elem.classList.add('js-active');
    }

  });
};

//get active panel
const getActivePanel = () => {

  let activePanel;

  DOMstrings.stepFormPanels.forEach(elem => {

    if (elem.classList.contains('js-active')) {

      activePanel = elem;

    }

  });

  return activePanel;

};

//open active panel (and close unactive panels)
const setActivePanel = activePanelNum => {

  //remove active class from all the panels
  removeClasses(DOMstrings.stepFormPanels, 'js-active');

  //show active panel
  DOMstrings.stepFormPanels.forEach((elem, index) => {
    if (index === activePanelNum) {

      elem.classList.add('js-active');

      setFormHeight(elem);

    }
  });

};

//set form height equal to current panel height
const formHeight = activePanel => {

  const activePanelHeight = activePanel.offsetHeight;

  DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

};

const setFormHeight = () => {
  const activePanel = getActivePanel();

  formHeight(activePanel);
};

//STEPS BAR CLICK FUNCTION
DOMstrings.stepsBar.addEventListener('click', e => {

  //check if click target is a step button
  const eventTarget = e.target;

  if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
    return;
  }

  //get active button step number
  const activeStep = getActiveStep(eventTarget);

  //set all steps before clicked (and clicked too) to active
  setActiveStep(activeStep);

  //open active panel
  setActivePanel(activeStep);
});

//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener('click', e => {

  const eventTarget = e.target;

  //check if we clicked on `PREV` or NEXT` buttons
  if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))
  {
    return;
  }

  //find active panel
  const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

  let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

  //set active step and active panel onclick
  if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
    activePanelNum--;

  } else {

    activePanelNum++;

  }

  setActiveStep(activePanelNum);
  setActivePanel(activePanelNum);

});

//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener('load', setFormHeight, false);

//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener('resize', setFormHeight, false);

//changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

const setAnimationType = newType => {
  DOMstrings.stepFormPanels.forEach(elem => {
    elem.dataset.animation = newType;
  });
};

//selector onchange - changing animation
const animationSelect = document.querySelector('.pick-animation__select');

animationSelect.addEventListener('change', () => {
  const newAnimationType = animationSelect.value;

  setAnimationType(newAnimationType);
});
</script>

<script src='https://rawgit.com/guillaumepotier/Parsley.js/2.2.0-rc4/dist/parsley.js'></script>

<script type="text/javascript">
  $(document).ready(function () {


  
});
</script>

<script>
    $(document).on('change keyup', '.required', function(e){
   let Disabled = true;
    $(".required").each(function() {

      let value = this.value
      if ((value)&&(value.trim() !=''))
          {
            Disabled = false
          }else{
            Disabled = true
            return false
          }
    });
   
   if(Disabled){
        $('.toggle-disabled').prop("disabled", true);
      }else{
        $('.toggle-disabled').prop("disabled", false);
      }
 })
  </script>


  <!-- Disable button for page 1 -->
  <script type="text/javascript">
    document.getElementById('clickable').addEventListener('click', clickDiv);

function clickDiv() {
    // document.getElementById('clickable').innerHTML = "Clicked and Changed"; // Changes text inside div one time only when clicked
    $('#demo-form .btn').on('click', function () {
    $('#demo-form').parsley().validate();
    validateFront();
  });

  var validateFront = function () {
    if (true === $('#demo-form').parsley().isValid()) {
      $('.bs-callout-info').removeClass('hidden');
      $('.bs-callout-warning').addClass('hidden');
    } else {
      $('.bs-callout-info').addClass('hidden');
      $('.bs-callout-warning').removeClass('hidden');
    }
  };
}
  </script>

  <!-- Disable and enable button for page 2 -->

  <script>
    // Heavily commented so you can you whichever chunks you need
// Please use and improve your forms 

var $inputWrapper = '.input-wrap',
  $invalidClass = 'is-invalid',
  $validClass = 'is-valid',
  $optionalClass = 'is-optional',
  $requiredClass = 'is-required',
  $helperClass = '.is-helpful',
  $errorClass = 'error-message',
  
  $validEmail = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,13}$/i,
  $validWebsite = /^[A-Z._-]+.[A-Z0-9.-]+\.[A-Z]{2,13}$/i,
  $validPhone = /^[0-9-.()]{3,15}$/,
  
  $date = new Date();
   
/*
 * Validation Functions
 */

// There are three kinds of validation
// Valid, invalid, and neutral
// Because markValid sets the success icon, neutral is needed to
// remove the error icon for optional fields
function markValid(field) {
  var $field_wrapper = field.parents($inputWrapper);

  $field_wrapper.addClass($validClass).removeClass($invalidClass);    

  $(field).parents($inputWrapper).siblings('.error-message').slideUp(200, function() {
    $(this).addClass('hide');
  });

  field.parents($inputWrapper).siblings($helperClass).removeClass($errorClass);
  field.parents($inputWrapper).siblings('.error-message').removeClass($errorClass);

  setIcon(field, 'valid');
  setField(field, $field_wrapper, 'valid');
  helperUp(field);
}

function markInvalid(field, error_message) {
  var $field_wrapper = field.parents($inputWrapper);

  if ($field_wrapper.hasClass($requiredClass) || ($field_wrapper.hasClass($optionalClass) && field.val() != '')) {
    setIcon(field, 'invalid');
    setError(field, error_message);
    setField(field, $field_wrapper, 'invalid');
  }
}

function markNeutral(field) {
  $(field).closest($inputWrapper).addClass($validClass).removeClass($invalidClass);
  $('label[for="' + field.attr('id') + '"]').addClass($validClass).removeClass($invalidClass);
  $(field).siblings('.icon.success').removeClass('show').addClass('hide');
  $(field).siblings('.icon.error').removeClass('show').addClass('hide');
}

function setIcon(field, validation_type) {
  var $iconSuccess = $(field).siblings('.icon.success');
  var $iconError = $(field).siblings('.icon.error');

  if (validation_type === 'valid') {
    $iconSuccess.removeClass('hide');
    $iconError.addClass('hide');
  } else if (validation_type === 'invalid') {
    $iconSuccess.addClass('hide');
    $iconError.removeClass('hide');
  }
}

// Used for selects because the icons are in a different location
// due to layout changes
function setIconMulti(iconSuccess, iconError, validation_type) {
  if (validation_type === 'valid') {
    iconSuccess.removeClass('hide');
    iconError.addClass('hide');
  } else if (validation_type === 'invalid') {
    iconSuccess.addClass('hide');
    iconError.removeClass('hide');
  }
}

function setError(field, error_message) {
  field.closest($inputWrapper).siblings($helperClass).html(error_message);
  field.closest($inputWrapper).siblings($helperClass).addClass('error-message').removeClass('hide');
}

function setField(field, field_wrapper, validation_type) {
  if (validation_type === 'valid') {
    field_wrapper.addClass($validClass).removeClass($invalidClass);
    field_wrapper.siblings('label').addClass($validClass).removeClass($invalidClass);
  } else if (validation_type === 'invalid') {
    field_wrapper.addClass($invalidClass).removeClass($validClass);
    field_wrapper.siblings('label').addClass($invalidClass).removeClass($validClass);
  }
}

/*
 * Specific Checker Functions
 */

function checkPasswordRequirements(input, event) {
  var errors = 4;

  if (input.val().match(/[a-z]/) != null) {
    errors--;
    $('.help_text_pwd1').addClass('success');
  } else if (input.val().match(/[a-z]/) === null) {
    errors++;
    $('.help_text_pwd1').removeClass('success');
  }

  if (input.val().match(/[A-Z]/) != null) {
    errors--;
    $('.help_text_pwd2').addClass('success');
  } else if (input.val().toLowerCase() === input.val()) {
    errors++;
    $('.help_text_pwd2').removeClass('success');
  }

  if (input.val().match(/[0-9]/) != null) {
    errors--;
    $('.help_text_pwd3').addClass('success');
  } else if (input.val().match(/[0-9]/) === null) {
    errors++;
    $('.help_text_pwd3').removeClass('success');
  }

  if (input.val().length >= 8) {
    errors--;
    $('.help_text_pwd4').addClass('success');
  } else if (input.val().length < 8) {
    errors++;
    $('.help_text_pwd4').removeClass('success');
  } 

  if (errors > 0) {
    if (event.type === 'blur') {
      markInvalid(input, 'Please choose a valid password.');
    }
  } else if (errors <= 0) {
    markValid(input);
  }
}

function validatePasswordPair(first, second) {
  if (first.val() === second.val()) {
    markValid(second);
  } else {
    if (second.val().length >= 8) {
      markInvalid(second, 'Both passwords must match.');
    }
  }
}


/*
 * Helper Text
 */

function helperDown(field, help_div, message) {
  help_div.html(message);
  help_div.removeClass($errorClass);
  help_div.slideDown(400);
}

function helperUp(field) {
  field.parents($inputWrapper).siblings($helperClass).slideUp(400);
}


/*
 * Event Triggers
 */

$('input, textarea').on('focus', function() {
  markNeutral($(this));
  var $helpText = $(this).closest($inputWrapper).siblings($helperClass);
  
  if ($(this).closest($inputWrapper).hasClass('password-set')) {
    var $message =  '<ul>' +
            '<li><div class="help_text_pwd1">(a-z) lowercase</div></li>' +
            '<li><div class="help_text_pwd2">(A-Z) UPPERCASE</div></li>' +
            '<li><div class="help_text_pwd3">(0-9) number</div></li>' +
            '<li><div class="help_text_pwd4">8 characters</div></li>' +
            '</ul>';
  } else {
    var $message = $helpText.attr('data-helper');
  }
  
  helperDown($(this), $helpText, $message);
});

$('input:not("input[type=url], input[type=password], input[name=email], input[type=tel]"), textarea').on('blur', function() {
  if ($(this).val() === '' && $(this).closest($inputWrapper).hasClass($requiredClass)) {
    markInvalid($(this), $(this).closest($inputWrapper).siblings($helperClass).attr('data-error'));
  } else {
    helperUp($(this));
  }
});

$('input:not("input[type=url], input[type=password], input[name=email], input[type=tel]"), textarea').on('keyup', function(event) {
  if ($(this).val() !== '') {
    markValid($(this));
  }
});

// This will handle single selects
// and groups of selects with n number of selects in them.
// Whichever selects are contained within the $inputWrapper class
// will validate as a group, only if each has been changed
// at least once.
$('select').on('change', function () {
  var $currentSelect = $(this),
    $selects = $('select ', $currentSelect.closest($inputWrapper)),
    $numSelects = $selects.length;
  
  if ($numSelects > 1) { // handle multiple selects
    if (!$currentSelect.hasClass('changed')) {
      $currentSelect.addClass('changed');
    }
    
    var $selectsValues = [];
    var $numChanges = $('.changed ', $currentSelect.closest($inputWrapper)).length;
    
    if ($numChanges === $numSelects) {
      $selects.each(function() {
        if ($(this).val() === '') {
          $selectsValues.push('empty'); // need a value to push to the array (can't use 'empty' in markup if '' is needed elsewhere)
        } else {
          $selectsValues.push($(this).val());
        }
      });

      var $numEmpty = 0;

      for (i = 0; i < $selectsValues.length; i++) {
        if ($selectsValues[i] === 'empty') {
          $numEmpty++;
        }
      }

      var $iconSuccess = $('.icon.success', $(this).closest($inputWrapper)),
        $iconError = $('.icon.error', $(this).closest($inputWrapper));
      
      if ($numEmpty > 0) {
        setIconMulti($iconSuccess, $iconError, 'invalid');
        setField($currentSelect, $currentSelect.closest($inputWrapper), 'invalid');
      } else {
        setIconMulti($iconSuccess, $iconError, 'valid');
        setField($currentSelect, $currentSelect.closest($inputWrapper), 'valid');
      }
    }
  
  } else { // handle single selects
    if ($(this).val() === '') {
      markInvalid($(this), 'Please make a selection');
    } else {
      markValid($(this));
    }
  }
}); 

// Email validation
$('input[name=email]').on('keyup blur', function (event) {
  if ($(this).parents($inputWrapper).hasClass($optionalClass) && $(this).val() === '') {
    markNeutral($(this));
  } else {
    var $checkEmail = $(this).val().match($validEmail);

    if (event.type === 'blur') {
      if ($(this).val() === '') {
        markInvalid($(this), $(this).parents($inputWrapper).siblings($helperClass).attr('data-error'));
      } else if ($checkEmail === null) {
        markInvalid($(this), 'Please enter a valid email');
      } else {
        markValid($(this));
        helperText($(this), $helpText, $message, event);
      }
    } else {
      if ($checkEmail !== null) {
        markValid($(this));
      }
    }
  }
});

// PASSWORDS
// These are all separated out, based on the type of password field and the event type
// It's more code and repetitive, but it's much more readable

// Bind initial password choice on blur
$('input[name=password1]').on('blur', function (event) {
  if ($(this).val().length === 0) {
    markInvalid($(this), 'Please choose a password.');
  } else {
    checkPasswordRequirements($(this), event);
  }
});

// Bind initial password choice while typing
$('input[name=password1]').on('keyup change', function (event) {
  if ($(this).val().length === 0) {
    markInvalid($(this), 'Please choose a password');
  } else {
    checkPasswordRequirements($(this), event);
  }
});

// Bind password confirmation field on blur
$('input[name=password2]').on('blur', function (event) {
  if ($(this).val().length === 0) {
    markInvalid($(this), 'Please confirm your password');
  } else {
    validatePasswordPair($('.password-set').children('input[type="password"]'), $(this));
  }
});

// Bind password confirmation field while typing
$('input[name=password2]').on('keyup change', function (event) {
  if ($('.password-set').hasClass('is-invalid')) {
    markInvalid($(this), 'Your password does not meet the requirements. Please fix it before confirming.');
  } else {
    validatePasswordPair($('.password-set').children('input[type="password"]'), $(this));
  }
});

// Bind current password on blur
$('input[name=password-old]').on('blur', function (event) {
  if ($(this).val().length === 0) {
    markInvalid($(this), 'Please enter your password');
  } else if ($(this).val().length < 8) {
    markInvalid($(this), 'Please enter a valid password');
  }
});

// Bind current password while typing
$('input[name=password-old]').on('keyup change', function (event) {
  if ($(this).val().length >= 8) {
    markValid($(this));
  }
});

// URLs
$('input[name=website]').on('keyup blur', function(event) {
  if ($(this).parents($inputWrapper).hasClass($optionalClass) && $(this).val() === '') {
    markNeutral($(this));
    helperUp($(this));
  } else {
    var $checkWebsite = $(this).val().match($validWebsite);

    if (event.type === 'blur') {
      if ($checkWebsite === null) {
        markInvalid($(this), 'Please enter a valid website address (www.example.com)');
      } else {
        markValid($(this));
      }
    } else {
      if ($checkWebsite !== null) {
        markValid($(this));
      }
    }
  }
});

// Phone
$('input[type=tel]').on('keyup blur', function(event) {
  if ($(this).parents($inputWrapper).hasClass($optionalClass) && $(this).val() === '') {
    markNeutral($(this));
  } else {
    var $checkPhone = $(this).val().match($validPhone);

    if (event.type === 'blur') {
      if ($checkPhone === null) {
        markInvalid($(this), 'Please enter a valid phone number');
      } else {
        markValid($(this));
        helperText($(this), $helpText, $message, event);
      }
    } else {
      if ($checkPhone != null) {
        markValid($(this));
      }
    }
  }
});

// Make sure they are at least 13 years old
$('input[name=birthdate]').on('blur', function() {
  var $year = parseInt($(this).val().substr(0,4));
  var $month = parseInt($(this).val().substr(5,2));
  var $day = parseInt($(this).val().substr(8,2));
  
  if (($year + 13) > parseInt($date.getFullYear())) {
    if ($month < (parseInt($date.getMonth()) + 1)) {
      if ($day < parseInt($date.getFullYear())) {
        markInvalid($(this), 'Sorry, you must be at least 13')
      } else {
        markValid($(this));
      }
    } else {
      markValid($(this));
    }
  } else {
    markValid($(this));
  }
});

// Set the default date to January 1st, 13 years ago
$(function() {
  var $thirteen = $date.getFullYear() - 13;
  $('input[name=birthdate]').val($thirteen + '-01-01');
});

$('input[type=color]').on('click change focus hover', function() {
  markValid($(this));
});
  </script>

  <script>
function submitClick() {

  var cost = 0;
  var selGender = document.querySelector("[name=question4]:checked");
  var selUD = document.querySelector("[name=question7]:checked");
  var selLive = document.querySelector("[name=question21]:checked");
  var selPargua = document.querySelector("[name=question22]:checked");
  var selParguaHouse = document.querySelector("[name=question23]:checked");
  var selParguaCar = document.querySelector("[name=question24]:checked");
  var selParguaBus = document.querySelector("[name=question25]:checked");
  var selCor = document.querySelector("[name=question30]:checked");
  var selMon = document.querySelector("[name=question31]:checked");
  var selHearSchool = document.querySelector("[name=question75]:checked");
  var selBornAgain = document.querySelector("[name=question32]:checked");
  var selYouCalled = document.querySelector("[name=question33]:checked");
  var selCallGod = document.querySelector("[name=question38]:checked");
  var selNarDrugs = document.querySelector("[name=question40]:checked");
  var selNarDrugsPast = document.querySelector("[name=question42]:checked");
  var selArrestPolice = document.querySelector("[name=question44]:checked");
  var selProsCourt = document.querySelector("[name=question46]:checked");
  var selBeenJail = document.querySelector("[name=question48]:checked");
  var selDrinkPast = document.querySelector("[name=question50]:checked");
  var selVirgin = document.querySelector("[name=question54]:checked");
  var selArmRob = document.querySelector("[name=question56]:checked");
  var selRevReb = document.querySelector("[name=question58]:checked");
  var selProst = document.querySelector("[name=question60]:checked");
  var selMedCon = document.querySelector("[name=question64]:checked");
  var selRegMed = document.querySelector("[name=question65]:checked");
  var selMajSur = document.querySelector("[name=question66]:checked");
  var selAller = document.querySelector("[name=question68]:checked");
  var selProbLaw = document.querySelector("[name=question69]:checked");

  

  if (!selGender) {
    alert("General: Sex - Male, Female Is Incomplete");
    return false;
  }
  if (!selUD) {
    alert("General: Is Your Church Part Of UD-OLGC Is Incomplete");
    return false;
  }
  if (!selLive) {
    alert("General: Where Do You Live Is Incomplete");
    return false;
  }
  if (!selPargua) {
    alert("General: Do Your Parents/Guardian Own A House Is Incomplete");
    return false;
  }
  if (!selParguaHouse) {
    alert("General: Are Your Parents/Guardian Renting A House Is Incomplete");
    return false;
  }
  if (!selParguaCar) {
    alert("General: Do Your Parents/Guardian Own A Car Is Incomplete");
    return false;
  }
  if (!selParguaBus) {
    alert("General: Do Your Parents/Guardian Own A Business Is Incomplete");
    return false;
  }
  if (!selCor) {
    alert("General: Select Course You Would Like To Do Is Incomplete");
    return false;
  }
  if (!selMon) {
    alert("General: What month would you like to start Bible school Is Incomplete");
    return false;
  }
  if (!selHearSchool) {
    alert("General: How did you hear about the Bible School Is Incomplete");
    return false;
  }
  if (!selBornAgain) {
    alert("Church: Are you born again Is Incomplete");
    return false;
  }
  if (!selYouCalled) {
    alert("Church: Do you believe you are called Is Incomplete");
    return false;
  }
  if (!selCallGod) {
    alert("Calling: Do You Have A Calling From God Is Incomplete");
    return false;
  }
  if (!selNarDrugs) {
    alert("Social And Past History Background: Do You Use Narcortic Drugs (Cocaine, Heroin, Marijuana etc) Is Incomplete");
    return false;
  }
  if (!selNarDrugsPast) {
    alert("Social And Past History Background: Have You Ever Used Narcortic Drugs In The Past Is Incomplete");
    return false;
  }
  if (!selArrestPolice) {
    alert("Social And Past History Background: Have You Been Arrested By The Police Before Is Incomplete");
    return false;
  }
  if (!selBeenJail) {
    alert("Social And Past History Background: Have You Been To Jail Before Is Incomplete");
    return false;
  }
  if (!selDrink) {
    alert("Social And Past History Background: Have You Taken Alcholic Drinks In The Past Is Incomplete");
    return false;
  }
  if (!selVirgin) {
    alert("Social And Past History Background: Are You A Virgin Is Incomplete");
    return false;
  }
  if (!selArmRob) {
    alert("Social And Past History Background: Armed Robbery Is Incomplete");
    return false;
  }
  if (!selRevReb) {
    alert("Social And Past History Background: Revolution/Rebel Is Incomplete");
    return false;
  }
  if (!selProst) {
    alert("Social And Past History Background: Prostitution Is Incomplete");
    return false;
  }
  if (!selMedCon) {
    alert("Health Status: Do You Have Any Serious Medical Condition Is Incomplete");
    return false;
  }
  if (!selRegMed) {
    alert("Health Status: Are You On Any Regular Medication Is Incomplete");
    return false;
  }
  if (!selMajSur) {
    alert("Health Status: Have You Had Any Major Surgeries Is Incomplete");
    return false;
  }
  if (!selAller) {
    alert("Health Status: Do You Have Any Allergies Is Incomplete");
    return false;
  }
  if (!selProbLaw) {
    alert("Criminal: Have You Had Any Problems With The Law Is Incomplete");
    return false;
  }



 // cost = (+selPet.value) * (+selColour.value);

 // return true; // submits
}
</script>

<script>
 function submitClick(){
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
 else{
 return true;
 }
 }
</script>

<script>
 function submitClick(){
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
 else{
 return true;
 }
 }
</script>

<script type="text/javascript">
        function submitClick() {
            var e = document.getElementById("MaritalStat");
            var optionSelIndex = e.options[e.selectedIndex].value;
            var optionSelectedText = e.options[e.selectedIndex].text;
            if (optionSelIndex == 0) {
                alert("General: Marital Status Is Incomplete");
                return false;
            }
            else {
             return true;
            }
        }
    </script>

<script type="text/javascript">
        function submitClick() {
            var e = document.getElementById("countrylist");
            var optionSelIndex = e.options[e.selectedIndex].value;
            var optionSelectedText = e.options[e.selectedIndex].text;
            if (optionSelIndex == 0) {
                alert("General: Country Of Residence Is Incomplete");
                return false;
            }
            else {
             return true;
            }
        }
    </script>

<script type="text/javascript">
        function submitClick() {
            var e = document.getElementById("RecommendedBy");
            var optionSelIndex = e.options[e.selectedIndex].value;
            var optionSelectedText = e.options[e.selectedIndex].text;
            if (optionSelIndex == 0) {
                alert("Recommended By: I Am Recommended By Is Incomplete");
                return false;
            }
            else {
             return true;
            }
        }
    </script>    


    <script>
      function show1(){
  document.getElementById('hidecall').style.display ='none';
}
function show1a(){
  document.getElementById('hidecall').style.display = 'block';
}

    function show2(){
  document.getElementById('hidenardrug').style.display ='none';
}

function show2a(){
  document.getElementById('hidenardrug').style.display ='block';
}

  function show3(){
  document.getElementById('nardrugpast').style.display ='none';
}

function show3a(){
  document.getElementById('nardrugpast').style.display ='block';
}

function show4(){
  document.getElementById('poarrest').style.display ='none';
}

function show4a(){
  document.getElementById('poarrest').style.display ='block';
}

function show5(){
  document.getElementById('proscourt').style.display ='none';
}

function show5a(){
  document.getElementById('proscourt').style.display ='block';
}

function show6(){
  document.getElementById('jailbef').style.display ='none';
}

function show6a(){
  document.getElementById('jailbef').style.display ='block';
}

function show7(){
  document.getElementById('drinkpast').style.display ='none';
}

function show7a(){
  document.getElementById('drinkpast').style.display ='block';
}

function show8(){
  document.getElementById('armrob').style.display ='none';
}

function show8a(){
  document.getElementById('armrob').style.display ='block';
}

function show9(){
  document.getElementById('revreb').style.display ='none';
}

function show9a(){
  document.getElementById('revreb').style.display ='block';
}

function show10(){
  document.getElementById('pros').style.display ='none';
}

function show10a(){
  document.getElementById('pros').style.display ='block';
}

function show11(){
  document.getElementById('lawprob').style.display ='none';
}

function show11a(){
  document.getElementById('lawprob').style.display ='block';
}

function show12(){
  document.getElementById('recby').style.display ='none';
}

function show12a(){
  document.getElementById('recby').style.display ='block';
}

function show13(){
  document.getElementById('majsur').style.display ='none';
}

function show13a(){
  document.getElementById('majsur').style.display ='block';
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