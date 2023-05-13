<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<meta name="description" content="Create new staff" />
	<meta name="keywords" content="create" />
	<meta name="author" content=" "  />
	<title>Register new staff</title>
		    <style>
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
            margin-top: 50px;
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
