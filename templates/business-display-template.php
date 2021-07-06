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
        <title>Business Listings Results</title>
        <meta charset="utf-8">
        <link rel="icon" href="../files/logo.png" sizes="16x16">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/about.css">
        <link rel="stylesheet" href="../css/businesslistingdisplay.css">
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


    
    <div class="container-fluid col-lg-12 col-md-12 col-sm-12-col col-xs-12" id="businesslistingdisplaybanner">
    </div> <!--end of bl row-->

    <div class="container-fluid col-lg-12 col-md-12 col-sm-12-col col-xs-12" id="businesslistingfont">
        <p class="label">Business Listings</p>
        <p class="sublabel">Only verified members can list their discounted products or services.</p>
    </div> <!--end of bl font row-->


<form method="POST" action="../businesslisting/businesslistingdisplay.php">
    <div class="row" id="businesslistingdisplaymainbody">
        <div class="col-lg-3 leftchoices">
            <div class="row">
                <div class="col-lg-12 searchBusinessByFont">
                    <p>Search Business By</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 searchCategory">
                    <p class="categorycellfontandselectmargin">Business Name</p>
                    <select name="business_name" class="blcategorystyle" >
                            <option value="" ><p class="" ></p></option>
                            <option value="Happy Paws Clinic" ><p class="" >Happy Paws Clinic</option>
                            <option value="Lord Auto Mobile" ><p class="" >Lord Auto Mobile</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 searchCategory">
                    <p class="categorycellfontandselectmargin">Category</p>
                    <input type="text" name="category" class="blcategorystyle">
                    <!--
                    <select name="category" class="blcategorystyle">
                            <option value="" ><p class="" ></p></option>
                            <option value="Veterinary Hospital" ><p class="" >Veterinary Hospital</option>
                            <option value="Used Cars" ><p class="">Used Cars</option>
                            -->
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 searchCategory">
                    <p class="categorycellfontandselectmargin">Location</p>
                    <select name="" class="blcategorystyle">
                            <option value="" ><p class="" ></p></option>
                            <option value="" ><p class="" >Some Option</option>
                            <option value="" ><p class="" >Oakville</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 searchCategory">
                    <p class="categorycellfontandselectmargin">Discount Offered</p>
                    <select name="discount_offered" class="blcategorystyle" >
                            <option value=""    ><p class="" ></p></option>
                            <option value="5%"  ><p class="" >5%</option>
                            <option value="10%" ><p class="" >10%</option>
                            <option value="15%" ><p class="" >15%</option>
                            <option value="20%" ><p class="" >20%</option>
                            <option value="25%" ><p class="" >25%</option>
                            <option value="30%" ><p class="" >30%</option>
                            <option value="35%" ><p class="" >35%</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 searchCategory">
                    <p class="categorycellfontandselectmargin">Services</p>
                    <select name="" class="blcategorystyle" >
                            <option value="" ><p class="" ></p></option>
                            <option value="" ><p class="" >Some Option</option>
                            <option value="" ><p class="" >Mechanic</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 searchCategory">
                    <p class="categorycellfontandselectmargin">Products</p>
                    <select name="" class="blcategorystyle">
                            <option value="" ><p class="" ></p></option>
                            <option value="" ><p class="" >Some Option</option>
                            <option value="" ><p class="" >Tires</option>
                    </select>
                </div>
            </div>
                    <input type="submit" name="submit" value="Search" class="blsearchbtn">
            

        </div>


        

        <div class="col-lg-8 rightresults">
            <div class="row adsSection">
                    <div class="app">  
                          <div class="hs full">
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>
                                <div class="item">
                                    <div class="blAdImageDiv"></div>
                                    <p class="adLabelFont">Used cars for sale</p>
                                    <p class="adLocation">Oakville</p>
                                    <p class="adName">Lord Auto Mobile <?php echo('.Ad'); ?></p>
                                </div>

                          </div>
                    </div>
            </div>

            <div class="row" style="position: relative;margin-top: 0vw">
                <div class="col-lg-12 bestResultsFontSection">
                    <p>Best Results</p>
                </div>
            </div>

             <div class="row resultsSection">
                
                    <?php foreach($businesses as $business):?>
                            <div class="col-lg-6">
                                <div class=" blBestResultsDiv">
                                    <div class="blImages">
                                        <img src="../uploads/<?php echo $business->file_name;?>">
                                    </div>
                                        <div class="blDataMainBlock">
                                            <div class="businessNameBlock">
                                                <?php echo $business->business_name;?>
                                            </div>
                                            <div class="businessLocationBlock">
                                                <?php echo $business->business_location;?>
                                            </div>
                                            <div class="blLabel">
                                                <?php echo $business->business_card_label;?>
                                            </div>
                                            <div class="blSingleBtn">
                                                <p class="viewDetailsFont">More Details</p>
                                                <a href="#"><div class="MoreDetailsArrow"></div></a>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                    <?php endforeach; ?>
                    
            </div>
        </div>
    </div> <!--end of bl main body row-->
</form>


    

   <div class="col-lg-12" id="footer">
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



    

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>