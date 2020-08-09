<?php
session_start();

if ($_SESSION['loggedin'] == false || $_SESSION['isStaffAdmin'] == false) {
    header('Location: loginabmtc.html');
}

require("dbconfig/config.php");
require("PHP_Files/getAdminHomeLink.php");

$query = $con->query("SELECT * FROM Applicant_Table WHERE Nationality = 'Ghanaian'");
$localTotal = mysqli_num_rows($query);

$query = $con->query("SELECT * FROM Applicant_Table WHERE Nationality <> 'Ghanaian'");
$internationalTotal = mysqli_num_rows($query);

$query = $con->query("SELECT * FROM Applicant_Table as A JOIN ZoomInterview AS Z ON A.User_ID = Z.ID WHERE Z.Admitted = 'Admitted' AND A.Nationality = 'Ghanaian'");
$localAdmitted = mysqli_num_rows($query);

$query = $con->query("SELECT * FROM Applicant_Table as A JOIN ZoomInterview AS Z ON A.User_ID = Z.ID WHERE Z.Admitted = 'Admitted' AND A.Nationality <> 'Ghanaian'");
$internationalAdmitted = mysqli_num_rows($query);

$query = $con->query("SELECT * FROM Applicant_Table WHERE Church_Part_Of_UD = 'Yes'");
$udApplicants = mysqli_num_rows($query);

$query = $con->query("SELECT * FROM Applicant_Table WHERE Church_Part_Of_UD = 'No'");
$nonUDApplicants = mysqli_num_rows($query);

$query = $con->query("SELECT * FROM Applicant_Table WHERE Application_Form_Submitted = 1");
$appCompleted = mysqli_num_rows($query);

$query = $con->query("SELECT * FROM Applicant_Table WHERE Interview_Form_Submitted = 1");
$intCompleted = mysqli_num_rows($query);

$query = $con->query("SELECT * FROM Applicant_Table WHERE Document_Uploads_Status = 'Complete'");
$docCompleted = mysqli_num_rows($query);

$query = $con->query("SELECT * FROM ZoomInterview WHERE Date < NOW()");
$zoomCompleted = mysqli_num_rows($query);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ABMTC Statistics</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700'><link rel="stylesheet" href="./pie.css">

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->

    <!-- Favicon -->
    <link rel="icon" href="ABTMC.png" s-resize>

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="./piemaster.css">

    <style type="text/css">
      .chart{zoom:1;width:90%}.chart:after{clear:both;content:'.';display:block;height:0;visibility:hidden}.chart li{display:block;height:23px;margin-top:3px;position:relative}.chart li:before{color:#fff;content:attr(title);left:5px;position:absolute}.chart li.title:before{color:black;font-weight:bold;left:0}.chart li:first-child{margin-top:0}.chart li .bar{background:#ffa500;height:100%}.chart li .number{color:black;font-size:18px;font-weight:bold;padding-left:5px;position:absolute;top:-2px}.chart li.past .bar{background:#aaa}.chart li.past .number{color:#aaa}@media screen and (max-width: 480px){.chart li{height:auto}.chart li:before{color:black;display:block;left:0;position:relative}.chart li.title:before{border-bottom:1px solid}.chart li .bar{height:23px}.chart li .number{display:block;left:0 !important;padding-left:0;position:relative;top:-8px}}

    </style>

    <style type="text/css">
        .slice s3-0{
            color: black;
        }
    </style>

    <script>
      $(document).ready(function(){
        $('.chart').horizBarChart({
          selector: '.bar',
          speed: 1000
        });
      });
    </script>



<style type="text/css">
    

@-webkit-keyframes bake-pie {
  from {
    -webkit-transform: rotate(0deg) translate3d(0, 0, 0);
            transform: rotate(0deg) translate3d(0, 0, 0);
  }
}

@keyframes bake-pie {
  from {
    -webkit-transform: rotate(0deg) translate3d(0, 0, 0);
            transform: rotate(0deg) translate3d(0, 0, 0);
  }
}
.pie-chart {
  font-family: "Open Sans", Arial;
}
.pie-chart--wrapper {
  width: 400px;
  margin: 30px auto;
  text-align: center;
}
.pie-chart__pie, .pie-chart__legend {
  display: inline-block;
  vertical-align: top;
}
.pie-chart__pie {
  position: relative;
  height: 200px;
  width: 200px;
  margin: 10px auto 35px;
}
.pie-chart__pie::before {
  content: "";
  display: block;
  position: absolute;
  z-index: 1;
  width: 100px;
  height: 100px;
  background: #EEE;
  border-radius: 50%;
  top: 50px;
  left: 50px;
}
.pie-chart__pie::after {
  content: "";
  display: block;
  width: 120px;
  height: 2px;
  background: rgba(0, 0, 0, 0.1);
  border-radius: 50%;
  box-shadow: 0 0 3px 4px rgba(0, 0, 0, 0.1);
  margin: 220px auto;
}

.slice {
  position: absolute;
  width: 200px;
  height: 200px;
  clip: rect(0px, 200px, 200px, 100px);
  -webkit-animation: bake-pie 1s;
          animation: bake-pie 1s;
}
.slice span {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  background-color: black;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  clip: rect(0px, 200px, 200px, 100px);
}

.pie-chart__legend {
  display: block;
  list-style-type: none;
  padding: 0;
  margin: 0 auto;
  background: #FFF;
  padding: 0.75em 0.75em 0.05em;
  font-size: 13px;
  box-shadow: 1px 1px 0 #DDD, 2px 2px 0 #BBB;
  text-align: left;
  width: 65%;
}
.pie-chart__legend li {
  height: 1.25em;
  margin-bottom: 0.7em;
  padding-left: 0.5em;
  border-left: 1.25em solid black;
}
.pie-chart__legend em {
  font-style: normal;
}
.pie-chart__legend span {
  float: right;
}

.pie-charts {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
}
@media (max-width: 500px) {
  .pie-charts {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
            flex-direction: column;
  }
}
</style>

</head>
<body style="height:90%">

    <div id="preloader">
        <div class="preloader-load"></div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->

    <!-- Top Header Area -->
            <header class="top-header-area d-flex align-items-center justify-content-between">

                <div class="left-side-content-area d-flex align-items-center">
                    <div class="ecaps-logo" style="width:75px">
                        <a href="applicantdash.html">
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
                        <a href="applicantdash.html"><img src="ABTMC.png" alt="Mobile Logo"></a>
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

<!-- partial:index.partial.html -->
<div class="container-fluid" style="height:100%">

<div class="wrapper">
    <br>
    <br>
    <br>
    <br>
  <h1>ABMTC Recruitment Statistics</h1>
  <br>
    <br>
  <div class="pie-charts">
    <div class="pieID--micro-skills pie-chart--wrapper">
      <h2>Total Students</h2>
      <div class="pie-chart">
        <div class="pie-chart__pie"></div>
        <ul class="pie-chart__legend" style="height: 80px;">
			<?php
				echo "<li><em>Local Students</em><span>".$localTotal."</span></li>";
				echo "<li><em>International Students</em><span>".$internationalTotal."</span></li>";
			?>
        </ul>
      </div>
    </div>
    <div class="pieID--categories pie-chart--wrapper">
      <h2>Admitted Students</h2>
      <div class="pie-chart">
        <div class="pie-chart__pie"></div>
        <ul class="pie-chart__legend" style="height: 163px;">
			<?php
				echo "<li><em style='font-size: 9px'>Local Applicants Admitted</em><span>".$localAdmitted."</span></li>";
				echo "<li><em style='font-size: 9px'>International Applicants Admitted</em><span>".$internationalAdmitted."</span></li>";
			?>
		  <!--<li style="margin-top:25px;"><em style="font-size: 9px">Local Applicants Provisional Admission</em><span>24</span></li>-->
          <!--<li style="margin-top:25px;"><em style="font-size: 9px">International Applicants Provisional Admission</em><span>43</span></li>-->
        </ul>
      </div>
    </div>
    <div class="pieID--operations pie-chart--wrapper">
      <h2>Total Applicants from United Denominations</h2>
      <div class="pie-chart">
        <div class="pie-chart__pie"></div>
        <ul class="pie-chart__legend">
			<?php
				echo "<li><em>Non-UD</em><span>".$nonUDApplicants."</span></li>";
				echo "<li><em>UD</em><span>".$udApplicants."</span></li>";
			?>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- partial:index.partial.html -->
<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover table-striped table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ABMTC Stages</th>
      <th scope="col">Total Completed</th>
    </tr>
  </thead>
  <tbody>
	<tr>
	  <th scope="row" style="color: white;">Application Form</th>
	  <?php
		echo "<td style='color: white;'>".$appCompleted."</td>"
	  ?>
	</tr>
	<tr>
	  <th scope="row" style="color: white;">Online Interview</th>
	  <?php
		echo "<td style='color: white;'>".$intCompleted."</td>"
	  ?>
	</tr>
	<tr>
	  <th scope="row" style="color: white;">Upload Documents</th>
	  <?php
		echo "<td style='color: white;'>".$docCompleted."</td>"
	  ?>
	</tr>
	 <tr>
	  <th scope="row" style="color: white;">Zoom Interview</th>
	  <?php
		echo "<td style='color: white;'>".$zoomCompleted."</td>"
	  ?>
	</tr>
  </tbody>
</table>
</div>

<br>
<br>


<!-- partial -->

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


<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src="./pie.js"></script>

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
