<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'config.php';

if (isset($_POST["submit"])) {

    $emailTo = $_POST["email"];
    $code    = uniqid(true);


    $query   = mysqli_query($link, "INSERT INTO resetPasswords(code,email) VALUES('$code','$emailTo')");

   
    if(!$query){
        exit("Error");
    }

    // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'globalchurchesproject@gmail.com';                     // SMTP username
            $mail->Password   = 'as42@gcp19';                          // SMTP password
            $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;                                    

            //Recipients
            $mail->setFrom('globalchurchesproject@gmail.com', 'Globe Bridges');
            $mail->addAddress($emailTo);                                // Add a recipient
            $mail->addReplyTo('globalchurchesproject@gmail.com', 'no-reply');
            

            // Content
            $url =   "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetpassword.php?code=$code" ;
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = 'Password Reset Request';
            $mail->Body    = "<h3>You requested a password reset link,
            </h3><br> click here ->  <a href='$url'>'$code'</a>";

            $mail->send();
            echo 'Reset password link was sent Successfully, Please check your Email!';
            } catch (Exception $e) {
                echo "Something went wrong , please try again";
            }
            exit();
        }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <link rel="stylesheet" href="../css/about.css">
    <link rel="icon" href="../files/logo.png" sizes="16x16">
</head>
<body>
    <center>
    <form method="POST">
        <p class="labelfont">Please Enter Your Registered Email!</p>
        <input type="text" name="email" class="input">
        <br>
        <input type="submit" name="submit" value="Send Email" class="confirmBtn">
    </form>
</center>
</body>
</html>



    
    















