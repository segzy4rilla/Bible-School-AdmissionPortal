<?php
session_start();

if ($_SESSION['loggedin'] == false || ($_SESSION['IsMedicalAdmin'] == false && !$_SESSION['isAdmin'])) {
    header('Location: loginabmtc.html');
}

require("dbconfig/config.php");
require("PHP_Files/getAdminHomeLink.php");

$query = "select First_Name, Last_Name, Nationality,EmailWhatsapp, Reg_Denomination,Loc_Means_Of_Payment,Loc_Reference,Int_Means_Of_Payment,Int_Reference,Loc_AdminFeePaymentDate, Loc_AdminFeeProofFilepath, Loc_ConfirmationLetterFilepath, Int_AdminFeePaymentDate, Int_AdminFeeProofFilepath, Int_ConfirmationLetterFilepath, Loc_PaymentType, Loc_AmountPaid, Int_PaymentType, Int_AmountPaid FROM AdmittedStudents A JOIN Applicant_Table B ON A.User_ID = B.User_ID";
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
                                        <th style="font-size: 10px;">Type of Payment</th>
                                        <th style="font-size: 10px;">Means of Payment</th>
                                        <th style="font-size: 10px;">Reference</th>
                                        <th style="font-size: 10px;">Amount Paid</th>
                                        <th style="font-size: 10px;">Email Address</th>
                                        <th style="font-size: 10px;">Proof Of Payment</th>
                                        <th style="font-size: 10px;">Date Of Full Payment</th>
                                        <th style="font-size: 10px;">Denomination</th>
                                        <th style="font-size: 10px;">Vouch Letter</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row['First_Name'] . " " . $row['Last_Name'] . "</td>";
                                        echo "<td>" . $row['Nationality'] . "</td>";
                                        if ($row['Nationality'] == "ghanaian") {
                                            $x = "Incomplete";
                                            $y = "Incomplete";
                                            if ($row['Loc_AdminFeeProofFilepath']) {
                                                $x = "Complete";
                                            }
                                            if ($row['Loc_ConfirmationLetterFilepath']) {
                                                $y = "Complete";
                                            }
                                            echo "<td>" . $row['Loc_PaymentType'] . "</td>";
                                            echo "<td>" . $row['Loc_Means_Of_Payment'] . "</td>";
                                            echo "<td>" . $row['Loc_Reference'] . "</td>";
                                            echo "<td>" . $row['Loc_AmountPaid'] . "</td>";
                                            echo "<td>" . $row['EmailWhatsapp'] . "</td>";
                                            echo "<td><a href='" . $row['Loc_AdminFeeProofFilepath'] . "'>" . $x . "</a></td>";
                                            echo "<td>" . $row['Loc_AdminFeePaymentDate'] . "</td>";
                                            echo "<td>" . $row['Reg_Denomination'] . "</td>";
                                            echo "<td><a href='" . $row['Loc_ConfirmationLetterFilepath'] . "'>" . $y . "</a></td>";
                                        } else {
                                            $x = "Incomplete";
                                            $y = "Incomplete";
                                            if ($row['Int_AdminFeeProofFilepath']) {
                                                $x = "Complete";
                                            }
                                            if ($row['Int_ConfirmationLetterFilepath']) {
                                                $y = "Complete";
                                            }
                                            echo "<td>" . $row['Int_PaymentType'] . "</td>";
                                            echo "<td>" . $row['Int_Means_Of_Payment'] . "</td>";
                                            echo "<td>" . $row['Int_Reference'] . "</td>";
                                            echo "<td>" . $row['Int_AmountPaid'] . "</td>";
                                            echo "<td>" . $row['EmailWhatsapp'] . "</td>";
                                            echo "<td><a href='" . $row['Int_AdminFeeProofFilepath'] . "'>" . $x . "</a></td>";
                                            echo "<td>" . $row['Int_AdminFeePaymentDate'] . "</td>";
                                            echo "<td>" . $row['Reg_Denomination'] . "</td>";
                                            echo "<td><a href='" . $row['Int_ConfirmationLetterFilepath'] . "'>" . $y . "</a></td>";
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

</body>

</html>