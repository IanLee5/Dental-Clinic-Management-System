<?php
	include("setup.php");
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$loginuser = mysqli_real_escape_string($conn, $_POST['userid']);
		$loginpass = mysqli_real_escape_string($conn, $_POST['password']);
		
		$sql = "SELECT * FROM patient WHERE patient_loginid = '" . $loginuser . "' AND patient_password = '" . md5($loginpass) . "'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		$count = mysqli_num_rows($result);
		
		if ($count == 1) {
			$_SESSION['login_patient'] = $loginuser;
			header("location: patient_dashboard.php");
		} else {
			//echo "ID or Password is invalid<br>";
            echo alert("ID or Password is invalid");
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <a href="login_page.php"><img src="images/logo.png" alt="Our dentistry logo"></a>
    <title>Login</title>
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
<body>
    <h1>Login</h1>
    <form action="" method="post">
        <label for="userid">Patient ID:</label>
        <input type="text" name="userid" id="userid" placeholder="User ID"><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password"><br><br>
        <input type="submit" value="Login" onclick="login()">
    </form>
    <script src="javascript/login.js"></script>
</body>
</html>
