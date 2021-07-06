<?php

session_start();

include("config.php");

echo    $_SESSION['gender'] . ',' .

        $_SESSION['username'] . ',' .

        $_SESSION['firstname'] . ',' .

        $_SESSION['secondname']. ',' .

        $_SESSION['displayname'] . ',' .

        $_SESSION['dob']. ',' .

        $_SESSION['maritalstatusselect']. ','.

        $_SESSION['education']. ','.

        $_SESSION['street']. ','.

        $_SESSION['city']. ','.

        $_SESSION['country']. ','.

        $_SESSION['zipcode']. ','.

        $_SESSION['profession']. ','.

        $_SESSION['profissionshowntopublic']. ','.

        $_SESSION['churchname']. ','.

        $_SESSION['pastorname']
        ;

               $username                    =       $_SESSION['username'];
               $displayname                 =       $_SESSION['displayname'];
               $firstname                   =       $_SESSION['firstname'];
               $secondname                  =       $_SESSION['secondname'];
               $gender                      =       $_SESSION['gender'];
               $dop                         =       $_SESSION['dob'];
               $maritalstatusselect         =       $_SESSION['maritalstatusselect'];
               $education                   =       $_SESSION['education'];
               $street                      =       $_SESSION['street'];
               $city                        =       $_SESSION['city'];
               $zipcode                     =       $_SESSION['zipcode'];
               $country                     =       $_SESSION['country'];
               $profession                  =       $_SESSION['profession'];
               $profissionshowntopublic     =       $_SESSION['profissionshowntopublic'];
               $churchname                  =       $_SESSION['churchname'];
               $pastorname                  =       $_SESSION['pastorname'];
                        
?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/pendingrequest.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    </head>
<body>
    
<form action="?" method="POST">
<center>
<div class="pendingdiv">
        <div class="pendingupperdiv">
            <p class="upperfontstyle">THANK YOU, MEMBERSHIP IS PENDING</p>
            <p class="upperfontstyle">YOUR NAME WILL BE POSTED UNDER PENDING MEMBERS</p>
            <p class="upperfontstyle">ONCE YOU HAVE BEEN VERIFIED</p>
        </div>

        <div class="maindiv">
        <p class="referencesfont">Adding Member Referencing Emails</p>
        <p class="notficationmailfont">Your Reference will receive a Notification Email to Approve your request.</p>

        <div class="referencemailinput">
            <p class="referencemailnumberleft">1.</p>
            <input type="text" class="referencemailfield" placeholder="Email" name="ref1">
            <p class="referencemailoptionalrigt">Optional</p>
        </div>

        <div class="referencemailinput">
            <p class="referencemailnumberleft">2.</p>
            <input type="text" class="referencemailfield" placeholder="Email" name="ref2">
            <p class="referencemailoptionalrigt">Optional</p>
        </div>

        <div class="referencemailinput">
            <p class="referencemailnumberleft">3.</p>
            <input type="text" class="referencemailfield" placeholder="Email" name="ref3">
            <p class="referencemailoptionalrigt">Optional</p>
        </div>

        </div>

        <div class="bottomdiv">
            <div class="termsandconditions">
            <input type="checkbox" name="terms" value="agreed"> Do you agree our <a href="../pages/t&c.PHP" target="new">Terms and Conditions?</a><br>

            </div>

            <input type="submit" value="Submit" name="submit" class="submitBtn">

        </div>
    </div>
</center>
    
</form>


<?php

    if (isset($_POST['submit'])) {

        $ref1 = $_POST['ref1'];
        $ref2 = $_POST['ref2'];
        $ref3 = $_POST['ref3'];
        $terms = $_POST['terms'];



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

        $stmt = $link->prepare("INSERT INTO regularmrequest (

        username,
        displayname,
        firstname,
        secondname,
        gender,
        date_of_birth,
        marital_status,
        education,
        address_street,
        address_city,
        address_zip,
        profession,
        shown_to_public,
        attending_church_name,
        pastor_name,
        reference_mail_one,
        reference_mail_two,
        reference_mail_three,
        terms_and_conditions_status,
        address_country
        
        
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt -> bind_param( "ssssssssssssssssssss" ,

                           $username,
                           $displayname,
                           $firstname,
                           $secondname,
                           $gender,
                           $dop,
                           $maritalstatusselect,
                           $education,
                           $street,
                           $city,
                           $zipcode,
                           $profession,
                           $profissionshowntopublic,
                           $churchname,
                           $pastorname,
                           $ref1,
                           $ref2,
                           $ref3,
                           $terms,
                           $country
                     );

    $stmt -> execute();

    
    }
    header("location: pendingmessage.php");


}

?>
    

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>