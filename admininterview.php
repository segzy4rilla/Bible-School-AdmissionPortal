<?php

	session_start();

	if ($_SESSION['loggedin'] == false || !$_SESSION['isAdmin']) {
		header('Location: loginabmtc.html');
	}

	require("dbconfig/config.php");
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$query = $conn->prepare("SELECT * FROM Interview_Form WHERE User_ID = "."'".$_GET['code']."'");
	$query->execute();
	$interview = $query->fetch();
	$query = $conn->prepare("SELECT * FROM Applicant_Table WHERE User_ID = "."'".$_GET['code']."'");
	$query->execute();
	$userInfo = $query->fetch();
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
    <title>ABMTC - Admin Interview</title>

    <!-- Favicon -->
    <link rel="icon" href="ABTMC.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/select.bootstrap4.css">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
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
<div class="ecaps-page-wrapper">

    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        <header class="top-header-area d-flex align-items-center justify-content-between">

            <div class="left-side-content-area d-flex align-items-center">
                <div class="ecaps-logo" style="width:75px">
                    <a href="summarytable.php">
                        <img class="desktop-logo" style="min-height:70px; min-width:70px; margin:0px 10px 0px 0px"
                             src="ABTMC.png" alt="Desktop Logo">
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
                                    <h4 class="card-title mb-2">Applicant Results</h4>
                                    <p class="text-muted font-13 mb-4">
                                        Table description of interview here
                                    </p>

                                    <table id="scroll-horizontal-datatable" class="table w-100 nowrap table-striped ">
                                        <thead>
											<th>Applicant Name</th>
											<th>Are you a born again Christian?</th>
											<th>What does it mean to be a born again Christian?</th>
											<th>When were you born again?</th>
											<th>How long have you been in church for?</th>
											<th>What does it mean to be a new creature in Christ?</th>
											<th>Which of your old habits have passed away?</th>
											<th>Which of your old habits have passed away? (Other)</th>
											<th>When Did You Stop Your Old Habits?</th>
											<th>When Did You Stop Your Old Habits? (Other)</th>
											<th>Is your pastor aware of the problem you have? (If you have a problem)</th>
											<th>Comment</th>
											<th>What is your role in the church?</th>
											<th>What is your role in the church? (Other)</th>
											<th>Select John 3:16</th>
											<th>Select Genesis 1:1</th>
											<th>Explain why you want to come to the Bible School</th>
                                        </thead>
                                        <tbody>
											<tr>
												<?php
													echo "<td>".$userInfo['First_Name']." ".$userInfo['Last_Name']."</td>";
													echo "<td>".$interview['Are_You_Born_Again']."</td>";
													echo "<td>".$interview['What_Does_It_Mean']."</td>";
													echo "<td>".$interview['When_were_you']."</td>";
													echo "<td>".$interview['How_long_have_you']."</td>";
													echo "<td>".$interview['New_Creature_Meaning']."</td>";
													echo "<td>".$interview['Old_Habits']."</td>";
													echo "<td>".$interview['Old_Habits_Other']."</td>";
													echo "<td>".$interview['Stop_Old_Habits']."</td>";
													echo "<td>".$interview['Stop_Old_Habits_Other']."</td>";
													echo "<td>".$interview['Is_Pastor_Aware']."</td>";
													echo "<td>".$interview['Comment']."</td>";
													echo "<td>".$interview['Role_In_Church']."</td>";
													echo "<td>".$interview['Other_Role_In_Church']."</td>";
													echo "<td>".$interview['John_3_16']."</td>";
													echo "<td>".$interview['Genesis_1_1']."</td>";
													echo "<td>".$interview['Why_Bible_School']."</td>";
												?>
											</tr>
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