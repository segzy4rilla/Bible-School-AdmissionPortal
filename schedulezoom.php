<?php
session_start();

if ($_SESSION['loggedin'] == false || !$_SESSION['isAdmin']) {
    header('Location: loginabmtc.html');
}

require("dbconfig/config.php");
require("PHP_Files/getAdminHomeLink.php");

$query = "
    SELECT A.User_ID, A.First_Name, A.Last_Name, A.Nationality, A.Church_Part_Of_UD, A.EmailWhatsapp, B.Date, B.Time, B.Link, B.Comments, B.Admitted
    FROM Applicant_Table AS A 
    LEFT JOIN ZoomInterview AS B
    ON A.User_ID = B.ID
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
    <title>ABMTC - Schedule Meeting Page</title>

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

        .scrolltable {
            overflow: scroll;
            height: 100px;
        }

        #myItems {
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
            <a href="admindash2.php">
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
                    <a href="admindash2.php">
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
                    <a href="admindash2.php"><img src="ABTMC.png" alt="Mobile Logo"></a>
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
                                <h4 class="card-title mb-2">Schedule A Zoom Interview</h4>
                                <p class="text-muted font-13 mb-4">

                                </p>
                                <div>
                                    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Country</th>
                                            <th>Member Of UD</th>
                                            <th>Email/WhatsApp</th>
                                            <th>Interview Date</th>
                                            <th>Time (Ghana Time)</th>
                                            <th>Zoom Link</th>
                                            <th>Comments</th>
                                            <th>Admitted</th>
                                            <th>Select Student</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td name='appID'>" . $row['User_ID'] . "</td>";
                                            echo "<td>" . $row['First_Name'] . "</td>";
                                            echo "<td>" . $row['Last_Name'] . "</td>";
                                            echo "<td>" . $row['Nationality'] . "</td>";
                                            echo "<td>" . $row['Church_Part_Of_UD'] . "</td>";
                                            echo "<td>" . $row['EmailWhatsapp'] . "</td>";
                                            echo "<td>" . $row['Date'] . "</td>";
                                            echo "<td>" . $row['Time'] . "</td>";
                                            echo "<td>" . $row['Link'] . "</td>";
                                            echo "<td>" . $row['Comments'] . "</td>";
                                            echo "<td>" . $row['Admitted'] . "</td>";
                                            echo "<td name='selected'><input type='checkbox'/></td>";
                                            echo "</tr>";
                                        }
                                        ?>

                                        </tbody>

                                    </table>
                                </div>
                                <div style="padding-right: 15px">
                                    <button class="btn btn-primary md-trigger mr-2 mb-2" data-modal="modal-13"
                                            width="10em">Schedule A Meeting
                                    </button>
                                </div>
								<div style="padding-right: 15px">
                                    <button class="btn btn-primary md-trigger mr-2 mb-2" data-modal="modal-14"
                                            width="10em"
											onclick="$('#resModal').addClass('md-show')">Make Response
                                    </button>
                                </div>
                                <div class="md-modal md-effect-13" id="modal-13">
                                    <div class="md-content">
                                        <h3 class="bg-info">Schedule A Meeting</h3>
                                        <form id="scheduleMeetingForm" action="PHP_Files/zoomSchedule.php"
                                              method="Post">
                                            <div>
                                                <label>Zoom Link</label>
                                            </div>
                                            <div style="margin-bottom: 5px">
                                                <input type="text" name="zoomLink" width="10em"/>
                                            </div>
                                            <div>
                                                <label>Date</label>
                                            </div>
                                            <div style="margin-bottom: 5px">
                                                <input type="date" name="zoomDate" width="10em"/>
                                            </div>
                                            <div>
                                                <label>Time</label>
                                            </div>
                                            <div style="margin-bottom: 5px">
                                                <input type="time" name="zoomTime" width="10em"/>
                                            </div>
                                            <div style="margin-bottom: 5px">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
											<span onclick="$('#modal-13').removeClass('md-show')" >close</span>
                                        </form>
                                    </div>
                                </div>
								
								<div class="md-modal md-effect-13" id="resModal">
                                    <div class="md-content">
                                        <h3 class="bg-info">Make Response</h3>
                                        <form id="responseForm" action="PHP_Files/zoomResponse.php"
                                              method="Post">
                                            <div>
                                                <label>Comments</label>
                                            </div>
                                            <div style="margin-bottom: 5px">
                                                <input type="text" name="comments" width="200px"/>
                                            </div>
                                            <div>
                                                <label>Response</label>
                                            </div>
                                            <div style="margin-bottom: 5px">
                                                <select name="response">
													<option value="" disabled selected>Select Response</option>
													<option value="Admitted">Admitted</option>
													<option value="Rejected">Rejected</option>
												</select>
                                            </div>
                                            <div style="margin-bottom: 5px">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
											<span onclick="$('#resModal').removeClass('md-show')" >close</span>
                                        </form>
                                    </div>
                                </div>
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
                                <marquee input type="text" class="form-control" id="example-disable" disabled=""
                                         value="Disabled value"><font color="black" font size="4.8">
                                        --KABUL--
--TIRANA--
--ALGIERS--
--ANDORRA LA VELLA--
--LUANDA--
--SAINT JOHN'S--
--BUENOS AIRES--
--YEREVAN--
--CANBERRA--
--VIENNA--
--BAKU--
--NASSAU--
--MANAMA--
--DHAKA--
--BRIDGETOWN--
--MINSK--
--BRUSSELS--
--BELMOPAN--
--PORTO-NOVO--
--THIMPHU--
--SUCRE--
--SARAJEVO--
--GABORONE--
--BRASILIA--
--BANDAR SERI BEGAWAN--
--SOFIA--
--OUAGADOUGOU--
--BUJUMBURA--
--PRAIA--
--PHNOM PENH--
--YAOUNDE--
--OTTAWA--
--BANGUI--
--N'DJAMENA--
--SANTIAGO--
--BEIJING--
--BOGOTÁ--
--MORONI--
--KINSHASA--
--SAN JOSE--
--YAMOUSSOUKRO--
--ZAGREB--
--HAVANA--
--NICOSIA--
--PRAGUE--
--COPENHAGEN--
--DJIBOUTI (CITY)--
--ROSEAU--
--SANTO DOMINGO--
--QUITO--
--CAIRO--
--SAN SALVADOR--
--MALABO--
--ASMARA--
--TALLINN--
--ABANE--
--ABABA--
--PALIKIR--
--SUVA--
--HELSINKI--
--PARIS--
--LIBREVILLE--
--THE   BANJUL--
--TBILISI--
--BERLIN--
--ACCRA--
--ATHENS--
--SAINT GEORGE'S--
--GUATEMALA CITY--
--CONAKRY--
--BISSAU--
--GEORGETOWN--
--ORT-AU-PRINCE--
--TEGUCIGALPA--
--BUDAPEST--
--REYKJAVIK--
--DELHI--
--JAKARTA--
--HRAN--
--BAGHDAD--
--DUBLIN--
--JERUSALEM--
--ROME--
--KINGSTON--
--TOKYO--
--AMMAN--
--NUR-SULTAN--
--NAIROBI--
--SOUTH TARAWA--
--PRISTINA--
--KUWAIT CITY--
--BISHKEK--
--VIENTIANE--
--RIGA--
--BEIRUT--
--MASERU--
--MONROVIA--
--TRIPOLI--
--VADUZ--
--VILNIUS--
--LUXEMBOURG--
--ANTANANARIVO--
--LILONGWE--
--KUALA LUMPUR--
--MALE--
--BAMAKO--
--VALLETTA--
--MAJURO--
--NOUAKCHOTT--
--PORT LOUIS--
--MEXICO CITY--
--CHISINAU--
--MONACO--
--ULAANBAATAR--
--PODGORICA--
--RABAT--
--MAPUTO--
--NAY PYI TAW--
--WINDHOEK--
--YAREN DISTRICT--
--KATHMANDU--
--AMSTERDAM--
--WELLINGTON--
--MANAGUA--
--NIAMEY--
--ABUJA--
--PYONGYANG--
--SKOPJE--
--OSLO--
--MUSCAT--
--ISLAMABAD--
--NGERULMUD--
--EAST JERUSALEM--
--PANAMA CITY--
--PORT MORESBY--
--ASUNCIÓN--
--LIMA--
--MANILA--
--WARSAW--
--LISBON--
--DOHA--
--BRAZZAVILLE--
--BUCHAREST--
--MOSCOW--
--KIGALI--
--BASSETERRE--
--CASTRIES--
--KINGSTOWN--
--APIA--
--MARINO--
--TOMÉ--
--RIYADH--
--DAKAR--
--BELGRADE--
--VICTORIA--
--FREETOWN--
--SINGAPORE--
--BRATISLAVA--
--LJUBLJANA--
--HONIARA--
--MOGADISHU--
--CAPE TOWN--
--SEOUL--
--JUBA--
--MADRID--
--COLOMBO--
--KHARTOUM--
--PARAMARIBO--
--STOCKHOLM--
--BERN--
--DAMASCUS--
--DUSHANBE--
--DODOMA--
--BANGKOK--
--DILI--
--LOMÉ--
--NUKUʻALOFA--
--PORT OF SPAIN--
--TUNIS--
--ANKARA--
--ASHGABAT--
--FUNAFUTI--
--KAMPALA--
--KIEV--
--ABU DHABI--
--LONDON--
--WASHINGTON, D.C.--
--MONTEVIDEO--
--TASHKENT--
--PORT VILA--
--VATICAN CITY--
--CARACAS--
--HANOI--
--SANA'A--
--LUSAKA--
--HARARE--</font></marquee>

                                <br>
                                <br>


                                <h4 class="card-title mb-2">World Clock's</h4>
                                <p class="text-muted font-13 mb-4">
                                    Insert a country in the search box to find their current time
                                </p>

                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()"
                                               placeholder="Search for country..">
                                    </div>
                                </div>
                                <div id="myItems">
                                    <div class="col-sm-12 mb-3">
                                        <div id="clocklist" class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea151fefe30" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Kabul/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592399135-c1113-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTE1MWZlZmUzMCJ9"
                                                                    title="Kabul - Clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none;">Afghanistan
                                                                        - Kabul </a></h5></a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea15f192768" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Tirana/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592399345-c1284-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTE1ZjE5Mjc2OCJ9"
                                                                    title="Time - Tirana" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Albania - Tirana</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea167ef3e41" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Algiers/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592399486-c114-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTE2N2VmM2U0MSJ9"
                                                                    title="Time - Algiers" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Algeria - Algiers</a></h5></a></td></tr></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea16ee1d808" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Andorra-la-Vella/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592399598-c1686-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTE2ZWUxZDgwOCJ9"
                                                                    title="Andorra La Vella clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Andorra - Andorra La Vella</a></h5></a></td></tr></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea17578c8f5" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Luanda/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592399703-c1138-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTE3NTc4YzhmNSJ9"
                                                                    title="time zone Luanda" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Angola - Luanda</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea17db36d52" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Saint-Johns/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592399835-c1688-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTE3ZGIzNmQ1MiJ9"
                                                                    title="time now Saint John's" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Antigua & Barbuda - Saint John&#39;s</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea18805f36d" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Buenos-Aires/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400000-c151-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTE4ODA1ZjM2ZCJ9"
                                                                    title="Buenos Aires actual time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Argentina - Buenos Aires</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea18deedcd1" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Yerevan/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400094-c1370-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTE4ZGVlZGNkMSJ9"
                                                                    title="Yerevan local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Armenia - Yerevan</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1916e7cc1" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Canberra/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400150-c157-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTE5MTZlN2NjMSJ9"
                                                                    title="World Clock :: Canberra" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Australia - Canberra</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea198f4f972" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Vienna/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400271-c1259-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTE5OGY0Zjk3MiJ9"
                                                                    title="World Time :: Vienna" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Austria - Vienna</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea19f93a5ae" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Baku/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400377-c1369-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTE5ZjkzYTVhZSJ9"
                                                                    title="local time in Baku" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Azerbaijan - Baku</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1a5cc71cd" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Nassau/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400476-c1173-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFhNWNjNzFjZCJ9"
                                                                    title="Nassau actual time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Bahamas - Nassau</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1aa806306" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Manama/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400552-c115-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFhYTgwNjMwNiJ9"
                                                                    title="Manama time zone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Bahrain - Manama</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1aebdce9a" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Dhaka/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400619-c173-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFhZWJkY2U5YSJ9"
                                                                    title="Dhaka - Clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Bangladesh - Dhaka</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">

                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1b2409941" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bridgetown/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400676-c146-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFiMjQwOTk0MSJ9"
                                                                    title="timezone - Bridgetown" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Barbados - Bridgetown</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1b5758f37" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Minsk/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400727-c1285-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFiNTc1OGYzNyJ9"
                                                                    title="Time - Minsk" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Belarus - Minsk</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1bd5c7fc7" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Brussels/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400853-c148-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFiZDVjN2ZjNyJ9"
                                                                    title="World Clock :: Brussels" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Belgium - Brussels</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1c0ab70e1" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Belmopan/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400906-c136-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFjMGFiNzBlMSJ9"
                                                                    title="timezone - Belmopan" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Belize - Belmopan</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1c386f8db" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Porto-Novo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592400952-c1203-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFjMzg2ZjhkYiJ9"
                                                                    title="timezone - Porto Novo" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Benin - Porto Novo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1c68ad321" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Thimphu/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401000-c1690-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFjNjhhZDMyMSJ9"
                                                                    title="Thimphu clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Bhutan - Thimphu</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1c9139a0f" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/current_time/bolivia_sucre_clock.php"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401041-c210535-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFjOTEzOWEwZiJ9"
                                                                    title="Time - Sucre" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Bolivia Sucre</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1cd73d887" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Sarajevo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401111-c1691-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFjZDczZDg4NyJ9"
                                                                    title="Sarajevo local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Bosnia and Herzegovina - Sarajevo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1d0406aaf" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Gaborone/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401156-c186-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFkMDQwNmFhZiJ9"
                                                                    title="time at Gaborone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Botswana - Gaborone </a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1d3a218ff" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Brasilia/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401210-c145-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFkM2EyMThmZiJ9"
                                                                    title="timezone - Brasilia" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Brazil - Brasilia</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1d6bf33a4" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bandar-Seri-Begawan/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401259-c1693-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFkNmJmMzNhNCJ9"
                                                                    title="Bandar Seri Begawan clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Brunei - Bandar Seri Begawan</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1da3997af" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Sofia/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401315-c1238-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFkYTM5OTdhZiJ9"
                                                                    title="current time in Sofia" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Bulgaria - Sofia</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1df99894e" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Ouagadougou/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401401-c1186-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFkZjk5ODk0ZSJ9"
                                                                    title="local time in Ouagadougou" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Burkina Faso - Ouagadougou</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1e5cd0711" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bujumbura/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401500-c152-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFlNWNkMDcxMSJ9"
                                                                    title="time at Bujumbura" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Burundi - Bujumbura</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1eb54ada0" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Praia/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401589-c1685-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFlYjU0YWRhMCJ9"
                                                                    title="time now Praia" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Cape Verde - Praia</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1efa8b9f2" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Phnom-Penh/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401658-c1199-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFlZmE4YjlmMiJ9"
                                                                    title="Phnom Penh local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Cambodia - Phnom Penh</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1f2e60ef3" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Yaounde/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401710-c1267-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFmMmU2MGVmMyJ9"
                                                                    title="Current time in Yaounde" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Cameroon - Yaounde</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1f69059df" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Ottawa/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401769-c1188-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFmNjkwNTlkZiJ9"
                                                                    title="Ottawa timezone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Canada - Ottawa</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea1fe81fba5" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bangui/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401896-c1694-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTFmZTgxZmJhNSJ9"
                                                                    title="time at Bangui" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Central African Republic - Bangui</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea201b4a63b" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Ndjamena/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401947-c1174-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIwMWI0YTYzYiJ9"
                                                                    title="time in Ndjamena" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Chad - N&#39;djamena</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2044134c3" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Santiago/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592401988-c1232-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIwNDQxMzRjMyJ9"
                                                                    title="Santiago actual time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Chile - Santiago </a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea206ec3eb8" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Beijing/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402030-c133-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIwNmVjM2ViOCJ9"
                                                                    title="time at Beijing" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">China - Beijing</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea20b9d9040" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bogota/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402105-c141-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIwYjlkOTA0MCJ9"
                                                                    title="Bogota what time is now" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Colombia - Bogotá</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea20f7c8144" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Moroni/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402167-c1696-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIwZjdjODE0NCJ9"
                                                                    title="Moroni actual time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Comoros - Moroni</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea216164d72" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Kinshasa/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402273-c1121-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIxNjE2NGQ3MiJ9"
                                                                    title="Kinshasa current time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">The Democratic Republic of the Congo - Kinshasa</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2189806c6" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/San-Jose-Costa-Rica/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402313-c1225-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIxODk4MDZjNiJ9"
                                                                    title="current time in San Jose" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Costa Rica - San Jose</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">

                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea21d0a9845" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Yamoussoukro/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402384-c1935-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIxZDBhOTg0NSJ9"
                                                                    title="time at Yamoussoukro" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Côte d&#39;Ivoire - Yamoussoukro</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea22162860c" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Zagreb/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402454-c1281-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIyMTYyODYwYyJ9"
                                                                    title="Zagreb - Clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Croatia - Zagreb</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea223d5bf12" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Havana/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402493-c199-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIyM2Q1YmYxMiJ9"
                                                                    title="Clock - Havana" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Cuba - Havana</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea226003390" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Nicosia/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402528-c1680-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIyNjAwMzM5MCJ9"
                                                                    title="Time - Nicosia" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Cyprus - Nicosia</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea22918cf06" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Prague/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402577-c1204-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIyOTE4Y2YwNiJ9"
                                                                    title="time at Prague" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Czech Republic - Prague</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea22a971025" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Copenhagen/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402601-c169-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIyYTk3MTAyNSJ9"
                                                                    title="clock Copenhagen" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Denmark - Copenhagen</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea22d78920d" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Djibouti-City/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402647-c1697-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIyZDc4OTIwZCJ9"
                                                                    title="Clock - Djibouti" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Djibouti - Djibouti</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea23030cf64" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Roseau/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402691-c1698-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIzMDMwY2Y2NCJ9"
                                                                    title="Clock - Roseau" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Dominica - Roseau</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea237098f3b" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Santo-Domingo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402800-c1230-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIzNzA5OGYzYiJ9"
                                                                    title="Santo Domingo time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">The Dominican Republic - Santo Domingo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea23966cd99" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Quito/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402838-c1190-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIzOTY2Y2Q5OSJ9"
                                                                    title="Quito time now" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Ecuador - Quito</a></h5> </a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea23c9bd635" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Cairo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402889-c153-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIzYzliZDYzNSJ9"
                                                                    title="Current time in Cairo" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Egypt - Cairo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">

                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea23f19b21f" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/San-Salvador/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402929-c1228-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTIzZjE5YjIxZiJ9"
                                                                    title="Current time in San Salvador" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">El Salvador - San Salvador</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea241f22cc7" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Malabo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592402975-c1699-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI0MWYyMmNjNyJ9"
                                                                    title="Malabo Time" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Equatorial Guinea - Malabo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea244792cb8" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Asmara/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403015-c1700-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI0NDc5MmNiOCJ9"
                                                                    title="Asmara actual time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Eritrea - Asmara </a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea246c1334a" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Tallinn/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403052-c1242-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI0NmMxMzM0YSJ9"
                                                                    title="actual time Tallinn" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Estonia - Tallinn</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2495b5662" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Mbabane/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403093-c1149-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI0OTViNTY2MiJ9"
                                                                    title="Mbabane time now" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Swaziland - Mbabane</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea24c79c24b" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Addis-Ababa/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403143-c17-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI0Yzc5YzI0YiJ9"
                                                                    title="Addis Ababa local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Ethiopia - Addis Ababa</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea24fe39fb3" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Palikir/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403198-c11072-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI0ZmUzOWZiMyJ9"
                                                                    title="time zone Palikir" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Micronesia - Palikir</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea251dba2a9" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Suva/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403229-c182-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI1MWRiYTJhOSJ9"
                                                                    title="local time in Suva" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Fiji - Suva</a></h5> </a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea253ef04cc" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Helsinki/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403262-c1101-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI1M2VmMDRjYyJ9"
                                                                    title="Helsinki local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Finland - Helsinki</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea255d228c8" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Paris/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403293-c1195-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI1NWQyMjhjOCJ9"
                                                                    title="time in Paris" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">France - Paris</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea257c2cd14" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Libreville/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403324-c1129-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI1N2MyY2QxNCJ9"
                                                                    title="Libreville time now" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Gabon - Libreville</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2598d3d96" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Banjul/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403352-c130-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI1OThkM2Q5NiJ9"
                                                                    title="Banjul - Clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Gambia - Banjul</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">

                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea25cae60fb" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Tbilisi/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403402-c1371-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI1Y2FlNjBmYiJ9"
                                                                    title="Tbilisi time now" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Georgia - Tbilisi</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea25e67668b" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Berlin/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403430-c137-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI1ZTY3NjY4YiJ9"
                                                                    title="Berlin timezone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Germany - Berlin</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea260cb9a79" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Accra/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403468-c14-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI2MGNiOWE3OSJ9"
                                                                    title="Accra time now" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Ghana - Accra</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2626020bd" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Athens/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403494-c126-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI2MjYwMjBiZCJ9"
                                                                    title="Athens local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Greece - Athens</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea264177d21" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Saint-Georges/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403521-c1706-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI2NDE3N2QyMSJ9"
                                                                    title="World Time :: Saint George's" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Grenada - Saint George&#39;s</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2676631e1" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Guatemala-City/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403574-c194-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI2NzY2MzFlMSJ9"
                                                                    title="Guatemala current time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Guatemala - Guatemala</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea269ccabec" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Conakry/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403612-c167-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI2OWNjYWJlYyJ9"
                                                                    title="time zone Conakry" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Guinea - Conakry</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">

                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea26c7a74da" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bissau/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403655-c140-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI2YzdhNzRkYSJ9"
                                                                    title="local time in Bissau" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Guinea-Bissau - Bissau</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea26f10a94f" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Georgetown/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403697-c188-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI2ZjEwYTk0ZiJ9"
                                                                    title="Georgetown time zone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Guyana - Georgetown</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea270c79885" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Port-au-Prince/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403724-c1709-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI3MGM3OTg4NSJ9"
                                                                    title="Port-au-Prince timezone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Haiti - Port-au-Prince</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea272ecf8fd" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Tegucigalpa/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403758-c1245-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI3MmVjZjhmZCJ9"
                                                                    title="Tegucigalpa - Clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Honduras - Tegucigalpa</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea27499c15c" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Budapest/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403785-c150-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI3NDk5YzE1YyJ9"
                                                                    title="time at Budapest" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Hungary - Budapest</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2762b22e1" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Reykjavik/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403810-c1211-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI3NjJiMjJlMSJ9"
                                                                    title="Reykjavik current time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Iceland - Reykjavik</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea278d6670d" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/New-Delhi/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403853-c1176-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI3OGQ2NjcwZCJ9"
                                                                    title="New Delhi actual time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">India - New Delhi</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea27c8c8b88" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Jakarta/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403912-c1108-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI3YzhjOGI4OCJ9"
                                                                    title="Jakarta - Clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Indonesia - Jakarta</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea27e4984e2" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Tehran/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592403940-c1246-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI3ZTQ5ODRlMiJ9"
                                                                    title="World Time :: Tehran" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Iran - Tehran</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea28258a958" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Baghdad/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404005-c127-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI4MjU4YTk1OCJ9"
                                                                    title="Baghdad current time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Iraq - Baghdad</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea285f0e91b" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Dublin/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404063-c178-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI4NWYwZTkxYiJ9"
                                                                    title="Dublin clock" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Ireland - Dublin</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea287d46027" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Jerusalem/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404093-c1110-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI4N2Q0NjAyNyJ9"
                                                                    title="current time in Jerusalem" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Israel - Jerusalem</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea289839f77" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Rome/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404120-c1215-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI4OTgzOWY3NyJ9"
                                                                    title="Time - Rome" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Italy - Rome</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea28bb8768c" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Kingston/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404155-c1120-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI4YmI4NzY4YyJ9"
                                                                    title="time in Kingston" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Jamaica - Kingston</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea28d7bb781" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Tokyo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404183-c1248-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI4ZDdiYjc4MSJ9"
                                                                    title="local time in Tokyo" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Japan - Tokyo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea28efcc214" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Amman/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404207-c111-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI4ZWZjYzIxNCJ9"
                                                                    title="timezone - Amman" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Jordan - Amman</a></h5> </a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea29d713433" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Astana/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404439-c1921-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI5ZDcxMzQzMyJ9"
                                                                    title="Astana actual time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Kazakhstan - Nur-Sultan</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea29f2e20e8" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Nairobi/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404466-c1170-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTI5ZjJlMjBlOCJ9"
                                                                    title="time at Nairobi" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Kenya - Nairobi</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">

                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2a2f858a7" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/South-Tarawa/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404527-c1675-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJhMmY4NThhNyJ9"
                                                                    title="time at South Tarawa" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Kiribati - South Tarawa</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2ade1f745" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/current_time/serbia_kosovo_polje_clock.php"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404702-c215165-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJhZGUxZjc0NSJ9"
                                                                    title="Kosovo Polje clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Kosovo - Pristina</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2afb7e0f0" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Kuwait-City/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404731-c1123-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJhZmI3ZTBmMCJ9"
                                                                    title="World Clock :: Kuwait City" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Kuwait - Kuwait City</a></h5> </a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2b1f6501c" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bishkek/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404767-c1384-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJiMWY2NTAxYyJ9"
                                                                    title="Time - Bishkek" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Kyrgyzstan - Bishkek</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2b3c9c904" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Vientiane/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404796-c1260-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJiM2M5YzkwNCJ9"
                                                                    title="time at Vientiane" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Laos - Vientiane</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2b3c9c904" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Vientiane/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404796-c1260-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJiM2M5YzkwNCJ9"
                                                                    title="time at Vientiane" target="_blank"
                                                                    rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;"><h5 class="card-title"><a href="#">Laos - Vientiane</a></h5></a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2b59a480f" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Riga/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404825-c1602-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJiNTlhNDgwZiJ9"
                                                                    title="Riga local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Latvia - Riga</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2b85201cd" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Beirut/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404869-c134-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJiODUyMDFjZCJ9"
                                                                    title="Beirut clock" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Lebanon - Beirut</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2bbbb98ed" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Maseru/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404923-c1147-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJiYmJiOThlZCJ9"
                                                                    title="Maseru local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Lesotho - Maseru</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2bef097ad" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Monrovia/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592404975-c1161-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJiZWYwOTdhZCJ9"
                                                                    title="Time - Monrovia" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Liberia - Monrovia</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2c163e6c1" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Tripoli/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405014-c1252-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJjMTYzZTZjMSJ9"
                                                                    title="Tripoli current time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Libya - Tripoli</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2c3da8d89" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Vaduz/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405053-c1714-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJjM2RhOGQ4OSJ9"
                                                                    title="Clock - Vaduz" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Liechtenstein - Vaduz</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2c6158d12" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Vilnius/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405089-c1660-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJjNjE1OGQxMiJ9"
                                                                    title="time in Vilnius" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Lithuania - Vilnius</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2c9b2d287" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Luxembourg/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405147-c1534-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJjOWIyZDI4NyJ9"
                                                                    title="time at Luxembourg" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Luxembourg - Luxembourg</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2cc3750d5" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Antananarivo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405187-c120-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJjYzM3NTBkNSJ9"
                                                                    title="Antananarivo local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Madagascar - Antananarivo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2cdb76bb2" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Lilongwe/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405211-c1130-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJjZGI3NmJiMiJ9"
                                                                    title="local time in Lilongwe" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Malawi - Lilongwe</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2d0499f44" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Kuala-Lumpur/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405252-c1122-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJkMDQ5OWY0NCJ9"
                                                                    title="timezone - Kuala Lumpur" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Malaysia - Kuala Lumpur </a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2d6319188" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/current_time/maldives_male_clock.php"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405347-cc14117-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJkNjMxOTE4OCJ9"
                                                                    title="World Clock :: Malé" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Maldives - Male</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2d7b2038a" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bamako/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405371-c129-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJkN2IyMDM4YSJ9"
                                                                    title="Bamako what time is now" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Mali - Bamako</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2da47c67a" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Valletta/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405412-c1255-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJkYTQ3YzY3YSJ9"
                                                                    title="Valletta - Clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Malta - Valletta</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2e0456832" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Majuro/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405508-c1717-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJlMDQ1NjgzMiJ9"
                                                                    title="Time - Majuro" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Marshall Islands - Majuro</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2e3188122" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Nouakchott/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405553-c1183-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJlMzE4ODEyMiJ9"
                                                                    title="Nouakchott local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Mauritania - Nouakchott</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2e618521f" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Port-Louis/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405601-c1201-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJlNjE4NTIxZiJ9"
                                                                    title="Port Louis local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Mauritius - Port Louis</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2e9176546" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Mexico-City/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405649-c1155-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJlOTE3NjU0NiJ9"
                                                                    title="Current time in Mexico City" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Mexico - Mexico City</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">

                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2f0b5cab9" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/current_time/moldova_chisinau_clock.php"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405771-cc14312-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJmMGI1Y2FiOSJ9"
                                                                    title="World Time :: Chisinau" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Moldova - Chișinău</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2f356f772" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Monaco/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405813-c1674-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJmMzU2Zjc3MiJ9"
                                                                    title="Monaco actual time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Monaco - Monaco</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2f6ef2b5f" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Ulaanbaatar/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405870-c1720-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJmNmVmMmI1ZiJ9"
                                                                    title="Ulaanbaatar time zone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Mongolia - Ulaanbaatar</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2fa501461" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Podgorica/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405925-c1744-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJmYTUwMTQ2MSJ9"
                                                                    title="Podgorica local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Montenegro - Podgorica</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea2fe9de79a" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Maputo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592405993-c1146-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTJmZTlkZTc5YSJ9"
                                                                    title="time zone Maputo" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Mozambique - Maputo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3078972ae" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/current_time/myanmar_yangon_clock.php"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406136-cc106465-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMwNzg5NzJhZSJ9"
                                                                    title="clock Yangon" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Myanmar - Naypyidaw</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea309acfbde" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Windhoek/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406170-c1266-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMwOWFjZmJkZSJ9"
                                                                    title="World Clock :: Windhoek" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Namibia - Windhoek</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea30d0675b8" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Yaren/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406224-c1276-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMwZDA2NzViOCJ9"
                                                                    title="time now Yaren" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Nauru - Yaren District</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea30f79d882" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Kathmandu/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406263-c1117-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMwZjc5ZDg4MiJ9"
                                                                    title="Kathmandu timezone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Nepal - Kathmandu</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea313523e4a" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Amsterdam/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406325-c116-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMxMzUyM2U0YSJ9"
                                                                    title="Amsterdam Time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Netherlands - Amsterdam</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3152adaee" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Wellington/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406354-c1264-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMxNTJhZGFlZSJ9"
                                                                    title="Wellington current time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">New Zealand - Wellington</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea316e3cf74" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Managua/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406382-c1143-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMxNmUzY2Y3NCJ9"
                                                                    title="time zone Managua" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Nicaragua - Managua</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea31847a68e" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Niamey/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406404-c1180-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMxODQ3YTY4ZSJ9"
                                                                    title="Time - Niamey" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Niger - Niamey</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea31a3c5999" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Abuja/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406435-c1742-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMxYTNjNTk5OSJ9"
                                                                    title="clock Abuja" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Nigeria - Abuja</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea31c514619" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Pyongyang/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406469-c1205-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMxYzUxNDYxOSJ9"
                                                                    title="Current time in Pyongyang" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">North Korea - Pyongyang</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea31e558812" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Skopje/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406501-c1673-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMxZTU1ODgxMiJ9"
                                                                    title="timezone - Skopje" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">North Macedonia - Skopje</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea320f2d618" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Oslo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406543-c1187-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMyMGYyZDYxOCJ9"
                                                                    title="Oslo timezone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Norway - Oslo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea32339ac52" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Muscat/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406579-c1169-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMyMzM5YWM1MiJ9"
                                                                    title="Time - Muscat" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Oman - Muscat</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea324d67119" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Islamabad/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406605-c1106-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMyNGQ2NzExOSJ9"
                                                                    title="what time Islamabad" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Pakistan - Islamabad</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea32b05b34e" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/current_time/palau_koror_clock.php"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406704-cc106440-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMyYjA1YjM0ZSJ9"
                                                                    title="Koror time zone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Palau - Ngerulmud</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea32dec354a" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/current_time/palestinian_territories_east_jerusalem_clock.php"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406750-c2106481-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMyZGVjMzU0YSJ9"
                                                                    title="East Jerusalem local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Palestine - East Jerusalem</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea33170e095" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Panama-City/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406807-c1192-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMzMTcwZTA5NSJ9"
                                                                    title="Panama actual time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Panama - Panama City</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea336949d92" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Port-Moresby/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406889-c1193-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMzNjk0OWQ5MiJ9"
                                                                    title="World Time :: Port Moresby" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Papua New Guinea - Port Moresby</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea33c6bd280" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Asuncion/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592406982-c121-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMzYzZiZDI4MCJ9"
                                                                    title="Current time in Asuncion" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Paraguay - Asunción</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea33e34d1fd" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Lima/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407011-c1131-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTMzZTM0ZDFmZCJ9"
                                                                    title="Time - Lima" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Peru - Lima</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3609336ae" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Manila/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407561-c1145-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM2MDkzMzZhZSJ9"
                                                                    title="actual time Manila" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Philippines - Manila</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea362f7fff9" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Warsaw/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407599-c1262-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM2MmY3ZmZmOSJ9"
                                                                    title="Warsaw time now" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Poland - Warsaw</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea36489b1b2" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Lisbon/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407624-c1133-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM2NDg5YjFiMiJ9"
                                                                    title="Lisbon - Clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Portugal - Lisbon </a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea366e6cc95" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Doha/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407662-c18-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM2NmU2Y2M5NSJ9"
                                                                    title="Doha time zone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Qatar - Doha</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea36b0512b7" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Brazzaville/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407728-c1926-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM2YjA1MTJiNyJ9"
                                                                    title="Current time in Brazzaville" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">The Democratic Republic of the Congo - Brazzaville</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea36cd2b630" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bucharest/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407757-c149-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM2Y2QyYjYzMCJ9"
                                                                    title="Bucharest local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Romania - Bucharest</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea36e89db66" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Moscow/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407784-c1166-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM2ZTg5ZGI2NiJ9"
                                                                    title="Moscow Time" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Russia - Moscow</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea370b2a88e" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Kigali/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407819-c1119-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM3MGIyYTg4ZSJ9"
                                                                    title="current time in Kigali" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Rwanda - Kigali</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea37476f0e3" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Basseterre/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407879-c1728-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM3NDc2ZjBlMyJ9"
                                                                    title="Basseterre Time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Saint Kitts and Nevis - Basseterre</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea377cbb89d" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Castries/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407932-c1729-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM3N2NiYjg5ZCJ9"
                                                                    title="Clock - Castries" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Saint Lucia - Castries</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea37ad86644" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Kingstown/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592407981-c1731-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM3YWQ4NjY0NCJ9"
                                                                    title="actual time Kingstown" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Saint Vincent and the Grenadines - Kingstown</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea37c6ce975" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Apia/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408006-c1282-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM3YzZjZTk3NSJ9"
                                                                    title="current time in Apia" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Samoa - Apia</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea37e16710d" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/San-Marino/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408033-c1732-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM3ZTE2NzEwZCJ9"
                                                                    title="local time in San Marino" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">San Marino - San Marino</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3864e7140" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/current_time/sao_tome_and_principe_sao_tome_clock.php"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408164-cc15140-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM4NjRlNzE0MCJ9"
                                                                    title="World Clock :: Sao Tome" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">São Tomé and Príncipe - São Tomé</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea388bbb270" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Riyadh/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408203-c1214-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM4OGJiYjI3MCJ9"
                                                                    title="current time in Riyadh" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Saudi Arabia - Riyadh</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea38a9343b4" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Dakar/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408233-c174-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM4YTkzNDNiNCJ9"
                                                                    title="Dakar what time is now" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Senegal - Dakar</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea38c54d266" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Belgrade/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408261-c135-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM4YzU0ZDI2NiJ9"
                                                                    title="what time Belgrade" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Serbia - Belgrade</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea38e1170f6" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Victoria/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408289-c1734-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM4ZTExNzBmNiJ9"
                                                                    title="Victoria timezone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Seychelles - Victoria</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea38ffdf9b0" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Freetown/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408319-c185-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM4ZmZkZjliMCJ9"
                                                                    title="World Clock :: Freetown" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Sierra Leone - Freetown</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea392a8f40b" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Singapore/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408362-c1236-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM5MmE4ZjQwYiJ9"
                                                                    title="time at Singapore" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Singapore - Singapore</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea394a39b5c" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bratislava/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408394-c1735-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM5NGEzOWI1YyJ9"
                                                                    title="Bratislava clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Slovakia - Bratislava</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea395fc00aa" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Ljubljana/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408415-c1736-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM5NWZjMDBhYSJ9"
                                                                    title="current time in Ljubljana" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Slovenia - Ljubljana</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea397e045a8" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Honiara/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408446-c1273-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM5N2UwNDVhOCJ9"
                                                                    title="Honiara Time" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Solomon Islands - Honiara</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">

                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea399b1e739" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Mogadishu/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408475-c1160-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM5OWIxZTczOSJ9"
                                                                    title="World Clock :: Mogadishu" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Somalia - Mogadishu</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea39c7a93ce" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Cape-Town/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408519-c156-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM5YzdhOTNjZSJ9"
                                                                    title="Cape Town time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">South Africa - Cape Town </a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea39eed5e32" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Seoul/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408558-c1235-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTM5ZWVkNWUzMiJ9"
                                                                    title="local time in Seoul" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">South Korea - Seoul</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3a0a8766e" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Juba/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408586-c17158-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNhMGE4NzY2ZSJ9"
                                                                    title="Time - Juba" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">South Sudan - Juba</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3a27eca34" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Madrid/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408615-c1141-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNhMjdlY2EzNCJ9"
                                                                    title="Madrid timezone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Spain - Madrid/a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3a45ecdd1" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Colombo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408645-c1389-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNhNDVlY2RkMSJ9"
                                                                    title="World Clock :: Colombo" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Sri Lanka - Colombo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3a5d56e33" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Khartoum/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408669-c1118-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNhNWQ1NmUzMyJ9"
                                                                    title="actual time Khartoum" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Sudan - Khartoum</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3a7b276af" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Paramaribo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408699-c1194-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNhN2IyNzZhZiJ9"
                                                                    title="Paramaribo local time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Suriname - Paramaribo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3a944a336" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Stockholm/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408724-c1239-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNhOTQ0YTMzNiJ9"
                                                                    title="World Time :: Stockholm" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Sweden - Stockholm</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3ab1691de" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bern/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408753-c1270-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNhYjE2OTFkZSJ9"
                                                                    title="Bern time zone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Switzerland - Bern</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3ad2099eb" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Damascus/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408786-c1487-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNhZDIwOTllYiJ9"
                                                                    title="Damascus time zone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Syria - Damascus</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3aee09ba7" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Dushanbe/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408814-c1385-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNhZWUwOWJhNyJ9"
                                                                    title="Current time in Dushanbe" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Tajikistan - Dushanbe</a></h5> </a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3b0b3ac3c" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Dodoma/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408843-c11030-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNiMGIzYWMzYyJ9"
                                                                    title="World Time :: Dodoma" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Tanzania - Dodoma</a></h5></a></td></tr>
                                                </table>

                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3b22b0227" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Bangkok/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408866-c128-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNiMjJiMDIyNyJ9"
                                                                    title="timezone - Bangkok" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Thailand - Bangkok</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3b3d3c13a" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Dili/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408893-c1768-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNiM2QzYzEzYSJ9"
                                                                    title="Dili Time" target="_blank" rel="nofollow"><h5
                                                                        class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">East Timor - Dili</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3b7bb0837" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Lome/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592408955-c1135-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNiN2JiMDgzNyJ9"
                                                                    title="World Time :: Lome" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Togo - Lomé</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3bc888143" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Nukualofa/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409032-c1277-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNiYzg4ODE0MyJ9"
                                                                    title="Time - Nukualofa" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Tonga - Nukuʻalofa</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3be8f1f95" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Port-of-Spain/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409064-c1588-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNiZThmMWY5NSJ9"
                                                                    title="Port of Spain what time is now"
                                                                    target="_blank" rel="nofollow"><h5
                                                                        class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Trinidad and Tobago - Port of Spain</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3c0511695" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Tunis/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409093-c1253-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNjMDUxMTY5NSJ9"
                                                                    title="Tunis time" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">Tunisia - Tunis</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3c1b6dccc" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Ankara/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409115-c119-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNjMWI2ZGNjYyJ9"
                                                                    title="Ankara timezone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Turkey - Ankara</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3c3f04f42" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Ashgabat/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409151-c1387-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNjM2YwNGY0MiJ9"
                                                                    title="Ashgabat - Clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Turkmenistan - Ashgabat</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3c57c0ec9" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Funafuti/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409175-c1272-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNjNTdjMGVjOSJ9"
                                                                    title="Funafuti time now" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Tuvalu - Funafuti</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3c6c00aa5" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Kampala/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409196-c1115-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNjNmMwMGFhNSJ9"
                                                                    title="timezone - Kampala" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Uganda - Kampala</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3c849aafa" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Kyiv/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409220-c1367-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNjODQ5YWFmYSJ9"
                                                                    title="World Time :: Kyiv" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Ukraine - Kyiv</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3cb29b898" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Abu-Dhabi/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409266-c12-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNjYjI5Yjg5OCJ9"
                                                                    title="Abu Dhabi time zone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">United Arab Emirates - Abu Dhabi</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3cd39f3b6" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/London/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409299-c1136-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNjZDM5ZjNiNiJ9"
                                                                    title="London Time" target="_blank" rel="nofollow">
                                                                <h5 class="card-title"><a href="#" style="text-decoration: none; pointer-events: none;
   cursor: default;">United Kingdom - London</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3d159ed86" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Washington/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409365-c1263-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNkMTU5ZWQ4NiJ9"
                                                                    title="time now Washington" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">United States - Washington D.C.</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3d3031b5f" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Montevideo/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409392-c1163-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNkMzAzMWI1ZiJ9"
                                                                    title="Montevideo what time is now" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Uruguay - Montevideo</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3d6c244b7" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Tashkent/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409452-c1244-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNkNmMyNDRiNyJ9"
                                                                    title="Tashkent time zone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Uzbekistan - Tashkent</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3dabe6af4" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Port-Vila/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409515-c1280-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNkYWJlNmFmNCJ9"
                                                                    title="Clock - Port Vila" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Vanuatu - Port Vila</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3ddf55fa7" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/current_time/holy_see_vatican_city_vatican_clock.php"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409567-c212937-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNkZGY1NWZhNyJ9"
                                                                    title="Clock - Vatican" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Vatican - Vatican City</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">

                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3df994fc3" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Caracas/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409593-c158-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNkZjk5NGZjMyJ9"
                                                                    title="World Clock :: Caracas" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Venezuela - Caracas</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3e11921ed" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Hanoi/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409617-c195-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNlMTE5MjFlZCJ9"
                                                                    title="Hanoi - Clock" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Vietnam - Hanoi</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3e6b5bfb6" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Sana/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409707-c1672-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNlNmI1YmZiNiJ9"
                                                                    title="Sana time zone" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Yemen - Sanaʽa</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3e86cf9c7" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Lusaka/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409734-c1140-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNlODZjZjljNyJ9"
                                                                    title="Lusaka current time" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Zambia - Lusaka</a></h5></a></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <canvas id="canvas_tt5eea3e9e1cfe9" width="175"
                                                                    height="175"></canvas>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; font-weight: bold"><a
                                                                    href="//24timezones.com/Harare/time"
                                                                    style="text-decoration: none" class="clock24"
                                                                    id="tz24-1592409758-c196-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWVlYTNlOWUxY2ZlOSJ9"
                                                                    title="time at Harare" target="_blank"
                                                                    rel="nofollow"><h5 class="card-title"><a href="#"
                                                                                                             style="text-decoration: none; pointer-events: none;
   cursor: default;">Zimbabwe - Harare</a></h5></a></td></tr>
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
    $(document).ready(updateForm);

    function updateForm() {
		$(document).click(updateRoutine);
		$("[name=selected] > input").change(updateRoutine);

        function updateRoutine() {
            $("[name='applicantID[]']").remove();
            var applicantIDs = $("tr:has([name=selected] > input:checked) > [name=appID]").get().map(x => x.innerHTML);
            for (var i = 0; i < applicantIDs.length; ++i) {
				var el = document.createElement("input");
				var el2 = document.createElement("input");
                $(el).attr({"hidden": "hidden", "name": "applicantID[]"}).val(applicantIDs[i]);
                $(el2).attr({"hidden": "hidden", "name": "applicantID[]"}).val(applicantIDs[i]);
				$("#scheduleMeetingForm").append(el);
				$("#responseForm").append(el2);
            }
        }
    }

</script>

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

</html>