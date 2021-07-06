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
        <link rel="stylesheet" href="../css/employerstyle.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <style>

    </style>
    </head>
<body>

<form action="pendingrequest.php" method="POST">
<div class="employersdiv">
    <div class="employerupperdiv">
        <p>Employment Mmbership</p>
    </div>

    <div class="leftdiv">
    <div class="labelfieldcontainter">
    <p class="label">Company Name</p>
    <input type="text" class="textfied" placeholder="Company name">
    </div>

    <div class="labelfieldcontainter">
    <p class="label">Phone</p>
    <input type="text" class="textfied" placeholder="phone">
    </div>

    <div class="labelfieldcontainter">
    <p class="label">Est. Since</p>
    <input type="text" class="textfied" placeholder="Since">
    </div>

    <div class="labelfieldcontainter">
    <p class="label">Category</p><br>
    <select name="category" id="categoryselect" class="categorycombo">
        <option value="Retail">Retail</option>
        <option value="Health">Health</option>
        <option value="Electronics">Electronics</option>
    </select>
    </div>

    <div class="areadiv">
    <p class="label">About Company</p><br><br>
    <textarea rows="4" cols="30" class="textareainput">
</textarea>
    </div>

   

   
   
    </div>


    <div class="rightdiv">
    <div class="labelfieldcontainter">
    <p class="label">Email Address</p>
    <input type="text" class="textfied" placeholder="Email Address">
    </div>

    <div class="labelfieldcontainter">
    <p class="label">Website</p>
    <input type="text" class="textfied" placeholder="Website">
    </div>

    <div class="labelfieldcontainter">
    <p class="label">Category</p><br>
    <select name="category" id="categoryselect" class="categorycombo">
        <option value="Retail">Retail</option>
        <option value="Health">Health</option>
        <option value="Electronics">Electronics</option>
    </select>
    </div>


    <input type="submit" name="register" value="Register" class="registerbtn" style="position:absolute;top :90%;left:30%;z-index:100">


    

</div>
</form>
    


    

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>