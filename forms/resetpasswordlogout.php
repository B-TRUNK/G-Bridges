<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
echo "Password changed Successfully , please <a href='../forms/login.php'>Login</a> Here ";
exit;
?>
