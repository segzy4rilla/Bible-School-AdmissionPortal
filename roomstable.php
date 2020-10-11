<?php
session_start();

if ($_SESSION['loggedin'] == false || ($_SESSION['IsMedicalAdmin'] == false && !$_SESSION['isAdmin'] && !$_SESSION['IsAmbassador'])) {
    header('Location: loginabmtc.html');
}

require("dbconfig/config.php");
require("PHP_Files/getAdminHomeLink.php");

$query = "SELECT A.First_Name, A.Last_Name, C.Nationality, B.Check_RoomNumber,
			B.Check_IssuesInTheRoom, B.Check_IssuesInTheRoomDescription, 
			B.Check_IssuesInTheRoomSolved
			FROM Application_Form AS A
			JOIN AdmittedStudents AS B
			ON A.User_ID = B.User_ID
			JOIN Applicant_Table AS C
			ON A.User_ID = C.User_ID
			WHERE C.Nationality <> 'ghanaian'";
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
    <title>Room Comments Table</title>

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
                    <?php echo "<a href='".GetAdminHomeLink()."'>";?>
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
                    <?php echo "<a href='".GetAdminHomeLink()."'>";?><img src="ABTMC.png" alt="Mobile Logo"></a>
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
                                        <h4 class="card-title mb-2">Room Comments Table</h4>
                                        <p class="text-muted font-13 mb-4">
                                            Results of completed room comments
                                        </p>

                                        <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Room Number</th>
                                                    <th>Any Issues With The Room?</th>
                                                    <th>Describe Room Issue</th>
                                                    <th>Have The Issues In The Room Been Solved?</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
													while ($row = $result->fetch_assoc()) {
														echo "<tr>";
															echo "<td>" . $row['First_Name'] . " " . $row['Last_Name'] . "</td>";
															echo "<td>" . $row['Check_RoomNumber'] . "</td>";
															echo "<td>" . $row['Check_IssuesInTheRoom'] . "</td>";
															echo "<td>" . $row['Check_IssuesInTheRoomDescription'] . "</td>";
															echo "<td>" . $row['Check_IssuesInTheRoomSolved'] . "</td>";
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