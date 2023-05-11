<?php
	include("setup.php");
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$loginuser = mysqli_real_escape_string($conn, $_POST['userid']);
		$loginpass = mysqli_real_escape_string($conn, $_POST['password']);
		
		$sql = "SELECT * FROM staff WHERE staff_loginid = '$loginuser' AND staff_password = '$loginpass'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		$count = mysqli_num_rows($result);
		
		if ($count == 1) {

			$_SESSION['login_staff'] = $loginuser;
			header("location: staff_dashboard.php");
		} else {
			header("ID or Password is invalid");
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="text-align:center;">
    <h1>Login</h1>
    <form action="" method="post">
        <label for="userid">Staff ID:</label>
        <input type="text" name="userid" id="userid" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>