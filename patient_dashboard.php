<?php 
	include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Patient Homepage</title>
    <img src="images/logo.png" alt="Our dentistry logo">
    <style>
        img {
            float: right;
            height:150px; 
            width:150px;
        }

        body {
            font-family: Arial, sans-serif;
        }
        
        .container {
            width: 300px;
            margin-left: 50px;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
        }
        
        .menu {
            margin-top: 10px;
            margin-bottom: 20px;
        }
        
        .menu a {
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f2f2f2;
            color: #333;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }
        
        .menu a:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:10%">
        <h3 class="w3-bar-item"> Menu </h3> 
            <a href="create_appointment.php" class="w3-bar-item w3-button">Create Appointment</a>
            <a href="display_appointment.php" class="w3-bar-item w3-button">Display Appointment</a>
            <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
	<div style="margin-left:12%">
    <h1>Welcome back!</h1>
    <p>Test</p>
	<h2><a href = "logout.php">Sign Out</a></h2>
    </form>
</body>
</html>