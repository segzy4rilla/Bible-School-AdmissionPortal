<?php
session_start();

if ($_SESSION['loggedin'] == false || $_SESSION['isAdmin'] == false) {
    header('Location: loginabmtc.html');
}
require("PHP_Files/Update_Tables.php");
require("dbconfig/config.php");

$query = "select * from Botswana_Table";
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
    <title>ABMTC Summary Table</title>

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
        <a href="applicantdash.html">
            <img class="desktop-logo" style="min-height:70px; min-width:70px; margin:0px 10px 0px 0px" src="ABTMC.png"
                 alt="Desktop Logo">
            <img class="small-logo" src="ABTMC.png" alt="Mobile Logo">
        </a>
    </div>


</div>

<!-- Page Content -->
<div class="ecaps-page-content">
    <!-- Top Header Area -->
    <header class="top-header-area d-flex align-items-center justify-content-between">
        <div class="left-side-content-area d-flex align-items-center">
            <!-- Mobile Logo -->
            <div class="mobile-logo mr-3 mr-sm-4">
                <a href="applicantdash.html"><img src="ABTMC.png" alt="Mobile Logo"></a>
            </div>

            <!-- Triggers -->
            <div class="ecaps-triggers mr-1 mr-sm-3">
                <div class="menu-collasped" id="menuCollasped">
                    <i class="zmdi zmdi-menu"></i>
                </div>
                <div class="mobile-menu-open" id="mobileMenuOpen">
                    <i class="zmdi zmdi-menu"></i>
                </div>
            </div>
        </div>

        <div class="right-side-navbar d-flex align-items-center justify-content-end">
            <!-- Mobile Trigger -->
            <div class="right-side-trigger" id="rightSideTrigger">
                <i class="fa fa-reorder"></i>
            </div>

            <!-- Top Bar Nav -->
            <ul class="right-side-content d-flex align-items-center">
                <!-- Left Side Nav -->
                <li class="hide-phone app-search">
                    <form role="search" class=""><input type="text" placeholder="Search..." class="form-control">
                        <button type="submit" class="mr-0"><i class="fa fa-search"></i></button>
                    </form>
                </li>

                <li class="nav-item dropdown">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>

                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- Top Message Area -->
                        <div class="top-message-area">
                            <!-- Heading -->
                            <div class="top-message-heading">
                                <div class="heading-title">
                                    <h6>Messages</h6>
                                </div>
                                <span>07 New</span>
                            </div>
                            <div class="message-box" id="messageBox">
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/10.png" alt="">
                                    <span class="message-text">
                                                <span>Jhon Lina</span>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, voluptas!</span>
                                            </span>
                                </a>
                                <span class="message-heading">New Messages</span>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/11.png" alt="">
                                    <span class="message-text">
                                                <span>Google Ads: You'll get a refund soon</span>
                                                <span>27 min ago</span>
                                            </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/7.png" alt="">
                                    <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/8.png" alt="">
                                    <span class="message-text">
                                                <span>The Complete JavaScript Handbook</span>
                                                <span>1 hour ago</span>
                                            </span>
                                </a>
                                <span class="message-heading">Hot Messages</span>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/9.png" alt="">
                                    <span class="message-text">
                                                <span>New comment: ecaps Template</span>
                                                <span>2 days ago</span>
                                            </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/10.png" alt="">
                                    <span class="message-text">
                                                <span>6-hour video course on Angular</span>
                                                <span>3 min ago</span>
                                            </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/11.png" alt="">
                                    <span class="message-text">
                                                <span>Google Ads: You'll get a refund soon</span>
                                                <span>27 min ago</span>
                                            </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/12.png" alt="">
                                    <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="fa fa-bell-o" aria-hidden="true"></i> <span
                                class="active-status"></span></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- Top Notifications Area -->
                        <div class="top-notifications-area">
                            <!-- Heading -->
                            <div class="notifications-heading">
                                <div class="heading-title">
                                    <h6>Notifications</h6>
                                </div>
                            </div>

                            <div class="notifications-box" id="notificationsBox">
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/1.png" alt="">
                                    <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/2.png" alt="">
                                    <span class="message-text">
                                                <span>Andrew Done Project</span>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, quam.</span>
                                            </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/3.png" alt="">
                                    <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/4.png" alt="">
                                    <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/5.png" alt="">
                                    <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/6.png" alt="">
                                    <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="img/member-img/7.png" alt="">
                                    <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><img src="img/member-img/4.png" alt=""></button>
                    <div class="dropdown-menu header-profile dropdown-menu-right">
                        <!-- User Profile Area -->
                        <div class="user-profile-area">
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-account profile-icon"
                                                                 aria-hidden="true"></i> My profile</a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open profile-icon"
                                                                 aria-hidden="true"></i> Messages</a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon"
                                                                 aria-hidden="true"></i> Account settings</a>
                            <a href="#" class="dropdown-item"><i class="ti-unlink profile-icon" aria-hidden="true"></i>
                                Sign-out</a>
                        </div>
                    </div>
                </li>
            </ul>
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
                                <h4 class="card-title mb-2">Summary Table</h4>

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>Applicants Name</th>
                                        <th>Country</th>
                                        <th>Created Account</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php
                                    $count = 0;
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . ++$count . "</td>";
                                        echo "<td>" . $row['First Name'] . " " . $row['Last Name'] . "</td>";
                                        echo "<td>" . $row['Country'] . "</td>";

                                        if ($row['Created_an_ABMTC_Account'] == 1) {
                                            echo "<td>" . "Completed" . "</td>";
                                        } else {
                                            echo "<td>" . "Incomplete" . "</td>";
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