<?php
session_start();

if ($_SESSION['loggedin'] == false) {
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ABMTC Interview Page</title>

    <!-- Favicon -->
    <link rel="icon" href="ABTMC.png" style="width: 50px; height: 50px">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
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
            <!-- Basic Form area Start -->
            <div class="container-fluid">
                <!-- Form row -->
                <div class="row">

                </div>


                <div class="col-12 box-margin height-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Interview Stage</h4>
                            <div style="float:right">Time left : <span id="timer">00:15:00</span></div>
                            <p class="card-description">
                                Please fill in every question
                            </p>

                            <form action="PHP_Files/submit_interviewanswers.php" id="inerview_form" method="post"
                                  class="forms-sample">
                                <div class="form-group">
                                    <label class="control-label">Are you a born again Christian?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radioborn1" name="question1" value="Yes"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radioborn1">Yes</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radioborn2" name="question1" value="No"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radioborn2">No</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">What does it mean to be a born again Christian?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiomeanborn1" name="question2"
                                               value="Going to church everyday" class="custom-control-input">
                                        <label class="custom-control-label" for="radiomeanborn1">Going to church
                                            everyday</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiomeanborn2" name="question2"
                                               value="Accepting Jesus as your Lord and Personal Saviour"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiomeanborn2">Accepting Jesus as your
                                            Lord and Personal Saviour</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiomeanborn3" name="question2"
                                               value="Being born into a Christian family" class="custom-control-input">
                                        <label class="custom-control-label" for="radiomeanborn3">Being born into a
                                            Christian family</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">When were you born again?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiowhenborn1" name="question3"
                                               value="Less than a year" class="custom-control-input">
                                        <label class="custom-control-label" for="radiowhenborn1">Less than a
                                            year</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiowhenborn2" name="question3" value="1-5 years ago"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiowhenborn2">1-5 years ago</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiowhenborn3" name="question3"
                                               value="More than 5 years ago" class="custom-control-input">
                                        <label class="custom-control-label" for="radiowhenborn3">More than 5 years
                                            ago</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">How long have you been in church for?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiowhenchurch1" name="question4"
                                               value="Less than a year" class="custom-control-input">
                                        <label class="custom-control-label" for="radiowhenchurch1">Less than a
                                            year</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiowhenchurch2" name="question4" value="1-5 years ago"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiowhenchurch2">1-5 years ago</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiowhenchurch3" name="question4"
                                               value="More than 5 years ago" class="custom-control-input">
                                        <label class="custom-control-label" for="radiowhenchurch3">More than 5 years
                                            ago</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">What does it mean to be a new creature in
                                        Christ?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiocreature1" name="question5"
                                               value="Anyone who belongs to Christ has changed their old ways"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiocreature1">Anyone who belongs to
                                            Christ has changed their old ways</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiocreature2" name="question5"
                                               value="Going to church every Sunday" class="custom-control-input">
                                        <label class="custom-control-label" for="radiocreature2">Going to church every
                                            Sunday</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiocreature3" name="question5"
                                               value="Wearing new clothes" class="custom-control-input">
                                        <label class="custom-control-label" for="radiocreature3">Wearing new
                                            clothes</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Which of your old habits have passed away?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiohabits1" name="question6" value="Sexual"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiohabits1">Sexual</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiohabits2" name="question6" value="Stealing/Lying"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiohabits2">Stealing/Lying</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiohabits3" name="question6" value="Other"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiohabits3">Other</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="example-textarea">If You Selected Other Please Comment</label>
                                    <textarea class="form-control" id="example-textarea1" name="question7"
                                              rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">When Did You Stop Your Old Habits?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiooldhabits1" value="Not Stopped" name="question8"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiooldhabits1">Not Stopped</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiooldhabits2" name="question8" value="Recently"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiooldhabits2">Recently</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiooldhabits3" name="question8"
                                               value="More Than A Year Ago" class="custom-control-input">
                                        <label class="custom-control-label" for="radiooldhabits3">More Than A Year
                                            Ago</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiooldhabits4" name="question8" value="Other"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiooldhabits4">Other</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="other_example-textarea">If You Selected Other Please Comment</label>
                                    <textarea class="form-control" id="other_example-textarea" name="question9"
                                              rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Is your pastor aware of the problem you have? (If you
                                        have a problem)</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radioproblem1" name="question10" value="Yes"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radioproblem1">Yes</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radioproblem2" name="question10" value="No"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radioproblem2">No</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <input type="text" class="form-control" name="question11"
                                               placeholder="Enter comment">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">What is your role in the church?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiorole1" name="question12"
                                               value="Active church worker" class="custom-control-input">
                                        <label class="custom-control-label" for="radiorole1">Active church
                                            worker</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiorole2" name="question12" value="Only attend"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiorole2">Only attend</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiorole3" name="question12" value="Other"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiorole3">Other</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-textarea">If You Selected Other Please Comment</label>
                                    <textarea class="form-control" id="example-textarea" name="question13"
                                              rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Select John 3:16</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiojohn1" name="question14"
                                               value="For God so loved the world, that we will all go to heaven"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiojohn1">For God so loved the world,
                                            that we will all go to heaven</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiojohn2" name="question14"
                                               value="For God so loved the world, that Jesus died for our sins"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiojohn2">For God so loved the world,
                                            that Jesus died for our sins</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiojohn3" name="question14"
                                               value="For God so loved the world, that he gave his only begotten son, for whosever believes in him will not perish but have everlasting life"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiojohn3">For God so loved the world,
                                            that he gave his only begotten son, for whosever believes in him will not
                                            perish but have everlasting life</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Select Genesis 1:1</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiogenesis1" name="question15"
                                               value="In the beginning the earth was without form"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiogenesis1">In the beginning the
                                            earth was without form</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiogenesis2" name="question15"
                                               value="In the beginning God created the heaven and the earth"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiogenesis2">In the beginning God
                                            created the heaven and the earth</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radiogenesis3" name="question15"
                                               value="In the beginning God said, Let there be light"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="radiogenesis3">In the beginning God
                                            said, Let there be light</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Explain why you want to come to the Bible
                                        School</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radioschool1" name="question16"
                                               value="I believe I am called" class="custom-control-input">
                                        <label class="custom-control-label" for="radioschool1">I believe I am
                                            called</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radioschool2" name="question16"
                                               value="To meet new people" class="custom-control-input">
                                        <label class="custom-control-label" for="radioschool2">To meet new
                                            people</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radioschool3" name="question16"
                                               value="To live away from home" class="custom-control-input">
                                        <label class="custom-control-label" for="radioschool3">To live away from
                                            home</label>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
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
<script>
    $(document).ready(function () {
        alert('This is a timed test (15 Minutes)');
        document.getElementById("timerbutton").click();
    });
</script>

<script>
    startTimer();

    function startTimer() {
        if (document.getElementById('timer').innerHTML == "00:00:00") {
            alert("Submitting Results");
            document.getElementById('inerview_form').submit();
        }
        var presentTime = document.getElementById('timer').innerHTML;
        var timeArray = presentTime.split(/[:]+/);
        var h = timeArray[0];
        var m = timeArray[1];
        var s = checkSecond((timeArray[2] - 1));
        if (s == 59) {
            m = m - 1
        }
        if ((m + '').length == 1) {
            m = '0' + m;
        }
        if (m < 0) {
            m = '59';
        }
        document.getElementById('timer').innerHTML = h + ":" +
            m + ":" + s;
        setTimeout(startTimer, 1000);
    }

    function checkSecond(sec) {
        if (sec < 10 && sec >= 0) {
            sec = "0" + sec
        } // add zero in front of numbers < 10
        if (sec < 0) {
            sec = "59"
        }
        return sec;
}

</script>

<script>
function myFunction() {
    alert('Hello');
}
</script>
</body>

</html>