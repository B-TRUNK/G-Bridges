<?php

    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'config.php';

    error_reporting(E_ERROR | E_PARSE);

    $sessionusername    = $_SESSION['username'];
    $sessionfirstname   = $_SESSION["firstname"];



    require ("../config/loginconfig.php");

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "gcp";


    // Displayed Table Query
                    echo '<br><br>';
                    echo '<center>';
                    echo "<p class='actionlabelfont'>Hi $sessionfirstname, Here are your Pending Requests!</p>";
                    echo '</center>';
        $stmt=$link->prepare("SELECT *  FROM regularmrequest WHERE (
            (reference_mail_one = '$sessionusername' AND reference_mail_one_status = ' ' ) 
            OR (reference_mail_two = '$sessionusername' AND reference_mail_two_status = ' ') 
            OR (reference_mail_three = '$sessionusername' AND reference_mail_three_status = ' ')

        )");

        $stmt->execute();
        $result=$stmt->get_result();

                echo '
                <center>
                    <table id="tbl">
                    <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Church Name</th>
                    <th>Pastor</th>
                    <th>Request Date</th>
                    
                    </tr>';
                    while($row=$result->FETCH_ASSOC()){
                    echo '<tr>
                    <td >'. $row['firstname'] .'</td>
                    <td >'.$row['secondname'] .'</td>
                    <td >'.$row['username'] .'</td>
                    <td >'.$row['attending_church_name'] .'</td>
                    <td >'.$row['pastor_name'] .'</td>
                    <td>'.$row['request_date'].'</td>
                    </tr>';
                    }
                    echo '</table>';
                    echo '</center>';
    // End Of Displayed Table Query   


            // Begin Of Confirmation Btn Cycle
            if (isset($_POST['submitBtn'])) {

                $request_email = $_POST['useremail'];

                $statment = $link->prepare("SELECT * FROM regularmrequest WHERE username = '$request_email'");

                $statment->execute();
                $result2=$statment->get_result();
                while($row2=$result2->FETCH_ASSOC()){




                        // Begin Of REF1 Confirmation Routine
                        if ($sessionusername = $row2['reference_mail_one'] ) {
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                            // Check connection
                                            if ($conn->connect_error) {
                                                echo ("Connection failed");
                                            }
                                            
                                            $sql = mysqli_query($conn, "UPDATE regularmrequest SET reference_mail_one_status='Confirmed' WHERE username='$request_email'");
                                            
                                            if ($sql) {

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

                                                    //$sql2 = mysqli_query($conn, "UPDATE users SET status='active' WHERE username='$request_email'");
                                                    
                                            } else {
                                                echo "Error happened , please try again";
                                            }
                                            header("location: ../Mailer/pendingmembers.php");
                                        } // End of Ref 1 Confirmation




                                        // Begin Of REF2 Confirmation Routine
                                    else if ($sessionusername = $row2['reference_mail_two'] ) {
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                            // Check connection
                                            if ($conn->connect_error) {
                                                echo ("Connection failed");
                                            }
                                            
                                            $sql = mysqli_query($conn, "UPDATE regularmrequest SET reference_mail_two_status='Confirmed' WHERE username='$request_email'");
                                            
                                            if ($sql) {

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

                                                    //$sql2 = mysqli_query($conn, "UPDATE users SET status='active' WHERE username='$request_email'");
                                                    
                                            } else {
                                                echo "Error happened , please try again";
                                            }
                                            header("location: ../Mailer/pendingmembers.php");
                                        } // End of Ref 2 Confirmation





                                        // Begin Of REF3 Confirmation Routine
                                    else if ($sessionusername = $row2['reference_mail_three'] ) {
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                            // Check connection
                                            if ($conn->connect_error) {
                                                echo ("Connection failed");
                                            }
                                            
                                            $sql = mysqli_query($conn, "UPDATE regularmrequest SET reference_mail_three_status='Confirmed' WHERE username='$request_email'");
                                            
                                            if ($sql) {

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

                                                    //$sql2 = mysqli_query($conn, "UPDATE users SET status='active' WHERE username='$request_email'");
                                                    
                                            } else {
                                                echo "Error happened , please try again";
                                            }
                                            header("location: ../Mailer/pendingmembers.php");
                                        } // End of Ref3 Confirmation







                }// End of Results lOOP FOR oNE sELECTION


                        
            }// End OF Confirm Btn Clicking Cycle  


            // Begin of Neglect Requests Cycle
            else if (isset($_POST['neglectBtn'])) {

                $request_email = $_POST['useremail'];

                $statment = $link->prepare("SELECT * FROM regularmrequest WHERE username = '$request_email'");

                $statment->execute();
                $result2=$statment->get_result();
                while($row2=$result2->FETCH_ASSOC()){




                        // Begin Of REF1 Neglected Routine
                        if ($sessionusername = $row2['reference_mail_one'] ) {
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                            // Check connection
                                            if ($conn->connect_error) {
                                                echo ("Connection failed");
                                            }
                                            
                                            $sql = mysqli_query($conn, "UPDATE regularmrequest SET reference_mail_one_status='Neglected' WHERE username='$request_email'");
                                            
                                            if ($sql) {

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
                                                    $mail->Body    = "<h2>Hello, $sessionusername has <p style='color:red'>Neglected</p> your request! , </h2>";

                                                    $mail->send();

                                                    //$sql2 = mysqli_query($conn, "UPDATE users SET status='active' WHERE username='$request_email'");
                                                    
                                            } else {
                                                echo "Error happened , please try again";
                                            }
                                            header("location: ../Mailer/pendingmembers.php");
                                        } // End of Ref 1 Neglected




                                        // Begin Of REF2 Neglected Routine
                                    else if ($sessionusername = $row2['reference_mail_two'] ) {
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                            // Check connection
                                            if ($conn->connect_error) {
                                                echo ("Connection failed");
                                            }
                                            
                                            $sql = mysqli_query($conn, "UPDATE regularmrequest SET reference_mail_two_status='Neglected' WHERE username='$request_email'");
                                            
                                            if ($sql) {

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
                                                    $mail->Body    = "<h2>Hello, $sessionusername has <p style='color:red'>Neglected</p> your request! , </h2>";

                                                    $mail->send();

                                                    //$sql2 = mysqli_query($conn, "UPDATE users SET status='active' WHERE username='$request_email'");
                                                    
                                            } else {
                                                echo "Error happened , please try again";
                                            }
                                            header("location: ../Mailer/pendingmembers.php");
                                        } // End of Ref 2 Neglected





                                        // Begin Of REF3 Neglected Routine
                                    else if ($sessionusername = $row2['reference_mail_three'] ) {
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                            // Check connection
                                            if ($conn->connect_error) {
                                                echo ("Connection failed");
                                            }
                                            
                                            $sql = mysqli_query($conn, "UPDATE regularmrequest SET reference_mail_three_status='Neglected' WHERE username='$request_email'");
                                            
                                            if ($sql) {

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
                                                    $mail->Body    = "<h2>Hello, $sessionusername has <p style='color:red'>Neglected</p> your request! , </h2>";

                                                    $mail->send();

                                                    //$sql2 = mysqli_query($conn, "UPDATE users SET status='active' WHERE username='$request_email'");
                                                    
                                            } else {
                                                echo "Error happened , please try again";
                                            }
                                            header("location: ../Mailer/pendingmembers.php");
                                        } // End of Ref3 Neglected







                }// End of Results lOOP FOR oNE sELECTION       
            } // End of Neglect Button Routine   
    ?>

     <title>Your Pending Members</title>
     <link rel="stylesheet" type="text/css" href="../css/pendingmembers.css">

     <center>
                    <div class="actiondiv">
                         <form method="POST">
                            <p class="actionlabelfont">Search By a User Email To Approve/Ignore</p>
                            <input type="text" name="useremail" class="useremailstyle" placeholder="Pending User Email">
                            <br>
                            <br>
                            <textarea rows="4" cols="30" class="textareainput" placeholder="How did you know meet Him/Her ?"></textarea>
                            <br>
                            <br>
                            <select name="knowingperiod" class="useremailstyle">
                                            <option value="0">How long did you Know Him/Her</option>
                                            <option value="Engineering">1 Year</option>
                                            <option value="Technology">2 Year</option>
                                            <option value="Accounting">3 Year</option>
                                            <option value="Sales">5 Year</option>
                                            <option value="Sales">>5 Year</option>
                            </select>
                            <br>
                            <input type="submit" class="submitBtn" name="submitBtn" value="Approve">
                            <input type="submit" class="neglectBtn" name="neglectBtn" value="Ignore">
                        </form>
                     </div>

                     <a href="../pages/home.php">Home Screen</a>
                     </center>
     





