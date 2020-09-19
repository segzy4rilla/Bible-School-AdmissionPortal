<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>190 Nations Registration Form</title>

    <!-- Favicon -->
    <link rel="icon" href="ABTMC.png">

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
        <!-- Sidemenu Area -->
        

        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            <header class="top-header-area d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <!-- Mobile Logo -->
                    <div class="ecaps-logo" style="width:75px">
                    <a href="applicantdash.php">
                        <img class="desktop-logo" style="min-height:70px; min-width:70px; margin:0px" src="ABTMC.png"
                             alt="Desktop Logo">
                        <img class="small-logo" src="ABTMC.png" alt="Mobile Logo">
                    </a>
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
                        

                        <li class="nav-item dropdown">
                           

                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- Top Message Area -->
                                
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
                                    <h4 class="card-title">190 Nations Registration Form</h4>
                   
                                    <p class="card-description">
                                        Please fill in every question
                                    </p>
                                   

                                    <form class="forms-sample"  id="myForm" name="form" action="PHP_Files/NationsSubmission.php" method="post" enctype="multipart/form-data">
                                         <div class="form-group">
                                                       <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter first name" name="190fname" required>
                                                </div>
                                                    </div>
                                          <div class="form-group">
                                                        <label class="control-label">Last Name</label>
                                                       <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Enter last name" name="190lname" required>
                                                </div>
                                                    </div>
                                                
                                            <div class="form-group">
                                                       
                                                      <label for="example-number">WhatsApp Number</label>
                                                    <input class="form-control" id="example-number" placeholder="Enter whatsapp number" type="number" name="190number" required>
                                                    </div> 

                                            <div class="form-group">
                                                        <label class="control-label">Email Address</label>
                                                       <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Enter email address" name="190emailaddress" required>
                                                </div>
                                                    </div> 

                                            <div class="form-group">
                                                <label class="control-label">Name Of Church Branch</label>
                                                    <input type="text" class="form-control" placeholder="Enter church/denomination" name="branch" required>
                                                </div>

                                        <div class="form-group">
                                            <label for="exampleSelect1">Name Of Denomination</label>
                                            <select class="form-control rounded-0" id="denomination"
                                                    name="denomination">
                                                <option value="">-- Select Denomination --</option>
                                                <option>Anagkazo Assemblies</option>
                                                <option>Catch The Anointing Centre</option>
                                                <option>Evangelical Lighthouse Chapel Int</option>
                                                <option>Greater Love Church Ghana</option>
                                                <option>Healing Jesus Mission Int</option>
                                                <option>Igreja Do Primiero Amor</option>
                                                <option>Jesus Is The Answer Church</option>
                                                <option>LCI Kenya</option>
                                                <option>LCI Sa</option>
                                                <option>Lighthouse Chapel Int</option>
                                                <option>Loyalty House Int</option>
                                                <option>Mustard Seed Chapel</option>
                                                <option>QFC Ghana</option>
                                                <option>QFC USA</option>
                                                <option>The Machaneh Church</option>
                                                <option>The Makarios Church</option>
                                                <option>The Mega Church</option>
                                                <option>First Love</option>
                                                <option>Other</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                                    <label class="control-label">Name Of Pastor</label>
                                                    <input type="text" class="form-control" placeholder="Enter pastor's name" name="190pastorname" required>
                                                </div>

                                            <div class="form-group">
                                                    <label class="control-label">Name Of Bishop</label>
                                                    <input type="text" class="form-control" placeholder="Enter Bishop's name" name="190bishopname" required>
                                                </div>

                                            <div class="form-group">
                                                    <label class="control-label">Age</label>
                                                    <input type="number" class="form-control" placeholder="Enter age" name="190age" required>
                                                </div>

                                            <div class="form-group">
                                                    <label for="exampleSelectGender">Nationality</label>
                                                    <select class="form-control" id="SelectNationality" name="190nationality" required>
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
                                              <option value="equatorial guinean">Equatorial Guinean</option>
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
                                              <option value="kittian and nevisian">Kittian and Nevisian</option>
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
                                              <option value="nigerian">Nigerian</option>
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
                                              <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
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
                                                    <label for="exampleSelectGender">Country Of Residence</label>
                                                    <select class="form-control" id="SelectNationality" name="190countryres" required>
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
                                              <option value="equatorial guinean">Equatorial Guinean</option>
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
                                              <option value="kittian and nevisian">Kittian and Nevisian</option>
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
                                              <option value="nigerian">Nigerian</option>
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
                                              <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
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
                                                    <label class="control-label">Education</label>
                                                    <input type="text" class="form-control" placeholder="Enter education" name="education" required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Role In Church</label>
                                                    <input type="text" class="form-control" placeholder="Enter your role in church" name="role" required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Number Of Years In Church</label>
                                                    <input type="number" class="form-control" placeholder="Enter the number of years you have been in church" name="years" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleSelectGender">Do You Have Parental Consent?</label>
                                                    <select class="form-control" id="consent" name="consent" required>
														<option value="">-- select Response --</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div> 

                                                <div class="form-group">
                                                    <label for="exampleSelectGender">Marital Status</label>
                                                    <select class="form-control" id="SelectNationality" name="marital" required>
														<option value="">-- select Marital Status --</option>
														<option value="Single">Single</option>
														<option value="Married">Married</option>
														<option value="Widowed">Widowed</option>
														<option value="Separated">Separated</option>
														<option value="Divorced">Divorced</option>
													</select>
												</div>
												
												<div class="form-group">
                                                    <label for="exampleSelectGender">Are You Currently In ABMTC?</label>
                                                    <select class="form-control" id="current_ABMTC" name="current_ABMTC" required>
														<option value="">-- select Response --</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div> 
												
												<div class="form-group">
                                                    <label for="exampleSelectGender">Have You Completed ABMTC?</label>
                                                    <select class="form-control" id="completed_ABMTC" name="completed_ABMTC" required>
														<option value="">-- select Response --</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div>
												
												<div class="form-group">
                                                    <label for="exampleSelectGender">When Do You Want To Come To ABMTC For Training?</label>
                                                    <select class="form-control" id="startDate" name="startDate" required>
														<option value="">-- select Response --</option>
														<option value="September 2020">September 2020</option>
														<option value="February 2021">February 2021</option>
														<option value="June 2021">June 2021</option>
														<option value="October 2021">October 2021</option>
                                                        <option value="Currently In ABMTC">Currently In ABMTC</option>
                                                        <option value="Completed ABMTC">Completed ABMTC</option>
                                                        <option value="Not Planning On Coming To ABMTC">Not Planning On
                                                            Coming To ABMTC
                                                        </option>

                                                    </select>
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


</body>

</html>