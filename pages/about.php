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
        <title>About Us</title>
        <meta charset="utf-8">
        <link rel="icon" href="../files/logo.png" sizes="16x16">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/newfooter.css">
        <link rel="stylesheet" href="../css/about.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    </head>
<body>
    

    


    <div class="container-fluid" id="pagesandlogo">
        <div id="pagesandlogocontainer">
        <div id="logodiv"></div>

        <div  id="bannerTabsDiv">
                <div class="bannerTabsFontDiv"><a href="../pages/home.php"><p class="bannerTabsDivFont">HOME</p></a> </div>
                <div class="bannerTabsFontDiv"><a href="../pages/about.php"><p class="bannerTabsDivFont"  style="color: #9e0a0a">ABOUT</p></a> </div>
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
                                <div id="signupbtn"><a href="../forms/register2.php">Apply</a></div>
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

    
    <div class="container-fluid col-lg-12 col-md-12 col-sm-12-col col-xs-12" id="churchphoto">
    </div> <!--end of churchphoto row-->

    <div class="container-fluid col-lg-12 col-md-12 col-sm-12-col col-xs-12" id="fathersonhs">
        <p>In the name of the Father, the Son, and the Holy Spirit</p>
    </div><!--end of father,son,holy spirit row-->


    <div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12" id="ourvision">
        <div class="row" id="ourvisioninnersec">
            <div id="visionrightsec">
                <p id="ourVisionFont">Our Vision</p>
                <br>
                <p class="ourVisionFontText">The idea behind GlobeBridges came out because of personal need. 
                    Christians, who live by the bibe and follow jesus teachings,
                    will understand the need of this site. Most of the people that i know, including myself,
                    feel more comfortable when we interact with followers of Jesus Christ, pray with them,
                     talk to them, connect, share our happiness and our sorrow, and support each other... Mathew 7:20 "You will know
                     them by their fruit." We love to talk with no borders to each other. We know
                     that every word is said is nothing but the truth.
                </p>
            </div>
            <div id="visionleftsec">

            </div>
        </div>
    </div><!--end of our vision row-->

    <div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12" id="ourmission">
        <div class="row" id="ourmissioninnersec">
            <div id="missionrightsec">

            </div>
            <div id="missionleftsec">
            <p class="missionLeftSecFont">Our Mission</p>
                <p class="missionLeftSecFontText">
                    We live in an era where trust is declining, tribulations are increasing, and facing
                    such circumastances is inevitable. so unity in the name of Jesus will deliver use
                    from Evil... I try through this site to ease things on believers to find 
                    jobs with fellow believers, seek services or buy products from each
                    other, rent or sell a house to anither true Christian and connect
                    blesses souls together...
                </p>
            </div>
        </div>
    </div><!--end of our mission row-->


    <div class="container-fluid" id="howitworksword">
        <p class="howItWorksFont">How It Works</p>
    </div> <!--end of howitworksword row-->


    <div class="container-fluid" id="howitworkssec">
        <p>Globe Bridges is starting with four services and adding more down the road. In the name of Jesus we will be stronger together and will mutually benefit each other.</p>
        <p>Our services include: Business Listings, Employment Opportunities, Rent or Sell homes, and Blessed Partners.</p>
        <p>1- The Business Listing service is for verified business members who can list their information, the product or service they are offering, and the discount offered to other members and its validity.</p>
        <p>2- The Employment Opportunities service was meant to be for seniors initially, but we extended to allow an opportunity for all regular members to have access. It is a blessing to work together.</p>
        <p>3- Rent/Buy a home is stressful sometimes. This service will ease on us the interaction with eachother whether, renting or buying. It is a direct contact where is no commission involved and the verification process of members is done.</p>
        <p>4- The fourth service is to connect blessed souls together, especially for those who are far but, share the same beliefs...</p>
        <p>This site is based on membership Only. 'Christian Verified Applicants' can become members either by an administrator’s approval or by the approval of three verified active members. There will be NO toleration to imposters and all members should agree to our terms and conditions to protect everyone’s best interest...</p>
        <p>The projected revenue of Globe Bridges would be generated from Business Members, advertisements of verified members, and sponsor fees. Regular members might have to pay a small membership fee aSer a year to
        support running the site...</p>
        <p>Globe Bridges will donate monthly 10% of its revenue to UNICEF to help orphans around the world. "UNICEF works in over 190 countries and territories to save children’s lives, to defend their rights, and to help them fulfil their potential, from early childhood through adolescence. And we never give up." hkps://www.unicef.org/what-we-do
        </p>
        <p>Finally, there will be a blog available to launch questions and answers related to the Bible.
        I wish you all and our site the best of luck, in Jesus name, his glory will reach the unreachable!</p>
    </div> <!--end of howitworkssec row-->

       





    

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>