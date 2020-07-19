<?php
session_start();

if ($_SESSION['loggedin'] == false) {
    header('Location: loginabmtc.html');
}

require("dbconfig/config.php");

$userID = "'".$_SESSION['User_Id']."'";

$query = "SELECT * FROM(
    SELECT C.Date, C.Time, C.Link,
    (ROW_NUMBER() OVER( 
        PARTITION BY A.EmailWhatsapp, B.Status
        ORDER BY  A.EmailWhatsapp, B.Status
    )) AS Row_Num
    FROM Applicant_Table AS A 
    JOIN MedicalDocResponse AS B 
    ON A.EmailWhatsapp = B.EmailWhatsapp
    LEFT JOIN ZoomInterview AS C
    ON A.User_ID = ".$userID." 
    WHERE B.Status = 'Accept'
) AS D
WHERE D.Row_Num = 1
";
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
    <title>ABMTC - Zoom Interview Details</title>

    <!-- Favicon -->
    <link rel="icon" href="ABTMC.png" style="width: 50px; height: 50px">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="css/default-assets/modal.css">

    <style type="text/css">
        .marquee {
  position: absolute;
  top: 0px;
}
    .inactivelink {
   pointer-events: none;
   cursor: default;
}



.scrolltable{
    overflow: scroll;
    height: 100px;
}
#myItems{
    overflow: scroll;
    
  height: 300px;


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
    <div class="ecaps-page-wrapper" disabled>
        <!-- Sidemenu Area -->
        <div>
            <!-- Desktop Logo -->
            <div class="ecaps-logo" style="width:75px">
                    <a href="applicantdash.php">
                        <img class="desktop-logo" style="min-height:70px; min-width:70px; margin:0px" src="ABTMC.png"
                             alt="Desktop Logo">
                        <img class="small-logo" src="ABTMC.png" alt="Mobile Logo">
                    </a>
                </div>

            <!-- Side Nav -->
            
        </div>

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

           </header>

            <!-- Main Content Area -->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card box-margin">
                                <div class="card-body">
                                    <h4 class="card-title mb-2">Zoom Interview Details</h4>
                                    <br>
                                    <b><medium id="fileHelp" class="form-text text-muted">Please note the following:</medium>

                                    <br><br>

                                    <small id="fileHelp" style="font-weight: 1000;" class="form-text text-muted">TIME ZONE CHECK: Make sure you check what the Ghana Time is for the interview. Please refer to the world clock at the bottom of the page where you can check the time difference.</small>

                                    <br>

                                    <small id="fileHelp" style="font-weight: 1000;" class="form-text text-muted">INTERVIEW ATTIRE: Dress smartly for the interview.</small>

                                    <br>

                                    <small id="fileHelp" style="font-weight: 1000;" class="form-text text-muted">TEST YOUR CONNECTION: Ensure you have a good internet connection. Internet connectivity varies based on what you’re using and is also influenced by what else you have running.</small>

                                    <br>

                                    <small id="fileHelp" style="font-weight: 1000;" class="form-text text-muted">LINK PRIVACY: Please do not attempt to share the zoom link with anyone.</small>

                                    <br>

                                    <small id="fileHelp" style="font-weight: 1000;" class="form-text text-muted">COMMUNICATING: Mute your microphone. To help keep background noise to a minimum, make sure you mute your microphone when you are not speaking.</small>

                                    <br>


                                    <small id="fileHelp" style="font-weight: 1000;" class="form-text text-muted">SETTING UP AN AUDIO DISTRACTION FREE ZONE: Be mindful of background noise. Pick a setting that is quiet to eliminate and avoid audio distractions.</small>

                                    <br>

                                    <small id="fileHelp" style="font-weight: 1000;" class="form-text text-muted">YOUR WEBCAM AND DISPLAY PLACEMENTS: Position your camera properly and ensure you are looking directly at your camera. Please make sure that you are in a medium shot.</small>

                                    <br>

                                    <small id="fileHelp" style="font-weight: 1000;" class="form-text text-muted">SETTING UP A BACKGROUND DISTRACTION FREE ZONE: Be mindful of background movement. Pick a setting that has no other person around in order to eliminate distractions.</small>

                                    <br>

                                    <small id="fileHelp" style="font-weight: 1000;" class="form-text text-muted">YOUR WEBCAM AND DISPLAY PLACEMENTS: Position your camera properly and ensure you are looking directly at your camera. Please make sure you are in a medium shot.</small>

                                    <br>

                                    <small id="fileHelp" style="font-weight: 1000;" class="form-text text-muted">LIGHTING: Please be in an area where the lighting is clear. Avoid dark areas.</small>

                                    <br>

                                    <small id="fileHelp" style="font-weight: 1000;" class="form-text text-muted">OTHER INTERFERENCES: Avoid multi-tasking and other audio/visual triggers.</small>


                                    </b>

                                    <br>



                                    <center><hr style="width: 100px;"></center>

                                        <p class="text-muted font-13 mb-4">
                                        
                                        </p>

                                        <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Interview Date</th>
                                                    <th>Time (Ghana Time)</th>
                                                    <th>Link To Interview</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php
													while ($row = $result->fetch_assoc()) {
														if (!empty($row['Link'])){
															echo '<tr>';
																echo "<td>" . $row['Date'] . "</td>";
																echo "<td>" . $row['Time'] . "</td>";
																echo "<td><a href='" . $row['Link'] . "'>".$row['Link']."</a></td>";
															echo '</tr>';
														}
													}
												?>                                 
                                            </tbody>

                                        </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card box-margin">
                                <div class="card-body">
                                    <marquee input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value"><font color="black" font size="4.8"  >
                                                        
-- GHANA TIME --  </font></marquee>

<br>
                                                        <br>
                                                        
                                                    
                                        <h4 class="card-title mb-2">Ghana Time</h4>

                                        <div class="row">
  </div>
  <div id="myItems">
  <div class="col-sm-12 mb-3">

      <div class="card">
        <div class="card-body">
          <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt5eea260cb9a79" width="175" height="175"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold"><a href="//24timezones.com/Accra/time" style="text-decoration: none" class="clock24" id="tz24-1592403468-c14-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI2MGNiOWE3OSJ9" title="Accra time now" target="_blank" rel="nofollow"><h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Ghana - Accra</a></h5></a></td></tr>
          </table>
        </div>
      </div>

  </div>
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

    <script src="js/default-assets/modal-classes.js"></script>
    <script src="js/default-assets/modaleffects.js"></script>

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

    <script>
  function myFunction() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("myItems");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
</script>

<script type="text/javascript" src="//w.24timezones.com/l.js" async></script>

</body>

</htð?