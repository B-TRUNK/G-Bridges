<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'config.php';


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

        $emailTo = $_SESSION['username'];
        $code    = uniqid(true);

        $query   = mysqli_query($link, "INSERT INTO emailverify(code,email) VALUES('$code','$emailTo')");

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
            $url =   "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/verifybridge.php?code=$code" ;
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = 'Verification Email';
            $mail->Body    = "<h3>To Confirm your Email Address,
            </h3><br>Please click here! ->  <a href='$url'>'$code'</a>";

            $mail->send();
            echo 'Confirmation email is sent, Please check your email!';
            } catch (Exception $e) {
                echo "Something went wrong , please try again";
            }
            exit();
                    
?>



