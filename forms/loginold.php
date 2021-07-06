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

        $sql = "SELECT id, username, password,firstname,secondname,status,displayname FROM users WHERE (username = ?) AND (status='active')";
        
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
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password,$firstname,$secondname,$status,$displayname);
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../files/logo.png" sizes="16x16">
    <link rel="stylesheet" href="css/style.css">
    <link rel='shortcut icon' type='image/x-icon' href='..//logo.jpg' />
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Globe Bridges - Login</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

                
</head>
<body>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    
    <div class="logindiv">
        <div>
            <div class="profilepic"></div>
            <p class="secureloginfont">Secure LogIn</p>
        </div>
        

        <div class="logininfodiv">
           <div class="usernamediv">
               <p class="candidatesfont">Email:</p>
               <input type="text" name="username" class="inputclass" placeholder='Type Your Username' value="<?php echo $username; ?>">
               <span  class="help-block span-font"><p><?php echo $username_err; ?></p></span>
           </div>
           <div class="passworddiv">
               <p class="candidatesfont">Password:</p>
               <input type="password" name="password" class="inputclass" placeholder='Type Your Password'>
               <span class="help-block span-font"><p><?php echo $password_err; ?></p></span>
           </div>
        </div>
        <div class="bottomcontrols">
            <div class="half1div">
                <a href="../Mailer/resetrequest.php" class="forgotlink"><em>Forgot Password ?</em></a>
                <p class="notamember">Not A Member <a href="../forms/register2.php" class="signup"><em>Sign up ?</em></a></p>
            </div>
            <div class="half2div">
                <input type="submit" class="loginbutton" value="Login">
            </div>
        </div>
    </div>
</form>

    
</body>
</html>