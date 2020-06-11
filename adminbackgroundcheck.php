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
    <title>ABMTC Application Portal</title>

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
                                    <h5 class="card-title">Application Form</h5>

                                    <form id="example-form" action="#" method="post">
                                        <div class="overflow-auto">
                                            <h3>GENERAL</h3>
                                            <section class="overflow-auto">
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter first name" name="appfname" readonly="" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter last name" name="applname" readonly="" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Age</label>
                                                    <input type="number" class="form-control" placeholder="Enter age" name="appage" readonly="" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date Of Birth</label>
                                                    <input class="form-control rounded-0 form-control-md" type="date" value="2011-08-19" id="example-date-input" name="applname" readonly="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Gender</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadiogender"
                                                               name="customRadiogender" class="custom-control-input"
                                                               readonly="" value="" disabled>
                                                        <label class="custom-control-label"
                                                               for="customRadiogender">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2gender"
                                                               name="customRadiogender" class="custom-control-input"
                                                               readonly="" value="" disabled>
                                                        <label class="custom-control-label" for="customRadio2gender">Female</label>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">Nationality</label>
                                                        <select class="form-control" id="SelectNationality"
                                                                name="appnationality" readonly="" value="" disabled>
                                                            <option value="">-- select one --</option>
                                                            <option value="afghan">Afghan</option>
                                                            <option value="albanian">Albanian</option>
                                                            <option value="algerian">Algerian</option>
                                                            <option value="american">American</option>
                                                            <option value="andorran">Andorran</option>
                                                            <option value="angolan">Angolan</option>
                                                            <option value="antiguans">Antiguans</option>
                                                            <option value="argentinean">Argentinean</option>
                                                            <option value="armenian">Armenian</option>
                                                            <option value="australian">Australian</option>
                                                            <option value="austrian">Austrian</option>
                                                            <option value="azerbaijani">Azerbaijani</option>
                                                            <option value="bahamian">Bahamian</option>
                                                            <option value="bahraini">Bahraini</option>
                                                            <option value="bangladeshi">Bangladeshi</option>
                                                            <option value="barbadian">Barbadian</option>
                                                            <option value="barbudans">Barbudans</option>
                                                            <option value="batswana">Batswana</option>
                                                            <option value="belarusian">Belarusian</option>
                                                            <option value="belgian">Belgian</option>
                                                            <option value="belizean">Belizean</option>
                                                            <option value="beninese">Beninese</option>
                                                            <option value="bhutanese">Bhutanese</option>
                                                            <option value="bolivian">Bolivian</option>
                                                            <option value="bosnian">Bosnian</option>
                                                            <option value="brazilian">Brazilian</option>
                                                            <option value="british">British</option>
                                                            <option value="bruneian">Bruneian</option>
                                                            <option value="bulgarian">Bulgarian</option>
                                                            <option value="burkinabe">Burkinabe</option>
                                                            <option value="burmese">Burmese</option>
                                                            <option value="burundian">Burundian</option>
                                                            <option value="cambodian">Cambodian</option>
                                                            <option value="cameroonian">Cameroonian</option>
                                                            <option value="canadian">Canadian</option>
                                                            <option value="cape verdean">Cape Verdean</option>
                                                            <option value="central african">Central African</option>
                                                            <option value="chadian">Chadian</option>
                                                            <option value="chilean">Chilean</option>
                                                            <option value="chinese">Chinese</option>
                                                            <option value="colombian">Colombian</option>
                                                            <option value="comoran">Comoran</option>
                                                            <option value="congolese">Congolese</option>
                                                            <option value="costa rican">Costa Rican</option>
                                                            <option value="croatian">Croatian</option>
                                                            <option value="cuban">Cuban</option>
                                                            <option value="cypriot">Cypriot</option>
                                                            <option value="czech">Czech</option>
                                                            <option value="danish">Danish</option>
                                                            <option value="djibouti">Djibouti</option>
                                                            <option value="dominican">Dominican</option>
                                                            <option value="dutch">Dutch</option>
                                                            <option value="east timorese">East Timorese</option>
                                                            <option value="ecuadorean">Ecuadorean</option>
                                                            <option value="egyptian">Egyptian</option>
                                                            <option value="emirian">Emirian</option>
                                                            <option value="equatorial guinean">Equatorial Guinean
                                                            </option>
                                                            <option value="eritrean">Eritrean</option>
                                                            <option value="estonian">Estonian</option>
                                                            <option value="ethiopian">Ethiopian</option>
                                                            <option value="fijian">Fijian</option>
                                                            <option value="filipino">Filipino</option>
                                                            <option value="finnish">Finnish</option>
                                                            <option value="french">French</option>
                                                            <option value="gabonese">Gabonese</option>
                                                            <option value="gambian">Gambian</option>
                                                            <option value="georgian">Georgian</option>
                                                            <option value="german">German</option>
                                                            <option value="ghanaian">Ghanaian</option>
                                                            <option value="greek">Greek</option>
                                                            <option value="grenadian">Grenadian</option>
                                                            <option value="guatemalan">Guatemalan</option>
                                                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                            <option value="guinean">Guinean</option>
                                                            <option value="guyanese">Guyanese</option>
                                                            <option value="haitian">Haitian</option>
                                                            <option value="herzegovinian">Herzegovinian</option>
                                                            <option value="honduran">Honduran</option>
                                                            <option value="hungarian">Hungarian</option>
                                                            <option value="icelander">Icelander</option>
                                                            <option value="indian">Indian</option>
                                                            <option value="indonesian">Indonesian</option>
                                                            <option value="iranian">Iranian</option>
                                                            <option value="iraqi">Iraqi</option>
                                                            <option value="irish">Irish</option>
                                                            <option value="israeli">Israeli</option>
                                                            <option value="italian">Italian</option>
                                                            <option value="ivorian">Ivorian</option>
                                                            <option value="jamaican">Jamaican</option>
                                                            <option value="japanese">Japanese</option>
                                                            <option value="jordanian">Jordanian</option>
                                                            <option value="kazakhstani">Kazakhstani</option>
                                                            <option value="kenyan">Kenyan</option>
                                                            <option value="kittian and nevisian">Kittian and Nevisian
                                                            </option>
                                                            <option value="kuwaiti">Kuwaiti</option>
                                                            <option value="kyrgyz">Kyrgyz</option>
                                                            <option value="laotian">Laotian</option>
                                                            <option value="latvian">Latvian</option>
                                                            <option value="lebanese">Lebanese</option>
                                                            <option value="liberian">Liberian</option>
                                                            <option value="libyan">Libyan</option>
                                                            <option value="liechtensteiner">Liechtensteiner</option>
                                                            <option value="lithuanian">Lithuanian</option>
                                                            <option value="luxembourger">Luxembourger</option>
                                                            <option value="macedonian">Macedonian</option>
                                                            <option value="malagasy">Malagasy</option>
                                                            <option value="malawian">Malawian</option>
                                                            <option value="malaysian">Malaysian</option>
                                                            <option value="maldivan">Maldivan</option>
                                                            <option value="malian">Malian</option>
                                                            <option value="maltese">Maltese</option>
                                                            <option value="marshallese">Marshallese</option>
                                                            <option value="mauritanian">Mauritanian</option>
                                                            <option value="mauritian">Mauritian</option>
                                                            <option value="mexican">Mexican</option>
                                                            <option value="micronesian">Micronesian</option>
                                                            <option value="moldovan">Moldovan</option>
                                                            <option value="monacan">Monacan</option>
                                                            <option value="mongolian">Mongolian</option>
                                                            <option value="moroccan">Moroccan</option>
                                                            <option value="mosotho">Mosotho</option>
                                                            <option value="motswana">Motswana</option>
                                                            <option value="mozambican">Mozambican</option>
                                                            <option value="namibian">Namibian</option>
                                                            <option value="nauruan">Nauruan</option>
                                                            <option value="nepalese">Nepalese</option>
                                                            <option value="new zealander">New Zealander</option>
                                                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                            <option value="nicaraguan">Nicaraguan</option>
                                                            <option value="nigerien">Nigerien</option>
                                                            <option value="north korean">North Korean</option>
                                                            <option value="northern irish">Northern Irish</option>
                                                            <option value="norwegian">Norwegian</option>
                                                            <option value="omani">Omani</option>
                                                            <option value="pakistani">Pakistani</option>
                                                            <option value="palauan">Palauan</option>
                                                            <option value="panamanian">Panamanian</option>
                                                            <option value="papua new guinean">Papua New Guinean</option>
                                                            <option value="paraguayan">Paraguayan</option>
                                                            <option value="peruvian">Peruvian</option>
                                                            <option value="polish">Polish</option>
                                                            <option value="portuguese">Portuguese</option>
                                                            <option value="qatari">Qatari</option>
                                                            <option value="romanian">Romanian</option>
                                                            <option value="russian">Russian</option>
                                                            <option value="rwandan">Rwandan</option>
                                                            <option value="saint lucian">Saint Lucian</option>
                                                            <option value="salvadoran">Salvadoran</option>
                                                            <option value="samoan">Samoan</option>
                                                            <option value="san marinese">San Marinese</option>
                                                            <option value="sao tomean">Sao Tomean</option>
                                                            <option value="saudi">Saudi</option>
                                                            <option value="scottish">Scottish</option>
                                                            <option value="senegalese">Senegalese</option>
                                                            <option value="serbian">Serbian</option>
                                                            <option value="seychellois">Seychellois</option>
                                                            <option value="sierra leonean">Sierra Leonean</option>
                                                            <option value="singaporean">Singaporean</option>
                                                            <option value="slovakian">Slovakian</option>
                                                            <option value="slovenian">Slovenian</option>
                                                            <option value="solomon islander">Solomon Islander</option>
                                                            <option value="somali">Somali</option>
                                                            <option value="south african">South African</option>
                                                            <option value="south korean">South Korean</option>
                                                            <option value="spanish">Spanish</option>
                                                            <option value="sri lankan">Sri Lankan</option>
                                                            <option value="sudanese">Sudanese</option>
                                                            <option value="surinamer">Surinamer</option>
                                                            <option value="swazi">Swazi</option>
                                                            <option value="swedish">Swedish</option>
                                                            <option value="swiss">Swiss</option>
                                                            <option value="syrian">Syrian</option>
                                                            <option value="taiwanese">Taiwanese</option>
                                                            <option value="tajik">Tajik</option>
                                                            <option value="tanzanian">Tanzanian</option>
                                                            <option value="thai">Thai</option>
                                                            <option value="togolese">Togolese</option>
                                                            <option value="tongan">Tongan</option>
                                                            <option value="trinidadian or tobagonian">Trinidadian or
                                                                Tobagonian
                                                            </option>
                                                            <option value="tunisian">Tunisian</option>
                                                            <option value="turkish">Turkish</option>
                                                            <option value="tuvaluan">Tuvaluan</option>
                                                            <option value="ugandan">Ugandan</option>
                                                            <option value="ukrainian">Ukrainian</option>
                                                            <option value="uruguayan">Uruguayan</option>
                                                            <option value="uzbekistani">Uzbekistani</option>
                                                            <option value="venezuelan">Venezuelan</option>
                                                            <option value="vietnamese">Vietnamese</option>
                                                            <option value="welsh">Welsh</option>
                                                            <option value="yemenite">Yemenite</option>
                                                            <option value="zambian">Zambian</option>
                                                            <option value="zimbabwean">Zimbabwean</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="example-number">Phone Number</label>
                                                        <input class="form-control" id="example-number" type="number"
                                                               name="appphonenumber" readonly="" value="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="example-number2">Whatsapp Number</label>
                                                        <input class="form-control" id="example-number2" type="number"
                                                               name="appwhatsappnumber" readonly="" value="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="example-email">Email Address</label>
                                                        <input type="email" id="example-email" class="form-control"
                                                               placeholder="Email" name="appemail" readonly="" value="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">What Month Would You Like To
                                                            Start School?</label>
                                                        <select class="form-control" id="SelectEnrolDate"
                                                                name="appstartmonth" readonly="" value="" disabled>
                                                            <option value="">-- select one --</option>
                                                            <option value="enrol1">June 2020</option>
                                                            <option value="enrol2">October 2020</option>
                                                            <option value="enrol3">February 2021</option>
                                                            <option value="enrol4">June 2021</option>
                                                            <option value="enrol5">October 2021</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">Select Course You Would Like To
                                                            Do:</label>
                                                        <select class="form-control" id="SelectOrigin"
                                                                name="appcoursetype" readonly="" value="">
                                                            <option value="AF">9 Months Ordinary Program</option>
                                                            <option value="AX">18 Months Standard Program</option>
                                                            <option value="AL">27 Months Premium Program</option>
                                                            <option value="DZ">36 Months Advanced Program</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Marital Status</label>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio1" name="customRadio"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label" for="customRadio1">Single</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label" for="customRadio2">In A
                                                                Relationship (Beloved)</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio3" name="customRadio"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label" for="customRadio3">Common
                                                                Law</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio4" name="customRadio"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label" for="customRadio4">Married</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio5" name="customRadio"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label" for="customRadio5">Widowed</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio6" name="customRadio"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label" for="customRadio6">Seperated</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio7" name="customRadio"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label" for="customRadio7">Divorced</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio8" name="customRadio"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label" for="customRadio8">Live-In
                                                                Relationship</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">Country Of Residence</label>
                                                        <select class="form-control" id="SelectNationality"
                                                                name="appresidentcountry" readonly="" value="" disabled>
                                                            <option value="">-- select one --</option>
                                                            <option value="afghan">Afghan</option>
                                                            <option value="albanian">Albanian</option>
                                                            <option value="algerian">Algerian</option>
                                                            <option value="american">American</option>
                                                            <option value="andorran">Andorran</option>
                                                            <option value="angolan">Angolan</option>
                                                            <option value="antiguans">Antiguans</option>
                                                            <option value="argentinean">Argentinean</option>
                                                            <option value="armenian">Armenian</option>
                                                            <option value="australian">Australian</option>
                                                            <option value="austrian">Austrian</option>
                                                            <option value="azerbaijani">Azerbaijani</option>
                                                            <option value="bahamian">Bahamian</option>
                                                            <option value="bahraini">Bahraini</option>
                                                            <option value="bangladeshi">Bangladeshi</option>
                                                            <option value="barbadian">Barbadian</option>
                                                            <option value="barbudans">Barbudans</option>
                                                            <option value="batswana">Batswana</option>
                                                            <option value="belarusian">Belarusian</option>
                                                            <option value="belgian">Belgian</option>
                                                            <option value="belizean">Belizean</option>
                                                            <option value="beninese">Beninese</option>
                                                            <option value="bhutanese">Bhutanese</option>
                                                            <option value="bolivian">Bolivian</option>
                                                            <option value="bosnian">Bosnian</option>
                                                            <option value="brazilian">Brazilian</option>
                                                            <option value="british">British</option>
                                                            <option value="bruneian">Bruneian</option>
                                                            <option value="bulgarian">Bulgarian</option>
                                                            <option value="burkinabe">Burkinabe</option>
                                                            <option value="burmese">Burmese</option>
                                                            <option value="burundian">Burundian</option>
                                                            <option value="cambodian">Cambodian</option>
                                                            <option value="cameroonian">Cameroonian</option>
                                                            <option value="canadian">Canadian</option>
                                                            <option value="cape verdean">Cape Verdean</option>
                                                            <option value="central african">Central African</option>
                                                            <option value="chadian">Chadian</option>
                                                            <option value="chilean">Chilean</option>
                                                            <option value="chinese">Chinese</option>
                                                            <option value="colombian">Colombian</option>
                                                            <option value="comoran">Comoran</option>
                                                            <option value="congolese">Congolese</option>
                                                            <option value="costa rican">Costa Rican</option>
                                                            <option value="croatian">Croatian</option>
                                                            <option value="cuban">Cuban</option>
                                                            <option value="cypriot">Cypriot</option>
                                                            <option value="czech">Czech</option>
                                                            <option value="danish">Danish</option>
                                                            <option value="djibouti">Djibouti</option>
                                                            <option value="dominican">Dominican</option>
                                                            <option value="dutch">Dutch</option>
                                                            <option value="east timorese">East Timorese</option>
                                                            <option value="ecuadorean">Ecuadorean</option>
                                                            <option value="egyptian">Egyptian</option>
                                                            <option value="emirian">Emirian</option>
                                                            <option value="equatorial guinean">Equatorial Guinean
                                                            </option>
                                                            <option value="eritrean">Eritrean</option>
                                                            <option value="estonian">Estonian</option>
                                                            <option value="ethiopian">Ethiopian</option>
                                                            <option value="fijian">Fijian</option>
                                                            <option value="filipino">Filipino</option>
                                                            <option value="finnish">Finnish</option>
                                                            <option value="french">French</option>
                                                            <option value="gabonese">Gabonese</option>
                                                            <option value="gambian">Gambian</option>
                                                            <option value="georgian">Georgian</option>
                                                            <option value="german">German</option>
                                                            <option value="ghanaian">Ghanaian</option>
                                                            <option value="greek">Greek</option>
                                                            <option value="grenadian">Grenadian</option>
                                                            <option value="guatemalan">Guatemalan</option>
                                                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                            <option value="guinean">Guinean</option>
                                                            <option value="guyanese">Guyanese</option>
                                                            <option value="haitian">Haitian</option>
                                                            <option value="herzegovinian">Herzegovinian</option>
                                                            <option value="honduran">Honduran</option>
                                                            <option value="hungarian">Hungarian</option>
                                                            <option value="icelander">Icelander</option>
                                                            <option value="indian">Indian</option>
                                                            <option value="indonesian">Indonesian</option>
                                                            <option value="iranian">Iranian</option>
                                                            <option value="iraqi">Iraqi</option>
                                                            <option value="irish">Irish</option>
                                                            <option value="israeli">Israeli</option>
                                                            <option value="italian">Italian</option>
                                                            <option value="ivorian">Ivorian</option>
                                                            <option value="jamaican">Jamaican</option>
                                                            <option value="japanese">Japanese</option>
                                                            <option value="jordanian">Jordanian</option>
                                                            <option value="kazakhstani">Kazakhstani</option>
                                                            <option value="kenyan">Kenyan</option>
                                                            <option value="kittian and nevisian">Kittian and Nevisian
                                                            </option>
                                                            <option value="kuwaiti">Kuwaiti</option>
                                                            <option value="kyrgyz">Kyrgyz</option>
                                                            <option value="laotian">Laotian</option>
                                                            <option value="latvian">Latvian</option>
                                                            <option value="lebanese">Lebanese</option>
                                                            <option value="liberian">Liberian</option>
                                                            <option value="libyan">Libyan</option>
                                                            <option value="liechtensteiner">Liechtensteiner</option>
                                                            <option value="lithuanian">Lithuanian</option>
                                                            <option value="luxembourger">Luxembourger</option>
                                                            <option value="macedonian">Macedonian</option>
                                                            <option value="malagasy">Malagasy</option>
                                                            <option value="malawian">Malawian</option>
                                                            <option value="malaysian">Malaysian</option>
                                                            <option value="maldivan">Maldivan</option>
                                                            <option value="malian">Malian</option>
                                                            <option value="maltese">Maltese</option>
                                                            <option value="marshallese">Marshallese</option>
                                                            <option value="mauritanian">Mauritanian</option>
                                                            <option value="mauritian">Mauritian</option>
                                                            <option value="mexican">Mexican</option>
                                                            <option value="micronesian">Micronesian</option>
                                                            <option value="moldovan">Moldovan</option>
                                                            <option value="monacan">Monacan</option>
                                                            <option value="mongolian">Mongolian</option>
                                                            <option value="moroccan">Moroccan</option>
                                                            <option value="mosotho">Mosotho</option>
                                                            <option value="motswana">Motswana</option>
                                                            <option value="mozambican">Mozambican</option>
                                                            <option value="namibian">Namibian</option>
                                                            <option value="nauruan">Nauruan</option>
                                                            <option value="nepalese">Nepalese</option>
                                                            <option value="new zealander">New Zealander</option>
                                                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                            <option value="nicaraguan">Nicaraguan</option>
                                                            <option value="nigerien">Nigerien</option>
                                                            <option value="north korean">North Korean</option>
                                                            <option value="northern irish">Northern Irish</option>
                                                            <option value="norwegian">Norwegian</option>
                                                            <option value="omani">Omani</option>
                                                            <option value="pakistani">Pakistani</option>
                                                            <option value="palauan">Palauan</option>
                                                            <option value="panamanian">Panamanian</option>
                                                            <option value="papua new guinean">Papua New Guinean</option>
                                                            <option value="paraguayan">Paraguayan</option>
                                                            <option value="peruvian">Peruvian</option>
                                                            <option value="polish">Polish</option>
                                                            <option value="portuguese">Portuguese</option>
                                                            <option value="qatari">Qatari</option>
                                                            <option value="romanian">Romanian</option>
                                                            <option value="russian">Russian</option>
                                                            <option value="rwandan">Rwandan</option>
                                                            <option value="saint lucian">Saint Lucian</option>
                                                            <option value="salvadoran">Salvadoran</option>
                                                            <option value="samoan">Samoan</option>
                                                            <option value="san marinese">San Marinese</option>
                                                            <option value="sao tomean">Sao Tomean</option>
                                                            <option value="saudi">Saudi</option>
                                                            <option value="scottish">Scottish</option>
                                                            <option value="senegalese">Senegalese</option>
                                                            <option value="serbian">Serbian</option>
                                                            <option value="seychellois">Seychellois</option>
                                                            <option value="sierra leonean">Sierra Leonean</option>
                                                            <option value="singaporean">Singaporean</option>
                                                            <option value="slovakian">Slovakian</option>
                                                            <option value="slovenian">Slovenian</option>
                                                            <option value="solomon islander">Solomon Islander</option>
                                                            <option value="somali">Somali</option>
                                                            <option value="south african">South African</option>
                                                            <option value="south korean">South Korean</option>
                                                            <option value="spanish">Spanish</option>
                                                            <option value="sri lankan">Sri Lankan</option>
                                                            <option value="sudanese">Sudanese</option>
                                                            <option value="surinamer">Surinamer</option>
                                                            <option value="swazi">Swazi</option>
                                                            <option value="swedish">Swedish</option>
                                                            <option value="swiss">Swiss</option>
                                                            <option value="syrian">Syrian</option>
                                                            <option value="taiwanese">Taiwanese</option>
                                                            <option value="tajik">Tajik</option>
                                                            <option value="tanzanian">Tanzanian</option>
                                                            <option value="thai">Thai</option>
                                                            <option value="togolese">Togolese</option>
                                                            <option value="tongan">Tongan</option>
                                                            <option value="trinidadian or tobagonian">Trinidadian or
                                                                Tobagonian
                                                            </option>
                                                            <option value="tunisian">Tunisian</option>
                                                            <option value="turkish">Turkish</option>
                                                            <option value="tuvaluan">Tuvaluan</option>
                                                            <option value="ugandan">Ugandan</option>
                                                            <option value="ukrainian">Ukrainian</option>
                                                            <option value="uruguayan">Uruguayan</option>
                                                            <option value="uzbekistani">Uzbekistani</option>
                                                            <option value="venezuelan">Venezuelan</option>
                                                            <option value="vietnamese">Vietnamese</option>
                                                            <option value="welsh">Welsh</option>
                                                            <option value="yemenite">Yemenite</option>
                                                            <option value="zambian">Zambian</option>
                                                            <option value="zimbabwean">Zimbabwean</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Residential Address</label>
                                                        <input type="text" class="form-control"
                                                               placeholder="Enter residential address"
                                                               name="appresidentaddress" readonly="" value="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Highest Educational
                                                            Qualification</label>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customCheck1" name="appjuniorhigh" disabled>
                                                            <label class="custom-control-label" for="customCheck1">Junior
                                                                High School</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customCheck2" name="appseniorhigh" disabled>
                                                            <label class="custom-control-label" for="customCheck2">Senior
                                                                High School</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customCheck3" name="appvocationalhigh" disabled>
                                                            <label class="custom-control-label" for="customCheck3">Vocational</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customCheck4" name="apptertiary" disabled>
                                                            <label class="custom-control-label" for="customCheck4">Tertiary</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customCheck5" name="apppostgraduate" disabled>
                                                            <label class="custom-control-label" for="customCheck5">Post
                                                                Graduate</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customCheck5" name="appnoeducertificate"
                                                                   disabled>
                                                            <label class="custom-control-label" for="customCheck5">No
                                                                Educational Certificate</label>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label">Profession</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter name of profession"
                                                                   name="appprofession" readonly="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Occupation</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter name of occupation"
                                                                   name="appoccupation" readonly="" value="">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label">Where Do You Currently
                                                                Work?</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter name of occupation"
                                                                   name="appcurrentwork" readonly="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Name Of Father</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter name of your father"
                                                                   name="appfathername" readonly="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Name Of Mother</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter name of your mother"
                                                                   name="appmothername" readonly="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Name Of Guardian</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter name of guardian"
                                                                   name="appguardianname" readonly="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Profession Of Father</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter fathers profession"
                                                                   name="appfatherprofession" readonly="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Profession Of Mother</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter mothers profession"
                                                                   name="appmotherprofession" readonly="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Profession Of Guardian</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter guardians profession"
                                                                   name="appguardianprofession" readonly="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Where Do You Live?</label>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadiolive1"
                                                                       name="customRadiolive"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadiolive1">City</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadiolive2"
                                                                       name="customRadiolive"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadiolive2">Town</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadiolive3"
                                                                       name="customRadiolive"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadiolive3">Village</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadiolive4"
                                                                       name="customRadiolive"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadiolive4">Slum</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Do Your Parents/Guardian Own A
                                                                House?</label>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadioown1"
                                                                       name="customRadioown"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadioown1">Yes</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadioown2"
                                                                       name="customRadioown"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadioown2">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Are Your Parents/Guardian
                                                                Renting A House?</label>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadiorent1"
                                                                       name="customRadiorent"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadiorent1">Yes</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadiorent2"
                                                                       name="customRadiorent"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadiorent2">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Do Your Parents/Guardian Own A
                                                                Car?</label>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadiocar1"
                                                                       name="customRadiocar"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadiocar1">Yes</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadiocar2"
                                                                       name="customRadiocar"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadiocar2">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Do Your Parents/Guardian Own A
                                                                Business?</label>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadiobus1"
                                                                       name="customRadiobus"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadiobus1">Yes</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadiobus2"
                                                                       name="customRadiobus"
                                                                       class="custom-control-input" disabled>
                                                                <label class="custom-control-label"
                                                                       for="customRadiobus2">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Who Will Sponsor Your Travel To
                                                                The Bible School</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter name of sponsorer"
                                                                   name="appsponsortravel" readonly="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">What Is Sponsorer's Phone
                                                                Number</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter phone number of sponsorer"
                                                                   name="appsponsorphone" readonly="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Who Will Take Care Of Your
                                                                Financial Needs In The Bible School</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter name of provider"
                                                                   name="appfinanceprovider" readonly="" value="">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label">Next Of Kin</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter next of kin" name="appnextofkin"
                                                                   readonly="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Next Of Kin Contact
                                                                Number</label>
                                                            <input type="number" class="form-control"
                                                                   placeholder="Enter next of kin contact number"
                                                                   name="appnextkinnumber" readonly="" value="">
                                                        </div>


                                            </section>
                                            <h3>CHURCH </h3>
                                            <section class="overflow-auto">
                                                <h3>Church</h3>
                                                <div class="form-group">
                                                    <label class="control-label">Name Of Your Church</label>
                                                    <input type="text" class="form-control" placeholder="Enter name of your church" name="appchurchname" readonly="" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Name Of Your Pastor</label>
                                                    <input type="text" class="form-control" placeholder="Enter name of your pastor" name="apppastorname" readonly="" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Name Of Bishop</label>
                                                    <input type="text" class="form-control" placeholder="Enter name of Bishop" name="appbishopname" readonly="" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Phone Number Of Your Pastor</label>
                                                    <input type="number" class="form-control" placeholder="Enter phone number of your pastor" name="apppastornumber" readonly="" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Is Your Church Part Of UD-OLGC?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioud1" name="customRadioud2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radioud1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioud2" name="customud2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radioud2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Are you born again?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioborn1" name="customRadio2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radioborn1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioborn2" name="customRadio2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radioborn2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-textarea">If Yes, Tell Us About Your Life Before
                                                        You Became Born Again</label>
                                                    <textarea class="form-control" id="example-textarea" rows="7" name="appborndescrip" readonly="" value=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-textarea">Tell Us How You Joined Your Present
                                                        Church</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5" name="appjoinchurchdescrip" readonly="" value=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-textarea">Tell Us About All The Different Roles
                                                        You Have Played In Your Church</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5" name="appchurchroledescrip" readonly="" value=""></textarea>
                                                </div>
                                            </section>
                                            <h3>CALLING</h3>
                                            <section class="overflow-auto">
                                                <h3>Calling</h3>
                                                <div class="form-group">
                                                    <label for="example-textarea">Why do You Want To Come To The Bible
                                                        School?</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5" name="appcomeschooldescrip" readonly="" value=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Do You Have A Calling From God?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadiorent1" name="customRadiorent"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label"
                                                               for="customRadiorent1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadiorent2" name="customRadiorent"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label"
                                                               for="customRadiorent2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="example-textarea">If Yes, Please Explain Why?</label>
                                                        <textarea class="form-control" id="example-textarea" rows="5"
                                                                  name="appwhycallfromGod" readonly=""
                                                                  value=""></textarea>
                                                    </div>
                                                </div>
                                                <h3>RECOMMENDED BY</h3>
                                                <section class="overflow-auto">

                                                    <div class="form-group">

                                                        <label for="example-select">I Am Recommended By</label>
                                                        <select class="form-control" id="example-select"
                                                                name="apprecommendedby" disabled>
                                                            <option>My Local Church Pastor</option>
                                                            <option>General Overseer</option>
                                                            <option>Senior Associate</option>
                                                            <option>Pastor</option>
                                                            <option>Bishop</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>If You Selected Other, Please Specify</label>
                                                        <input type="text" class="form-control" placeholder="" name="apprecommendedbydescrip" readonly="" value="">
                                                    </div>
                                                </section>
                                            </section>
                                            <h3>SOCIAL AND PAST</h3>
                                            <section class="overflow-auto">
                                                <div class="form-group">
                                                    <h3>Social And Past</h3>
                                                    <label class="control-label">Do You Use Narcotic Drugs(Cocaine,
                                                        Cannabis, Marijuana, etc)?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiodrug1" name="customRadiodrug2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radiodrug1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiodrug2" name="customRadiodrug2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radiodrug2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>If Yes, Please Explain</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"
                                                              name="appdrugsdescrip" readonly="" value=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Have You Ever Used Narcotic Drugs In
                                                        The Past?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radionardrug1"
                                                               name="customRadionardrug2" class="custom-control-input"
                                                               disabled>
                                                        <label class="custom-control-label"
                                                               for="radionardrug1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radionardrug2"
                                                               name="customRadionardrug2" class="custom-control-input"
                                                               disabled>
                                                        <label class="custom-control-label"
                                                               for="radionardrug2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>If Yes, Please Explain</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"
                                                              name="apppastdrugsdescrip" readonly=""
                                                              value=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Have You Been Arrested by The Police
                                                        Before?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radionarres1" name="customRadioarres2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label"
                                                               for="radionarres1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radionarres2" name="customRadionarres2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label"
                                                               for="radionarres2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>If Yes, Please Explain</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"
                                                              name="apparrestdescrip" readonly="" value=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Have You Been Prosecuted In Court
                                                        Before?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiopros1" name="customRadiopros2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radiopros1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiopros2" name="customRadiopros2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radiopros2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>If Yes, Please Explain</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"
                                                              name="appcourtdescrip" readonly="" value=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Have You Been To Jail Before?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiojail1" name="customRadiojail2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radiojail1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiojail2" name="customRadiojail2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radiojail2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>If Yes, Please Explain</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"
                                                              name="appjaildescrip" readonly="" value=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Do You Currently Drink Alcoholic
                                                        Drinks?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioalcholic1"
                                                               name="customRadioalcholic2" class="custom-control-input"
                                                               disabled>
                                                        <label class="custom-control-label"
                                                               for="radioalcholic1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioalcholic2"
                                                               name="customRadioalcholic2" class="custom-control-input"
                                                               disabled>
                                                        <label class="custom-control-label"
                                                               for="radioacholic2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>If Yes, Please Explain</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"
                                                              name="appalcoholdescrip" readonly="" value=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Have You Drank Alcoholic Drinks In The
                                                        Past?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiopastalcholic1"
                                                               name="customRadiopastalcholic2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label"
                                                               for="radiopastalcholic1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiopastalcholic2"
                                                               name="customRadiopastalcholic2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label"
                                                               for="radiopastalcholic2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>If Yes, Please Explain</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"
                                                              name="apppastalcoholdescrip" readonly=""
                                                              value=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Are You A Virgin?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiovirgin1" name="customRadiovirgin2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label"
                                                               for="radiovirgin1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiovirgin2" name="customRadiovirgin2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label"
                                                               for="radiovirgin2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Indicate Which Of The Following You Have Been Involved In</label>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckinvolve1" disabled>
                                                        <label class="custom-control-label" for="customCheckinvolve1">Fornication</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckinvolve2" disabled>
                                                        <label class="custom-control-label" for="customCheckinvolve2">Adultery</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckinvolve3" disabled>
                                                        <label class="custom-control-label" for="customCheckinvolve3">Abortion</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckinvolve4" disabled>
                                                        <label class="custom-control-label" for="customCheckinvolve4">Masturbation</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckinvolve5" disabled>
                                                        <label class="custom-control-label" for="customCheckinvolve5">Pornography</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckinvolve6" disabled>
                                                        <label class="custom-control-label" for="customCheckinvolve6">Homosexuality</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckinvolve7" disabled>
                                                        <label class="custom-control-label" for="customCheckinvolve7">Lesbianism</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckinvolve7" disabled>
                                                        <label class="custom-control-label" for="customCheckinvolve7">None
                                                            Of The Above</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Have You Been Involved In Any Of The
                                                        Following Activities?</label>
                                                    <br>
                                                    <div class="form-group">
                                                        <label class="control-label">I)Armed Robbery?</label>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="radioactivity1"
                                                                   name="customRadioactivity2"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label"
                                                                   for="radioactivity1">Yes</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="radioactivity2"
                                                                   name="customRadioactivity2"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label"
                                                                   for="radioactivity2">No</label>
                                                        </div>
                                                    </div>
                                                    <label>If Yes, Please Explain</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"
                                                              name="approbdescrip" readonly="" value=""></textarea>
                                                    <br>
                                                    <div class="form-group">
                                                        <label class="control-label">II)Revolution/Rebel Activities?</label>

                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="radioactivityr1"
                                                                   name="customRadioactivityr2"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label" for="radioactivityr1">Yes</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="radioactivityr2"
                                                                   name="customRadioactivityr2"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label"
                                                                   for="radioactivityr2">No</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>If Yes, Please Explain</label>
                                                        <textarea class="form-control" id="example-textarea" rows="5" name="apprebeldescrip" readonly="" value=""></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">III)Prostitution?</label>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="radioactivityp1"
                                                                   name="customRadioactivityp2"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label" for="radioactivityp1">Yes</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="radioactivityp2"
                                                                   name="customRadioactivityp2"
                                                                   class="custom-control-input" disabled>
                                                            <label class="custom-control-label"
                                                                   for="radioactivityp2">No</label>
                                                        </div>

                                                    </div>
                                                    <label>If Yes, Please Explain</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"
                                                              name="appprostitutedescrip" readonly=""
                                                              value=""></textarea>
                                                </div>
                                            </section>
                                            <h3>HEALTH</h3>
                                            <section class="overflow-auto">
                                                <div class="form-group">
                                                    <h3>Health</h3>
                                                    <label class="control-label">Do You Have Any Serious Medical
                                                        Condition?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiomed1" name="customRadiomed2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radiomed1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiomed2" name="customRadiomed2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radiomed2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Are You On Any Regular
                                                        Medication?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioregmed1" name="customRadioregmed2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label"
                                                               for="radioregmed1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radioregmed2" name="customRadioregmed2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label"
                                                               for="radioregmed2">No</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>If Yes, Please Explain</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                           name="appregmeddescrip" readonly="" value="">
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Have You Had Any Major
                                                        Surgeries?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiosug1" name="customRadiosug2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radiosug1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="radiosug2" name="customRadiosug2"
                                                               class="custom-control-input" disabled>
                                                        <label class="custom-control-label" for="radiosug2">No</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>If Yes, Please Specify</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                           name="appmajorsurgerydescrip" readonly="" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Select the following diseases you have been treated for in the past;</label>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckdiseases1" disabled>
                                                        <label class="custom-control-label" for="customCheckdiseases1">Asthma</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckdiseases2" disabled>
                                                        <label class="custom-control-label" for="customCheckdiseases2">Food
                                                            Allergy</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckdiseases3" disabled>
                                                        <label class="custom-control-label" for="customCheckdiseases3">Other
                                                            Allergy</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckdiseases4" disabled>
                                                        <label class="custom-control-label" for="customCheckdiseases4">Drug
                                                            Allergy</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckdiseases5" disabled>
                                                        <label class="custom-control-label" for="customCheckdiseases5">Diabetes</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckdiseases6" disabled>
                                                        <label class="custom-control-label" for="customCheckdiseases6">Hypertension</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckdiseases7" disabled>
                                                        <label class="custom-control-label" for="customCheckdiseases7">TB</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckdiseases8" disabled>
                                                        <label class="custom-control-label" for="customCheckdiseases8">Mental
                                                            Illness</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckdiseases9" disabled>
                                                        <label class="custom-control-label" for="customCheckdiseases9">Epilepsy</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckdiseases10" disabled>
                                                        <label class="custom-control-label" for="customCheckdiseases10">Sickle
                                                            Cell Disease</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheckdiseases10" disabled>
                                                        <label class="custom-control-label" for="customCheckdiseases10">None</label>
                                                    </div>
                                                    <label>Any Other Allergy, Please Specify</label>
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter in your allergies"
                                                           name="appotherallergydescrip" readonly="" value="">
                                                </div>
                                            </section>
                                            <h3>REQUIREMENTS</h3>
                                            <section class="overflow-auto">
                                                <div class="form-group">
                                                    <h3>Requirements</h3>
                                                    <label for="exampleTextarea1">Requirements For All Students</label>
                                                    <textarea class="form-control" id="exampleTextarea1" rows="7"
                                                              readonly="" value="Readonly value">
Please make sure that you have obtained or done the following, before leaving your country of origin.
1. School Certificate
2. Bible School Medical Checklist
3. Recommendation Letter
4. Responsibility Form
5. Administration Fee : Local students - 645 cedis. International students - $235.

                                            </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleTextarea1">Requirements For International
                                                        Students</label>
                                                    <textarea class="form-control" id="exampleTextarea1" rows="9"
                                                              readonly="" value="Readonly value">
Please make sure that you have obtained or done the following, before leaving your country of origin.
1. Valid Passport.
2. Ghana Visa for students travelling to Ghana.
3. International Yellow Fever Vaccination Card. (Injection should have been taken more than 10 days before date of arrival in Accra)
4. Recent Medical Report including TB and HIV status.
5. Police Clearance Reports, please attach the Report with the form.
6. Start Prophylactic Anti Malaria Medications two weeks before leaving your country. Please obtain enough dosages to continue for another 6 weeks whilst in Ghana.
                                            </textarea>
                                                </div>
                                            </section>
                                            <h3>FINISH</h3>
                                            <section class="overflow-auto">
                                                <h3>Finish</h3>
                                                <div class="form-check">
                                                    <div class="col-sm-4">
                                                        I<input type="text" id="example-gridsize" class="form-control"
                                                                placeholder="Enter full name" name="appnamefinshdescrip"
                                                                readonly="" value="">declare that the answers I have
                                                        provided are true and accurate to the best of my knowledge. I am
                                                        fully aware that should I be admitted and it be discovered
                                                        during my stay as a student that I withheld any relevant
                                                        information, I will be immediately withdrawn from the school.
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label">Signature</label>
                                                    <input type="email" class="form-control" placeholder="Enter full name" name="appsignaturedescrip" readonly="" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Date</label>
                                                    <input type="email" class="form-control" placeholder="Enter date" name="appfinishdatedescrip" readonly="" value="">
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