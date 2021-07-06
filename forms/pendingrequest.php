<?php


session_start();
    error_reporting(E_ERROR | E_PARSE);
    
               $username                    =       $_SESSION['username'];
               $displayname                 =       $_SESSION['displayname'];
               $firstname                   =       $_SESSION['firstname'];
               $secondname                  =       $_SESSION['secondname'];
               $gender                      =       $_SESSION['gender'];
               $baptismname                 =       $_SESSION['baptismname'];
               $dop                         =       $_SESSION['dop'];
               $maritalstatusselect         =       $_SESSION['maritalstatusselect'];
               $education                   =       $_SESSION['education'];
               $street                      =       $_SESSION['street'];
               $city                        =       $_SESSION['city'];
               $province                    =       $_SESSION['province'];
               $zipcode                     =       $_SESSION['zipcode'];
               $profission                  =       $_SESSION['profission'];
               $profissionshowntopublic     =       $_SESSION['profissionshowntopublic'];
               $churchname                  =       $_SESSION['churchname'];
               $pastorname                  =       $_SESSION['pastorname'];
               $searchingforblessedpartner  =       $_SESSION['searchingforblessedpartner'];
                        
        
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
            <p class="upperfontstyle">Thank you,your membership is pending</p>
            <p class="upperfontstyle">Your name will be posted under pending members</p>
            <p class="upperfontstyle">Once you have been verified</p>
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
            <input type="checkbox" name="terms" value="agreed"> Do you agree our <a href="../documents/terms.pdf" target="new">Terms and Conditions?</a><br>

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



    define('DB_SERVER', 'sql207.epizy.com');
    define('DB_USERNAME', 'epiz_24823078');
    define('DB_PASSWORD', 'SAg3qhXpxDb');
    define('DB_NAME', 'epiz_24823078_GCP');
     
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
        baptism_name,
        date_of_birth,
        marital_status,
        education,
        address_street,
        address_city,
        address_province,
        address_zip,
        profession,
        shown_to_public,
        attending_church_name,
        pastor_name,
        blessed_partner_searching,
        reference_mail_one,
        reference_mail_two,
        reference_mail_three,
        terms_and_condistions_status
        
        
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt -> bind_param( "ssssssssssssssssssssss" ,

                           $username,
                           $displayname,
                           $firstname,
                           $secondname,
                           $gender,
                           $baptismname,
                           $dop,
                           $maritalstatusselect,
                           $education,
                           $street,
                           $city,
                           $province,
                           $zipcode,
                           $profission,
                           $profissionshowntopublic,
                           $churchname,
                           $pastorname,
                           $searchingforblessedpartner,
                           $ref1,
                           $ref2,
                           $ref3,
                           $terms
                     );

    $stmt -> execute();

    
    }
    header("location: ../forms/pendingmessage.php");


}

?>
    

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>