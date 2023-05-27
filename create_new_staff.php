<?php	
	include('setup.php');

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		tmp_query("INSERT INTO staff (
			staff_id,
			staff_loginid, 
			staff_password, 
			staff_name, 
			staff_gender, 
			staff_phone, 
			staff_email, 
			staff_status,
			staff_role
		) VALUES (
			'" . $_POST['staffID'] . "',
			'" . $_POST['staff_loginID'] . "',
			'" . md5($_POST['staff_password']) . "',
			'" . $_POST['staff_name'] . "',
			'" . $_POST['gender'] . "',
			'" . $_POST['phone'] . "',
			'" . $_POST['email'] . "',
			1,
			'" . $_POST['role'] . "'
		)");

	// 	if (mysqli_query($conn, $sql)) {
	// 		echo "Successfully Registered User<br>";
	// 	} else {
	// 		echo "Error<br>";
	// 	}
	// }
		echo alert("Successfully Registered User");
	} else {
    	echo alert("Error");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="description" content="Create new staff" />
  <meta name="keywords" content="create" />
  <meta name="author" content="Lim Kwangmin"  />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Register new staff</title>
  <style>
	body {
		font-family: Verdana, Arial sans-serif;
        background-color: #f2f2f2;
	}
			
	h1   {
		margin-top: 50px;
		font-weight: bold;
	}
			
	h3   {
		text-decoration: underline;
		color: #333;
	}
	
	label   {
		display: block;
        margin-bottom: 10px;
        font-weight: bold;
	}
	
	legend   {
			font-weight: bold;
			font-family: Verdana, Arial sans-serif;
			color: #666;
	}
	
	img {
		float: right; 
		height:150px; 
		width:150px;
	}
	
	fieldset {
		border: 3px solid #666;
  		border-right: 3px solid #333;
  		border-bottom: 3px solid #333;
	}
	
</style>

  </head>
  
  <body>
  <img src="images/logo.png" alt="Our dentistry logo">
  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:10%">
      <h3 class="w3-bar-item" class="w3-bar-item w3-button"> Menu </h3> 
		<a href="staff_dashboard.php" class="w3-bar-item w3-button">Dashboard</a>
		<a href="display_user.php" class="w3-bar-item w3-button">Members</a>
  		<a href="create_new_staff.php" class="w3-bar-item w3-button">Register New Staff</a>
		<a href="create_new_patient.php" class="w3-bar-item w3-button">Register New Patient</a>
  		<a href="Logout.php" class="w3-bar-item w3-button">Logout</a>
  </div>
	<div style="margin-left:12%">

  <header> 
	<h1> Register new staff</h1>
  </header>

<form action="" method="post">
	<h3>Register New staff</h3>
	<fieldset>
		<legend>Staff Login ID</legend>
		<p><label for="staffID">Staff ID: </label>
			<input type="text" name ="staffID" id="staffID" maxlength="10" required="required"/>
		</p>
		<p><label for="staff_loginID">Staff Login ID: </label>
			<input type="text" name ="staff_loginID" id="staff_loginID" maxlength="10" required="required"/>
		</p>
		<p><label for="staff_password">Password: </label>
			<input type="text" name ="staff_password" id="staff_password" maxlength="20" required="required"/>
		</p>
	</fieldset>
	
	<fieldset>
		<legend> Personal details </legend>
		<p><label for="staff_name">Staff name: </label>
			<input type="text" name ="staff_name" id="staff_name"  maxlength="20" required="required"/>
		</p>
		<p><label for="dob">Date of Birth: </label>
			<input type="date" name="dob" id="dob" placeholder="dd-mm-yyyy" pattern="\d{1,2}\/\d{1,2}\/\d{4}" maxlength="10"/>
		</p>
		<p><label for="male">Male</label> 
			<input type="radio" id="male" name="gender" value="male" checked="checked"/>
		</p>
		<p><label for="female">Female</label> 
			<input type="radio" id="female" name="gender" value="female"/>
		</p>	
		<p><label for="address"> Address: </label>
			<textarea id="address" name="address" rows="5" cols="40" placeholder="Max of  40 characters"></textarea>
		</p>
		<p><label for="email">Email: </label> 
			<input type="email" name= "email" id="email" required="required"/>
		</p>
		<p><label for="phone">Phone Number</label>
			<input type="text" name ="phone" id="phone" maxlength="12" pattern=".{8,12}" required="required"/>
		</p>
	</fieldset>
	
	<fieldset>
		<legend>Staff info</legend>			
			<p><label for="role">Staff Role: </label>
			<p> 1. Reception </p>
			<p> 2. Nurse </p>
			<p> 3. Doctor </p>
				<select name="role" id="role" required="required">
					<option value="" id="none">Please Select </option>
					<option value="1" id="Rc">1</option>
					<option value="2" id="Ns">2</option>
					<option value="3" id="Dr">3</option>
			</select>
			</p>
			
			<!-- <p><label for="status"> Staff Status: </label>
				<textarea id="status" name="status" rows="5" cols="40" placeholder="Staff's role"></textarea>
			</p> -->
			
			
	</fieldset>
	
	<input type= "submit" value="Register" />
	<input type= "reset" value="Reset Form"/>
</form>
</body>
</html>
