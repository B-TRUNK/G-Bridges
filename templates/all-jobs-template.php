
<?php

    session_start();
    error_reporting(E_ERROR | E_PARSE);

    $sessionusername    = $_SESSION['username'];
    $sessionfirstname   = $_SESSION["firstname"];
    $filename = $_SESSION['filename'];

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Job Listing</title>
        <meta charset="utf-8">
        <link rel="icon" href="../files/logo.png" sizes="16x16">
        <meta name="viewport" content="width-device-width , initial-scale=1 , shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/about.css">
        <link rel="stylesheet" href="../css/empmain.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>

    	$(document).ready(function(){
    		 $(".jobDetailsDiv").hide(1);
	 		 $(".companyDetailsDiv").hide(1);

		  $("#detailsBtn").click(function(){
	 		 $(".jobDetailsDiv").show(1);
	 		 $(".companyDetailsDiv").hide(1);
             //$("#detailsBtn").css("background-color":"red");
			});
          

	    	$("#companyBtn").click(function(){
	 		 $(".jobDetailsDiv").hide(1);
	 		 $(".companyDetailsDiv").show(1);
			});


		  });
	    	

    </script>
    </head>
<body>


    <div class="container-fluid" id="pagesandlogo">
        <div id="pagesandlogocontainer">
        <div id="logodiv"></div>

         <div  id="bannerTabsDiv">
                <div class="bannerTabsFontDiv"><a href="../pages/home.php"><p class="bannerTabsDivFont">HOME</p></a> </div>
                <div class="bannerTabsFontDiv"><a href="../pages/about.php"><p class="bannerTabsDivFont">ABOUT</p></a> </div>
                <div class="bannerTabsFontDiv"><a href="#"><p class="bannerTabsDivFont">BIBLE TIME</p></a> </div>
                <div class="bannerTabsFontDiv2"><a href="#"><p class="bannerTabsDivFont">FAQ</p></a></div>
                <div class="bannerTabsFontDiv1"><a href="../pages/contact.php"><p class="bannerTabsDivFont">CONTACT US</p></a></div>
        </div>

        <?php
            if (!$sessionusername) {
                echo '
                    <div id="logintabs">

                            <div id="loginDiv">
                                <a href="../forms/login.php">Log In</a>
                                <div id="signupbtn"><a href="../forms/register2.php">APPLY</a></div>
                    </div>
                ';
            } else {
                echo "<div id='logintabs'>
                        <div class='loggedindiv'>
                            <div class='loggedinarea'>
                                <div class='helloname'><a href='../forms/logout.php'><p class='hellonamefont'>Hello $sessionfirstname!</p></a></div>
                                <div class='loggedprofilepic'>
                                    <div class='picarea' style='background-image: url(../uploads/$filename);'>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>";
            }
            

        ?>
        
        </div>
    </div> <!--end of pagesandlogo row-->

<?php

    if (!$sessionusername) {
         echo '
            <div class="loggedoutsitemenu">
                <div class="buttonsarea">
                    <div class="button4"><a href="../forms/login.php" class="loggedoutsitemenuarefs"><p>Business Listings</p></a></div>
                    <div class="button3"><a href="../employment/employmentselection.php" class="loggedoutsitemenuarefs"><p>Employment</p></a></div>
                    <div class="button2"><a href="#" class="loggedoutsitemenuarefs"><p>Blessed Partners</p></a></div>
                    <div class="button1"><a href="#" class="loggedoutsitemenuarefs"><p>Buy/Sell Home</p></a></div>
                    
                </div>
            </div>
        ';
    } else {
        echo '
            <div class="loggedinsitemenu">
                <div class="buttonsarea2">


                    <div class="button44"><a href="../businesslisting/businesslistingdisplay.php" class="loggedoutsitemenuarefs"><p>Business Listings</p></a></div>
                    <div class="button33"><a href="../employment/all-jobs-results.php" class="loggedoutsitemenuarefs"><p>Employment</p></a></div>
                    <div class="button22"><a href="#" class="loggedoutsitemenuarefs"><p>Blessed Partners</p></a></div>
                    <div class="button11"><a href="#" class="loggedoutsitemenuarefs"><p>Buy/Sell Home</p></a></div>
                    <div class="button44"><a href="../Mailer/pendingmembers.php" class="loggedoutsitemenuarefs"><p>Pending Members</p></a></div>

                </div>
            </div>
     
            </div> <!--end of sitemenu row-->
        ';
    }

    ?>


    <center>
    <form method="POST" action="../employment/all-jobs-results.php">
    	<div  id="empMainContainer4">
            
            <div class="row" id="empMainSearchSection2">

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" id="jObSearch4">
                    <div id="jObSearch4Block">
                        <p class="locationFont">Category</p>
                        <input type="text" name="category" class="locationInput" placeholder="job title, category or company name">
                    </div>
                </div>


                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" id="jObSearch5">
                    <div id="jObSearch5Block">
                        <p class="locationFont">Country</p>
                        <select name="country" class="locationInput">
                            <option value="0">Choose Country</option>
		    				<?php foreach ($countries as $job):  ?>
		    				<option value="<?php echo $job->name ?>"><?php echo $job->name ?></option>
		    				<?php endforeach; ?> 
                        </select>
                    </div>
                </div>
               

                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="jObSearch3">
                    <div id="jObSearch3Block">
                        <input type="submit" name="submitBtn" class="findJobsBtn" value="Find Jobs">
                    </div>
                </div>
            </div>
    	</div>
    	</form>
    <!--End of upper inputs/search btn-->
    </center>

  <div class="row resultsDiv">
	<div class="col-lg-5 jobsResultsLeft">
    	<?php foreach ($jobs as $job ): ?>
            <form method="GET" action="../employment/all-jobs-results.php">
				<a href="../employment/all-jobs-results.php?job_id=<?php echo($job->job_id); ?>"><div class="jobsDisplayedDiv">
					
							<p class="jobTitle"><?php echo $job->job_title; ?></p>
							<p class="companyName"><?php echo $job->company_name; ?></p>
							<p class="cityState"><?php echo ($job->state . ',' . $job->city); ?></p>
							
				</div></a>
                </form>
		<?php endforeach; ?>
    </div>
	<!--End of left Jobs Div-->
	<div  class="col-lg-7 jobsResultsRight">
		<div class="logoAndApplyDive">
							
							<div  class="companyLogo">
								
							</div>


							<div class="jobDesc">
							<p class="jobTitle"><?php echo $job->job_title .' '. 'At'; ?></p>
							<p class="companyName"><?php echo $job->company_name; ?></p>
							<p class="cityState"><?php echo ($job->state . ',' . $job->city); ?></p>
							
							</div>

							<div class="applyDiv">
								<input type="submit" name="applyBtn" value="Apply" class="applyBtn">
							</div>
		</div><!--end of Right Uppder Div-->
		<div class="toggleDiv">
			<div class="toggleDivUpper">
				<input type="submit" name="" value="Details" id="detailsBtn">
				<input type="submit" name="" value="Company" id="companyBtn">
			</div>
			<div class="toggleDivMain">
				<div class="jobDetailsDiv">
					<p style='font-size: 1.7vw;font-weight: bold;margin-bottom:1vw'>Job Description</p>
                    
                    <p style='font-size: 1.2vw;margin-bottom:2vw;margin-bottom:3vw'><?php echo $job->job_details ?></p>
                    
                    <p style='font-size: 1.7vw;font-weight: bold;margin-bottom:1vw'>Must Have</p>
                    <p style='font-size: 1.2vw'><?php echo $job->job_requirements ?></p>
                </div>
                <div class="companyDetailsDiv">
                    <p style='font-size: 1.7vw;font-weight: bold;margin-bottom:1vw'>Company Information</p>
                    
                    <p style='font-size: 1.2vw'><?php echo $job->company_information ?></p>
				</div>
			</div>
		</div>


	</div>
	<!--End of right Jobs Div-->
</div>
<!--End of Results Div-->


<br><br>

<div class="col-lg-12" id="footer">
            <div id="footermostleft">
                <p class="footerMostLeftGlobe">Globe Bridges</p>
                <a href="#" class="footerMostLeftWe"><p  class="footerMostLeftWe">About</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Services</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">List your business</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Advertise with us</p></a>
            </div>
            <div id="footermostleft">
                <p class="footerMostLeftGlobe">Explore</p>
                <a href="#" class="footerMostLeftWe"><p  class="footerMostLeftWe">Future services</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Volunteer</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Vision</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Mission</p></a>
            </div>
            <div id="footermostleft2">
                <p class="footerMostLeftGlobe2">Information</p>
                <a href="#" class="footerMostLeftWe2"><p  class="footerMostLeftWe2">Donate to active cause</p></a>
                <a href="#" class="footerMostLeftWe2"><p class="footerMostLeftWe2">Suggestions and comments</p></a>
                <a href="#" class="footerMostLeftWe2"><p class="footerMostLeftWe2">Frequently asked questions</p></a>
                <div class="emptydiv"></div>
                <p class="copyrights">© Globe Bridges 2019.All rights reserved</p>
            </div>
            <div id="footermostleft3">
                <p class="footerMostLeftGlobe">Legal</p>
                <a href="#" class="footerMostLeftWe"><p  class="footerMostLeftWe">Terms</p></a>
                <a href="#" class="footerMostLeftWe"><p class="footerMostLeftWe">Privacy</p></a>
                
            </div>
            <div id="footermostmostright">
            <p class="footerMostLeftGlobe3">Contact</p>
            <p class="footerMostLeftWe3">info@globebridges.com</p>
            <p class="footerMostLeftWe4">8-2070 Speers Road,</p>
            <p class="footerMostLeftWe4">Oakville, ON,</p>
            <p class="footerMostLeftWe4">L6L 2X8 Canada</p>
            <div class="socialmedia">
                <a href="#"><div class="facebook"></div></a>
                <a href="#"><div class="insta"></div></a>
                <a href="#"><div class="twitter"></div></a>
            </div>
            </div>
    </div> <!--end of footer row-->

    



    


<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/myscript.js"></script>
</body>
</html>
    
	
	
    

    



