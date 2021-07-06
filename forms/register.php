<?php
session_start();

// Include config file
require_once "../config/loginconfig.php";


// Define variables and initialize with empty values
$username = $displayname = $password = $confirm_password  = "";
$username_err = $displayname_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate email
    if(empty(trim($_POST["username"]))){
        $username_err = "Pleae Enter a valid Email : (example@yourdomain.com)";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This Email is already Registerd before!";
                } else{
                    $username = trim($_POST["username"]);
                    
                }
            } else{
                echo "There was an Error, please try again later!";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    

    //validate user name
    if(empty(trim($_POST["displayname"]))){
        $displayname_err = "Please insert your Email!";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE displayname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_displayname);
            
            // Set parameters
            $param_displayname = trim($_POST["displayname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $displayname_err = "This User Name is already Taken Before";
                } else{
                    $displayname = trim($_POST["displayname"]);
                    
                }
            } else{
                echo "There was an Error, please try again later!";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    //end of validating user name



    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "please enter your password";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password should be 6 letters as Minimum!";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "اPlease Confirm Password!";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Not Matched!";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($displayname_err)){
 
        
                    $firstname = ($_POST["firstname"]);
                    $secondname = ($_POST["secondname"]);
                    $gender = ($_POST["Gender"]);



                    $_SESSION['gender'] = "$gender";
                    $_SESSION['firstname'] = "$firstname";
                    $_SESSION['secondname'] = "$secondname";
                    $_SESSION['username'] = "$param_username";
                    $_SESSION['displayname'] = "$param_displayname";

                    

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password,firstname,secondname,displayname,gender) VALUES (?, ?, ? , ? ,? ,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_password,$firstname,$secondname,$param_displayname,$gender);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: selectmembership.php");
            } else{
                echo  "There was an Error, please try again later!";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register Globe-Bridges</title>
        <meta charset="utf-8">
        <link rel="icon" href="../files/logo.png" sizes="16x16">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    </head>
<body>
        <center>
            <div class="registerform">
                <div class="upperregdiv">
                    <p class="reglabel">Register and become a verified member</p>
                </div>
                    <br>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="multipart/form-data">
                    <div class="regleftdiv">
                    
                            <br>
                            <input autocomplete="off" type="text" name="displayname" placeholder="User Name" class="regformstyle <?php echo (!empty($displayname_err)) ? 'has-error' : ''; ?>" value="<?php echo $displayname; ?>">
                            <span class="help-block errormsgspan"><?php echo $displayname_err; ?></span>
                            <input autocomplete="off" type="text" name="firstname" placeholder="First Name " class="regformstyle">
                            <input autocomplete="off" type="text" name="username" placeholder="Email Address" class="regformstyle <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" value="<?php echo $username; ?>">
                            <span class="help-block errormsgspan"><?php echo $username_err; ?></span>
                            <input autocomplete="off" type="password" name="password" placeholder="Type Your Password" class="regformstyle <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="help-block errormsgspan"><?php echo $password_err; ?></span>
                            <input autocomplete="off" type="password" name="confirm_password" placeholder="Confirm Your Password" class="regformstyle <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>" value="<?php echo $confirm_password; ?>">
                            <span class="help-block errormsgspan"><?php echo $confirm_password_err; ?></span>
                            
                    </div>

                    <div class="regrightdiv">                            
                            <br>
                            <input type="text" name="secondname" placeholder="Last Name" class="regformstyle regrightform">
                            <p class="reggenderfont">Gender</p>
                            <br>
                            <input  class="regradiobtns" type="radio" name="Gender" value="male"> <p class="regradiobtnsfont"> Male </p>
                            <input  class="regradiobtns" type="radio" name="Gender" value="female" > <p class= "regradiobtnsfont"> Female </p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <input type="submit" name="basicinfosavebtn" value="Continue" class="continuebtn">

                        
                    </div>
                    </form>
            </div>
        </center>
        
    

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>