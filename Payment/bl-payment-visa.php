<?php

session_start();
error_reporting(E_ERROR | E_PARSE);


    $sessionusername    = $_SESSION['username'];
    $sessionfirstname   = $_SESSION["firstname"];
    $filename = $_SESSION['filename'];

    /*

                echo  $_SESSION['companyname'];
                   echo  $_SESSION['tradename'];                             

                  echo   $_SESSION['companywebsite'];                          

                 echo    $_SESSION['companyemail'];                            

                echo    $_SESSION['telephonenumber'];                         

                echo    $_SESSION['fax'];                                    

                echo    $_SESSION['facebookaccount'];                        

                echo    $_SESSION['istaaccount'];                             

                echo    $_SESSION['productorservice'];                       

                echo    $_SESSION['discountoffered'];                       

                echo    $_SESSION['headofficesuit'];                           

                echo    $_SESSION['headofficestreetnumber'];                 

                echo    $_SESSION['headofficestreetname'];                    
                echo    $_SESSION['headofficetownorcity'];             

                echo    $_SESSION['headofficeprovince'];                     

                echo    $_SESSION['contactpersonfirstname'];             

                 echo   $_SESSION['contactpersonlastname'];          

                echo    $_SESSION['businessnumber'];                     
                echo    $_SESSION['businessextensionnumber'];             

                echo    $_SESSION['contactpersonemail'];      

                 echo   $_SESSION['license'];

                 echo   $_SESSION['businessphoto'];

                 echo    '<br>';

                 echo    $_SESSION['planamount'];  

                 echo    '<br>';           

                echo    $_SESSION['residentamount']; 

                echo    '<br>';     

                 echo   $_SESSION['donationamount'];

                 echo    '<br>';

                 echo   $_SESSION['totalamount'];



                 if (isset($_POST['submitpage2'])) {



                    




                            $companyname =  $_SESSION['companyname'];
                             $tradename =  $_SESSION['tradename'];
                            $headofficestreetname    =   $_SESSION['headofficestreetname'];
                             $headofficestreetname   = $_SESSION['discountoffered'];
                             $headofficestreetname   = $_SESSION['headofficestreetname'];
                            $headofficestreetname   =  $_SESSION['headofficestreetname'];
                            $headofficestreetname    =  $_SESSION['headofficestreetname'];
                            $headofficestreetname   = $_SESSION['headofficestreetname'];
                             $headofficestreetname  =  $_SESSION['headofficestreetname'];
                             $headofficestreetname  =  $_SESSION['headofficestreetname'];
                            $businessphoto          = $_SESSION['businessphoto'];


                        define('DB_SERVER', 'localhost');
                        define('DB_USERNAME', 'root');
                        define('DB_PASSWORD', '');
                        define('DB_NAME', 'gcp');
     
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
     
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    else {


        

        $stmt = $link->prepare("INSERT INTO business (

        
            business_name,
            business_category,
            business_location,
            business_discount,
            business_services,
            business_product,
            business_image,
            business_card_label,
            business_card_description,
            business_status,
            file_name
        
        
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $stmt -> bind_param( "sssssssssss" ,

                           $companyname,
                           $tradename,
                           $headofficestreetname,
                           $discountoffered,
                           $headofficestreetname,
                           $headofficestreetname,
                           $headofficestreetname,
                           $headofficestreetname,
                           $headofficestreetname,
                           $headofficestreetname,
                           $fileName,

                     );

    $stmt -> execute();

    
    }





}


*/


    if (isset($_POST['nextstep'])) {
        header("location: ../businesslisting/bl-payment-message.php");
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
        <link rel="stylesheet" href="../css/bl-payment-visa.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <style>
        
    

#visaSection {
    position: relative;
    margin-top: 10px;
    height: auto;
    width: auto;
    float: left;
    margin-left: 50px;

}

#businessLeft {
    position: relative;
    margin-top: 0px;
    height: auto;
    float: left;
    padding-top: 3vw;
    padding-left: 6vw;
    padding-right: 5vw;
    margin-bottom: 3vw;
    background-color: red;
}

#businessRight {
    position: relative;
    margin-top: 0px;
    height: auto;
    float: right;
    padding-top: 3vw;
    padding-left: 6vw;
    margin-bottom: 3vw;
}

#paymentSection {
    position: relative;
    margin-top: 10px;
    height: auto;
    width: auto;
    float: right;
    margin-right: 50px;

}

#paymentSection h2 {
    font-size: 40px;
    text-align: center;


}

#paymentSection label {
    font-size: 25px;

}

#paymentSection2 label {
    font-size: 25px;

}

#paymentSection span {
    font-size: 18px;
}

#paymentSection select {
    width: 170px;
    height: 50px;
    text-align: left;
    border: solid 1px black;
    margin-right: 7px;

}

#paymentSection2 {
    position: relative;
    margin-top: 0px;
    height: auto;
    width: auto;
    float: right;
    margin-right: 170px;

}

#paymentSection2 select {
    width: 170px;
    height: 50px;
    text-align: left;
    border: solid 1px black;
    margin-right: 7px;

}


::placeholder {
    font-size: 1.1vmax;
    text-align: left;
    color: black;
    margin-left: 5px;

}
#addressSection {
    position: relative;
    height: auto;
    width: auto;
    float: left;
    margin-left: 45px;
}

#addressSection label {
    font-size: 25px;
}


body {
    background-color: white
}

#contactPhoto {
    position: relative;
    margin-top: 0px;
    height: 25vw;
    background-image: url('../files/contactUsPhoto.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}


.businessSection {
    background-color: rgb(231, 227, 227);
    position: relative;
    margin-top: 10px;
    height: 600px;
    width: 800px;
    padding-top: 4vw;

}


.businessSection2 {
    position: relative;
    margin-top: 0px;
    height: 40vw;
}
label {
    font-size:25px;
}
#contactUsLeft {
    position: relative;
    margin-top: 0px;
    height: auto;
    float: left;
    padding-top: 3vw;
    padding-left: 6vw;
    padding-right: 5vw;
    margin-bottom: 3vw;
}

#contactUsLeft h1 {
    float: left;
    margin-bottom: 2vw;
    font-family: Taviraj-Regular;
}

#contactUsLeft h3 {
    float: left;
    margin-bottom: 1vw;
    clear: left;
    font-family: Taviraj-Regular;
}

#contactUsRight {
    position: relative;
    margin-top: 0px;
    height: auto;
    float: right;
    padding-top: 3vw;
    padding-left: 6vw;
    margin-bottom: 3vw;
}


#contactSubmitBtn {
    height: 4vw;
    width: 14vw;
    background-color: #223c88;
    color: white;
    font-size: 2vw;
    font-family: Taviraj-Regular;
}

#nameRowStyle {
    height: auto;
    width: 100%;
    margin-bottom: 4vw;
}

#nameRowStyle2 {
    height: 3vmax;
    width: 80%;
    margin-bottom: 4vw
}

#nameRowStyle3 {
    height: 3vmax;
    width: 80%;
    margin-bottom: 4vw;
}

.nameInputStyle {
    height: 100%;
    width: 90%;
    margin-bottom: .5vw;
    background-color: transparent;
    border-radius: 3px 3px 3px 3px;
}


#subjectRowStyle {
    position: relative;
    height: auto;
    width: 100%;
}

.subjectRowStyle2 {
    height: 50px;
    width: 100%
}

.subjectInputStyle {
    height: 3vmax;
    width: 95%;
    background-color: transparent;
    ;
    border-radius: 3px 3px 3px 3px;
}

#messageRowStyle {
    position: relative;
    height: auto;
    width: 100%
}

.messageRowStyle2 {
    height: 200px;
    width: 100%
}

.messageInputStyle {
    height: 14VMAX;
    width: 95%;
    background-color: transparent;
    ;
    border-radius: 3px 3px 3px 3px;
}

#phoneRowStyle {
    height: auto;
    width: 100%;
    margin-left: 0vw;
    margin-bottom: 3vw
}

.phoneInputStyle1and2 {
    height: 3vmax;
    width: 8vw;
    margin-bottom: .5vw;
    background-color: transparent;
    margin-right: 5vw;
    ;
    border-radius: 3px 3px 3px 3px;
}

.phoneInputStyle3 {
    height: 3vmax;
    width: 10vw;
    margin-bottom: .5vw;
    background-color: transparent;
    margin-right: 1vw;
    ;
    border-radius: 3px 3px 3px 3px;
}

.contactUsFont {
    font-size: 1.7vw;
    font-weight: bold;
    font-family: Taviraj-Regular;
    clear: left;
    margin-bottom: 1vw;
}

.h1P {
    float: left;
    margin-bottom: 5vw;
    font-size: 1.2vw;
}

.rightFontsColor {
    color: #808080
}

.rightFontsStyle {
    color: #808080;
    float: left;
    font-family: Taviraj-Regular;
    font-size: 1.2vw;
    margin-bottom: 2vw;
}
.mys {
    float:right;
    margin-right:50px;
}
    </style>
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
    
   
    <div id="previousStep">
    <a href="../businesslisting/bl-plan-choose.php">< Previous Step</a>
    </div> 


    <div class="container" id="businessSection">

        
        <form method="POST">
    <!-- First Row -->
    <div class="form-row">
        <div class="col-12 col-md-5">
            <div class="row radbuttonsdiv">
                <div class="form-group p-md-2 col leftraddiv">
                    <input type="radio" name="visaormastercard" class="radiobtnitself">
                    <div class="visadiv"></div>
                </div>
                <div class="form-group p-md-2 col rightraddiv">
                    <input type="radio" name="visaormastercard" class="radiobtnitself">
                    <div class="mastercarddiv"></div>
                </div>
            </div>
            <div class="row visapicdiv">
                <img class="rounded mx-auto mx-md-0 d-block img-fluid float-md-left "
                    src="../files/visa.png" width="400" height="200">
            </div>
        </div>

         
        <div class="col-12 col-md-7">
                        <p class="text-center paymentdetailsfont">Payment Details</p>
                        <div class="form-group">
                            <p class="repeatedlabelfont">Credit Card Number</p>
                            <input type="text" class="form-control creditcardinputfield textfieldstyle" placeholder="Credit Card Number">
                            <p class="repeatedlabelfont2">Visa / MasterCard</p>
                                
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="repeatedlabelfont">Expiry Date</label>
                                    <br>
                                    <select class="form-control selectstyle">
                                        <option selected>Month</option>
                                        <option >January</option>
                                        <option >February</option>
                                        <option >March</option>
                                        <option >April</option>
                                        <option >May</option>
                                        <option >June</option>
                                        <option >July</option>
                                        <option >August</option>
                                        <option >September</option>
                                        <option >October</option>
                                        <option >November</option>
                                        <option >December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="repeatedlabelfont yeardummyfont">Year</label>
                                    <select class="form-control selectstyle">
                                        <option selected>Year</option>
                                        <option >2010</option>
                                        <option >2011</option>
                                        <option >2012</option>
                                        <option >2013</option>
                                        <option >2014</option>
                                        <option >2015</option>
                                        <option >2016</option>
                                        <option >2017</option>
                                        <option >2018</option>
                                        <option >2019</option>
                                        <option >2020</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="repeatedlabelfont">CVV</label>
                                    <input type="text" class="form-control cvvinput selectstyle" placeholder="###"><br>
                                    <p class="repeatedlabelfont3">(3 Digits on the back)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Row -->
                <p class="repeatedlabelfont">Name on Card</p>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control textfieldstyle"  placeholder="Name on Card">
                    </div>
                </div>
                <!-- Therd Row -->
                <p class="repeatedlabelfont">Payer's Adderss</p>
                <div class="form-row">
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <input type="text" placeholder="Suite" class="form-control textfieldstyle" id="inputCity">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" placeholder="Street#" class="form-control textfieldstyle" id="x">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" placeholder="Street Name" class="form-control textfieldstyle" id="x">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <input type="text" placeholder="City" class="form-control textfieldstyle" id="z">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input type="text" placeholder="Province/State" class="form-control textfieldstyle">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fourth row -->
                <div class="form-row py-md-4">
                    <div class="col-12 col-md-6 px-md-3">
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <input type="text" placeholder="Postal/Zip Code" class="form-control textfieldstyle">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input type="text" placeholder="Country" class="form-control textfieldstyle">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <p class="repeatedlabelfont4">Address of payer MUST match the member listing the job</p>
                    </div>

                </div>
                <!-- Fifth row 5-->
                <div class="form-row my-md-3 py-md-3">
                    <div class="col-12 col-md-9">
                        <div class="form-check">
                            <input class="form-check-input chkboxstyle" type="checkbox" id="disabledFieldsetCheck">
                            <p class="repeatedlabelfont" for="disabledFieldsetCheck">
                                You must accept our <a href="../documents/terms.pdf" target="new">terms
                                    and conditions</a> in order to list business with us. This is done to be
                                fair to all members
                            </p>
                            
                            <input class="form-check-input chkboxstyle" type="checkbox" id="disabledFieldsetCheck">
                            <p class="repeatedlabelfont" for="disabledFieldsetCheck">
                               You confirm that this listing pertains to you as a verified member and no one else
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 text-center my-4 my-md-0">
                        <input type="submit" name="nextstep" value="Pay Now" class="page2paybtn">
                    </div>

                </div>
            </form>

        </div>






        </div> <!--end of Contact Us Section-->   

</div>







<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>