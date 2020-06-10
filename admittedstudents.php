<?php
session_start();

if ($_SESSION['loggedin'] == false || !$_SESSION['isAdmin']) {
    header('Location: loginabmtc.html');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ABMTC Admitted Students Portal</title>

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
    <div class="ecaps-sidemenu-area">
        <!-- Desktop Logo -->
        <div class="ecaps-logo">
            <a href="index.html"><img class="desktop-logo" style="height:150px; width:90px;" src="ABTMC.png"
                                      alt="Desktop Logo"> <img class="small-logo" src="ABTMC.png" alt="Mobile Logo"></a>
        </div>

        <!-- Side Nav -->
        <div class="ecaps-sidenav" id="ecapsSideNav">
            <!-- Side Menu Area -->
            <div class="side-menu-area">
                <!-- Sidebar Menu -->
                <nav>
                    <ul class="sidebar-menu" data-widget="tree">
                        <li><a href="#"><i class="zmdi zmdi-view-web"></i> <span>Dashboard</span></a></li>

                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-email"></i> <span>Email</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="mail-inbox.html">- Inbox</a></li>-->
                        <!--        <li><a href="mail-view.html">- Mail View</a></li>-->
                        <!--        <li><a href="compose-mail.html">- Compose Mail</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-cake"></i> <span>Hot Pages</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="analytic-customer.html">- Customers</a></li>-->
                        <!--        <li><a href="analytic-report.html">- Reports</a></li>-->
                        <!--        <li><a href="crm-add-clint.html">- Add Client</a></li>-->
                        <!--        <li><a href="crm-clint-list.html">- Client List</a></li>-->
                        <!--        <li><a href="crm-contact.html">- Contacts</a></li>-->
                        <!--        <li><a href="crm-profile-customer.html">- Profile</a></li>-->
                        <!--        <li><a href="crm-task.html">- Task</a></li>-->
                        <!--        <li><a href="crm-leads.html">- Leads</a></li>-->
                        <!--        <li><a href="cryp-exchange.html">- Exchange</a></li>-->
                        <!--        <li><a href="crypto-wallet.html">- Wallet</a></li>-->
                        <!--        <li><a href="crypto-news.html">- News</a></li>-->
                        <!--        <li><a href="crypto-setting.html">- Setting</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-code"></i> <span>UI Kit</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="alert.html">- Alert</a></li>-->
                        <!--        <li><a href="avatar.html">- Avatar</a></li>-->
                        <!--        <li><a href="buttons.html">- Button</a></li>-->
                        <!--        <li><a href="card.html">- Card</a></li>-->
                        <!--        <li><a href="notification.html">- Notification</a></li>-->
                        <!--        <li><a href="general.html">- General</a></li>-->
                        <!--        <li><a href="progressbar.html">- Progressbar</a></li>-->
                        <!--        <li><a href="preloader.html">- Preloader</a></li>-->
                        <!--        <li><a href="tab.html">- Tab</a></li>-->
                        <!--        <li><a href="dropdown.html">- Dropdown</a></li>-->
                        <!--        <li><a href="typography.html">- Typography</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-print"></i> <span>Search</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="job.html">- Job News</a></li>-->
                        <!--        <li><a href="job-description.html">- Description</a></li>-->
                        <!--        <li><a href="crm-project.html">- Project</a></li>-->
                        <!--        <li><a href="project-details.html">- Project Details</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-shield-check"></i><span>Advanced</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="blank.html">- Blank Page</a></li>-->
                        <!--        <li><a href="gallery.html">- Gallery</a></li>-->
                        <!--        <li><a href="light-box-gallery.html">- Light Box Gallery</a></li>-->
                        <!--        <li><a href="modals.html">- Modals</a></li>-->
                        <!--        <li><a href="profile.html">- Profile</a></li>-->
                        <!--        <li><a href="ribbons.html">- Ribbons</a></li>-->
                        <!--        <li><a href="sweet-alert.html">- Sweet Alert</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-car"></i> <span>Shop</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="product.html">- Product</a></li>-->
                        <!--        <li><a href="e-add-product.html">- Add Product</a></li>-->
                        <!--        <li><a href="product-details.html">- Single Product</a></li>-->
                        <!--        <li><a href="order.html">- Order</a></li>-->
                        <!--        <li><a href="cart.html">- Cart</a></li>-->
                        <!--        <li><a href="checkout.html">- Checkout</a></li>-->
                        <!--        <li><a href="invoice.html">- Invoice</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-assignment"></i><span>General Pages</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="slider.html">- Slider</a></li>-->
                        <!--        <li><a href="range-slider.html">- Range Slider</a></li>-->
                        <!--        <li><a href="contact.html">- Contact</a></li>-->
                        <!--        <li><a href="login.html">- Login</a></li>-->
                        <!--        <li><a href="register.html">- Register</a></li>-->
                        <!--        <li><a href="forget-password.html">- Forget Password</a></li>-->
                        <!--        <li><a href="lock-screen.html">- Lock Screen</a></li>-->
                        <!--        <li><a href="404.html">- 404</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-chart"></i><span>Charts</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="chartist.html">- Chartist Chart</a></li>-->
                        <!--        <li><a href="chart-js.html">- Chart Js</a></li>-->
                        <!--        <li><a href="morris-chart.html">- Morris Chart</a></li>-->
                        <!--        <li><a href="apex-chart.html">- Apex Chart</a></li>-->
                        <!--        <li><a href="c3-charts.html">- C3 Chart</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview active">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-washing-machine"></i><span>Forms</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="basic-form.html">- Basic Form</a></li>-->
                        <!--        <li><a href="advanced-elements.html">- Elements</a></li>-->
                        <!--        <li><a href="form-validation.html">- Validation</a></li>-->
                        <!--        <li class="active"><a href="form-wizard.html">- Form Wizard</a></li>-->
                        <!--        <li><a href="form-input-mask.html">- Input Mask</a></li>-->
                        <!--        <li><a href="file-upload.html">- File upload</a></li>-->
                        <!--        <li><a href="rating.html">- Rating</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-grid"></i><span>Tables</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="basic-table.html">- Basic Table</a></li>-->
                        <!--        <li><a href="filter-table.html">- Filter Table</a></li>-->
                        <!--        <li><a href="data-table.html">- Data Table</a></li>-->
                        <!--        <li><a href="price-table.html">- Price Table</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-time-interval"></i><span>Icons</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="font-awesome.html">- Font-Awsome Icons</a></li>-->
                        <!--        <li><a href="pe-7-stroke.html">- Pe-7 Stroke Icons</a></li>-->
                        <!--        <li><a href="matarial-icons.html">- Materialize Icons</a></li>-->
                        <!--        <li><a href="themify-icons.html">- Themify Icons</a></li>-->
                        <!--        <li><a href="elegant-icons.html">- Elegant Icons</a></li>-->
                        <!--        <li><a href="et-line-icons.html">- Et-line Icons</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-google-maps"></i><span>Maps</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="vector-map.html">- Vector Map</a></li>-->
                        <!--        <li><a href="google-map.html">- Google Map</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-view-list"></i> <span>Multilevel</span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="#">Level One</a></li>-->
                        <!--        <li class="treeview">-->
                        <!--            <a href="#">Level One <i class="fa fa-angle-right"></i></a>-->
                        <!--            <ul class="treeview-menu">-->
                        <!--                <li><a href="#">- Level Two</a></li>-->
                        <!--                <li><a href="#">- Level Two</a></li>-->
                        <!--                <li><a href="#">- Level Two</a></li>-->
                        <!--            </ul>-->
                        <!--        </li>-->
                        <!--        <li><a href="#">Level One</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        <header class="top-header-area d-flex align-items-center justify-content-between">
            <div class="left-side-content-area d-flex align-items-center">
                <!-- Mobile Logo -->
                <div class="mobile-logo mr-3 mr-sm-4">
                    <a href="index.html"><img src="ABTMC.png" alt="Mobile Logo"></a>
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
                                <a href="#" class="dropdown-item"><i class="ti-unlink profile-icon"
                                                                     aria-hidden="true"></i> Sign-out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </header>

        <!-- Main Content Area -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin height-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="wizard-form-area">
                                    <h5 class="card-title">Admitted Students Form</h5>

                                    <form id="example-form" action="#" method="post">
                                        <div class="overflow-auto">
                                            <h3>LOCAL</h3>
                                            <section class="overflow-auto">
                                                <div class="form-group">
                                                    <h3>Local Students</h3>
                                                    <label>Local Student Responsibility Form</label>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Proof Of Administration Fees Payment - 645 cedis</label>
                                                    <br>
                                                    <span class="help-block"><small>A picture of a receipt or if you are unable to pay the fees into the school bank account please upload a picture of the cash that you will pay on arrival. Post bank account details.</small></span>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Accommodation - Would you like to sleep
                                                        in the international students hostel, which accommodates only 2
                                                        people in a room for a fee of $100 for a 9 months
                                                        course?</label>
                                                    <br>
                                                    <span class="help-block"><small>(Please note a standard room sleeps 4 people)</small></span>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioaccommodation1"
                                                               name="customRadioaccommodation2"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radioaccommodation1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioaccommodation2"
                                                               name="customRadioaccommodation2"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioaccommodation2">No</label>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label>Decleration Form</label>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Room Assignment Form</label>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Room Assignment Form</label>
                                                    <br>
                                                    <span class="help-block"><small>1. Application Form</small></span>
                                                    <br>
                                                    <span class="help-block"><small>2. School Certificate</small></span>
                                                    <br>
                                                    <span class="help-block"><small>3. Recommendation Letter</small></span>
                                                    <br>
                                                    <span class="help-block"><small>4. All Medical Documents</small></span>
                                                    <br>
                                                    <span class="help-block"><small>5. Responsibility Form</small></span>
                                                    <br>
                                                    <span class="help-block"><small>6. Decleration Form</small></span>
                                                    <br>
                                                    <span class="help-block"><small>7. Room Assignment Form</small></span>
                                                    <br>
                                                    <span class="help-block"><small>8. Administration Fee Or Cash (645 Cedis)</small></span>
                                                    <br>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customdocuments">
                                                        <label class="custom-control-label" for="customdocuments">I can
                                                            confirm that I have printed all documents to bring to the
                                                            Bible School</label>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label>Do you have?</label>
                                                    <br>
                                                    <span class="help-block"><small>1. Pillow</small></span>
                                                    <br>
                                                    <span class="help-block"><small>2. Pillow Case</small></span>
                                                    <br>
                                                    <span class="help-block"><small>3. Bed Sheets</small></span>
                                                    <br>
                                                    <span class="help-block"><small>4. Duvet (For single bed)</small></span>
                                                    <br>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="custombed">
                                                        <label class="custom-control-label" for="custombed">I can
                                                            confirm that I have all of the bedding sets</label>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label>Do you have an MTN Card?</label>
                                                    <br>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customcard">
                                                        <label class="custom-control-label" for="customcard">I can
                                                            confirm that I have an MTN Card</label>
                                                    </div>

                                                </div>

                                            </section>
                                            <h3>INTERNATIONAL</h3>
                                            <section class="overflow-auto">
                                                <h3>Church</h3>
                                                <div class="form-group">
                                                    <label>Admission Contract</label>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>International Student Responsibility Form</label>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Administration Fees And Imigration Fees Payment -
                                                        $405</label>
                                                    <br>
                                                    <span class="help-block"><small>A picture of a receipt or if you are unable to pay the fees into the school bank account please upload a picture of the cash that you will pay on arrival. Post bank account details.</small></span>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Picture Of Passport Bio Data (Passport Page With Your Picture
                                                        And Passport Information</label>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Visa Entrance And Clearance Letter (If Required)</label>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Comment If Visa Is Not Required</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Flight Ticket To Ghana</label>
                                                    <br>
                                                    <span class="help-block"><small>Please try to book a flight that will arrive from to Tuesday to Friday between 6am - 8pm</small></span>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-datetime-local-input">Ghana Airport Arrival Date
                                                        And Time</label>
                                                    <input class="form-control rounded-0 form-control-md" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-date-input">Please enter a date you would like
                                                        complimentary lunch and breakfast (excluding Saturday, Sunday
                                                        and Monday)</label>
                                                    <br>
                                                    <span class="help-block"><small>The Bible School offers 2 complimentary meals when you arrive.</small></span>
                                                    <br>
                                                    <div>
                                                        <input class="form-control rounded-0 form-control-md"
                                                               type="date" value="2011-08-19" id="example-date-input">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Would You Like A Starter Pack For
                                                        £40/$50 So That You Will Not Have To Travel With The Following
                                                        Toiletries Or Bed Sets?</label>
                                                    <br>
                                                    <label class="control-label">- Bath Towel</label>
                                                    <br>
                                                    <label class="control-label">- Hand Towel</label>
                                                    <br>
                                                    <label class="control-label">- Bath Gel</label>
                                                    <br>
                                                    <label class="control-label">- Lotion</label>
                                                    <br>
                                                    <label class="control-label">- Laundry Bag</label>
                                                    <br>
                                                    <label class="control-label">- Dental Kit</label>
                                                    <br>
                                                    <label class="control-label">- Bath Mat</label>
                                                    <br>
                                                    <label class="control-label">- 1 Pillow</label>
                                                    <br>
                                                    <br>

                                                    <label class="control-label">The £40/$50 Will Go To The Lighthouse
                                                        Orphanage</label>
                                                    <br>
                                                    <span class="help-block"><small>(Please note that you need to bring your own bedsheets etc. If you do not opt for the starter pack you need to bring your own pillow)</small></span>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiokit1" name="customRadiokit2"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiokit1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiokit2" name="customRadiokit2"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="radiokit2">No</label>
                                                    </div>

                                                </div>

                                                <div class="form-group">

                                                    <label class="control-label">Would You Like To Sleep In The
                                                        International Students Hostel, which only sleeps 2 people for a
                                                        fee $100 for a 9 months course?</label>
                                                    <br>
                                                    <span class="help-block"><small>(Please note that a standard room sleeps 4 people)</small></span>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioaccomodation1"
                                                               name="customRadioaccomodation2"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioaccomodation1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioaccomodation2"
                                                               name="customRadioaccomodation2"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioaccomodation2">No</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Decleration Form</label>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Room Assignment Form</label>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                </div>


                                            </section>
                                            <h3>PAYMENT</h3>
                                            <section class="overflow-auto">
                                                <h3>Sponsorship Agreement Payment Plan (For Both Local And International
                                                    Students)</h3>

                                                <div class="form-group">
                                                    <label class="control-label">Do You Have A Sponsorship Agreement
                                                        Payment Plan?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="custompayment1"
                                                               name="customRadiopayment" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadiopayment1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadiopayment2"
                                                               name="customRadiopayment" class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="customRadiopayment2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">

                                                </div>
                                            </section>
                                            <h3>PRINTED DOCS</h3>
                                            <section class="overflow-auto">
                                                <h3>International Students Please Confirm If You Have The Following</h3>
                                                <div class="form-group">
                                                    <label>Printed All Requested Documents To Bring To School</label>
                                                    <br>
                                                    <span class="help-block"><small>1. Application Form</small></span>
                                                    <br>
                                                    <span class="help-block"><small>2. School Certificate</small></span>
                                                    <br>
                                                    <span class="help-block"><small>3. Recommendation Letter</small></span>
                                                    <br>
                                                    <span class="help-block"><small>4. All Medical Documents</small></span>
                                                    <br>
                                                    <span class="help-block"><small>5. Police Report</small></span>
                                                    <br>
                                                    <span class="help-block"><small>6. Admission Contract</small></span>
                                                    <br>
                                                    <span class="help-block"><small>7. Responsibility Form</small></span>
                                                    <br>
                                                    <span class="help-block"><small>8. Decleration Form</small></span>
                                                    <br>
                                                    <span class="help-block"><small>9. Room Assignment Form</small></span>
                                                    <br>
                                                    <span class="help-block"><small>10. Administration Fee Or Cash</small></span>
                                                    <br>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customprintdocument">
                                                        <label class="custom-control-label" for="customprintdocument">I
                                                            can confirm that I have printed all documents to bring to
                                                            the Bible School</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Do You Have Malaria Medication?</label>
                                                    <br>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="custommed">
                                                        <label class="custom-control-label" for="custommed">I can
                                                            confirm that I have an malaria medication</label>
                                                    </div>


                                                </div>

                                                <div class="form-group">
                                                    <label>Do You Have A 3-Pin Plug/Charger Or An Adapter For The
                                                        Sockets In Ghana?</label>
                                                    <br>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customplug">
                                                        <label class="custom-control-label" for="customplug">I can
                                                            confirm 3-pin plug/charger or an adapter</label>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label>Do You Have A Charged Power Bank And A Cable To Charge Your
                                                        Phone?</label>
                                                    <br>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customcharge">
                                                        <label class="custom-control-label" for="customcharge">I can
                                                            confirm I have a power bank and a cable for my phone</label>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label>Do You Have A Pillow Case, Bed Sheets And Duvet For A Single
                                                        Bed ?</label>
                                                    <br>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="custompillow">
                                                        <label class="custom-control-label" for="custompillow">I can
                                                            confirm I have a pillow case, bed sheets and a duvet</label>
                                                    </div>

                                                </div>


                                            </section>
                                            <h3>REGISTRATION</h3>
                                            <section class="overflow-auto">
                                                <div class="form-group">
                                                    <h3>Registration</h3>
                                                    <br>
                                                    <label>Please Click On This Link And Do The Following</label>
                                                    <br>
                                                    <a target="_blank"
                                                       href="https://school.anagkazomanager.org/register">https://school.anagkazomanager.org/register</a>
                                                    <br>
                                                    <span class="help-block"><small>1. Select Course - Junior Clerkship</small></span>
                                                    <br>
                                                    <span class="help-block"><small>2. Click To Apply</small></span>
                                                    <br>
                                                    <span class="help-block"><small>3. Fill In To Apply</small></span>
                                                    <br>
                                                    <span class="help-block"><small>4. Upload A Smart Passport Of Yourself Wearing A White Shirt And Black Jacket(You Must Upload A Picture Of Yourself, If The Picture Upload In Not Working Try A Smaller Photo With Less Quality, Do Not Submit If The Picture Does Not Upload</small></span>
                                                    <br>
                                                    <span class="help-block"><small>5. Submit Application</small></span>


                                                </div>
                                                <div class="form-group">
                                                    <label>Please Confirm You Have Completed Registration</label>
                                                    <br>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customcompletereg">
                                                        <label class="custom-control-label" for="customcompletereg">I
                                                            can confirm I have a completed registration</label>
                                                    </div>
                                                </div>


                                            </section>
                                            <h3>PASTORAL</h3>
                                            <section class="overflow-auto">
                                                <div class="form-group">
                                                    <h3>Pastoral Points Registration</h3>
                                                    <br>
                                                    <label>Please Click On The Link And Fill In The Pastoral Point s
                                                        Form</label>
                                                    <br>
                                                    <span class="help-block"><small>New Student Form:</small></span>
                                                    <br>
                                                    <a target="_blank" href="http://firstlovegallery.com/student/new">http://firstlovegallery.com/student/new</a>
                                                    <br>
                                                    <span class="help-block"><small>UD means a Lighthouse Chapel Church, Non-UD means a Non-Lighthouse Church. Please make sure you fill in all the fields</small></span>

                                                    <br>
                                                    <div class="form-group">
                                                        <label>Please Confirm You Have Completed Registration</label>
                                                        <br>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customregpastoral">
                                                            <label class="custom-control-label" for="customregpastoral">I
                                                                can confirm I have a completed registration</label>
                                                        </div>
                                                    </div>


                                                </div>
                                            </section>
                                            <h3>QUERIES</h3>
                                            <section class="overflow-auto">
                                                <div class="form-group">
                                                    <h3>Helpful Links</h3>
                                                    <label class="control-label">Please read the recommended items you
                                                        should bring to ABMTC on the school website</label>
                                                    <br>
                                                    <a target="_blank" href="http://www.abmtc.org/studentlife">http://www.abmtc.org/studentlife</a>
                                                    <br>
                                                    <label class="control-label">Academic Calendar</label>
                                                    <br>
                                                    <label class="control-label">Campus Map</label>
                                                    <br>
                                                </div>
                                            </section>
                                            <h3>LANDING</h3>
                                            <section class="overflow-auto">
                                                <div class="form-group">
                                                    <h3>Soft Landing Checklist</h3>
                                                    <label>Please confirm the following:</label>
                                                    <div class="form-group">
                                                        <label>Airport Pick-Up</label>
                                                        <br>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="custompickup">
                                                            <label class="custom-control-label" for="custompickup">I can
                                                                confirm I have airport pick-up</label>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label>Changed Money At The Airport</label>
                                                        <br>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customchangemoney">
                                                            <label class="custom-control-label" for="customchangemoney">I
                                                                can confirm I have airport pick-up</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Set Up Sim Card And Credit</label>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customsetsim">
                                                            <label class="custom-control-label" for="customsetsim">I can
                                                                confirm I have set up sim card and credit</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Collected Tag</label>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customtag">
                                                            <label class="custom-control-label" for="customtag">I can
                                                                confirm I have collected tag</label>
                                                        </div>
                                                    </div>
                                                    <label>Starter Pack</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiostartpack1"
                                                               name="customRadiostartpack2"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radiostartpack1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiostartpack2"
                                                               name="customRadiostartpack2"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radiostartpack2">No</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Room Number</label>
                                                        <input class="form-control" id="example-number" type="number"
                                                               name="number">
                                                    </div>
                                                    <label>Are There Any Issues In The Room?</label>
                                                    <br>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioissues1" name="customRadioissues2"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioissues1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioissues2" name="customRadioissues2"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="radioissues2">No</label>
                                                    </div>
                                                    <br>
                                                    <label>If Yes Please Comment</label>
                                                    <input type="text" class="form-control" id="inputAddress"
                                                           placeholder="">
                                                    <div class="form-group">
                                                        <label>Have The Issues In Your Room Been Solved</label>
                                                        <br>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customsolve">
                                                            <label class="custom-control-label" for="customsolve">I can
                                                                confirm they have been solved</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Paid Admin Fee And Collected Textbooks</label>
                                                        <br>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customcollect">
                                                            <label class="custom-control-label" for="customcollect">I
                                                                can confirm I have paid the admin fee and collected
                                                                textbooks</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gallery Tour</label>
                                                        <br>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customgaltour">
                                                            <label class="custom-control-label" for="customgaltour">I
                                                                can confirm for the gallery tour</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Orphanage Tour</label>
                                                        <br>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customorphane">
                                                            <label class="custom-control-label" for="customorphane">I
                                                                can confirm for the orphanage tour</label>
                                                        </div>
                                                    </div>
                                                    <label class="control-label">- Connect to the wifi when you arrive
                                                        at the Accra Airport</label>

                                                </div>
                                            </section>
                                            <h3>FINISH</h3>
                                            <section class="overflow-auto">
                                                <h3>Finish</h3>
                                                <div class="form-check">
                                                    <div class="col-sm-4">
                                                        <h3>You Have Completed The Admitted Students Form</h3>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </form>
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
<script src="js/default-assets/wizard-form.js"></script>
<script src="js/default-assets/file-upload.js"></script>

</body>

</html>