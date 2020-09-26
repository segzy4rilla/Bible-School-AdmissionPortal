<?php
session_start();

if ($_SESSION['loggedin'] == false) {
    header('Location: loginabmtc.html');
}

require("dbconfig/config.php");
$query = "SELECT *,
			CASE	
				WHEN B.User_ID IS NULL
				THEN 'No'
				ELSE 'Yes'
			END AS CreatedAccount,
			CASE 
				WHEN A.Nationality = 'ghanaian'
				THEN C.Loc_PaymentType
				ELSE C.Int_PaymentType
			END AS PType
		FROM Nations AS A
		LEFT JOIN Applicant_Table AS B
		ON A.FirstName = B.First_Name
		AND A.LastName = B.Last_Name
        LEFT JOIN AdmittedStudents AS C
        ON B.User_ID = C.User_ID";
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
    <title>190 Nations Table</title>

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
                                <h4 class="card-title mb-2">190 Nations Table</h4>
                                <p class="text-muted font-13 mb-4">
                                    Results of completed 190 nation applications
                                </p>

                                <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                    <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>WhatsApp Number</th>
                                        <th>Email Address</th>
                                        <th>Name Of Church/Denomination</th>
                                        <th>Name Of Pastor</th>
                                        <th>Name Of Bishop</th>
                                        <th>Age</th>
                                        <th>Nationality</th>
                                        <th>Country Of Residence</th>
                                        <th>Education</th>
                                        <th>Role In Church</th>
                                        <th>Number Of Years In Church</th>
                                        <th>Do You Have Parental Consent?</th>
                                        <th>Marital Status</th>
                                        <th>Are You Currently In ABMTC?</th>
                                        <th>Have You Completed ABMTC?</th>
                                        <th>When Do You Want To Come To ABMTC For Training?</th>
                                        <!--<th>Created An ABMTC Account</th>-->
                                        <th>Payment Type</th>
                                        <th>Application Form</th>
                                        <th>Documents</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $count = 0;
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . ++$count . "</td>";
                                        echo "<td>" . $row['FirstName'] . "</td>";
                                        echo "<td>" . $row['LastName'] . "</td>";
                                        echo "<td>" . $row['WhatsAppNumber'] . "</td>";
                                        echo "<td>" . $row['Email'] . "</td>";
                                        echo "<td>" . $row['Denomination'] . "</td>";
                                        echo "<td>" . $row['Pastor'] . "</td>";
                                        echo "<td>" . $row['Bishop'] . "</td>";
                                        echo "<td>" . $row['Age'] . "</td>";
                                        echo "<td>" . $row['Nationality'] . "</td>";
                                        echo "<td>" . $row['CountryOfResidence'] . "</td>";
                                        echo "<td>" . $row['Education'] . "</td>";
                                        echo "<td>" . $row['RoleInChurch'] . "</td>";
                                        echo "<td>" . $row['YearsInChurch'] . "</td>";
                                        echo "<td>" . $row['ParentalConsent'] . "</td>";
                                        echo "<td>" . $row['MaritalStatus'] . "</td>";
                                        echo "<td>" . $row['CurrentlyInABMTC'] . "</td>";
                                        echo "<td>" . $row['CompletedABMTC'] . "</td>";
                                        echo "<td>" . $row['StartDate'] . "</td>";
                                        //echo "<td>" . $row['CreatedAccount'] . "</td>";
                                        echo "<td>" . $row['PType'] . "</td>";
										echo "<td>";
												echo "<a href='adminapplicationform.php?code=".$row['User_ID']."'>";
													if ($row['Application_Form_Submitted'] == 1) {
														echo "Completed";
													} else {
														echo "Incomplete";
													}
												echo "</a>";
											echo "</td>";
											
											echo "<td>";
												echo "<a href='docResults.php?emailWhatsApp=".$row['EmailWhatsapp']."'>";
													echo $row['Document_Uploads_Status'];
												echo "</a>";
											echo "</td>";
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