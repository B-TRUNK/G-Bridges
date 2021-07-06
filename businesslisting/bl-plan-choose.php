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


                 if (isset($_POST['nextstep'])) {


                    $_SESSION['planamount']                              = $_POST['planamount'];

                    $_SESSION['donationamount']                          = $_POST['donationamount'];

                    $_SESSION['residentamount']                          = $_POST['residentamount'];

                    $_SESSION['totalamount']                             = $_POST['totalamount'];

                    header("location: ../businesslisting/bl-payment-visa.php");

                     
                 }

*/

                 

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Choose your plan</title>
        <meta charset="utf-8">
        <link rel="icon" href="../files/logo.png" sizes="16x16">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/about.css">
        <link rel="stylesheet" href="../css/bl-plan-choose.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript">
        //below functions to get plan radio btn value and store it in total amount readonly field
        function setText(target) {
        var txt = document.getElementById("plan1");
        var temp = txt.value;
        var tf = document.getElementById("planamount");
        tf.value = temp;
        document.getElementById('residentrad').checked = false;
        document.getElementById('residentamount').value = "0";
        var txtFirstNumberValue = document.getElementById('planamount').value;
        var txtThirdNumberValue = document.getElementById('donatefield').value;
        var result = parseFloat(txtFirstNumberValue) +parseFloat(txtThirdNumberValue);
            if(!isNaN(result)){
                document.getElementById('totalfield').value = result;
            }
        } 



        function setText2(target) {
        var txt = document.getElementById("plan2");
        var temp = txt.value;
        var tf = document.getElementById("planamount");
        tf.value = temp;
        document.getElementById('residentrad').checked = false;
        document.getElementById('residentamount').value = "0";
        var txtFirstNumberValue = document.getElementById('planamount').value;
        var txtThirdNumberValue = document.getElementById('donatefield').value;
        var result = parseFloat(txtFirstNumberValue) +parseFloat(txtThirdNumberValue);
            if(!isNaN(result)){
                document.getElementById('totalfield').value = result;
            }
        }  




        function setText3(target) {
        var txt = document.getElementById("plan3");
        var temp = txt.value;
        var tf = document.getElementById("planamount");
        tf.value = temp;
        document.getElementById('residentrad').checked = false;
        document.getElementById('residentamount').value = "0";
        var txtFirstNumberValue = document.getElementById('planamount').value;
        var txtThirdNumberValue = document.getElementById('donatefield').value;
        var result = parseFloat(txtFirstNumberValue) +parseFloat(txtThirdNumberValue);
            if(!isNaN(result)){
                document.getElementById('totalfield').value = result;
            }
        }




        function setText4(target) {
        var txt = document.getElementById("plan4");
        var temp = txt.value;
        var tf = document.getElementById("planamount");
        tf.value = temp;
        document.getElementById('residentrad').checked = false;
        document.getElementById('residentamount').value = "0";
        var txtFirstNumberValue = document.getElementById('planamount').value;
        var txtThirdNumberValue = document.getElementById('donatefield').value;
        var result = parseFloat(txtFirstNumberValue) +parseFloat(txtThirdNumberValue);
            if(!isNaN(result)){
                document.getElementById('totalfield').value = result;
            }
        }   
        //end of functions to get plan radio btn value and store it in total amount readonly field





        // below function is to compute the resident tax if radio btn is clicked
        function setResident() {
        var txt = document.getElementById("planamount");
        var temp = txt.value;
        var tf2 = document.getElementById("residentamount");
        tf2.value = temp*0.13;
        sum();
        }      
        // end of function is to compute the resident tax if radio btn is clicked



        //below function ts to add all values and print in total
        function sum() {
        var txtFirstNumberValue = document.getElementById('planamount').value;
        var txtSecondNumberValue = document.getElementById('residentamount').value;
        var txtThirdNumberValue = document.getElementById('donatefield').value;
        var result = parseFloat(txtFirstNumberValue) + parseFloat(txtSecondNumberValue) + parseFloat(txtThirdNumberValue);
            if(!isNaN(result)){
                document.getElementById('totalfield').value = result;
            }
        }

        
        //end of function to to add all values and print in total  
        /* 
        $(document).ready(function(){
        $("#residentrad").click(function(){
            $("#residentrad").prop("checked", true);
        });
        $("#residentrad").click(function(){
            $("#residentrad").prop("checked", false);
        });
        });
        */
        
</script> 
    </head>
<body>
    



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
    
   <center>
    <form method="POST" id="radioform" enctype="multipart/form-data">
        <div class="paymentplanfontdiv">Please Select Payment Plan</div>
        <div class="row plancontainer">
            <div class="col-lg-3 col-md-3 col-sm-9 col-xs-9 containingdiv">
                <div class="planrealdiv">
                        <div class="planupperlowersection">1 Month Subscription</div>
                        <div class="planmiddlesection">$39</div>
                        <div class="planupperlowersection"><input type="radio" name="plan" id="plan1" class="reflectionradbtn" value="39" onClick="setText('39');"></div>       
                </div>
                <div class="savingdiv"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-9 col-xs-9 containingdiv">
                <div class="planrealdiv">
                        <div class="planupperlowersection">3 Month Subscription</div>
                        <div class="planmiddlesection">$105</div>
                        <div class="planupperlowersection"><input type="radio" name="plan" id="plan2" class="reflectionradbtn" value="105" onClick="setText2('105');"></div>         
                </div>
                <div class="savingdiv">Save up to $12</div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-9 col-xs-9 containingdiv">
                <div class="planrealdiv">
                        <div class="planupperlowersection">6 Month Subscription</div>
                        <div class="planmiddlesection">$200</div>
                        <div class="planupperlowersection"><input type="radio" name="plan" id="plan3" class="reflectionradbtn" value="200" onClick="setText3('200');"></div>         
                </div>
                <div class="savingdiv">Save up to $34</div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-9 col-xs-9 containingdiv">
                <div class="planrealdiv">
                        <div class="planupperlowersection">12 Month Subscription</div>
                        <div class="planmiddlesection">$300</div>
                        <div class="planupperlowersection"><input type="radio" name="plan" id="plan4" class="reflectionradbtn" value="300" onClick="setText4(300);"></div>         
                </div>
                <div class="savingdiv">Save up to $168</div>
            </div>
        </div>



        <!--begin of plan reflection div-->
        <div class="row planreflectiondiv">
            <div class="col-lg-9 leftreflection">
                <div class="operationdiv">
                    <div class="operationmostupper">
                        <div class="operationleft"><p class="operationbigfont">Total Amount</p></div>
                        <div class="operationmiddle">$</div>
                        <div class="operationright"><input type="number" name="planamount" id="planamount" class="textfieldstyle" readonly="readonly"></div>
                    </div>
                    <div class="operationlowerupper">
                        <div class="operationleft">
                            <div class="radioandp">
                                <div class="radiodiv"><input type="radio" name="resident" id="residentrad" class="reflectionradbtn" onClick="setResident();"></div>
                                <div class="bigfontdiv"><p class="operationbigfont">Canadian Residents (13%)</p></div>
                                <div class="smallfontdiv">13% if resident of Canada</div>
                            </div>
                        </div>
                        <div class="operationmiddle">$</div>
                        <div class="operationright"><input type="number" name="residentamount" id="residentamount" value="0" class="textfieldstyle" readonly="readonly"></div>
                    </div>


                    <div class="operationupperlower">
                        <div class="operationleft">
                            <div class="radioandp">
                                <!--<div class="radiodiv"><input type="radio" name="donate" class="reflectionradbtn"></div>-->
                                <div class="bigfontdiv"><p class="operationbigfont">Would you like to donate to</p></div>
                                <div class="bigfontdiv"><p class="operationbigfont">active cause?</p></div>
                            </div>
                        </div>
                        <div class="operationmiddle">$</div>
                        <div class="operationright"><input type="number" name="donationamount" id="donatefield" class="textfieldstyle" value="0" min="0" onchange="sum(this.value)"></div>
                    </div>
                    <div class="operationmostlower">
                        <div class="operationleft">
                            <div class="totaldiv" onClick="sum();">
                                <p class="totalfont">Total</p>
                                <p class="nonrefundablefont">(non refunable)</p>
                            </div>
                        </div>
                        <div class="operationmiddle2">$</div>
                        <div class="operationright"><input type="number" name="totalamount" id="totalfield" class="textfieldstyle textfieldstyle2" readonly="readonly"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 submitbuttondiv"><input type="submit" name="nextstep" value="Pay Now" class="businessplanbtn"></div>
        </div>
    </form>
   		
   </center>
   

    <br><br><br>

    





        </div> <!--end of Contact Us Section-->   

</div>







<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>
    

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>
</body>
</html>