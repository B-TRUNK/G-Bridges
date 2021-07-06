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
        <title>Contact Us</title>
        <meta charset="utf-8">
        <link rel="icon" href="../files/logo.png" sizes="16x16">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/about.css">
        <link rel="stylesheet" href="../css/contact.css">
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
                <div class="bannerTabsFontDiv1"><a href="../pages/contact.php"><p class="bannerTabsDivFont"style="color: #9e0a0a">CONTACT US</p></a></div>
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

    
    <div class="container-fluid col-lg-12 col-md-12 col-sm-12-col col-xs-12" id="contactPhoto">
    </div> <!--end of contactPhoto row-->
    


    <div style="height:auto;width:auto">

    </div>
    <div class="container-fluid col-lg-12 col-md-12 col-sm-12-col col-xs-12" id="contactUsSection">
        <div class="row" id="contactUsSection2">


            <div class="col-lg-4" id="contactUsLeft">
                    <p class="contactUsFont">Contact Us</p>
                    <p class="h1P">If you have any questions or comments, please contact us via email or phone, or send us a message using the contact form</p>
                    
                    <p class="contactUsFont">Email</p>
                    <p class="h1P">info@globebridges.com</p>
                   
                    <p class="contactUsFont">Phone</p>
                    <p class="h1P">1-800-000-0000</p>
            </div>
            <!--end of contact us left section-->

            <div class="col-lg-8" id="contactUsRight">
                <p class="rightFontsStyle">Name *</p>
                <div class="row" id="nameRowStyle">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="nameRowStyle2">
                        <input type="text" name="" id="" class="nameInputStyle">
                        <br>
                        <p class="rightFontsColor rightFontsStyle">First Name</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="nameRowStyle3">
                        <input type="text" name="" id="" class="nameInputStyle">
                        <br>
                        <p class="rightFontsColor rightFontsStyle">Last Name</p>
                    </div>   
                 </div>
            


            <p class="rightFontsStyle">Email *</h5>
                <div class="row" id="emailRowStyle">
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="emailRowStyle2">
                        <input type="text" name="" id="" class="emailInputStyle">
                    </div>
                </div>


                <p class="rightFontsStyle">Phone *</p>
                <div class="row" id="phoneRowStyle">

                        <div>
                            <input type="text" name="" id="" class="phoneInputStyle1and2">
                            <br>
                            <p class="rightFontsColor h1P">###</p>
                        </div>

                        <div>
                            <input type="text" name="" id="" class="phoneInputStyle1and2">
                            <br>
                            <p class="rightFontsColor h1P">###</p>
                        </div>   

                        <div>
                            <input type="text" name="" id="" class="phoneInputStyle3">
                            <br>
                            <p class="rightFontsColor h1P">####</p>
                        </div>  
                 </div>


                 <p class="rightFontsStyle">Subject *</p>
                <div class="row" id="subjectRowStyle">
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="subjectRowStyle2">
                        <input type="text" name="" id="" class="subjectInputStyle">
                    </div>
                </div>

                <br>
                <br>

                <p class="rightFontsStyle">Message *</p>
                <div class="row" id="messageRowStyle">
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="messageRowStyle2">
                        <input type="text" name="" id="" class="messageInputStyle">
                    </div>
                </div>
                <br>
                     <input type="submit" value="Submit" id="contactSubmitBtn">
                 </div>



                 <div id="footer">
            <div id="footermostleft">
                <p class="footerMostLeftGlobe">Globe Bridges</p>
                <a href="#" class="footerMostLeftWe"><p  class="footerMostLeftWe">About</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Services</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">List your business</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Advertise with us</p></a>
            </div>
            <div id="footermostleft">
                <p class="footerMostLeftGlobe">Explore</p>
                <a href="#" class="footerMostLeftWe"><p  class="footerMostLeftWe">Future services</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Volunteer</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Vision</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Mission</p></a>
            </div>
            <div id="footermostleft2">
                <p class="footerMostLeftGlobe2">Information</p>
                <a href="#" class="footerMostLeftWe2"><p  class="footerMostLeftWe2">Donate to active cause</p></a>
                <a href="#" class="footerMostLeftWe2"><p class="footerMostLeftWe2">Suggestions and comments</p></a>
                <a href="#" class="footerMostLeftWe2"><p class="footerMostLeftWe2">Frequently asked questions</p></a>
                <div class="emptydiv"></div>
                <p class="copyrights">© Globe Bridges 2019.All rights reserved</p>
            </div>
            <div id="footermostleft3">
                <p class="footerMostLeftGlobe">Legal</p>
                <a href="#" class="footerMostLeftWe"><p  class="footerMostLeftWe">Terms</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Privacy</p></a>
                
            </div>
            <div id="footermostmostright">
            <p class="footerMostLeftGlobe3">Contact</p>
            <p class="footerMostLeftWe3">info@globebridges.com</p>
            <p class="footerMostLeftWe4">8-2070 Speers Road,</p>
            <p class="footerMostLeftWe4">Oakville, ON,</p>
            <p class="footerMostLeftWe4">L6L 2X8 Canada</p>
            <div class="socialmedia">
                <a href="#"><div class="facebook"></div></a>
                <a href="#"><div class="insta"></div></a>
                <a href="#"><div class="twitter"></div></a>
            </div>
            </div>
    </div> <!--end of footer row--> 


        </div> <!--end of Contact Us Section-->  




</div>









<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>