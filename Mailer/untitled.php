if ($sessionusername == $row2['reference_mail_one']) {
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            echo ("Connection failed");
                                        }
                                        
                                        $sql = mysqli_query($conn, "UPDATE regularmrequest SET reference_mail_one_status='Confirmed' WHERE username='$request_email'");
                                        
                                        if ($sql) {

                                            echo "Confirmed successfully";
                                            // Instantiation and passing `true` enables exceptions
                                            $mail = new PHPMailer(true);

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
                                                $mail->addAddress($request_email);                                // Add a recipient
                                                $mail->addReplyTo('globalchurchesproject@gmail.com', 'no-reply');
                                                

                                                // Content
                                                $mail->isHTML(true);                                        // Set email format to HTML
                                                $mail->Subject = 'Regular Membership Approval Notification';
                                                $mail->Body    = "<h2>Hello, $sessionusername has <p style='color:green'>Approved</p> your request! , </h2>";

                                                $mail->send();

                                                $sql2 = mysqli_query($conn, "UPDATE users SET status='active' WHERE username='$request_email'");
                                                
                                        } else {
                                            echo "Error happened , please try again";
                                        }
                                        header("location: ../Mailer/pendingmembers2.php");
                                }