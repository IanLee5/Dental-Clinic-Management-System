<?php 
	include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Homepage</title>
</head>
<body>
    <h1>Welcome back!</h1>
    <h1> Select new to create </h1>
	
	<?php
		if (array_key_exists('new_staff', $_POST)) {
			new_staff();
		} else if (array_key_exists('new_patient', $_POST)) {
			new_patient();
		}
		function new_staff() {
			header("location: create_new_staff.php");
		}
		function new_patient() {
			header("location: create_new_patient.php");
		}
	?>
	
	<form method="post">
		<input type="submit" name="new_staff" class="button" value="Register a staff" />
		<input type="submit" name="new_patient" class="button" value="Register a patient" />
	</form>
    <p>Test</p>
	<h2><a href = "logout.php">Sign Out</a></h2>
    </form>
</body>
</html>