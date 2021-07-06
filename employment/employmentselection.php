<?php

    session_start();
    error_reporting(E_ERROR | E_PARSE);

    $sessionusername    = $_SESSION['username'];
    $sessionfirstname   = $_SESSION["firstname"];
    $filename = $_SESSION['filename'];

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Employment</title>
        <meta charset="utf-8">
        <link rel="icon" href="../files/logo.png" sizes="16x16">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/about.css">
        <link rel="stylesheet" href="../css/employmentselection.css">
        <link rel="stylesheet" href="../css/empmain.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    </head>
<body>
    


    <div class="container-fluid" id="pagesandlogo">
        <div id="pagesandlogocontainer">
        <div id="logodiv"></div>

         <div  id="bannerTabsDiv">
                <div class="bannerTabsFontDiv"><a href="../pages/home.php"><p class="bannerTabsDivFont">HOME</p></a> </div>
                <div class="bannerTabsFontDiv"><a href="../pages/about.php"><p class="bannerTabsDivFont">ABOUT</p></a> </div>
                <div class="bannerTabsFontDiv"><a href="#"><p class="bannerTabsDivFont">BIBLE TIME</p></a> </div>
                <div class="bannerTabsFontDiv2"><a href="#"><p class="bannerTabsDivFont">FAQ</p></a></div>
                <div class="bannerTabsFontDiv1"><a href="../pages/contact.php"><p class="bannerTabsDivFont">CONTACT US</p></a></div>
        </div>

        <?php
            if (!$sessionusername) {
                echo '
                    <div id="logintabs">

                            <div id="loginDiv">
                                <a href="../forms/login.php">Log In</a>
                                <div id="signupbtn"><a href="../forms/register2.php">APPLY</a></div>
                    </div>
                ';
            } else {
                echo "<div id='logintabs'>
                        <div class='loggedindiv'>
                            <div class='loggedinarea'>
                                <div class='helloname'><a href='../forms/logout.php'><p class='hellonamefont'>Hello $sessionfirstname!</p></a></div>
                                <div class='loggedprofilepic'>
                                    <div class='picarea' style='background-image: url(../uploads/$filename);'>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>";
            }
            

        ?>
        
        </div>
    </div> <!--end of pagesandlogo row-->


    <?php

    if (!$sessionusername) {
         echo '
            <div class="loggedoutsitemenu">
                <div class="buttonsarea">
                    <div class="button4"><a href="../forms/login.php" class="loggedoutsitemenuarefs"><p>Business Listings</p></a></div>
                    <div class="button3"><a href="../employment/employmentselection.php" class="loggedoutsitemenuarefs"><p>Employment</p></a></div>
                    <div class="button2"><a href="#" class="loggedoutsitemenuarefs"><p>Blessed Partners</p></a></div>
                    <div class="button1"><a href="#" class="loggedoutsitemenuarefs"><p>Buy/Sell Home</p></a></div>
                    
                </div>
            </div>
        ';
    } else {
        echo '
            <div class="loggedinsitemenu">
                <div class="buttonsarea2">


                    <div class="button44"><a href="../businesslisting/businesslistingdisplay.php" class="loggedoutsitemenuarefs"><p>Business Listings</p></a></div>
                    <div class="button33"><a href="../employment/all-jobs-results.php" class="loggedoutsitemenuarefs"><p>Employment</p></a></div>
                    <div class="button22"><a href="#" class="loggedoutsitemenuarefs"><p>Blessed Partners</p></a></div>
                    <div class="button11"><a href="#" class="loggedoutsitemenuarefs"><p>Buy/Sell Home</p></a></div>
                    <div class="button44"><a href="../Mailer/pendingmembers.php" class="loggedoutsitemenuarefs"><p>Pending Members</p></a></div>

                </div>
            </div>
     
            </div> <!--end of sitemenu row-->
        ';
    }

    ?>


    <center>
        <div class="row" style="height: auto;width: 100%;position: relative;margin-top: 8vw;margin-bottom: 8vw">
            <div class="col-lg-6" style="position: relative;height: 10vw;margin-bottom :12vw">
                <div style="margin:auto;position: relative;height: 100%;width: 65%">
                    <p style="float: left;font-size:2vw;font-weight: bold;margin-bottom:.5vw;font-family: Taviraj-Regular;">Search for a Job.</p>
                    <!--<p style="float: left;font-size:1.5vw;margin-bottom:1vw;clear: left;font-family: Taviraj-Regular;">Work with your trusted Employer.</p>-->
                    
                    <div style="float: left;clear: left;height:4vw;width: 10vw;font-size: 1.3vw;font-weight: bold;background-color: #223c88;font-family: Taviraj-Regular;line-height: 4vw;margin-top: 2vw">
                        <a href="../employment/all-jobs-results.php" style="color: white"><p>Find Jobs</p></a>
                    </div>
                </div>
            </div>
            <div class=" col-lg-6" style="position: relative;height: 10vw">
                <div style="margin:auto;position: relative;height: 100%;width: 65%">
                    <p style="float: left;font-size:2vw;font-weight: bold;margin-bottom:.5vw;font-family: Taviraj-Regular;">Continue as an Employer.</p>
                    <!--<p style="float: left;font-size:1.5vw;margin-bottom:1vw;clear: left;font-family: Taviraj-Regular;">Work with your trusted Employees.</p>-->
                    
                    <div style="float: left;clear: left;height:4vw;width: 10vw;font-size: 1.3vw;font-weight: bold;background-color: #223c88;font-family: Taviraj-Regular;line-height: 4vw;margin-top: 2vw">
                        <a href="../forms/login.php" style="color: white"><p>Log In</p></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </center>


    <div class="container-fluid" id="footer">
        <div id="footerconsec">
            <div id="footermostleft">
                <p class="footerMostLeftGlobe">Globe Bridges</p>
                <p class="footerMostLeftWe">We try through this site to ease</p>
                <p class="footerMostLeftThings">Things on believers.</p>
                <p class="footerMostLeftRights">© Globe Bridges 2019.All rights reserved</p>
            </div>
            <div id="footerleft">
                <p class="footerLeftExplore">EXPLORE</p>
                <p class="footerLeftDetails"><a href="#" class="footerFontColor">Home</a></p>
                <p class="footerLeftDetails"><a href="#" class="footerFontColor">About</a></p>
                <p class="footerLeftDetails"><a href="#" class="footerFontColor">Services</a></p>
                <p class="footerLeftDetails"><a href="#" class="footerFontColor">FAQ</a></p>
            </div>
            <div id="footerright">
                <p class="footerRightMailBox">MAIL BOX</p>
                <p class="footerRightDetails1">8-2070 Speers Road,</p>
                <p class="footerRightDetails1">Oakville, ON,</p>
                <p class="footerRightDetails2">L6L 2X8 Canada</p>
                
                <p class="footerRightContact">CONTACT</p>
                <p class="footerRightContactDetail">info@globebridges.com</p>
                <p class="footerRightContactDetail">1-800-000-0000</p>
            </div>
            <div id="footermostright">
            <p class="footerMostRightLegal">LEGAL</p>
            <p class="footerMostRightDetail"><a href="../pages/t&c.php" class="footerFontColor">Terms</a></p>
            <p class="footerMostRightDetail"><a href="#" class="footerFontColor">Privacy</a></p>
            </div>
        </div>
    </div> <!--end of footer row-->


    
   

   

    





<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/myscript.js"></script>
</body>
</html>