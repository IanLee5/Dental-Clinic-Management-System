<?php 
	include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Staff Homepage</title>
	<style>
		img {
            float: left;
            height:150px; 
            width:150px;
        }

        body {
            font-family: Arial, sans-serif;
        }
        
    </style>
</head>

<body>
	<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:10%">
        <h3 class="w3-bar-item"> Menu </h3> 
            <a href="create_new_user.php" class="w3-bar-item w3-button">Register</a>
            <a href="create_appointment.php" class="w3-bar-item w3-button">Create Appointment</a>
            <a href="display_appointment.php" class="w3-bar-item w3-button">Display Appointment</a>
            <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
	<div style="margin-left:12%">
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