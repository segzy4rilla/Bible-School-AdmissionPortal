<?php
session_start();
$nations_inschool = ["Angolan",
    "Beninese",
    "Motswana",
    "Ivorian",
    "Congolese",
    "Ghanaian",
    "Haitian",
    "Kenyan",
    "Liberian",
    "Malagasy",
    "Malawian",
    "Malian",
    "Namibian",
    "Nigerien",
    "Papua New Guinean",
    "Sierra Leonean",
    "South African",
    "Tanzanian",
    "Ugandan",
    "British",
    "Zambian"];

$admitted_nations = [];

$nations = ["Afghan",
    "Albanian",
    "Algerian",
    "American",
    "Andorran",
    "Angolan",
    "Antiguans",
    "Argentinean",
    "Armenian",
    "Australian",
    "Austrian",
    "Azerbaijani",
    "Bahamian",
    "Bahraini",
    "Bangladeshi",
    "Barbadian",
    "Barbudans",
    "Batswana",
    "Belarusian",
    "Belgian",
    "Belizean",
    "Beninese",
    "Bhutanese",
    "Bolivian",
    "Bosnian",
    "Brazilian",
    "British",
    "Bruneian",
    "Bulgarian",
    "Burkinabe",
    "Burmese",
    "Burundian",
    "Cambodian",
    "Cameroonian",
    "Canadian",
    "Cape Verdean",
    "Central African",
    "Chadian",
    "Chilean",
    "Chinese",
    "Colombian",
    "Comoran",
    "Congolese",
    "Costa Rican",
    "Croatian",
    "Cuban",
    "Cypriot",
    "Czech",
    "Danish",
    "Djibouti",
    "Dominican",
    "Dutch",
    "East Timorese",
    "Ecuadorean",
    "Egyptian",
    "Emirian",
    "Equatorial Guinean",
    "Eritrean",
    "Estonian",
    "Ethiopian",
    "Fijian",
    "Filipino",
    "Finnish",
    "French",
    "Gabonese",
    "Gambian",
    "Georgian",
    "German",
    "Ghanaian",
    "Greek",
    "Grenadian",
    "Guatemalan",
    "Guinea-Bissauan",
    "Guinean",
    "Guyanese",
    "Haitian",
    "Herzegovinian",
    "Honduran",
    "Hungarian",
    "Icelander",
    "Indian",
    "Indonesian",
    "Iranian",
    "Iraqi",
    "Irish",
    "Israeli",
    "Italian",
    "Ivorian",
    "Jamaican",
    "Japanese",
    "Jordanian",
    "Kazakhstani",
    "Kenyan",
    "Kittian and Nevisian",
    "Kuwaiti",
    "Kyrgyz",
    "Laotian",
    "Latvian",
    "Lebanese",
    "Liberian",
    "Libyan",
    "Liechtensteiner",
    "Lithuanian",
    "Luxembourger",
    "Macedonian",
    "Malagasy",
    "Malawian",
    "Malaysian",
    "Maldivan",
    "Malian",
    "Maltese",
    "Marshallese",
    "Mauritanian",
    "Mauritian",
    "Mexican",
    "Micronesian",
    "Moldovan",
    "Monacan",
    "Mongolian",
    "Moroccan",
    "Mosotho",
    "Motswana",
    "Mozambican",
    "Namibian",
    "Nauruan",
    "Nepalese",
    "New Zealander",
    "Ni-Vanuatu",
    "Nicaraguan",
    "Nigerien",
    "North Korean",
    "Northern Irish",
    "Norwegian",
    "Omani",
    "Pakistani",
    "Palauan",
    "Panamanian",
    "Papua New Guinean",
    "Paraguayan",
    "Peruvian",
    "Polish",
    "Portuguese",
    "Qatari",
    "Romanian",
    "Russian",
    "Rwandan",
    "Saint Lucian",
    "Salvadoran",
    "Samoan",
    "San Marinese",
    "Sao Tomean",
    "Saudi",
    "Scottish",
    "Senegalese",
    "Serbian",
    "Seychellois",
    "Sierra Leonean",
    "Singaporean",
    "Slovakian",
    "Slovenian",
    "Solomon Islander",
    "Somali",
    "South African",
    "South Korean",
    "Spanish",
    "Sri Lankan",
    "Sudanese",
    "Surinamer",
    "Swazi",
    "Swedish",
    "Swiss",
    "Syrian",
    "Taiwanese",
    "Tajik",
    "Tanzanian",
    "Thai",
    "Togolese",
    "Tongan",
    "Trinidadian or Tobagonian",
    "Tunisian",
    "Turkish",
    "Tuvaluan",
    "Ugandan",
    "Ukrainian",
    "Uruguayan",
    "Uzbekistani",
    "Venezuelan",
    "Vietnamese",
    "Welsh",
    "Yemenite",
    "Zambian",
    "Zimbabwean"];
if ($_SESSION['loggedin'] == false || $_SESSION['isStaffAdmin'] == false) {
    header('Location: loginabmtc.html');
}

require("dbconfig/config.php");
require("PHP_Files/getAdminHomeLink.php");

$query = "select * from Applicant_Table";
$result = $con->query($query);

$nationSummary = $con->query("SELECT A.Nationality, Total, Admitted FROM (SELECT COUNT(Nationality) Total, Nationality FROM Applicant_Table GROUP BY Nationality) A JOIN (SELECT COUNT(Nationality) Admitted, Nationality FROM Applicant_Table AS X JOIN ZoomInterview AS Y ON X.User_ID = Y.ID WHERE Admitted = 'Admitted' GROUP BY Nationality) B ON A.Nationality = B.Nationality");

while ($row = $nationSummary->fetch_assoc()) {
    array_push($admitted_nations, $row['Nationality']);
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
    <title>ABMTC 190 Nations Summary Table</title>

    <!-- Favicon -->
    <link rel="icon" href="ABTMC.png" s-resize>

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/select.bootstrap4.css">

    <!-- Master  [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="style.css">

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

<!-- Page Content -->
<div class="ecaps-page-content">
    <!-- Top Header Area -->
    <header class="top-header-area d-flex align-items-center justify-content-between">

        <div class="left-side-content-area d-flex align-items-center">
            <div class="ecaps-logo" style="width:75px">
                <?php echo "<a href='" . GetAdminHomeLink() . "'>"; ?>
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
                <?php echo "<a href='" . GetAdminHomeLink() . "'><img src='ABTMC.png' alt='Mobile Logo'></a>"; ?>
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
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">190 Nations Summary Table</h4>

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>Name Of Nation</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php
                                    for ($i = 0; $i < sizeof($nations); $i++) {
                                        echo "<tr>";
                                        echo "<td>" . $i . "</td>";
                                        echo "<td>" . $nations[$i] . "</td>";
                                        if (in_array($nations[$i], $nations_inschool))
                                            echo "<td style='background-color: green'>" . "" . "</td>";
                                        else if (in_array(strtolower($nations[$i]), $admitted_nations)) {
                                            echo "<td style='background-color: yellow'>" . "" . "</td>";
                                        } else {
                                            echo "<td>" . "" . "</td>";

                                        }
                                        echo "</tr>";
                                    }
                                    $count = 0;

                                    ?>


                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->


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
                            <p>Created by <a href="#">ABMTC</a></p>
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

</body>

</html>