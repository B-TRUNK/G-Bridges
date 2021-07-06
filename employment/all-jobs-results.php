<?php

include_once('../config/init.php');

$template = new Template('../templates/all-jobs-template.php');
$job = new Job;


if (isset($_POST['submitBtn'])) {

	$country = $_POST['country'];
	$category = $_POST['category'];
	$template->jobs = $job->getJobsByCountry($country,$category);
}
else if ($id = isset($_GET['job_id']) ? $_GET['job_id'] : null)
{
		
		$template->jobs = $job->getJobsDetailsByID($id);
} 
else 
{
	$template->jobs = $job->getAllJobs();
}

$template->countries = $job->getCountry();

echo($template);



