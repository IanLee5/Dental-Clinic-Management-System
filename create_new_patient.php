<?php	
	include('setup.php');

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		tmp_query("INSERT INTO patient (
			patient_id,
			patient_loginid, 
			patient_password, 
			patient_name, 
			patient_gender, 
			patient_address,
			patient_phone, 
			patient_email
		) VALUES (
			'" . $_POST['patientID'] . "',
			'" . $_POST['patient_loginID'] . "',
			'" . md5($_POST['patient_password']) . "',
			'" . $_POST['patient_name'] . "',
			'" . $_POST['gender'] . "',
			'" . $_POST['address'] . "',
			'" . $_POST['phone'] . "',
			'" . $_POST['email'] . "'
		)");

		// if (mysqli_query($conn, $sql)) {
		// 	echo "Successfully Registered User<br>";
		// } else {
		// 	echo "Error<br>";
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
  <meta name="description" content="Create new patient" />
  <meta name="keywords" content="create" />
  <meta name="author" content="Lim Kwangmin"  />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Register new patient</title>
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
  		<a href="create_new_staff.php" class="w3-bar-item w3-button">Register New Staff</a>
		<a href="create_new_patient.php" class="w3-bar-item w3-button">Register New Patient</a>
  		<a href="Logout.php" class="w3-bar-item w3-button">Logout</a>
  </div>
	<div style="margin-left:12%">

  <header> 
	<h1> Register new patient</h1>
	</header>
	
	<h3>Register New Patient</h3>
	<form action="" method="post">
	<fieldset>
	<legend>Patient Login ID</legend>
		<p><label for="patientID">Patient ID: </label>
			<input type="text" name ="patientID" id="patientID" maxlength="10" required="required"/>
		</p>
		<p><label for="patient_loginID">Staff Login ID: </label>
			<input type="text" name ="patient_loginID" id="patient_loginID" maxlength="10" required="required"/>
		</p>
		<p><label for="patient_password">Password: </label>
			<input type="text" name ="patient_password" id="patient_password" maxlength="20" required="required"/>
		</p>
	</fieldset>
	
	<fieldset>
		<legend> Personal details </legend>
		<p><label for="patient_name">Patient name: </label>
			<input type="text" name ="patient_name" id="patient_name"  maxlength="20" required="required"/>
		</p>
		<p><label for="dob">Date of Birth</label>
			<input type="date" name="dob" id="dob" placeholder="dd-mm-yyyy" pattern="\d{1,2}\/\d{1,2}\/\d{4}" maxlength="10"/>
		</p>
	
	</fieldset>
	
	<fieldset>
			<legend>Gender</legend>
			<p><label for="male">Male</label> 
				<input type="radio" id="male" name="gender" value="male" checked="checked"/>
			</p>
			<p><label for="female">Female</label> 
				<input type="radio" id="female" name="gender" value="female"/>
			</p>
		</fieldset>
		
	<fieldset>
			<legend>Address</legend>	
			<p><label for="address"> Address</label>
				<textarea id="address" name="address" rows="5" cols="40" placeholder="Max of  40 characters"></textarea>
			</p>
	
			
	</fieldset>
	
	<fieldset>
		<legend>Contact Information</legend>
			<p><label for="email">Email</label> 
				<input type="email" name= "email" id="email" required="required"/>
			</p>
			<p><label for="phone">Phone Number</label>
				<input type="text" name ="phone" id="phone" maxlength="12" pattern=".{8,12}" required="required"/>
			</p>
	</fieldset>
	
	<input type= "submit" value="Register" />
	<input type= "reset" value="Reset Form"/>
</form>
</body>
</html>
