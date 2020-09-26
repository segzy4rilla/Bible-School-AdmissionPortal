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

#myImg {
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {
  opacity: 0.7s;
}

/* The modal background */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px; /*location of the box */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: auto; /* enable scroll if needed */
  background-color: rgb(0,0,0); /* fallback color*/
  background-color: rgba(0,0,0,0.9);
}

.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add animation-zoom in the image (bigger image) */
.modal-content, #caption {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% width of image on small screens */
@media only screen and (max-width: 700px) {
  .modal-content {
    width: 100%;
  }
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

              <button class="multisteps-form__progress-btn js-active" style="cursor: default;" type="button" title="Order Info" disabled>LOCAL</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Order Info" disabled>INTERNATIONAL STUDENTS</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="User Info" disabled>REGISTRATION</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Address" disabled>PASTORAL POINTS REGISTRATION</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Order Info" disabled>SPONSOR AGREEMENT PLAN</button>
              <button class="multisteps-form__progress-btn" style="cursor: default; font-size: 13px;" type="button" title="Comments" disabled>INTERNATIONAL STUDENT CONFIRMATIONS</button>
              <button class="multisteps-form__progress-btn" style="cursor: default; font-size: 13px;" type="button" title="Comments" disabled>INTERNATIONAL STUDENT ARRIVAL</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Comments" disabled>CAMPUS MAP</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Comments" disabled>SOFT LANDING CHECKLIST</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Comments" disabled>UNIVERSITY ITEMS CHECKLIST</button>
              <button class="multisteps-form__progress-btn" style="cursor: default;" type="button" title="Comments" disabled>FINISH</button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-12 m-auto">
            <form class="multisteps-form__form" id="myForm" name="admittedform" action="PHP_Files/AdmittedStudentsSubmission.php" method="post" enctype="multipart/form-data">
                <br>

                <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn" disabled>
                <br>
                                                <h6>IF YOU ARE AN INTERNATIONAL STUDENT PLEASE KINDLY SELECT NEXT TO PROCEED ON TO THE FOLLOWING PAGE</h6>
                                                <br>
                <h3 class="multisteps-form__title">LOCAL STUDENTS</h3>
                <div class="multisteps-form__content">
                  <div id="demo-form2" data-parsley-validate="" class="scrollpage1" style="height: 300px;">
                    <br>
                    <b><medium>Please scroll through this page to fill in available input fields</medium></b>
                    <br>
                    <br>
                    <br>
                    <medium>Click here to download responsibility form. Once you have filled in the responsibility form upload your completed details.</medium>

                      <br>
                      <br>

                      <a href="locresponsibilityform.pdf" target="_blank" download><medium>Download Local Student Responsibility Form</medium></a>

                      <br>
                      <br>
                    <label>Local Student Responsibility Form</label>
                                            <input type="file" name="locstudentform" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>

                                            </div>
                                        
                                        <br>
                                               <div class="form-group">
                                            <label>Proof Of Administration Fees Payment - 700 cedis</label>
                                            <br>
                                            <span class="help-block"><small>A picture of a receipt or if you are unable to pay the fees into the school bank account please upload a picture of the cash that you will pay on arrival. Bank account details are on the admission letter.</small></span>
                                            <input type="file" name="adminfeepay" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="exampleSelect1">Confirm Type Of Payment</label>
                                                <select class="form-control rounded-0" id="exampleSelect1" name="loc_paymenttype">
                                                    <option>--Select Payment Type--</option>
                                                    <option>Fully Paid</option>
                                                    <option>Part Payment</option>
                                                </select>
                                            </div>


                                                <div class="form-group">
                                                    <label class="control-label">Confirm Amount Paid</label>
                                                    <input type="text" class="form-control" placeholder="Enter confirmed amount" name="loc_amountpaid">
                                                </div>
                                                
                                            <div class="form-group">
                                                        <label class="control-label">Accommodation - Would you like to sleep in the international students hostel, which accommodates only 2 people in a room for a fee of $100 for a 9 months course?</label>
                                                        <br>
                                                        <span class="help-block"><small>(Please note a standard room sleeps 4 people)</small></span>
                                                        <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioaccommodation1" name="local_accommodation" class="custom-control-input"
                            value="Yes">
                                                    <label class="custom-control-label" for="radioaccommodation1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioaccommodation2" name="local_accommodation" class="custom-control-input"
                            value="No">
                                                    <label class="custom-control-label" for="radioaccommodation2">No</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiolocaccomodation3" name="local_accommodation" class="custom-control-input"
                            value="Will Share A Room With My Spouse">
                                                    <label class="custom-control-label" for="radiolocaccomodation3">Will Share A Room With My Spouse</label>
                                                </div>
                      </div> 

                                                    <br>

                                        <medium>Click here to download declaration form. Once you have filled in the declaration form upload your completed details.</medium>

                      <br>
                      <br>

                      <a href="declarationstatement.docx" download><medium>Download Declaration Form</medium></a>

                      <br>
                      <br>  
                                                    
                                                <div class="form-group">
                                            <label>Declaration Form</label>
                                            <input type="file" name="declarationform" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div> 

                                        <br>
                                        <br>

                                        <medium>Click here to download room assignment form. Once you have filled in the room assignment form upload your completed details.</medium>

                      <br>
                      <br>

                      <a href="ROOMASSIGNMENT.docx" download><medium>Download Room Assignment Form</medium></a>

                      <br>
                      <br>
                                        
                                             <div class="form-group">
                                            <label>Room Assignment Form</label>
                                            <input type="file" name="roomasignmentform" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Hard Copy Documents</label>
                                            <br>
                                            <span class="help-block"><small>1. Application Form</small></span>
                                            <br>
                                             <span class="help-block"><small>2. School Certificate</small></span>
                                             <br>
                                             <span class="help-block"><small>3. Recommendation Letter</small></span>
                                             <br>
                                             <span class="help-block"><small>4. All Medical Documents</small></span>
                                             <br>
                                             <span class="help-block"><small>5. Responsibility Form</small></span>
                                             <br>
                                             <span class="help-block"><small>6. Declaration Form</small></span>
                                             <br>
                                             <span class="help-block"><small>7. Room Assignment Form</small></span>
                                             <br>
                                             <span class="help-block"><small>8. Hard Copy Receipt Of Administration Fee (700 Cedis)</small></span>
                                             <br>
                                        <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customdocuments" name="docsconfirm">
                                                    <label class="custom-control-label" for="customdocuments">I can confirm that I have printed all documents to bring to the Bible School</label>
                                                </div>
                                                
                                                    </div>
                                                    
                                            <div class="form-group">
                                            <label>Do you have?</label>
                                            <br>
                                            <span class="help-block"><small>1. Pillow</small></span>
                                            <br>
                                             <span class="help-block"><small>2. Pillow Case</small></span>
                                             <br>
                                             <span class="help-block"><small>3. Bed Sheets</small></span>
                                             <br>
                                             <span class="help-block"><small>4. Duvet (For single bed)</small></span>
                                             <br>
                                        <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="custombed" name="beddingconfirm">
                                                    <label class="custom-control-label" for="custombed">I can confirm that I have all of the bedding sets</label>
                                                </div>
                                                
                                                    </div>        
                                            
                                            <div class="form-group">
                                            <label>Do you have an MTN Sim Card?</label>
                                            <br>
                                            
                                        <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customcard" name="mtncardconfirm">
                                                    <label class="custom-control-label" for="customcard">I can confirm that I have an MTN Sim Card</label>
                                                </div>
                                                
                                                    </div> 

                                                    <div class="form-group">
                                                    <label class="control-label">Date Of Full Payment</label>
                                                    <input type="Date" class="form-control" placeholder="Enter date" name="loc_datepayfulladmin">
                                                </div>

                                                <div class="form-group">
                    
                                            <label>Vouch Letter From Bishop To Confirm You Will Make Full Payment</label>
                                            <input type="file" name="loc_ConfirmPayment" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>                                        
                                           

                                            <br>                                 
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <br>
                                                <h6>IF YOU ARE AN LOCAL STUDENT PLEASE KINDLY SELECT PREVIOUS TO TAKE A STEP BACK TO THE FOREGOING PAGE</h6>
                                                <br>
                <h3 class="multisteps-form__title">INTERNATIONAL STUDENTS</h3>
                <div class="multisteps-form__content">
                  <div id="demo-form2" data-parsley-validate="" class="scrollpage1" style="height: 300px;">
                    <br>
                    <b><medium>Please scroll through this page to fill in available input fields</medium></b>
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                      <medium>Click here to download admission contract. Once you have filled in the admission contract upload your completed details.</medium>

                      <br>
                      <br>

                      <a href="admissioncontract.docx" download><medium>Download Admission Contract</medium></a>

                      <br>
                      <br>
                                            <label>Admission Contract</label>
                                            <input type="file" name="admissioncontract" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                    <label class="control-label">Date Of Full Payment</label>
                                                    <input type="Date" class="form-control" placeholder="Enter date" name="int_datepayfulladmin">
                                                </div>

                                                <div class="form-group">
                    
                                            <label>Letter To Confirm For Full Payment </label>
                                            <input type="file" name="int_ConfirmPayment" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>

                                        <br>
                     
                    <medium>Click here to download responsibility form. Once you have filled in the responsibility form upload your completed details.</medium>

                    <br>
                    <br>

                      <a href="intresponsibilityform.pdf" target="_blank" download><medium>Download International Student Responsibility Form</medium></a>

                      <br>
                      <br>

                                        <div class="form-group">
                                            <label>International Student Responsibility Form</label>
                                            <input type="file" name="intstudentresponform" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label>Administration Fee - $250</label>
                                            <br>
                                             <span class="help-block"><small>A picture of a receipt or if you are unable to pay the fees into the school bank account please upload a picture of the cash that you will pay on arrival. Post bank account details.</small></span>
                                            <input type="file" name="adminfeeimgigpay" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="exampleSelect1">Confirm Type Of Payment</label>
                                                <select class="form-control rounded-0" id="exampleSelect1" name="int_paymenttype">
                                                    <option>--Select Payment Type--</option>
                                                    <option>Fully Paid</option>
                                                    <option>Part Payment</option>
                                                </select>
                                            </div>


                                                <div class="form-group">
                                                    <label class="control-label">Confirm Amount Paid</label>
                                                    <input type="text" class="form-control" placeholder="Enter confirmed amount" name="int_amountpaid">
                                                </div>

                                        <div class="form-group">
                                            <label>Immigration Fee - $170</label>
                                            <br>
                                             <span class="help-block"><small>A picture of a receipt or if you are unable to pay the fees into the school bank account please upload a picture of the cash that you will pay on arrival. Post bank account details.</small></span>
                                            <input type="file" name="adminfeeimgigpay2" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label>Picture Of Passport Bio Data (Passport Page With Your Picture And Passport Information</label>
                                            <input type="file" name="passportbiodata" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label>Visa Entrance And Clearance Letter (If Required)</label>
                                            <input type="file" name="visaletter" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                                    <label class="control-label">Comment If Visa Is Not Required</label>
                                                    <input type="text" name="visacomment" class="form-control" placeholder="">
                                                </div>
                                                
                                        <div class="form-group">
                                            <label>Flight Ticket To Ghana (Must Discuss The Date Of The Ticket With Recruitment Officer Before Buying The Ticket)*</label>
                                            <br>
                                            <span class="help-block"><small>Please try to book a flight that will arrive from to Tuesday to Friday between 6am - 8pm</small></span>
                                            <input type="file" name="flightticket" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="example-datetime-local-input">Ghana Airport Arrival Date And Time</label>
                                                    <input class="form-control rounded-0 form-control-md" type="datetime-local" name="airportArrivalDateTime" id="example-datetime-local-input">
                                            </div>

                                        <div class="form-group">
                                                    <label class="control-label">Reasonable Month And Year You Can Come To The Bible School And Your Reason Why</label>

                                                    <textarea class="form-control required" id="exampleTextarea1" name="reasonmonthyear"
                                                          rows="3"></textarea>
                                                        </div>
                                       
                                        <div class="form-group">
                                                <label for="example-date-input">Please enter a date you would like complimentary lunch and breakfast (excluding Saturday, Sunday and Monday)</label>
                                                <br>
                                                <span class="help-block"><small>The Bible School offers 2 complimentary meals when you arrive.</small></span>
                                                <br>
                                                <br>
                                                <div>
                                                  <label>Date For Breakfast</label>
                                                  <br>
                                                    <input class="form-control rounded-0 form-control-md" type="date" id="example-date-input" name="breakfastdate">
                                                </div>
                                                <br>
                                                <div>
                                                  <label>Date For Lunch</label>
                                                  <br>
                                                    <input class="form-control rounded-0 form-control-md" type="date" id="example-date-input" name="lunchdate">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                        <label class="control-label">Would You Like A Starter Pack For £40/$50 So That You Will Not Have To Travel With The Following Toiletries Or Bed Sets?</label>
                                                        <br>
                                                        <label class="control-label">- Bath Towel</label>
                                                        <br>
                                                        <label class="control-label">- Hand Towel</label>
                                                        <br>
                                                        <label class="control-label">- Bath Gel</label>
                                                        <br>
                                                        <label class="control-label">- Lotion</label>
                                                        <br>
                                                        <label class="control-label">- Laundry Bag</label>
                                                        <br>
                                                        <label class="control-label">- Dental Kit</label>
                                                        <br>
                                                        <label class="control-label">- Bath Mat</label>
                                                        <br>
                                                        <label class="control-label">- 1 Pillow</label>
                                                        <br>
                                                        <br>
                                                        
                                                        <label class="control-label">The £40/$50 Will Go To The Lighthouse Orphanage</label>
                                                        <br>
                                                        <span class="help-block"><small>(Please note that you need to bring your own bedsheets etc. If you do not opt for the starter pack you need to bring your own pillow)</small></span>
                                                        <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiokit1" name="int_starterPack" class="custom-control-input" value="Yes">
                                                    <label class="custom-control-label" for="radiokit1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiokit2" name="int_starterPack" class="custom-control-input" value="No">
                                                    <label class="custom-control-label" for="radiokit2">No</label>
                                                </div>
                                                
                                                    </div> 
                                                    
                                                <div class="form-group">
                                                          
                                                        <label class="control-label">Would You Like To Sleep In The International Students Hostel, which only sleeps 2 people for a fee $100 for a 9 months course?</label>
                                                        <br>
                                                        <span class="help-block"><small>(Please note that a standard room sleeps 4 people)</small></span>
                                                        <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioaccomodation1" name="int_accommodation" class="custom-control-input" value="Yes">
                                                    <label class="custom-control-label" for="radioaccomodation1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioaccomodation2" name="int_accommodation" class="custom-control-input" value="No">
                                                    <label class="custom-control-label" for="radioaccomodation2">No</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioaccomodation3" name="int_accommodation" class="custom-control-input" value="Will Share A Room With My Spouse">
                                                    <label class="custom-control-label" for="radioaccomodation3">Will Share A Room With My Spouse</label>
                                                </div>
                                                    </div>

                                                    
                                                    <br>

                                                    <medium>Click here to download declaration form. Once you have filled in the declaration form form upload your completed details.</medium>

                      <br>
                      <br>

                      <a href="declarationstatement.docx" download><medium>Download Declaration Form</medium></a>

                      <br>
                      <br>
                                                    
                                                <div class="form-group">
                                            <label>Declaration Form</label>
                                            <input type="file" name="intdecform" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>

                                        <br>

                                        <medium>Click here to download room assignment form. Once you have filled in the room assignment form upload your completed details.</medium>

                      <br>
                      <br>

                      <a href="ROOMASSIGNMENT.docx" download><medium>Download Room Assignment Form</medium></a>

                      <br>
                      <br>     
                                        
                                        <div class="form-group">
                                            <label>Room Assignment Form</label>
                                            <input type="file" name="introomassignform" class="file-upload-default" style="display:none;">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>

                                        

                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">REGISTRATION</h3>
                <div class="multisteps-form__content">

                  <br>
                                                <h6>PLEASE SCROLL DOWN TO THE BOTTOM OF THE PAGE AND ENTER THE ADDITIONAL DETAILS</h6>




                  
                    <div id="demo-form" data-parsley-validate="" class="scrollpage1" style="height: 300px;">

                      <div class="form-group">

                      <br>
                     
      

                    </div>

                         <br>
                         <div class="form-group">
                                                <label for="exampleInputEmail111">Name of Church Branch</label>
                                                <input type="text" class="form-control" id="exampleInputEmail111" placeholder="Enter Church Branch" name="churchbranchreg">
                                            </div>

                          <div class="form-group">
                                                <label for="exampleInputEmail111">Name of Pastor</label>
                                                <input type="text" class="form-control" id="exampleInputEmail111" placeholder="Enter Pastor Name" name="pastornamereg">
                                            </div>   

                          <div class="form-group">
                                                <label for="exampleInputEmail111">Pastors Phone Number</label>
                                                <input type="text" class="form-control" id="exampleInputEmail111" placeholder="Enter Pastors Phone Number" name="pastornumreg">
                                            </div> 

                          <div class="form-group">
                      <label>Is Your Church A UD-OLGC Lighthouse/First Love Church</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioUDOLGCCheck1" name="UDOLGCCheck" class="custom-control-input" value="Yes">
                                                    <label class="custom-control-label" for="radioUDOLGCCheck1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioUDOLGCCheck2" name="UDOLGCCheck" class="custom-control-input" value="No">
                                                    <label class="custom-control-label" for="radioUDOLGCCheck2">No</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleSelect1">Select Denomination</label>
                                                <select class="form-control rounded-0" id="denominationsel" name="seldenomreg">
                                                    <option value="">-- Select Denomination --</option>
                                                    <option>Anagkazo Assemblies</option>
                                                    <option>Catch The Anointing Centre</option>
                                                    <option>Evangelical Lighthouse Chapel Int</option>
                                                    <option>Greater Love Church Ghana</option>
                                                    <option>Healing Jesus Mission Int</option>
                                                    <option>Igreja Do Primiero Amor</option>
                                                    <option>Jesus Is The Answer Church</option>
                                                    <option>LCI Kenya</option>
                                                    <option>LCI Sa</option>
                                                    <option>Lighthouse Chapel Int</option>
                                                    <option>Loyalty House Int</option>
                                                    <option>Mustard Seed Chapel</option>
                                                    <option>QFC Ghana</option>
                                                    <option>QFC USA</option>
                                                    <option>The Machaneh Church</option>
                                                    <option>The Makarios Church</option>
                                                    <option>The Mega Church</option>
                                                    <option>First Love</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>  

                                            <div class="form-group">
                                                <label for="exampleInputEmail111">Name Of Bishop</label>
                                                <input type="text" class="form-control" id="exampleInputEmail111" placeholder="Enter Name Of Bishop" name="bishopnamereg">
                                            </div>

                                            <div class="form-group" id="skillset">
                                            <label>Select Any Special Skills You Have</label>
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="specialSkills[]" value="Cooking">
                                                    <label class="custom-control-label" for="customCheck1">Cooking</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="specialSkills[]" value="Driving">
                                                    <label class="custom-control-label" for="customCheck2">Driving</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="specialSkills[]" value="First Aid and CPR">
                                                    <label class="custom-control-label" for="customCheck3">First Aid and CPR</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="specialSkills[]" value="Garden Maintenance">
                                                    <label class="custom-control-label" for="customCheck4">Garden Maintenance</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="specialSkills[]" value="Hospitality">
                                                    <label class="custom-control-label" for="customCheck5">Hospitality</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="specialSkills[]" value="Painting">
                                                    <label class="custom-control-label" for="customCheck6">Painting</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" name="specialSkills[]" value="Sales">
                                                    <label class="custom-control-label" for="customCheck7">Sales</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" name="specialSkills[]" value="Farming">
                                                    <label class="custom-control-label" for="customCheck8">Farming</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck9" name="specialSkills[]" value="Plumbing/Electrical/Carpentry">
                                                    <label class="custom-control-label" for="customCheck9">Plumbing/Electrical/Carpentry</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck10" name="specialSkills[]" value="Singing">
                                                    <label class="custom-control-label" for="customCheck10">Singing</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11" name="specialSkills[]" value="Acting">
                                                    <label class="custom-control-label" for="customCheck11">Acting</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck12" name="specialSkills[]" value="Dancing">
                                                    <label class="custom-control-label" for="customCheck12">Dancing</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck13" name="specialSkills[]" value="Sports">
                                                    <label class="custom-control-label" for="customCheck13">Sports</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck14" name="specialSkills[]" value="Computing/Technology">
                                                    <label class="custom-control-label" for="customCheck14">Computing/Technology</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck15" name="specialSkills[]" value="Administration">
                                                    <label class="custom-control-label" for="customCheck15">Administration</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck16" name="specialSkills[]" value="Media">
                                                    <label class="custom-control-label" for="customCheck16">Media</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck17" name="specialSkills[]" value="Languages">
                                                    <label class="custom-control-label" for="customCheck17">Languages</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck18" name="specialSkills[]" value="Art">
                                                    <label class="custom-control-label" for="customCheck18">Art</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck19" name="specialSkills[]" value="Construction">
                                                    <label class="custom-control-label" for="customCheck19">Construction</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck20" name="specialSkills[]" value="Instruments">
                                                    <label class="custom-control-label" for="customCheck20">Instruments</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="otherSkillCheck" name="otherSkill" id="chkPassport" onclick="ShowHideDiv(this)">
                                                    <label class="custom-control-label" for="otherSkillCheck">Other</label>
                                                </div>
                                            </div>
                      <div id="dvPassport" style="display: none">

                                                <label class="control-label">If Other, Please Enter Additional specialSkills[] In Below</label>

                                                <input class="form-control" name="specialSkills[]" id="otherSkill"
                                                          rows="2">

                                             </textarea>

                                           </div> 
                                          </div>

                                                             <div class="form-group">
                    <br>
                    <span class="help-block"><medium>Please Click On This Link And Complete The Following:</medium></span>
                    <br>
                    <a href="https://school.anagkazomanager.org/register" target="_blank">https://school.anagkazomanager.org/register</a>
                    <br>
                    <br>
                    <span class="help-block"><medium>1. Select Course - Junior Clerkship</medium></span>
                    <br>
                    <span class="help-block"><medium>2. Click Apply</medium></span>
                    <br>
                    <span class="help-block"><medium>3. Fill In Details</medium></span>
                    <br>
                    <span class="help-block"><medium>4. Upload a smart passport size picture of yourself wearing a white shirt and black jacket (you must upload a picture of yourself, if the picture upload is not working try a smaller photo with less quality, <b>do not submit if the picture does not upload!</b>)</medium></span>
                    <br>
                    <span class="help-block"><medium>5. Submit Application</medium></span>
                    <br>
                    <br>
                    <span class="help-block"><small>Please confirm that you have registered</small></span>

                    <br>
                   
                      <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="Checkconfirmregistration" name="confirmregistrationcheck">
                        <label class="custom-control-label" for="Checkconfirmregistration">Yes I can confirm</label>
                         </div>
                         <br>
                         <br>
                         <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="Checkconfirmregistration2" name="confirmregistrationcheck2">
                        <label class="custom-control-label" for="Checkconfirmregistration2">Select Class: JC September 2020</label>
                         </div>
                         </div>

                                             
                <br>
                <br>
                <br>              



                                              </div>

                                                


                 
                </div>
                <div class="card">
                            <div class="card-body">
                                <div class="content">
                                                <div class="button-row d-flex mt-4">
                                                  <!-- <button class="btn">
                                                  <div class="btn">Here is my clickable div</div>
                                               </button> -->
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>                         
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
            </div>
              </div>

              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">PASTORAL POINTS REGISTRATION</h3>
                <div class="multisteps-form__content">
                  <div id="demo-form2" data-parsley-validate="" class="scrollpage1" style="height: 300px;">
                    <br>
                    <div class="form-group">
                    <span class="help-block"><medium><b>Please Click On This Link</b></medium></span><span class="help-block"><medium> And Fill In The Pastoral Points New Student Form</medium></span>
                    <br>
                    <span class="help-block"><medium>New Student Form:</medium></span>
                    <br>
                    <a href="http://anagkazo.firstlovegallery.com/student/new" target="_blank">http://anagkazo.firstlovegallery.com/student/new</a>
                    <br>
                    <span class="help-block"><medium>UD Means A Lighthouse Chapel Church, Non-UD Means A Non-Lighthouse Church, Please Make Sure You Fill In All The Fields.</medium></span>
                    <br>
                    <br>
                    <span class="help-block"><small>Please confirm that you have filled in the form</small></span>

                    <br>
                   
                      <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="CheckUD" name="UDcheck">
                        <label class="custom-control-label" for="CheckUD">Yes I can confirm</label>
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
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">SPONSOR AGREEMENT PAYMENT PLAN (LOCAL AND INTERNATIONAL STUDENTS)</h3>
                <div class="multisteps-form__content">
                  <div id="demo-form2" data-parsley-validate="" class="scrollpage1" style="height: 300px;">
                    <br>
                    <div class="form-group">
                    <span class="help-block"><medium>Applicants Need To Confirm That They Have A Sponsorship Agreement Payment Plan (When You Will Receive Money And How Much You Will Receive)</medium></span>
                      <br>
                      <br>
                      <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="Radio1locintsponsor" name="sponsor" class="custom-control-input" value="Yes">
                                                    <label class="custom-control-label" for="Radio1locintsponsor">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="Radio2locintsponsor" name="sponsor" class="custom-control-input" value="No">
                                                    <label class="custom-control-label" for="Radio2locintsponsor">No</label>
                                                </div>
                                            </div>

                    <br>
                         </div>                                  
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">INTERNATIONAL STUDENTS CONFIRMATIONS</h3>
                <div class="multisteps-form__content">
                  <div class="scrollpage1" style="height: 300px;">
                    <div class="relative input-wrap is-required">
                      <br>
                    <div class="form-group"> 
                      <br>
                      <span class="help-block"><large>If You Are A <b>Local Student</b> Please Kindly Follow On To The Next Step Of The Form</large></span>
                      <br>
                      <br>
                      <span class="help-block"><large>If You Are An <b>International Student</b> Please Scroll Through This Page And Confirm All Necessary Items</large></span>
                      <br>
                      <br>
                      <span class="help-block"><medium>Printed All Requested Documents To Bring To School:</medium></span>
                      <br>
                      <br>
                      <span class="help-block"><medium>1. Application Form</medium></span>
                      <br>
                      <span class="help-block"><medium>2. School Certficate</medium></span>
                      <br>
                      <span class="help-block"><medium>3. Recommendation Letter</medium></span>
                      <br>
                      <span class="help-block"><medium>4. All Medical Documents</medium></span>
                      <br>
                      <span class="help-block"><medium>5. Police Report</medium></span>
                      <br>
                      <span class="help-block"><medium>6. Admission Contract</medium></span>
                      <br>
                      <span class="help-block"><medium>7. Responsibility Form</medium></span>
                      <br>
                      <span class="help-block"><medium>8. Declaration Form</medium></span>
                      <br>
                      <span class="help-block"><medium>9. Room Assignment Form</medium></span>
                      <br>
                      <span class="help-block"><medium>10. Hard Copy Receipt Of Administration Fee ($250
                      USD)</medium></span>
                      <br>
                      <span class="help-block"><medium>11. Hard Copy Receipt Of Immigration Fee Or Cash ($170
                      USD)</medium></span>
                      <br>
                      <div class="form-group">
                                                <br>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkprintrequesteddocs" name="printrequesteddocs">
                                                    <label class="custom-control-label" for="checkprintrequesteddocs">I can confirm I printed all requested documents</label>
                                                </div>
                                            </div>
                      </div>

                      <br>

                      <div class="form-group">

                      <label for="exampleTextarea1">Do You Have Malaria Medication?</label>

                      <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkmalariamed" name="malariacheck">
                                                    <label class="custom-control-label" for="checkmalariamed">I can confirm I have malaria medication</label>
                                                </div>

                      </div> 

                      <br>

                      <div class="form-group">

                      <label for="exampleTextarea1">Is Your Mobile Phone Unlocked So That The Ghana Sim Card Will Work?</label>

                      <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkghanasim" name="ghanasimcheck">
                                                    <label class="custom-control-label" for="checkghanasim">I can confirm my mobile phone is unlocked</label>
                                                </div>

                      </div>

                      <br>

                      <div class="form-group">

                      <label for="exampleTextarea1">Do You Have A 3-Pin/Charger Or An Adaptor For The Sockets In Ghana?</label>

                      <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkchargerghana" name="3pinghanacheck">
                                                    <label class="custom-control-label" for="checkchargerghana">I can confirm I have 3-pin/charger or an adaptor</label>
                                                </div>

                      </div>

                      <br>

                      <div class="form-group">

                      <label for="exampleTextarea1">Do You Have A Charged Power Bank And A Cable To Charge Your Phone?</label>

                      <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkpower" name="chargepowercheck">
                                                    <label class="custom-control-label" for="checkpower">I can confirm I have a charged power bank and cable for my phone</label>
                                                </div>

                      </div> 

                      <br>

                      <div class="form-group">

                      <label for="exampleTextarea1">Do You Have A Pillowcase, Bedsheets, And Duvet For A Single Bed?</label>

                      <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkbeddings" name="beddingscheck">
                                                    <label class="custom-control-label" for="checkbeddings">I can confirm I have these beddings</label>
                                                </div>

                      </div>
                         

                      <br>                   
                    
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
                <h5 class="multisteps-form__title">INTERNATIONAL STUDENT ARRIVAL PROCESS</h5>

                <div class="scrollpage1" style="height: 300px;">
                  
                <ul type="disc">
                  <li>ABMTC will organise airport pick up - The Bible School Attendant will hold an ABMTC placard outside the airport</li>
                  <li>Connect to the wifi when you arrive at the Accra Airport</li>
                  <li>Please make sure you have US Dollars or UK Pounds to change at the airport (do not plan on changing another currency). You must change some money at the airport!</li>
                  <li>Please <b>do not buy a sim card when you arrive</b>, a specific sim card with a network that has good signal in Mampong will be given to you for a fee of 30 cedis by the Bible School Attendant who will pick you up from the airport. Please give the sim card money to the Bible School Attendant after you have changed some money at the airport to cedis</li>
                    <li>When you arrive the Bible School Attendant will take you to the convenience store near the airport which also has restaurants. After the Bible School Attendant will bring you to the Bible School</li>
                </ul>

                                          

                                             
                                              
                  </div>
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>

                <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">CAMPUS MAP</h3>
                <div class="scrollpage1" style="height: 300px;">
                  <div class="form-group">
                    <!-- <span class="help-block"><medium>Please read the recommended items you should bring to ABMTC on the school website: <a href="https://school.anagkazomanager.org/register" target="_blank">www.abmtc.org/studentlife</a></medium></span> -->
                    <br>
                  
                    <span class="help-block"><medium>Click on the map to enlarge the view</medium></span>
                    <br>
    <img id= "myImg" src="map.jpg" alt= "ABMTC Campus" width="300">
    <!-- The Modal -->
    <div id= "myModal" class="modal">
      <!-- The close button -->
      <span class= "close">&times;</span>
      <!-- The modal content (image) -->
      <img class= "modal-content" id= "img1">
      <!-- The modal caption (img text) -->
      <div id= "caption"></div>
    </div>  <!-- end of Modal -->

                                           
                                          </div>
                  </div>
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>

                <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">SOFT LANDING CHECKLIST</h3>
                <div class="scrollpage1" style="height: 300px;">
                  <br>
                  <label for="exampleTextarea1">Please Confirm The Following:</label>

                      <div class="form-group">
                      <label>Airport Pick-Up (International Students Only)</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioairportpick1" name="airportpick" class="custom-control-input" value="Yes">
                                                    <label class="custom-control-label" for="radioairportpick1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioairportpick2" name="airportpick" class="custom-control-input" value="No">
                                                    <label class="custom-control-label" for="radioairportpick2">No</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioairportpick3" name="airportpick" class="custom-control-input">
                                                    <label class="custom-control-label" for="radioairportpick3">Did Not Order</label>
                                                </div>
                                            </div>

                                            

                      <div class="form-group">
                      <label>Changed Money At The Airport (International Students Only)</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiocheckmoneychange1" name="changeMoney" class="custom-control-input" value="Yes">
                                                    <label class="custom-control-label" for="radiocheckmoneychange1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiocheckmoneychange2" name="changeMoney" class="custom-control-input" value="No">
                                                    <label class="custom-control-label" for="radiocheckmoneychange2">No</label>
                                                </div>
                                            </div>

                      <div class="form-group">
                      <label>Starter Pack (International Students Only)</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiostarterpack1" name="starterPackCheck" class="custom-control-input" value="Yes">
                                                    <label class="custom-control-label" for="radiostarterpack1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiostarterpack2" name="starterPackCheck" class="custom-control-input" value="No">
                                                    <label class="custom-control-label" for="radiostarterpack2">No</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiostarterpack3" name="starterpack" class="custom-control-input">
                                                    <label class="custom-control-label" for="radiostarterpack3">Did Not Order</label>
                                                </div>
                                            </div>                      

                      <div class="form-group">

                      <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checksimcred" name="simcredcheck">
                                                    <label class="custom-control-label" for="checksimcred">Set Up MTN Sim Card And Credit</label>
                                                </div>
                                              </div>



                       <div class="form-group">                   
                       <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkcollecttag" name="tagcheck">
                                                    <label class="custom-control-label" for="checkcollecttag">Collected Tag</label>
                                                </div>
                                                </div>                        

                      

                         <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Room Number</label>
                                                <div class="col-sm-1">
                                                    <input type="number" class="form-control rounded-0 form-control-sm" id="checkroomnum" name="roomnumber">
                                                </div>
                                            </div> 

                          <div class="form-group">
                                              <label>Are There Any Issues In The Room?</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="Radioroom1" name="roomissues" class="custom-control-input" value="Yes">
                                                    <label class="custom-control-label" for="Radioroom1" onclick="show1a();">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="Radioroom2" name="roomissues" class="custom-control-input" value="No">
                                                    <label class="custom-control-label" for="Radioroom2" onclick="show1();">No</label>
                                                </div>
                                            </div>                                         
                                            
                                            <div id="hidecall" class="hide">

                                                <label class="control-label">If Yes, Please Describe The Issues In Your Room</label>

                                                <textarea class="form-control" name="roomissuecomment" id="exampleTextarea1"
                                                          rows="2">

                                             </textarea>

                                           </div>  

                                           <br>
                                           <br>

                                              <div class="form-group">
                                              <label>Have The Issues In Your Room Been Solved?</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="Radiocheckroomprob1" name="issuesResolved" class="custom-control-input" value="Yes">
                                                    <label class="custom-control-label" for="Radiocheckroomprob1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="Radiocheckroomprob2" name="issuesResolved" class="custom-control-input" value="No">
                                                    <label class="custom-control-label" for="Radiocheckroomprob2">No</label>
                                                </div>
                                            </div>

                         <div class="form-group">

                      <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkadminfeebook" name="feeandbookcheck">
                                                    <label class="custom-control-label" for="checkadminfeebook">Paid Admin Fee And Collected Textbooks</label>
                                                </div>
                                              </div>

                       <div class="form-group">

                      <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkgallerytour" name="tourcheck">
                                                    <label class="custom-control-label" for="checkgallerytour">Gallery Tour</label>
                                                </div>
                                              </div>

                      <div class="form-group">

                      <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkorphanage" name="orphancheck">
                                                    <label class="custom-control-label" for="checkorphanage">Orphanage Tour</label>
                                                </div>
                                              </div>                                                                                                                                                             

                      </div>
                  
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>

                  </div>
                </div>

                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">UNIVERSITY ITEMS CHECKLIST</h3>
                <div class="multisteps-form__content">
                  <div class="scrollpage1" style="height: 300px;">
                    <div class="relative input-wrap is-required">
                      <br>
                    <div class="form-group"> 
                      <br>
                      <span class="help-block"><medium>Please Take The Time In Making Sure You Have These University Essentials</medium></span>
                      <br>
                      <br>
                      <span class="help-block"><medium>- Cooking Utensils such as cutlery etc</medium></span>
                      <br>
                      <span class="help-block"><medium>- Rice Cooker</medium></span>
                      <br>
                      <span class="help-block"><medium>- Kettle</medium></span>
                      <br>
                      <span class="help-block"><medium>- Hard-drive/USB Stick</medium></span>
                      <br>
                      <span class="help-block"><medium>- Notebook</medium></span>
                      <br>
                      <span class="help-block"><medium>- Stationary</medium></span>
                      <br>
                      <span class="help-block"><medium>- Power Bank</medium></span>
                      <br>
                      <span class="help-block"><medium>- Surge Proof Extension Cables x2</medium></span>
                      <br>
                      <span class="help-block"><medium>- International Adaptor Plugs</medium></span>
                      <br>
                      <span class="help-block"><medium>- Portable Fan</medium></span>
                      <br>
                      <span class="help-block"><medium>- Bedding</medium></span>
                      <br>
                      <span class="help-block"><medium>- Cleaning Products</medium></span>
                      <br>
                      <span class="help-block"><medium>- Casual Clothes</medium></span>
                      <br>
                      <span class="help-block"><medium>- Smart Clothes</medium></span>
                      <br>
                      <span class="help-block"><medium>- Evening Wear</medium></span>
                      <br>
                      <span class="help-block"><medium>- Traditional Clothes (Optional)</medium></span>
                      <br>
                      <span class="help-block"><medium>- Sportswear (Optional - Golf, Football, Jogging)</medium></span>
                      <br>
                      <span class="help-block"><medium>- Footwear (Trainers, Smart Shoes, Casual Shoes)</medium></span>
                      <br>
                      <span class="help-block"><medium>- Clothing To Work In (BMCDR)</medium></span>
                      <br>
                      <span class="help-block"><medium>- Footwear To Work (BMCDR)</medium></span>
                      <br>
                      <span class="help-block"><medium>- Clothing For Different Seasons (Both Warm And Cold Weather)</medium></span>
                      <br>
                      <span class="help-block"><medium>- Smartphone</medium></span>
                      <br>
                      <span class="help-block"><medium>- Hard Drive</medium></span>
                      <br>
                      <span class="help-block"><medium>- Quality Internet Connection</medium></span>
                      <br>
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
                <h3 class="multisteps-form__title">FINISH</h3>
                <div class="scrollpage1" style="height: 300px;">
                  <br>
                  <br>
                  <center><span class="help-block"><medium>Click Submit To Complete Admitted Students Form</medium></span></center>
                  </div>
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button id="clickable" class="btn btn-primary ml-auto toggle-disabled" type="submit" title="Send">Submit</button>
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
 
angular.module('app', [])
.controller('ctrl', function($scope) {
  console.log('scope',$scope);
    $scope.printDiv = function(divName) {

    var printContents = document.getElementById(divName).innerHTML;

    var popupWin = window.open('', '_blank', 'width=300,height=300');
    popupWin.document.open();
    popupWin.document.write('<html><head><link rel="stylesheet" href="sample.css" /></head><body onload="window.print()">' + printContents + '</body></html>');
    popupWin.document.close();      
    };
});

</script>

<script>
    $(document).ready(updateSkills);

    function updateSkills() {
    $(document).click(updateRoutine);

        function updateRoutine() {
            $("[name='skills']").remove();
            var skills = $("[name='specialSkills[]'").get();
      
      var skillset = "";
            for (var i = 0; i < skills.length; ++i) {
        if(skills[i].checked){
          skillset = skillset + skills[i].value + ", ";
        }
            }
      
      if(document.getElementById("otherSkillCheck").checked){
        var otherSkill = document.getElementById("otherSkill");
        skillset = skillset + otherSkill.value;
      }
      
      var el = document.createElement("input");
      $(el).attr({"hidden": "hidden", "name": "skills", "id": "skillsValues"}).val(skillset);
      $("#myForm").append(el);
        }
    }

</script>


<script>
 function submitClick(){
 var India2 = document.getElementById('Checkconfirmregistration').checked;
 var France2 = document.getElementById('CheckUD').checked;
 var Japan2 = document.getElementById('checksimcred').checked;
 var Sweden2 = document.getElementById('checkcollecttag').checked;
 var Germany2 = document.getElementById('checkadminfeebook').checked;
 var Spain2 = document.getElementById('checkgallerytour').checked;
 var China2 = document.getElementById('checkorphanage').checked;
 var Ghana2 = document.getElementById('Checkconfirmregistration2').checked;
 // var Chad2 = document.getElementById('checkbox-p-2illness').checked;
 // var UK2 = document.getElementById('checkbox-p-2epilepsy').checked;
 



 
 
 
 
  if(India2==false){
  alert('REGISTRATION: Please Confirm Registration');
  return false;
  }
  if(Ghana2==false){
  alert('REGISTRATION: Please Confirm Class');
  return false;
  }
  if(France2==false){
  alert('PASTORAL POINTS REGISTRATION: Please Confirm Student Form Completion');
  return false;
  }
  if(Japan2==false){
  alert('SOFT LANDING CHECKLIST: Please Confirm MTN Sim Card And Credit Set Up');
  return false;
  }
  if(Sweden2==false){
  alert('SOFT LANDING CHECKLIST: Please Confirm Collected Tag');
  return false;
  }
  if(Germany2==false){
  alert('SOFT LANDING CHECKLIST: Please Confirm If Admin Fee Is Paid And Textbooks Are Collected');
  return false;
  }
  if(Spain2==false){
  alert('SOFT LANDING CHECKLIST: Please Confirm Gallery Tour');
  return false;
  }
  if(China2==false){
  alert('SOFT LANDING CHECKLIST: Please Confirm Orphanage Tour');
  return false;
  }
  if(Nigeria2==false){
  alert('UNIVERSITY ITEMS CHECKLIST: Please Confirm University Items');
  return false;
  }
  


      


  var uname=document.getElementById("checkroomnum").value;
          if (uname==""){
              alert("SOFT LANDING CHECKLIST: Please Enter Room Number");
              return false;
          }




  var sponsorshipcheck = document.forms["admittedform"]["locintsponsor"].value;

  var issuescheck = document.forms["admittedform"]["roomissues"].value;

  var solveroom = document.forms["admittedform"]["checkroomprob"].value;
  

  if (sponsorshipcheck == null || sponsorshipcheck == '') {
        alert("SPONSOR AGREEMENT PLAN: Please Select If You Have A Sponsorship Agreement Plan");
        return false;
      }

  if (issuescheck == null || issuescheck == '') {
        alert("SOFT LANDING CHECKLIST: Please Select If There Are Any Room Issues");
        return false;
      }    

    if (solveroom == null || solveroom == '') {
        alert("UNIVERSITY ITEMS CHECKLIST: Please Select If Room Issue Has Been Solved");
        return false;
      }

      function validateForm() {
  var x1 = document.forms["admittedform"]["churchbranchreg"].value;
  var x2 = document.forms["admittedform"]["pastornamereg"].value;
  var x3 = document.forms["admittedform"]["pastornumreg"].value;
  var x4 = document.forms["admittedform"]["bishopnamereg"].value;
  var selUD = document.querySelector("[name=UDOLGCCheck]:checked");
  var e = document.getElementById("denominationsel");
            var optionSelIndex = e.options[e.selectedIndex].value;
            var optionSelectedText = e.options[e.selectedIndex].text;

 
  if (x1 == "") {
    alert("Registration: Church Branch Is Incomplete");
    return false;
  }
  if (x2 == "") {
    alert("Registration: Pastor Name Is Incomplete");
    return false;
  }
  if (x3 == "") {
    alert("Registration: Pastor Number Is Incomplete");
    return false;
  }
  if (x4 == "") {
    alert("Registration: Bishop Name Is Incomplete");
    return false;
  }
  if (!selUD) {
    alert("Registration: UD-OLGC Lighthouse/First Love Church Is Incomplete");
    return false;
  }

            if (optionSelIndex == 0) {
                alert("Registration: Denomination Is Incomplete");
                return false;
            }

            


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

function ShowHideDiv(chkPassport) {
            var dvPassport = document.getElementById("dvPassport");
            dvPassport.style.display = chkPassport.checked ? "block" : "none";
        }


    </script>  

    <script type="text/javascript">
      var modal = document.getElementById("myModal");
var img = document.getElementById("myImg");
var img1 = document.getElementById("img1");
var caption = document.getElementById("caption");
var close = document.getElementsByClassName("close")[0];

img.onclick = function() {
  modal.style.display = "block";
  img1.src = this.src;
  caption.innerHTML = this.alt;
}

close.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(e) {
  if(e.target == modal) {
    modal.style.display = "none";
  }
}
    </script>    
  

</body>

</html>