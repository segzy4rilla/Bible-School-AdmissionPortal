<?php

	session_start();

	if ($_SESSION['loggedin'] == false || $_SESSION['isAdmin'] == false) {
		header('Location: loginabmtc.html');
	}

	require("dbconfig/config.php");
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$query = $conn->prepare("SELECT * FROM Documemt_Upload WHERE EmailWhatsapp = "."'".$_GET['emailWhatsApp']."'");
	$query->execute();
	$uploads = $query->fetch();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Document Response Admin</title>

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
    <!-- Sidemenu Area -->
    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        <header class="top-header-area d-flex align-items-center justify-content-between">

            <div class="left-side-content-area d-flex align-items-center">
                <div class="ecaps-logo" style="width:75px">
                    <a href="summarytable.php">
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

        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin height-card">
                        <div class="card">
                            <div class="card-body" style="margin-left: 0.9%">
								<h1>Document Uploads</h1>
								<div style="margin-left: 1%; margin-right: 1%">
									<br/>
									<div>
										<div>
											<h3>Education Certficate</h3>
											<label>Education Certficate (Highest Level)</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath1']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment1']."</textarea>";
											}
										?>
									</div>
									
									<div>
										<div>
											<h3>Medical Report</h3>
										</div>
										<div>
											<label>Full Blood Count Lab Test Report</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath2']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment2']."</textarea>";
											}
										?>
										<div>
											<label>Urine Routine Examination Lab Test Report</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath3']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment3']."</textarea>";
											}
										?>
										<div>
											<label>Stool Routine Examination Lab Test Report</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath4']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment4']."</textarea>";
											}
										?>
										<div>
											<label>Sickling Test Lab Test Report</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath5']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment5']."</textarea>";
											}
										?>
										<div>
											<label>HIV Test Lab Test Report</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath6']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment6']."</textarea>";
											}
										?>
										<div>
											<label>Picture Of Chest X-Ray</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath7']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment7']."</textarea>";
											}
										?>
										<div>
											<label>Official Chest X-Ray Report</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath8']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment8']."</textarea>";
											}
										?>
										<div>
											<label>Mental Health Assessment</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath9']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment9']."</textarea>";
											}
										?>
										<div>
											<label>Bible School Medical Assessment Form</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath10']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment10']."</textarea>";
											}
										?>
									</div>
									
									<div>
										<div>
											<h3>Recommendation</h3>
											<label>Letter Of Recommendation From Pastor</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath11']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment11']."</textarea>";
											}
										?>
									</div>
									
									<div>
										<div>
											<h3>Police Report</h3>
											<label>Police Report (International Students Only)</label>
										</div>
										<?php
											$path = trim($uploads['DocFilepath12']);
											if(!empty($path)){
												$path = str_replace('../../', '../', $path);
												echo "<embed src='".$path."' width='90%' height='1000em'/>";
											}
											else{
												echo "<textarea type='text' class='form-control' readonly>".$uploads['DocComment12']."</textarea>";
											}
										?>
									</div>
									
									<br/>
									<br/>
									<form id="responseForm" name="responseForm" action="PHP_Files/docResponse.php" method="post">
										<h1>Admin Response</h1>
										<select id="response" name="response" class="form-control">
											<option value="" disabled selected/>Choose Response</option>
											<option value="Accept"/>Accept</option>
											<option value="Retake"/>Retake</option>
											<option value="Reject"/>Reject</option>
										</select>
										<br/>
										<div id="rejectReason" hidden>
											<br/>
											<h4>Provide Reason For Rejection</h4>
											<textarea type="text" name="rejectReason" class="form-control"></textarea>
											<br/>
										</div>
										<?php
											echo '<input id="eID" name="eID" value="'.$_GET['emailWhatsApp'].'" hidden/>';
										?>
										<br/>
										<button type="submit" class="file-upload-browse btn btn-primary" style="float: right">Submit</button>
									</form>
								</div>
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
<script src="js/jquery.steps.min.js"></script>
<script src="js/jquery.form-validator.min.js"></script>
<script src="js/documentUpload.js"></script>
<script src="js/default-assets/file-upload.js"></script>

<script src="js/default-assets/modal-classes.js"></script>
<script src="js/default-assets/modaleffects.js"></script>


<script src="js/default-assets/basic-form.js"></script>

<script>
	$(document).ready(setTrigger);
	function setTrigger(){
		$("#response").change(showHide);
		function showHide(){
			if($("#response").val() == "Reject" || $("#response").val() == "Retake"){
				$("#rejectReason").prop("hidden", false);
			}
			else{
				$("#rejectReason").prop("hidden", true);
			}
		}
	}
</script>

</body>

</html>