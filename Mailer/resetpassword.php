<?php
	include("config.php");

	if (!isset($_GET['code'])) {
		exit("Can't find page!");
	}

	$code = $_GET['code'];

	$getEmailQuery = mysqli_query($link,"SELECT email FROM resetPasswords WHERE code='$code'");

	if (mysqli_num_rows($getEmailQuery) == 0) {
		echo "Can't find page!";
		exit();
	}

	if (isset($_POST['newPassword'])) {
		$newPass = $_POST['newPassword'];
		//$newPass = md5($newPass);
		$hashed_password = password_hash($newPass, PASSWORD_DEFAULT);

		$row = mysqli_fetch_array($getEmailQuery);
		$email = $row["email"];

		$query = mysqli_query($link, "UPDATE users SET password='$hashed_password' WHERE username='$email'");

		if ($query) {
			$query2 = mysqli_query($link, "DELETE  FROM resetPasswords WHERE code='$code'");
			header("location: ../forms/resetpasswordlogout.php");
		} else {
			exit("Something Went Wrong");
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Password Reset</title>
	<link rel="stylesheet" href="../css/about.css">
	<link rel="icon" href="../files/logo.png" sizes="16x16">
</head>
<body>
	<center>
			<form method="POST">
				<p class="labelfont">Please Enter Your New Password</p>
				<input type="password" name="newPassword" class="input">
				<br>
				<input type="submit" name="submit" value="Update Password" class="confirmBtn">
			</form>
	</center>
</body>
</html>

