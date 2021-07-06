<?php

include_once('../config/init.php');

$template = new Template('../templates/business-display-template.php');
$business = new Business;


$template->businesses = $business->getAllBusinesses();

if (isset($_POST['submit'])) {

    $businessName = $_POST['business_name'];
    $category = $_POST['category'];
    $discount = $_POST['discount_offered'];

    $template->businesses = $business->getSingleResult($businessName,$category,$discount);
} else {
    $template->businesses = $business->getAllBusinesses();
}

echo($template);



