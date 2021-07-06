<?php


session_start();


    if(isset($_POST['movetoreferralspage'])){

            $_SESSION['baptismname']            = $_POST['baptismname'];
            $_SESSION['dop']                    = $_POST['dop'];
            $_SESSION['maritalstatusselect']    = $_POST['maritalstatusselect'];
            $_SESSION['education']              = $_POST['education'];
            $_SESSION['street']                 = $_POST['street'];
            $_SESSION['city']                   = $_POST['city'];
            $_SESSION['province']               = $_POST['province'];
            $_SESSION['zipcode']                = $_POST['zipcode'];
            $_SESSION['profission']             = $_POST['profission'];
            $_SESSION['profissionshowntopublic']= $_POST['profissionshowntopublic'];
            $_SESSION['churchname']             = $_POST['churchname'];
            $_SESSION['pastorname']             = $_POST['pastorname'];
            $_SESSION['searchingforblessedpartner'] = $_POST['searchingforblessedpartner'];
            header("location: pendingrequest.php");


        }

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/businessmemberstyle.css">
        <link rel="stylesheet" href="../css/style2.css">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    </head>
<body>
    
<center>    
<div class="businessmembersdiv">
    <div class="bmupperdeiv">
        <p>Business Membership</p>
    </div>

    <div class="upperfields">
    <form action="employer.php" method="POST">
                            <br>
                            <input type="text" name="companyName"placeholder="Company Name" class="regformstyle regformstylespecial">
                            <br>
                            <input type="text" name="companytelephone" placeholder="Tel. Number " class="regformstyle regformstylespecial">
                            <input type="text" name="companyCellPhone" placeholder="Cell phone Number" class="regformstyle companycellphone">
                            <input type="text" name="companyFax"placeholder="Fax" class="regformstyle">
                            <br>
                            <input type="text" name="companyEmail" placeholder="Email" class="regformstyle regformstylespecial">
                            <br>
                            <input type="text" name="companyWebsite" placeholder="Website" class="regformstyle regformstylespecial">
                            <br>
                            <input type="text" name="contactPerson" placeholder="Contact person for business" class="regformstyle regformstylespecial">
                            <br>
                            <input type="text" name="service" placeholder="Product / Service" class="regformstyle regformstylespecial">
                            <br>
                           
                            <select required="required" name="discount" class="regformstyle regformstylespecial">
                                <option value="">Discount Offered</option>
                                <option value="5%">5%</option>
                                <option value="10%">10%</option>
                                <option value="15%">15%</option>
                                <option value="20%">20%</option>
                            </select>
                            <!--
                            <div style="float:right;margin-right:10px">
                            <input  class="regradiobtns" type="radio" name="membershiptype" value="Gender"> <p class="regradiobtnsfont"> 5%</p>
                            <input  class="regradiobtns" type="radio" name="membershiptype" value="Gender" > <p class= "regradiobtnsfont"> 10%</p>
                            <input  class="regradiobtns" type="radio" name="membershiptype" value="Gender"> <p class="regradiobtnsfont"> 15% </p>
                            <input  class="regradiobtns" type="radio" name="membershiptype" value="Gender" > <p class= "regradiobtnsfont"> 20% </p>
                            <input  class="regradiobtns" type="radio" name="membershiptype" value="Gender"> <p class="regradiobtnsfont"> 25% </p>
                            </div>
                            -->

                            <br>
                            <div class="addressofcompanydiv">
                            <p class="addressofcompanydivfont">Addresses of Company</p>
                            <br>
                            <div class="addressrow">
                                <input type="text" name="country1" placeholder="Country" class="locationfields countryoneextrastyle">
                                <input type="text" name="state1" placeholder="Province/State" class="locationfields" >
                                <input type="text" name="city1"  placeholder="City" class="locationfields" >
                                <input type="text" name="street1"  placeholder="Street" class="locationfields" >
                                <input type="text" name="unit1"  placeholder="Unit Number" class="locationfields" >
                                <input type="text" name="postal1"  placeholder="Zip/Postal Code" class="locationfields" >
                                </div>

                            <div class= "addressrow">
                                <input type="text" name="country2"  placeholder="Country" class="locationfields" >
                                <input type="text" name="state2"  placeholder="Province/State" class="locationfields" >
                                <input type="text" name="city2"  placeholder="City" class="locationfields" >
                                <input type="text" name="street2"  placeholder="Street" class="locationfields" >
                                <input type="text" name="unit2"  placeholder="Unit Number" class="locationfields" >
                                <input type="text" name="postal2"  placeholder="Zip/Postal Code" class="locationfields" >
                                 
                                </div>
                           
                            </div>

                            <div class="businesslicencediv">
                                <p class="businesslicencedivfont">Business Licence</p>
                                <input type="submit" name="uploadlicense1" value="Upload" class="businesslicenceinput1">
                                <br>
                                <br>
                                <p class="businesslicencedivfont">Certificates </p>
                                <input type="submit" name="uploadlicense2" value="Upload" class="businesslicenceinput2">
                            </div>
                            
                            <br>

                            <div class="selfemployedsection">
                            <p class="selfemploymentsectionfont">If self-Employed/freelancer please explain:</p>
                            <input type="submit" name="register" value="Register" class="registerbtn" >
                            <textarea rows="3" cols="40" name="selfEmployedExplanation" style="resize: none;"></textarea>
                            </div>

                            <div class="paymentsection">
                                <div class="proceedtopayment">
                                    <a href="#" class="proceedtopaymentfont"><em>Proceed to payment</em></a>
                                </div>
                                <div class="mastercardarea"></div>
                                
                            </div>
                           
                        </form>
                        
    </div>



                            
    
</div>

</center>

    

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>