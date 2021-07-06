
<?php

session_start();
error_reporting(E_ERROR | E_PARSE);
include '../config/loginconfig.php';


if(!isset($_POST["insertnewservice"]))
{
    $_SESSION["servicesarray"] = array();
}


if (isset($_POST['insertnewservice'])) {

    $companyname                = $_POST['companyname']; 

    $tradename                  = $_POST['tradename'];

    $companywebsite             = $_POST['companywebsite'];

    $companyemail               = $_POST['companyemail'];

    $telephonenumber            = $_POST['telephonenumber'];

    $street                     = $_POST['street'];

    $headofficesuit             = $_POST['headofficesuit'];

    $headofficestreetnumber     = $_POST['headofficestreetnumber'];

    $headofficestreetname       = $_POST['headofficestreetname'];

    $headofficetownorcity       = $_POST['headofficetownorcity'];

    $headofficeprovince         = $_POST['headofficeprovince'];

    $discountoffered            = $_POST['discountoffered'];


    $singleservicepost = $_POST['productorservice'];

    array_push($_SESSION["servicesarray"], $singleservicepost);

    //print_r($_SESSION["servicesarray"]);

    foreach($_SESSION["servicesarray"] as $key => $val)
    { 
        echo $val;
        if(isset($_POST['nextstep'])){

    // File upload path
$targetDir = "../uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);





                    $_SESSION['companyname']                            = $_POST['companyname'];
                    $_SESSION['tradename']                              = $_POST['tradename'];
                    $_SESSION['companywebsite']                          = $_POST['companywebsite'];
                    $_SESSION['companyemail']                             = $_POST['companyemail'];
                    $_SESSION['telephonenumber']                        = $_POST['telephonenumber'];
                    $_SESSION['fax']                                    = $_POST['fax'];
                    $_SESSION['facebookaccount']                        = $_POST['facebookaccount'];
                    $_SESSION['istaaccount']                            = $_POST['istaaccount'];
                    $_SESSION['productorservice']                       = $_POST['productorservice'];
                    $_SESSION['discountoffered']                        = $_POST['discountoffered'];
                    $_SESSION['headofficesuit']                           = $_POST['headofficesuit'];
                    $_SESSION['headofficestreetnumber']                   = $_POST['headofficestreetnumber'];
                    $_SESSION['headofficestreetname']                    = $_POST['headofficestreetname'];
                    $_SESSION['headofficetownorcity']                   = $_POST['headofficetownorcity'];
                    $_SESSION['headofficeprovince']                       = $_POST['headofficeprovince'];
                    $_SESSION['contactpersonfirstname']                 = $_POST['contactpersonfirstname'];
                    $_SESSION['contactpersonlastname']                   = $_POST['contactpersonlastname'];
                    $_SESSION['businessnumber']                          = $_POST['businessnumber'];
                    $_SESSION['businessextensionnumber']                = $_POST['businessextensionnumber'];
                    $_SESSION['contactpersonemail']                      = $_POST['contactpersonemail'];
                    $_SESSION['license']                                 = $_POST['license'];
                    $_SESSION['businessphoto']                           = $fileName;



                $companyname        =    $_SESSION['companyname']    ;                       
                $productorservice           =    $_SESSION['productorservice']      ;                       
                $headofficetownorcity    =   $_SESSION['headofficetownorcity']     ;                     
                $discountoffered       =   $_SESSION['discountoffered']    ;                        
                $tradename              =    $_SESSION['tradename']  ;                        
                $fax                 =    $_SESSION['fax']            ;                         
                $facebookaccount    =    $_SESSION['facebookaccount']   ;                    
                $istaaccount          =    $_SESSION['istaaccount']   ;                           
                $productorservice    =   $_SESSION['productorservice']    ;                   
                 

            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif','pdf');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    // Insert image file name into database
                    $insert = $link->query("INSERT into business (

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
                        ) VALUES (

                        '".$companyname."',
                        '".$productorservice."',
                        '".$headofficetownorcity."',
                        '".$discountoffered."',
                        '".$productorservice."',
                        '".$productorservice."',
                        '".$productorservice."',
                        '".$productorservice."',
                        '".$productorservice."',
                        '".$productorservice."',
                        '".$fileName."'


                        )");

                    header("location: ../businesslisting/bl-plan-choose.php");


                    if($insert){
                        $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                    }else{
                        $statusMsg = "File upload failed, please try again.";
                    } 
                }else{
                    $statusMsg = "Sorry, there was an error uploading your file.";
                }
            }else{
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
            }
        }else{
            $statusMsg = 'Please select a file to upload.';
        }


if (isset($_SESSION['nextstep'])) {
    header("location: ../businesslisting/bl-plan-choose.php");
}
    }
}

/*

if(isset($_POST['nextstep'])){

    // File upload path
$targetDir = "../uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);





                    $_SESSION['companyname']                            = $_POST['companyname'];
                    $_SESSION['tradename']                              = $_POST['tradename'];
                    $_SESSION['companywebsite']                          = $_POST['companywebsite'];
                    $_SESSION['companyemail']                             = $_POST['companyemail'];
                    $_SESSION['telephonenumber']                        = $_POST['telephonenumber'];
                    $_SESSION['fax']                                    = $_POST['fax'];
                    $_SESSION['facebookaccount']                        = $_POST['facebookaccount'];
                    $_SESSION['istaaccount']                            = $_POST['istaaccount'];
                    $_SESSION['productorservice']                       = $_POST['productorservice'];
                    $_SESSION['discountoffered']                        = $_POST['discountoffered'];
                    $_SESSION['headofficesuit']                           = $_POST['headofficesuit'];
                    $_SESSION['headofficestreetnumber']                   = $_POST['headofficestreetnumber'];
                    $_SESSION['headofficestreetname']                    = $_POST['headofficestreetname'];
                    $_SESSION['headofficetownorcity']                   = $_POST['headofficetownorcity'];
                    $_SESSION['headofficeprovince']                       = $_POST['headofficeprovince'];
                    $_SESSION['contactpersonfirstname']                 = $_POST['contactpersonfirstname'];
                    $_SESSION['contactpersonlastname']                   = $_POST['contactpersonlastname'];
                    $_SESSION['businessnumber']                          = $_POST['businessnumber'];
                    $_SESSION['businessextensionnumber']                = $_POST['businessextensionnumber'];
                    $_SESSION['contactpersonemail']                      = $_POST['contactpersonemail'];
                    $_SESSION['license']                                 = $_POST['license'];
                    $_SESSION['businessphoto']                           = $fileName;



                $companyname        =    $_SESSION['companyname']    ;                       
                $productorservice           =    $_SESSION['productorservice']      ;                       
                $headofficetownorcity    =   $_SESSION['headofficetownorcity']     ;                     
                $discountoffered       =   $_SESSION['discountoffered']    ;                        
                $tradename              =    $_SESSION['tradename']  ;                        
                $fax                 =    $_SESSION['fax']            ;                         
                $facebookaccount    =    $_SESSION['facebookaccount']   ;                    
                $istaaccount          =    $_SESSION['istaaccount']   ;                           
                $productorservice    =   $_SESSION['productorservice']    ;                   
                 

            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif','pdf');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    // Insert image file name into database
                    $insert = $link->query("INSERT into business (

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
                        ) VALUES (

                        '".$companyname."',
                        '".$productorservice."',
                        '".$headofficetownorcity."',
                        '".$discountoffered."',
                        '".$productorservice."',
                        '".$productorservice."',
                        '".$productorservice."',
                        '".$productorservice."',
                        '".$productorservice."',
                        '".$productorservice."',
                        '".$fileName."'


                        )");

                    header("location: ../businesslisting/bl-plan-choose.php");


                    if($insert){
                        $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                    }else{
                        $statusMsg = "File upload failed, please try again.";
                    } 
                }else{
                    $statusMsg = "Sorry, there was an error uploading your file.";
                }
            }else{
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
            }
        }else{
            $statusMsg = 'Please select a file to upload.';
        }


if (isset($_SESSION['nextstep'])) {
    header("location: ../businesslisting/bl-plan-choose.php");
}
*/

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
        <script type="text/javascript">
            $("#servicebtn").on("click", function() {
                $("#servicediscount").attr('readonly', true);
            });
        </script>
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
                        <input type="text" name="companyname" class="form-control textfieldstyle2" placeholder="Your Company Legal Name" required="required" value="<?php echo $companyname  ; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Trade Name</label>
                        <input type="text" name="tradename" class="form-control textfieldstyle2" placeholder="Your Trade Name" required="required" value="<?php echo $tradename  ; ?>">
                    </div>
                </div>
                
            </div>

            <div class="row inputrowstyle">
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Website</label>
                        <input type="text" name="companywebsite" class="form-control textfieldstyle2" placeholder="Your Website .."
                        value="<?php echo $companywebsite  ; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Company Main E-mail</label>
                        <input type="text" name="companyemail" class="form-control textfieldstyle2" placeholder="Your Company main email" required="required" value="<?php echo $companyemail  ; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Telephone Number</label>
                        <input type="text" name="telephonenumber" class="form-control textfieldstyle2" placeholder="Your Telephone Number" required="required"
                        value="<?php echo $telephonenumber  ; ?>">
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
                        <!--<select class="form-control textfieldstyle2">
                                    <option selected> Add Up to 50</option>
                                    <option>Default select</option>
                                    <option>Default select</option>
                                    <option>Default select</option>
                         </select>-->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="labelinputalighndiv">
                        <label class="repeatedlabelfont4">Discount Offered</label>
                        <select name="discountoffered" class="form-control textfieldstyle2" required="required" id="servicediscount">
                                    <option selected><?php echo $discountoffered ; ?></option>
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
                        <input type="text" name="headofficesuit" class="form-control headofficeitemslocationinputs" placeholder="Suit #" required="required" value="<?php echo $headofficesuit  ; ?>">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" name="headofficestreetnumber" class="form-control headofficeitemslocationinputs" placeholder="Street #" required="required" value="<?php echo $headofficestreetnumber  ; ?>">
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="swuitsteetcountry">
                        <input type="text" name="headofficestreetname" class="form-control headofficeitemslocationinputs" placeholder="Street name" required="required" value="<?php echo $headofficestreetname  ; ?>">
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" name="headofficetownorcity" class="form-control headofficeitemslocationinputs" placeholder="Town / City" required="required" value="<?php echo $headofficetownorcity  ; ?>">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="swuitsteetcountry">
                        <input type="text" name="headofficeprovince" class="form-control headofficeitemslocationinputs" placeholder="Province" required="required" value="<?php echo $headofficeprovince  ; ?>">
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

            
        <!--end of new headoffice section-->

        <!--
                <div class="businessSection">
                    <div class="form-row  mt-md-4 py-2">
                        <h4 class="text-md-left my-md-1 repeatedlabelfont4">Company Head Office</h4>
                            <br><br>
                        <div class="col-12">
                            <div class="row">
                                <div class=" col-6 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control textfieldstyle" placeholder="suite#">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control textfieldstyle" placeholder="Street#">
                                    </div>
                                </div>
                                <div class=" col-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control textfieldstyle" placeholder="Street Name">
                                    </div>
                                </div>

                                <div class="col-6 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Town/City" class="form-control textfieldstyle">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Province/State" class="form-control textfieldstyle">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="form-row  py-2">
                        <div class="col-sm-11 col-md-6">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-8">
                                    <div class="form-group">
                                        <input type="text" placeholder="Postal Code/Zip Code" class="form-control textfieldstyle">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Country" class="form-control textfieldstyle">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-1 col-md-6"></div>
                    </div>

                    <h4 class="text-md-left text-sm-left my-md-1 repeatedlabelfont4">Location of Items/</h4>
                    <div class="form-row py-2">
                        <div class="col-12">
                            <div class="row">
                                <div class=" col-6 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control textfieldstyle" placeholder="Suite#">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control textfieldstyle" placeholder="Street#">
                                    </div>
                                </div>
                                <div class=" col-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control textfieldstyle" placeholder="Street Name">
                                    </div>
                                </div>

                                <div class="col-6 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Town/City" class="form-control textfieldstyle">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Province/State" class="form-control textfieldstyle">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="form-row   py-md-1">
                        <div class="col-sm-11 col-md-6">
                            <div class="row">
                                <div class="col-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Postal Code/Zip Code" class="form-control textfieldstyle">
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Country" class="form-control textfieldstyle">
                                    </div>
                                    
                                </div>
                                
                                <div class="col-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Link to Your Website " class="form-control textfieldstyle2">
                                    </div>
                            </div>
                        </div>
                        <div class="col col-sm-1 col-md-6"></div>
                    </div>
                    </div>
                </div>
                -->

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
                                <input type="file" name="license" class="page3paybtn" value="Upload">
                                <p class="mya2">Business License</p>
                                <p class="mya3">if no Business License, <a href="#" class="mya">Please Explain</a></p>
                            </div>
                            <div class="col-md-4 text-center">
                                <input type="file" name="file" class="page3paybtn" value="Upload">
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