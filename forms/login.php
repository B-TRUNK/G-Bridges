<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../pages/home.php");
    exit;
}
 
// Include config file
require_once "../config/loginconfig.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter your Email!";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password1";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement

        $sql = "SELECT id, username, password,firstname,secondname,status,displayname,file_name FROM users WHERE (username = ?) AND (status='active')";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password,$firstname,$secondname,$status,$displayname,$filename);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["firstname"] = $firstname;
                            $_SESSION["secondname"] = $secondname;
                            $_SESSION["status"] = $status;
                            $_SESSION["displayname"] = $displayname;
                            $_SESSION["filename"] = $filename;

                            // Redirect user to welcome page
                            header("location: ../pages/home.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err ="Incorrect Password!";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "Not matched Email";
                }
            } else{
                echo "There was an error, please try again later";
            }
        }
        
        // Close statement
        //mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 


<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login</title>
        <meta charset="utf-8">
        <link rel="icon" href="../files/logo.png" sizes="16x16">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/slogin.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    </head>
<body>
    
<form method="POST">
    <div class="slogindiv">

    	<div class="leftdiv">
            <div class="logodiv"></div>
    		<p class="welcomefont">Welcome back!</p>
    		<p class="gladfont">We are glad to see you again</p>
    	</div> <!--end of left div-->

    	<div class="rightdiv">
            <!--<a href="#" class="homepagelink">Home Page</a>-->
    		<p class="loginword">Log In</p>

    		<div class="emaildiv">
    			<p class="emailpasswordfont">Email address</p>
    			<input type="text" name="username" class="inputclass">
                <span  class="help-block span-font"><p><?php echo $username_err; ?></p></span>
                <br>
    		</div>

    		<div class="passworddiv">
    			<p class="emailpasswordfont">Password</p>
    			<input type="password" name="password" class="inputclass">
                <span class="help-block span-font"><p><?php echo $password_err; ?></p></span>
    		</div>
    		<div class="rememberforgotdiv">
    			<input type="checkbox" class="rememberme" name="rememberme" value="rememberme">
				<label for="rememberme" class="rememberlabelfont">Remember me</label>

				<a href="../Mailer/resetrequest.php" class="forgotpassword">Forgot password?</a>
    		</div>
    		

    		<div class="btndiv">
    			<input type="submit" id="submitBtn" name="submitbtn" value="Log in">
    		</div>
    		<div class="haveaccountdiv">
    			<p class="rememberlabelfont">Don’t have an account?</p>
    			<a href="../forms/register2.php" class="signup">Apply</a>

    		</div>

    	</div> <!--end of right div-->

    </div>
</form>

    

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>
</body>
</html>