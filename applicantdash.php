<?php

include "PHP_Files/dbconfig.php";
session_start();

if (!$_SESSION['loggedin']) {
    header('Location: loginabmtc.html');
}

$int_comp = false;
$app_comp = false;
if ($_SESSION['Interview_Form_Submitted'] == 1) {
    $int_comp = true;
}
if ($_SESSION['Application_Form_Submitted'] == 1) {
    $app_comp = true;
}

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$getApplicantDetails = $conn->prepare("SELECT * FROM Applicant_Table WHERE EmailWhatsapp = '".$_SESSION['EmailWhatsapp']."'");
$getApplicantDetails->execute();
$applicantDetails = $getApplicantDetails->fetch();

$getZoomInterviewInfo = $conn->prepare("SELECT * FROM ZoomInterview WHERE ID = '".$_SESSION['User_Id']."'");
$getZoomInterviewInfo->execute();
$zoomInterviewInfo = $getZoomInterviewInfo->fetch();
?>
<!doctype html>
<html lang="en" style="height:100%">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ABMTC - Home</title>

    <!-- Favicon -->
    <link rel="icon" href="ABTMC.png" s-resize>

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="style.css">
</head>

<body style="height:90%">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-load"></div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->

        <!-- Page Content -->
        <div style="padding-top:70px;height:93% !important">


            <!-- Top Header Area -->
            <header class="top-header-area d-flex align-items-center justify-content-between">

                <div class="left-side-content-area d-flex align-items-center">
					<div class="ecaps-logo" style="width:75px">
                        <a href="applicantdash.php">
							<img class="desktop-logo" style="min-height:70px; min-width:70px; margin:0px 10px 0px 0px" src="ABTMC.png" alt="Desktop Logo">
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
            <div style="height:100%">
                <div class="container-fluid" style="height:100%">
                    <div class="row" style="height:100%">
                        <div class="col-lg-12"  style="height:30%">
                            <?php
                            if ($app_comp) {
                                echo '<a href="#">';
                            } else {
                                echo '<a href="ABMTCApplicationForm.php">';
                            }
                            ?>
                            <div class="card" style="margin-bottom:15px;height:100%">
									<!-- Card body -->
									<div class="card-body">
										<div class="row">
											<div class="col">
                                                <?php
                                                if (!$app_comp) {
                                                    echo "<h5 class='mb-20'>Application Form (Incomplete)</h5>";
                                                } else {
                                                    echo "<h5 class='mb-20'>Application Form (Completed and Submitted)</h5>";
                                                }
                                                ?>
												<span class="text-dark mb-0"></span>
											</div>
											<div class="col-auto">
												<div class="clint-icon bg-gradient-danger text-white rounded-circle icon-shape">
													<i class="fa fa-drivers-license"></i>
												</div>
											</div>

										</div>                                    
									</div>
								</div>
							</a>
                        </div>
                        <div class="col-lg-12"  style="height:30%">
                            <?php
                            if ($int_comp) {
                                echo '<a href="">';
                            } else {
                                echo '<a href="interview.php">';
                            }
                            ?>
								<div class="card" style="margin-bottom:15px;height:100%">
									<!-- Card body -->
									<div class="card-body">
										<div class="row">
											<div class="col">
                                                <?php
                                                if (!$int_comp) {
                                                    echo "<h5 class='mb-20'>Interview Test (Incomplete)</h5>";
                                                } else {
                                                    echo "<h5 class='mb-20'>Interview Test (Completed and Submitted)</h5>";
                                                }
                                                ?>
											</div>
											<div class="col-auto">
												<div class="clint-icon bg-gradient-danger text-white rounded-circle icon-shape">
													<i class="fa fa-file-text"></i>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</a>
                        </div>
                        <div class="col-lg-12"  style="height:30%">
                            <a href="documentupload.php">
								<div class="card" style="margin-bottom:15px;height:100%">
									<!-- Card body -->
									<div class="card-body">
										<div class="row">
											<div class="col">
												<?php
													echo "<h5 class='mb-20'>Document Upload (".$applicantDetails['Document_Uploads_Status'].")</h5>";
												?>
											</div>
											<div class="col-auto">
												<div class="clint-icon bg-gradient-danger text-white rounded-circle icon-shape">
													<i class="fa fa-folder"></i>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</a>
                        </div>
						<div class="col-lg-12"  style="height:30%">
                            <a href="applicantmeeting.php">
								<div class="card" style="margin-bottom:15px;height:100%">
									<!-- Card body -->
									<div class="card-body">
										<div class="row">
											<div class="col">
												<h5 class='mb-20'>Zoom Interview Details</h5>
											</div>
											<div class="col-auto">
												<div class="clint-icon bg-gradient-danger text-white rounded-circle icon-shape">
													<i class="fa fa-folder"></i>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</a>
                        </div>
						<?php
							if($zoomInterviewInfo['Admitted'] == 'Admitted'){
								echo "<div class='col-lg-12'  style='height:30%'>";
								echo "	<a href='admittedstudentsinfo.php'>";
								echo "		<div class='card' style='margin-bottom:15px;height:100%'>";
								echo "			<!-- Card body -->";
								echo "			<div class='card-body'>";
								echo "				<div class='row'>";
								echo "					<div class='col'>";
								echo "						<h5 class='mb-20'>Admitted Students Info</h5>";
								echo "					</div>";
								echo "					<div class='col-auto'>";
								echo "						<div class='clint-icon bg-gradient-danger text-white rounded-circle icon-shape'>";
								echo "							<i class='fa fa-folder'></i>";
								echo "						</div>";
								echo "					</div>";
								echo "				</div>";
								echo "			</div>";
								echo "		</div>";
								echo "	</a>";
								echo "</div>";
							}
						?>
                    </div>
                    

                <!-- Footer Area -->
                <div class="container-fluid" style="position:fixed; bottom:0px; height: 7%; align-content:center">
                    <div class="row">
                        <div class="col-12">
                            <!-- Footer Area -->
                            <footer class="footer-area d-flex align-items-center flex-wrap">
                                <!-- Copywrite Text -->
                                <div class="copywrite-text">
                                    <p>Created by <a href="#">ABMTC</a></p>
                                </div>
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
    <script src="js/default-assets/apexchart.min.js"></script>

</body>

</html>
