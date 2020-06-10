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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ABMTC Admission Letter</title>

    <!-- Favicon -->
    <link rel="icon" href="ABTMC.png">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="print.css">

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
                        <li><a href="index.html"><i class="zmdi zmdi-view-web"></i> <span>Dashboard</span></a></li>
                        <!--<li class="treeview">-->
                        <!--    <a href="javascript:void(0)"><i class="zmdi zmdi-code-smartphone"></i> <span></span> <i class="fa fa-angle-right"></i></a>-->
                        <!--    <ul class="treeview-menu">-->
                        <!--        <li><a href="calendar.html"></a></li>-->
                        <!--        <li><a href="widgets.html"></a></li>-->
                        <!--        <li><a href="chat-box.html"></a></li>-->
                        <!--        <li><a href="timeline.html"></a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
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
                        <!--        <li class="active"><a href="basic-form.html">- Basic Form</a></li>-->
                        <!--        <li><a href="advanced-elements.html">- Elements</a></li>-->
                        <!--        <li><a href="form-validation.html">- Validation</a></li>-->
                        <!--        <li><a href="form-wizard.html">- Form Wizard</a></li>-->
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
            <!-- Basic Form area Start -->
            <div class="container-fluid">
                <!-- Form row -->
                <div class="row">

                </div>


                <div class="col-12 box-margin height-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-description">

                            </p>


                            <form class="forms-sample">
                                <!--<a href="https://github.com/joseluisq/printd" target="_blank" class="github-corner"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:rgba(100,100,100,.75); color:#fff; z-index:7; position: absolute; top: 0; border: 0; right: 0;"><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out;}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>-->
<!-- //github-ribbon -->


                                <!-- vue-component -->
<!--<div id="app" class="printing">-->
                                <h1>Admission Letter</h1>


                                <p>
                                    <b>Please print this document</b>
                                </p>

                                <br>

                                <iframe src="admissionletter.pdf" width="100%" height="500px">
                                </iframe>


                                <!--<a href="https://vuejs.org/" target="_blank"><img src="https://vuejs.org/images/logo.png" width="140" height="140"></a>-->

                                <br>
                                <br>

                                <!-- <pre>
                                  import Printd from 'printd'

                                  const p: Printd = new Printd()
                                  p.print(this.$el, '.color { color: blue; }')
                                </pre> -->


                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


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


<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js'></script>
<script src='https://unpkg.com/printd@1.3.1/printd.umd.min.js'></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bundle.js"></script>
<script src="js/default-assets/setting.js"></script>
<script src="js/default-assets/fullscreen.js"></script>

<!-- Active JS -->
<script src="js/default-assets/active.js"></script>

<!-- These plugins only need for the run this page -->
<script src="js/default-assets/file-upload.js"></script>
<script src="js/default-assets/basic-form.js"></script>

<script src="print.js"></script>
<script>
    $('.js__action--print').click(function () {
        window.print();
        return false;
    });
</script>

</body>

</html>