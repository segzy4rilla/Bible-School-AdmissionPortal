<?php
session_start();

if ($_SESSION['loggedin'] == false || $_SESSION['isStaffAdmin'] == false) {
    header('Location: loginabmtc.html');
}

require("dbconfig/config.php");
require("PHP_Files/getAdminHomeLink.php");

$query = "SELECT * FROM Applicant_Table as A
			JOIN ZoomInterview AS Z
			ON A.User_ID = Z.ID
			LEFT JOIN AdmittedStudents AS X
			ON A.User_ID = X.User_ID
			WHERE Z.Admitted = 'Admitted'";
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
    <title>ABMTC Admitted Students</title>

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
                    <?php echo "<a href='".GetAdminHomeLink()."'><img src='ABTMC.png' alt='Mobile Logo'></a>";?>
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
                                    <h4 class="card-title mb-2">Admitted Students</h4>

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>Applicants Name</th>
                                            <th>Nationality</th>
											<th>Member of UD-OLGC Church</th>
                                            <th>Applicants Form</th>
                                            <th>Interview Test</th>
                                            <th>Uploaded Documents</th>
                                            <th>Type Of Payment</th>

                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php
                                        $count = 0;
                                        while ($row = $result->fetch_assoc()) {
											$payment = "";
											if($row['Nationality'] == 'ghanaian'){
												$payment = $row['Loc_PaymentType'];
											}
											else{
												$payment = $row['Int_PaymentType'];
											}
											if($payment == "" || $payment == "--Select Payment Type--"){
												$payment = "None";
											}
											
                                            echo "<tr>";
                                            echo "<td>" . ++$count . "</td>";
                                            echo "<td>" . $row['First_Name'] . " " . $row['Last_Name'] . "</td>";
                                            echo "<td>" . $row['Nationality'] . "</td>";
											echo "<td>" . $row['Church_Part_Of_UD'] . "</td>";
                                            
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
												echo "<a href='admininterview.php?code=".$row['User_ID']."'>";
													if ($row['Interview_Form_Submitted'] == 1) {
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
											echo "<td>" .$payment. "</td>";
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