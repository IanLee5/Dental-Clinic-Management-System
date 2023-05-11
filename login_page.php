<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<meta name="description" content="Create new staff" />
	<meta name="keywords" content="create" />
	<meta name="author" content=" "  />
	<title>Register new staff</title>
</head>

<body style="text-align:center;">
	<h1> Select user login </h1>
	
	<?php
		if (array_key_exists('staff_login', $_POST)) {
			staff_login();
		} else if (array_key_exists('patient_login', $_POST)) {
			patient_login();
		}
		function staff_login() {
			header("location: staff_login.php");
		}
		function patient_login() {
			header("location: patient_login.php");
		}
	?>
	
	<form method="post">
		<input type="submit" name="staff_login" class="button" value="Staff Login" />
		<input type="submit" name="patient_login" class="button" value="Patient Login" />
	</form>
</body>
</html>