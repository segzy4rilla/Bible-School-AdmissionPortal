<?php
session_start();

if (!$_SESSION['loggedin'] || $_SESSION['isAdmin']) {
    header('Location: loginabmtc.html');
}

require("PHP_Files/getAdminHomeLink.php");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ABMTC Document Upload</title>

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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin height-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="wizard-form-area">
                                    <h5 class="card-title">Upload Documents</h5>

                                    <form id="example-form" action="PHP_Files/documentUpload.php" method="post"
                                          enctype="multipart/form-data">
                                        <div class="overflow-auto">
                                            <h3>EDUCATION</h3>
                                            <section class="overflow-auto">
                                                <div class="form-group">
                                                    <h3>Education Certficate</h3>
                                                    <label>Education Certficate (Highest Level)</label>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5"></textarea>
                                                </div>
                                            </section>
                                            <h3>MEDICAL REPORT</h3>

                                            <section class="overflow-auto">
                                                <h3>Medical Report</h3>
                                                <div class="form-group">
                                                    <br>
                                                    <center><b>Click On The Images To Download Medical Assessment
                                                            Forms</b>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <a href="medicalassessment2.pdf" download>
                                                            <img src="medicalassessment2.png"
                                                                 alt="assessmentpreview.png" width="180"
                                                                 height="218"></a>
                                                    </center>
                                                    <h6><b>Please note:</b>
<br>
<br>
<b> There is a difference between a lab test and a doctors comment.</b>
<br>
<b>- The actual lab test should be uploaded.</b>
<br>
<b>- The doctors comments should be written on the Bible School Medical Assessment document upload.</b>
<br>
<b>- A Chest X-ray report is an official lab report.</b>
<br>
<b>- Mental Health Assessment should be test results from a Mental Status Exam or the doctor signing that you are mentally fit (which is different from being medically fit).</b></h6>
<br><br>
<div class="col-12 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Test Report Examples</h4>
            <!-- Button trigger modal -->
            <h6><b>PLEASE MAKE SURE THAT YOUR REPORT CONFORMS WITH THESE PROVIDED EXAMPLES.</b>
                <br>
                <br>
                <center>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#blood">
                        Example Of Lab Test Report
                    </button>
                    <p></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#xray">
                        Example Chest X-Ray Report
                    </button>
                    <p></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#xraypic">
                        Example Chest X-Ray Picture
                    </button>
                    <p></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mental">
                        Example Mental Status Exam
                    </button>
                    <p></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hiv">
                        Example HIV Lab Test
                    </button>
                </center>

                <!-- Modal -->
                <div class="modal fade" id="blood" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Lab Test Report</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="CBCTestResults.jpg" alt="Mobile Logo">
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="xray" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Chest X-Ray Report</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="xray2.png" alt="Mobile Logo">
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="xraypic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Chest X-Ray Picture</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="chestxray.jpeg" alt="Mobile Logo">
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="mental" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Mental Status Exam</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="mental.png" alt="Mobile Logo">
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="hiv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">HIV Lab Test</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="hiv.jpg" alt="Mobile Logo">
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<br>

                                                    <br>
                                                    <label>Full Blood Count Lab Test Report</label>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5" name="blooddescrip"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Urine Routine Examination Lab Test Report</label>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5" name="urinedescrip"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Stool Routine Examination Lab Test Report</label>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5" name="stooldescrip"></textarea>
                                                </div>


                                                <div class="form-group">
                                                    <label>Sickling Test Lab Test Report</label>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5" name="sicklingdescrip"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>HIV Test Lab Test Report</label>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5" name="hivdescrip"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Picture Of Chest X-Ray</label>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5" name="chestimagedescrip"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Official Chest X-Ray Report</label>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5" name="chestreportdescrip"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mental Health Assessment</label>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5" name="mentaldescrip"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Bible School Medical Assessment Form</label>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form"
                                                              rows="5" name="biblemeddescrip"></textarea>
                                                </div>
                                            </section>
                                            <h3>RECOMMENDATION</h3>
                                            <section class="overflow-auto">
                                                <h3>Recommendation</h3>
                                                <div class="form-group">
                                                    <label>Letter Of Recommendation From Your Pastor</label>
                                                    <br>
                                                    <h6><b>Please note:</b></h6>
                                                    <br>
                                                    <p>Recommendation Letter must have a church letterhead or stamp</p>
                                                    <input type="file" name="img1[]" class="file-upload-default"
                                                           style="display:none;">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Upload Image">
                                                        <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                                    </div>
                                                    <span class="help-block"><small>If your church does not have a letterhead or stamp please upload the letter and write the name of your church, pastors name and pastors number in the text below.</small></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5" name="recommenddescrip"></textarea>
                                                </div>
                                            </section>
                                            <h3>POLICE REPORT</h3>
                                            <section class="overflow-auto">
                                                <h3>Police Report</h3>
                                                <div class="form-group">
                                                    <label>Police Report (International Students Only)</label>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5" name="polreportdescrip"></textarea>
                                                </div>
                                            </section>
											
											<h3>EMPLOYMENT RECOMMENDATION</h3>
                                            <section class="overflow-auto">
                                                <h3>Employment Recommendation</h3>
                                                <div class="form-group">
                                                    <label>Letter Of Recommendation From Your Employer</label>
                                                    <br>
                                                    <h6><b>Please note:</b></h6>
                                                    <br>
                                                    <p>Recommendation Letter must state the role of the writer of the letter and inlcude a signature</p>
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
                                                    <label for="example-textarea">Please comment if there is difficulty
                                                        in getting this document and explain why</label>
                                                    <textarea class="form-control" name="comment[]" form="example-form" rows="5" name="recommenddescrip"></textarea>
                                                </div>
                                            </section>

                                            <h3>FINISH</h3>
                                            <section class="overflow-auto">
                                                <h3>Finish</h3>
                                                <div class="form-check">
                                                    <div class="col-sm-4">
                                                        I<input type="text" id="example-gridsize" class="form-control"
                                                                placeholder="Enter full name"
                                                                name="finishuploaddescrip">declare that the answers I
                                                        have provided are true and accurate to the best of my knowledge.
                                                        I am fully aware that should I be admitted and it be discovered
                                                        during my stay as a student that I withheld any relevant
                                                        information, I will be immediately withdrawn from the school.
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label">Signature</label>
                                                    <input type="text" class="form-control" placeholder="Enter full name" name="signatureupload">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Date</label>
                                                    <input type="date" class="form-control" placeholder="Enter date" name="dateupload">
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
<script src="js/documentUpload.js"></script>
<script src="js/default-assets/file-upload.js"></script>

<script src="js/default-assets/modal-classes.js"></script>
<script src="js/default-assets/modaleffects.js"></script>


<script src="js/default-assets/basic-form.js"></script>

</body>

</html>