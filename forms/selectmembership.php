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

<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style2.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    
    </head>
<body>
        <center>
            <form action="#" method="POST" id="idForm">
                <div class="mshipdiv">
                <div class="smupperdiv">
                    <p>Choose Your Membership</p>
                </div>

                <div class="sminnerupper">
                    <p class="iam">I am</p>
                    <input  class="regradiobtns" type="radio" onclick="idForm()" name="choice" value="regular" checked="checked"> <p class="regradiobtnsfont"> Regular Member</p>
                    <input  class="regradiobtns" type="radio" onclick="idForm()" name="choice" value="business"> <p class= "regradiobtnsfont"> Business Member</p>
                    <input  class="regradiobtns" type="radio" onclick="idForm()" name="choice" value="employer"> <p class= "regradiobtnsfont"> Employer </p>
                </div>

                    <div class="membershipform">
                        <div class="twoupperfields">
                        <input type="text" name="baptismname"  placeholder="Preferred Name or Baptism Name" class="mformstyle" >
                        <br>
                        <input type="date" name="dop" placeholder="Date of Birth " class="mformstyle" style="float:left">
                        </div>
                     
                        <div class="mthirdrow">
                            <input type="text" name="maritalstatus" readonly  placeholder="Marital Status" class="mformstyle" style="position:relative;margin-left:-209px">
                            <input  class="regradiobtns" type="radio" name="maritalstatusselect" value="single"> <p class="regradiobtnsfont"> Single</p>
                            <input  class="regradiobtns" type="radio" name="maritalstatusselect" value="married" > <p class= "regradiobtnsfont"> Married</p>
                            <input  class="regradiobtns" type="radio" name="maritalstatusselect" value="widdowed" > <p class= "regradiobtnsfont"> Widowed</p>
                        </div>

                        <div class="mfourthrow">
                        <input type="text" name="education" placeholder="What's your Highest Education" class="mformstyle" style="position:relative;margin-left:-510px">
                        </div>


                        <div class="maddress">
                            <p class="addressfont">Address</p> 
                        </div>


                        <div class="mfifthrow">
                        <input type="text" name="street" value='' placeholder="Street" class="mfifthrowstyle" style="position:relative;margin-left:-400px">
                        <input type="text" name="city"     placeholder="City" class="mfifthrowstyle" >
                        <input type="text" name="province" placeholder="Province" class="mfifthrowstyle" >
                        <input type="text" name="zipcode"  placeholder="Zip Code" class="mfifthrowstyle" >
                        </div>

                        <div class="msixthsrow">
                            <input type="text" name="profission" placeholder="Profession" class="mformstyle" style="">
                            <p style="float:left;font-weight:bold;margin-left:30px">Shown To Public  :</p>
                            <input  class="regradiobtns" type="radio" name="profissionshowntopublic" value="yes"> <p class="regradiobtnsfont"> Yes</p>
                            <input  class="regradiobtns" type="radio" name="profissionshowntopublic" value="no" > <p class= "regradiobtnsfont"> No</p>
                        </div>

                        <div class="mseventhrow">
                        <input type="text" name="churchname" placeholder="Church you Attend" class="mformstyle">
                        <br>
                        <input type="text" name="pastorname" placeholder="Pastor of Church " class="mformstyle" style="float:left">
                        </div>


                        <div class="eightsrow">
                            <p>Are you searching for a blessed partner ?</p>
                             <input  class="needapartner" type="radio" name="searchingforblessedpartner" value="yes" style="margin-left:30px"> <p class="regradiobtnsfont" style="margin-left:10px"> Yes</p>
                            <input  class="needapartner" type="radio" name="searchingforblessedpartner" value="no" > <p class= "regradiobtnsfont" style="margin-left:10px"> No</p>
                        </div>

                       <input type="submit" name="movetoreferralspage" value="Register" class="registerbtn">
                    </div>

            </div>
            </form>
            
        </center>
        
       
    

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/membershipsradsselect.js"></script>
</body>
</html>