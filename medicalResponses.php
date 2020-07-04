<?php
session_start();

if ($_SESSION['loggedin'] == false || $_SESSION['IsMedicalAdmin'] == true || $_SESSION['isStaffAdmin'] == false) {
    header('Location: loginabmtc.html');
}

require("dbconfig/config.php");

$query = "select * from Applicant_Table";
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
    <title>ABMTC Medical Admin Responses</title>

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
<div class="ecaps-page-wrapper">
    <!-- Sidemenu Area -->
    <div
    ">
        <!-- Desktop Logo -->
        <div class="ecaps-logo">
            <a href="admindash2.php">
                <img class="desktop-logo" style="min-height:70px; min-width:70px; margin:0px 10px 0px 0px" src="ABTMC.png" alt="Desktop Logo">
                <img class="small-logo" src="ABTMC.png" alt="Mobile Logo">
            </a>
        </div>


    </div>

    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        <header class="top-header-area d-flex align-items-center justify-content-between">

            <div class="left-side-content-area d-flex align-items-center">
                <div class="ecaps-logo" style="width:75px">
                    <a href="admindash2.php">
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

                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                <!-- Mobile Logo -->
                <div class="mobile-logo mr-3 mr-sm-4">
                    <a href="admindash2.php"><img src="ABTMC.png" alt="Mobile Logo"></a>
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
                                    <h4 class="card-title mb-2">Medical Documents Review</h4>

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
											<tr>
												<th>Index</th>
												<th>Applicants Name</th>
												<th>Nationality</th>
												<?php
													$query = "SELECT DISTINCT AdminUsername FROM MedicalDocResponse";
													$result2 = $con->query($query);
													$x = 1;
													$usernames = array();
													while ($row = $result2->fetch_assoc()) {
														$usernames[] = $row['AdminUsername'];
														echo '<th>'.$row['AdminUsername'].' Responses</th>';
														$x += 1;
													}
												?>
											</tr>
                                        </thead>
                                        <tbody>
											<?php
												$count = 0;
												$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
												while ($row = $result->fetch_assoc()) {
													
													$emailWhatsApp = $row['EmailWhatsapp'];
													$emailWhatsAppWithQuotes = "'".$emailWhatsApp."'";
													
													$responseCheck = $conn->prepare('SELECT * FROM MedicalDocResponse WHERE EmailWhatsapp = ' . $emailWhatsAppWithQuotes);
													$reponseCheckCall = $responseCheck->execute();
													if($reponseCheckCall){
														$responsesForCheck = $responseCheck->fetchAll();
													}
													
													if($responsesForCheck){
														
														echo "<tr>";
														echo "<td>" . ++$count . "</td>";
														echo "<td>" . $row['First_Name'] . " " . $row['Last_Name'] . "</td>";
														echo "<td>" . $row['Nationality'] . "</td>";
														
														for ($y = 0; $y < count($usernames); ++$y){
															
															$adminUsername = $usernames[$y];
															$adminUsernameWithQuotes = "'".$adminUsername."'";															
													
															$getResponses = $conn->prepare('SELECT * FROM MedicalDocResponse WHERE EmailWhatsapp = ' . $emailWhatsAppWithQuotes .' AND AdminUsername = '.$adminUsernameWithQuotes);
															$reponseCall = $getResponses->execute();
															
															$tdAdded = false;
															if($reponseCall){
																$response = $getResponses->fetchAll();
																if($response){
																	$conditionalNewLine = "";
																	if($response[0][2] != "Accept" && !empty($response[0][2])){
																		$conditionalNewLine = ":<br>";
																	}
																	echo "<td>".$response[0][2].$conditionalNewLine.$response[0][3]."</td>";
																	$tdAdded = true;
																}
															}
															
															if(!$tdAdded){
																echo "<td></td>";
															}
														}
														echo "</tr>";
													}
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