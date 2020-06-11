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

    <style>
        .wizard > .steps .current a {
            background: orange;
        }

        .wizard > .steps .disabled a {
            border: 1px solid orange;
        }

        .wizard > .steps .disabled a:hover {
            background: white;
            color: #434a54;
            cursor: default;
            border: 1px solid orange;
        }

        .wizard > .steps .done a:active {
            background: orange;
            color: #434a54;
            cursor: default;
            border: 1px solid orange;
        }

        .wizard > .steps a:hover {
            background: white;
            color: #434a54;
            cursor: default;
            border: 1px solid orange;
        }

        .wizard > .steps .current a:hover {
            background: orange;
            color: white;
            cursor: default;
        }

        .wizard > .steps .done a {
            background: orange;
            color: white;
            cursor: default;

        &
        :hover {
            background: orange;
            color: white;
            cursor: default;
        }

        }
        .wizard > .steps .done a {
            background: orange;
            color: white;
            cursor: default;

        &
        :hover {
            background: orange;
            color: white;
            cursor: default;
        }

        }

        .wizard > .steps .done a:active {
            background: white;
            color: #434a54;
            cursor: default;
            border: 1px solid orange;
        }

        .wizard > .steps .done a {
            background: orange;
        }

        .wizard-form-area ul li a {
            background: orange;
            color: #ffffff;
            display: inline-block;
            height: 45px;
            min-width: 150px;
            line-height: 45px;
            text-align: center;
            border-radius: 5px;
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
                                <div class="wizard-form-area">
                                    <h5 class="card-title">Application Form</h5>

                                    <form id="example-form" action="PHP_Files/Application_Form_Submission.php"
                                          method="POST">
                                        <div class="overflow-auto">
                                            <h3>GENERAL</h3>
                                            <section class="overflow-auto">
                                                <h3></h3>
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" name="question1" class="form-control"
                                                           placeholder="Enter first name" aria-required="true">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" name="question2" class="form-control"
                                                           placeholder="Enter last name" aria-required="true">
                                                </div>

                                                <div class="form-group">
                                                    <label>Date Of Birth</label>

                                                    <input class="form-control rounded-0 form-control-md" type="date"
                                                           value="2011-08-19" id="example-date-input" name="question3"
                                                           aria-required="true">

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
                                                <div class="form-group">
                                                    <label class="control-label">Age</label>
                                                    <input type="number" name="question5" class="form-control"
                                                           placeholder="Enter age">
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Nationality At Birth</label>
                                                    <input type="text" class="form-control" name="question6"
                                                           placeholder="Enter birth nationality">
                                                </div>

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
                                                <div class="form-group">
                                                    <label class="control-label">Marital Status</label>
                                                    <div class="form-group">

                                                        <select class="form-control rounded-0" name="question8"
                                                                id="exampleSelect1">
                                                            <option>Married</option>
                                                            <option>Single</option>
                                                            <option>Divorced</option>
                                                            <option>Widowed</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>

                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label">Country Of Residence</label>
                                                    <select class="form-control" name="question9"
                                                            id="exampleSelectGender">
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia, Plurinational State of</option>
                                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="BN">Brunei Darussalam</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo</option>
                                                        <option value="CD">Congo, the Democratic Republic of the
                                                        </option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">Côte d'Ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Curaçao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="VA">Holy See (Vatican City State)</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran, Islamic Republic of</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KP">Korea, Democratic People's Republic of
                                                        </option>
                                                        <option value="KR">Korea, Republic of</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Lao People's Democratic Republic</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
                                                        <option value="MK">Macedonia, the former Yugoslav Republic of
                                                        </option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia, Federated States of</option>
                                                        <option value="MD">Moldova, Republic of</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PS">Palestinian Territory, Occupied</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Réunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russian Federation</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena, Ascension and Tristan da
                                                            Cunha
                                                        </option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">Sao Tome and Principe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia and the South Sandwich
                                                            Islands
                                                        </option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syrian Arab Republic</option>
                                                        <option value="TW">Taiwan, Province of China</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania, United Republic of</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US">United States</option>
                                                        <option value="UM">United States Minor Outlying Islands</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                        <option value="VN">Viet Nam</option>
                                                        <option value="VG">Virgin Islands, British</option>
                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Residential Address</label>
                                                    <input type="text" class="form-control" name="question10"
                                                           placeholder="Enter residential address">
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Email Address</label>
                                                    <input type="text" class="form-control" name="question11"
                                                           placeholder="Enter email address">
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">WhatsApp Number</label>
                                                    <input type="text" class="form-control" name="question12"
                                                           placeholder="Enter whatsapp number">
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Profession</label>
                                                    <input type="text" class="form-control" name="question13"
                                                           placeholder="Enter profession">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">What Work Are You Doing Currently?</label>
                                                    <input type="text" class="form-control" name="question14"
                                                           placeholder="Enter current work">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Name Of Father</label>
                                                    <input type="text" class="form-control" name="question15"
                                                           placeholder="Enter name of your father">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Name Of Mother</label>
                                                    <input type="text" class="form-control" name="question16"
                                                           placeholder="Enter name of your mother">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Name Of Guardian</label>
                                                    <input type="text" class="form-control" name="question17"
                                                           placeholder="Enter name of your guardian">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Profession Of Father</label>
                                                    <input type="text" class="form-control" name="question18"
                                                           placeholder="Enter profession of your father">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Profession Of Mother</label>
                                                    <input type="text" class="form-control" name="question19"
                                                           placeholder="Enter profession of your mother">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Profession Of Guardian</label>
                                                    <input type="text" class="form-control" name="question20"
                                                           placeholder="Enter profession of your guardian">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Where Do You Live?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocity1" name="question21"
                                                               value="City" class="custom-control-input">
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
                                                <div class="form-group">
                                                    <label class="control-label">Do Your Parents/Guardian Own A
                                                        House?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioownhouse1" name="question22"
                                                               value="Yes" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioownhouse1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioownhouse1" name="question22"
                                                               value="No" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioownhouse1">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Are Your Parents/Guardian Renting A
                                                        House?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiorent1" name="question23"
                                                               value="Yes" class="custom-control-input">
                                                        <label class="custom-control-label" for="radiorent1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiorent1" name="question23" value="No"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiorent1">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Do Your Parents/Guardian Own A
                                                        Car?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocar1" name="question24" value="Yes"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiocar1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiocar1" name="question24" value="No"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiocar1">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Do Your Parents/Guardian Own A
                                                        Business?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiobusiness1" name="question25"
                                                               value="Yes" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radiobusiness1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiobusiness1" name="question25"
                                                               value="No" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radiobusiness1">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Name Of Sponsor</label>
                                                    <input type="text" class="form-control" name="question26"
                                                           placeholder="Enter sponsor name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Sponsor Phone Number</label>
                                                    <input type="number" class="form-control" name="question27"
                                                           placeholder="Enter sponsor phone number">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Next Of Kin</label>
                                                    <input type="text" class="form-control" name="question28"
                                                           placeholder="Enter next of kin">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Next Of Kin Contact Number</label>
                                                    <input type="number" class="form-control" name="question29"
                                                           placeholder="Enter next of kin contact number">
                                                </div>
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

                                            </section>
                                            <h3>CHURCH</h3>
                                            <section class="overflow-auto">
                                                <h3>Church</h3>
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


                                                <div class="form-group">
                                                    <label>Which Church Do You Fellowship With?</label>
                                                    <input type="text" class="form-control" name="question34"
                                                           aria-describedby="emailHelp" placeholder="Enter church name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Which Role Do You Play In Your Church?</label>
                                                    <input type="text" class="form-control" name="question35"
                                                           placeholder="Enter church role">
                                                </div>
                                                <div class="form-group">
                                                    <label>If You Are A Pastor, Please Indicate How Long You Have Been
                                                        Pastoring?</label>
                                                    <input type="text" class="form-control" name="question36"
                                                           placeholder="Enter how long you have been pastoring">
                                                </div>
                                            </section>
                                            <h3>CALLING</h3>
                                            <section class="overflow-auto">
                                                <h3>Assessment Of Calling</h3>
                                                <label for="exampleTextarea1">Why Do You Want To Come To The Bible
                                                    School?</label>
                                                <textarea class="form-control" id="exampleTextarea1" name="question37"
                                                          rows="3"></textarea>
                                                <br>

                                                <label for="exampleTextarea1">Do You Have A Calling From God?</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiocalling1" name="question38" value="Yes"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiocalling1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiocalling2" name="question38" value="No"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiocalling2">No</label>
                                                </div>

                                                <label class="control-label">If Yes, Please Expain</label>

                                                <textarea class="form-control" name="question39" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>
                                            </section>

                                            <h3>SOCIAL AND PAST</h3>
                                            <section class="overflow-auto">
                                                <h3>Social And Past History Background</h3>
                                                <label for="exampleTextarea1">Do You Use Narcortic Drugs (Cocaine,
                                                    Heroin, Marijuana etc)</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radionardrugs1" name="question40"
                                                           value="Yes" class="custom-control-input">
                                                    <label class="custom-control-label" for="radionardrugs1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radionardrugs2" name="question40" value="No"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radionardrugs2">No</label>
                                                </div>

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question41" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                                <br>

                                                <label for="exampleTextarea1">Have You Ever Used Narcortic Drugs In The
                                                    Past?</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radionardrugspast1" name="question42"
                                                           value="Yes" class="custom-control-input">
                                                    <label class="custom-control-label" for="radionardrugspast1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radionardrugspast2" name="question42"
                                                           value="No" class="custom-control-input">
                                                    <label class="custom-control-label" for="radionardrugspast2">No</label>
                                                </div>

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" id="exampleTextarea1" name="question43"
                                                          rows="3">

                                             </textarea>

                                                <br>

                                                <label for="exampleTextarea1">Have You Been Arrested By The Police
                                                    Before</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioarrest1" name="question44" value="Yes"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radioarrest1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <label class="custom-control-label" for="radionarrest2">No</label>
                                                    <input type="radio" id="radionarrest2" name="question44" value="No"
                                                           class="custom-control-input">
                                                </div>

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question45" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                                <br>

                                                <label for="exampleTextarea1">Have You Been Prosecuted In Court
                                                    Before?</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioprose1" name="question46" value="Yes"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radioprose1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioprose2" name="question46" value="No"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radioprose2">No</label>
                                                </div>

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question47" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                                <br>

                                                <label for="exampleTextarea1">Have You Been To Jail Before?</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiojail1" name="question48" value="Yes"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiojail1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiojail2" name="question48" value="No"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiojail2">No</label>
                                                </div>

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question49" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                                <br>

                                                <label for="exampleTextarea1">Have You Taken Alcholic Drinks In The
                                                    Past?</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioalcholic1" name="question50"
                                                           value="Yes" class="custom-control-input">
                                                    <label class="custom-control-label" for="radioalcholic1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radioalcholic2" name="question50" value="No"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radioalcholic2">No</label>
                                                </div>

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question51" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

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
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiorob1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiorob2" name="question56" value="No"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiorob2">No</label>
                                                </div>

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question57" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                                <br>

                                                <label for="exampleTextarea1">Revolution/Rebel</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiorev1" name="question58" value="Yes"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiorev1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiorev2" name="question58" value="No"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiorev2">No</label>
                                                </div>

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question59" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                                <br>

                                                <label for="exampleTextarea1">Prostitution</label>

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiopros1" name="question60" value="Yes"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiopros1">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radiopros2" name="question60" value="No"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="radiopros2">No</label>
                                                </div>

                                                <label class="control-label">If Yes, Please Explain</label>

                                                <textarea class="form-control" name="question61" id="exampleTextarea1"
                                                          rows="3">

                                             </textarea>

                                            </section>
                                            <h3>HEALTH STATUS</h3>
                                            <section class="overflow-auto">
                                                <h3>Medical History</h3>

                                                <label class="control-label">Tick Which Of The Following Diseases You
                                                    Have Been Treated For In The Past;</label>

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
                                                               id="checkbox-p-2none">
                                                        <label for="checkbox-p-2none" class="cr">None</label>
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
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiosug1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiosug2" name="question66" value="No"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiosug2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>If Yes, Please Specify</label>
                                                    <input type="text" class="form-control" name="question67"
                                                           placeholder="">
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
                                            </section>
                                            <h3>CRIMINAL HISTORY</h3>
                                            <section class="overflow-auto">
                                                <div class="form-group">
                                                    <label class="control-label">Have You Had Any Problems With The
                                                        Law?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiolaw1" name="question69" value="Yes"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiolaw1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiolaw2" name="question69" value="No"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiolaw2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>If Yes, Please Specify</label>
                                                    <input type="text" class="form-control" name="question70"
                                                           placeholder="">
                                                </div>
                                            </section>
                                            <h3>NATIONALITY</h3>
                                            <section class="overflow-auto">
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
                                            </section>
                                            <h3>RECOMMENDED BY</h3>
                                            <section class="overflow-auto">

                                                <div class="form-group">

                                                    <label for="example-select">I Am Recommended By</label>
                                                    <select class="form-control" name="question71" id="example-select">
                                                        <option>My Local Church Pastor</option>
                                                        <option>General Overseer</option>
                                                        <option>Senior Associate</option>
                                                        <option>Pastor</option>
                                                        <option>Bishop</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>If You Selected Other, Please Specify</label>
                                                    <input type="text" name="question72" class="form-control"
                                                           placeholder="">
                                                </div>
                                            </section>

                                            <h3>FINISH</h3>
                                            <section class="overflow-auto">
                                                <h3>Finish</h3>
                                                <div class="form-check">
                                                    <label class="ckbox">
                                                        <input type="checkbox">
                                                        <span></span>
                                                        <span class="text-dark submit-text"> I <div class="form-group">
                                                        
                                                        <input type="text" name="question73" class="form-control"
                                                               placeholder="">
                                                    </div> certify that the information given above is true and correct to the best of my knowledge.</span>
                                                        <br>
                                                        <br>

                                                        <div class="form-group">
                                                            <label>Date</label>
                                                            <input type="text" name="question74" class="form-control"
                                                                   placeholder="">
                                                        </div>
                                                    </label>
                                                </div>
                                            </section>
                                        </div>
                                    </form>
                                </div>
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

</body>

</html>
