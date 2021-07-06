
<?php

session_start();
error_reporting(E_ERROR | E_PARSE);


if (isset($_POST['nextstep'])) {
    header("location: ../businesslisting/bl-plan-choose.php");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Business Listing</title>
        <meta charset="utf-8">
        <link rel="icon" href="../files/logo.png" sizes="16x16">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/about.css">
        <link rel="stylesheet" href="../css/bl-lister-info.css">
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
        
    
    <div class="container-fluid col-lg-12 col-md-12 col-sm-12-col col-xs-12" id="businesslistingphoto">
    </div> <!--end of businessListing Photo row-->
    
   
    <div class="container-fluid py-md-3" id="businessSection1">
        <!--  Page Titel -->
        <div class="row">
            <div class="col-12">
                <div class="text-center form-titel">
                    <h4 class="paymentdetailsfont">List Your Business With Us.</h4>
                    <p class="repeatedlabelfont5">To receive more clients and support other members. </p>
                </div>
            </div>
        </div>


        <form method="POST" action="" enctype="multipart/form-data">
        <!--new mid section-->
            <div class="row inputrowstyle">
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Company Legal Name</label>
                        <input type="text" name="companyname" class="form-control textfieldstyle2" placeholder="Your Company Legal Name" required="required">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Trade Name</label>
                        <input type="text" name="tradename" class="form-control textfieldstyle2" placeholder="Your Trade Name" required="required">
                    </div>
                </div>
                
            </div>

            <div class="row inputrowstyle">
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Website</label>
                        <input type="text" name="companywebsite" class="form-control textfieldstyle2" placeholder="Your Website ..">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Company Main E-mail</label>
                        <input type="text" name="companyemail" class="form-control textfieldstyle2" placeholder="Your Company main email" required="required">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Telephone Number</label>
                        <input type="text" name="telephonenumber" class="form-control textfieldstyle2" placeholder="Your Telephone Number" required="required">
                    </div>
                </div>
            </div>

            <div class="row inputrowstyle">
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Fax Number</label>
                        <input type="text" name="fax" class="form-control textfieldstyle2" placeholder="Your Fax Number">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Twitter Account </label>
                        <input type="text" name="twitteraccount" class="form-control textfieldstyle2" placeholder="Your Company main email">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Facebook Account</label>
                        <input type="text" name="facebookaccount" class="form-control textfieldstyle2" placeholder="Your Facebook Account">
                    </div>
                </div>
            </div>

            <div class="row inputrowstyle">
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Instagram Account</label>
                        <input type="text" name="istaaccount" class="form-control textfieldstyle2" placeholder="Your Instagram Account">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Product or Service Offered</label>
                        <br>
                        <input type="text" name="productorservice" class="form-control textfieldstyle3" placeholder="type(Up to 50)" required="required" >
                        <input  type="submit" name="insertnewservice" id="servicebtn" class="form-control textfieldstyle4" value="New">
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Discount Offered</label>
                        <select name="discountoffered" class="form-control textfieldstyle2" required="required" id="servicediscount">
                            <option value="5%"  ><p class="" >(Mandatory to choose)</option>
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
            </div>
        <!--end of new mid section-->

        <!--new mid headoffice-->
            <div class="row col-lg-12 companyheadofficefont"><p class="">Company Head Office</p></div>

            <div class="row headofficelocationitemsdiv1">
                
                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" name="headofficesuit" class="form-control headofficeitemslocationinputs" placeholder="Suit #" required="required">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" name="headofficestreetnumber" class="form-control headofficeitemslocationinputs" placeholder="Street #" required="required">
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="swuitsteetcountry">
                        <input type="text" name="headofficestreetname" class="form-control headofficeitemslocationinputs" placeholder="Street name" required="required">
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" name="headofficetownorcity" class="form-control headofficeitemslocationinputs" placeholder="Town / City" required="required">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" name="headofficeprovince" class="form-control headofficeitemslocationinputs" placeholder="Province" required="required">
                    </div>
                </div>

            </div>
            <!--remain inputs-->
            <div class="row headofficelocationitemsdiv2">
                
                <div class="col-lg-3">
                    <div class="swuitsteetcountry">
                        <input type="text" name="postalcode" class="form-control headofficeitemslocationinputs" placeholder="Zip/Postal Code">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" class="form-control headofficeitemslocationinputs" placeholder="Country">
                    </div>
                </div>
            </div>


            <div class="row col-lg-12 companyheadofficefont"><p class="">Location of items/ </p></div>

            <div class="row headofficelocationitemsdiv1">
                
                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" class="form-control headofficeitemslocationinputs" placeholder="Suit #">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" class="form-control headofficeitemslocationinputs" placeholder="Street #">
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="swuitsteetcountry">
                        <input type="text" class="form-control headofficeitemslocationinputs" placeholder="Street name">
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" class="form-control headofficeitemslocationinputs" placeholder="Town / City">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" class="form-control headofficeitemslocationinputs" placeholder="Province">
                    </div>
                </div>

            </div>
            
            <div class="row headofficelocationitemsdiv3">
                
                <div class="col-lg-3">
                    <div class="swuitsteetcountry">
                        <input type="text" class="form-control headofficeitemslocationinputs" placeholder="Zip/Postal Code">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" class="form-control headofficeitemslocationinputs" placeholder="Country">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="swuitsteetcountry">
                        <input type="text" class="form-control headofficeitemslocationinputs" placeholder="Link to your website">
                    </div>
                </div>
            </div>

                <div class="officeusediv"><p class="officeusefontstyle">Office Use Only</p></div> 

                <!-- Last Form Row -->
                <div class="businessSection3" id="businessSection3">
                <div class="form-row  mt-sm-3 py-sm-3">
                    <div class="col-ms-6 col-md-6">
                        <div class="row" >
                            <div class="col-sm-6 col-md-7">
                                <label class="text-md-left repeatedlabelfont4">Contact Person</label>
                                <div class="row">
                                    <div class="form-controle col-6 col-md-6">
                                        <input type="text" name="contactpersonfirstname" class="form-control textfieldstyle" placeholder="First Name">
                                    </div>
                                    <div class="form-controle col-6 col-md-6 mt-md-0 ">
                                        <input type="text" name="contactpersonlastname" class="form-control textfieldstyle" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5">
                                <div class="row">
                                    <div class="form-controle col-md-12">
                                        <label class="repeatedlabelfont4">Business Number</label>
                                        <input type="text" name="businessnumber" class="form-control textfieldstyle" placeholder="Business Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-6">
                        <div class="row">
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <label class="repeatedlabelfont4">Extension Number</label>
                                    <input type="text" name="businessextensionnumber" class="form-control textfieldstyle" placeholder="Extension Number">
                                </div>
                            </div>
                            <div class="col-6 col-md-7">
                                <div class="form-group">
                                    <label class="repeatedlabelfont4">E-mail</label>
                                    <input type="email" name="contactpersonemail" class="form-control textfieldstyle" placeholder="Your E-mail">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!--Submit Button Container  -->
                <center>
                    <div class="form-row  my-md-2 py-md-3 businessSection">
                    <div class="container py-3">
                        <div class="row">



                            <div class="col-md-4 text-center">
                                <input type="submit" name="license" class="page3paybtn" value="Upload">
                                <p class="mya2">Business License</p>
                                <p class="mya3">if no Business License, <a href="#" class="mya">Please Explain</a></p>
                            </div>
                            <div class="col-md-4 text-center">
                                <input type="submit" name="file" class="page3paybtn" value="Upload">
                                <p class="mya2">Business Photo</p>
                            </div>
                            </form>
                            <div class="col-md-4"> 
                                <form method="post">
                                    <input type="submit" name="nextstep" class="page3paybtn2" value="Continue to Payment">
                                </form>
                                    
                                <p class="mya2">Your AD is free for the first 60 days, there after it is $39/Month</p>
                                <p class="mya2">Credit Card infor is required but will not be charged now</p>
                            </div>




                        </div>    
                    </div>
                    
                </div>
                </center>
                
                
                
        </div>
    </div>








        </div> <!--end of Contact Us Section-->   

</div>







<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>