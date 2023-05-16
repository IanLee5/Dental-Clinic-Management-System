<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<meta name="description" content="Create new staff" />
	<meta name="keywords" content="create" />
	<meta name="author" content=" "  />
    <img src="images/logo.png" alt="Our dentistry logo">
	<title>Register new staff</title>
	<style>
        img {
            float: center;
            height:150px; 
            width:150px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }
        
        h1 {
            color: #333;
            margin-top: 50px;
        }
        
        form {
            margin-top: 20px;
            display: inline-block;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body style="text-align:center;">
	<h1> Select user login </h1>
	
	<?php
		if (array_key_exists('create_new_staff', $_POST)) {
			create_new_staff();
		} else if (array_key_exists('create_new_patient', $_POST)) {
			create_new_patient();
		}
		function create_new_staff() {
			header("location: create_new_staff.php");
		}
		function create_new_patient() {
			header("location: create_new_patient.php");
		}
	?>
	
	<form method="post">
		<input type="submit" name="create_new_staff" class="button" value="Create New Staff" />
		<input type="submit" name="create_new_patient" class="button" value="Create New Patient" />
	</form>
</body>
</html>
