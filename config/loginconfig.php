<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GCP";

 
$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}