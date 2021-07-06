<?php

session_start();

if (isset($_POST['basicinfosavebtn'])) {
	$_SESSION['first_name']  = $_POST['fname'];
	$_SESSION['last_name']	 = $_POST['lname'];
	$_SESSION['email']		 = $_POST['email'];
	$_SESSION['gender']		 = $_POST['Gender'];
}

header("location: selectmembership.php");


