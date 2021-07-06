<?php

	// Initialize the session
	session_start();
	 
	// Unset all of the session variables
	$_SESSION = array();
	 
	// Destroy the session.
	session_destroy();
	 
	// Redirect to login page
	

	echo "Regular Membership Requested Successfully ,now pending on Approval ,You can goto   <a href='../pages/home.php'>Home Page</a> ";
	exit;