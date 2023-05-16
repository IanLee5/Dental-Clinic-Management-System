<?php 
	include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Homepage</title>
    <style>
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
    <div class="container">
        <div class="menu">
            <a href="register.php">Register</a>
            <a href="create_appointment.php">Create Appointment</a>
            <a href="display_appointment.php">Display Appointment</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
