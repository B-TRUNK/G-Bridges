<?php

session_start();

include("config.php");

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



		if (!isset($_GET['code'])) {
			exit("Can't find page!");
		}

		$code = $_GET['code'];
		$getEmailQuery = mysqli_query($link,"SELECT email FROM emailverify WHERE code='$code'");

		if (mysqli_num_rows($getEmailQuery) == 0) {
			echo "Can't find page!";
			exit();
		}
		$query = mysqli_query($link, "DELETE  FROM emailverify WHERE code='$code'");

?>










