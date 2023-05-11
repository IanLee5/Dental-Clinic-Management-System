<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="description" content="Create new staff" />
  <meta name="keywords" content="create" />
  <meta name="author" content="Lim Kwangmin"  />
  <title>Register new staff</title>
  <style>
	body {background-color: grey;}
	h1   {color: rebeccapurple;}
	h3   {color: lightseagreen; text-decoration: underline;}
	label   {color: gold;}
	p    {color: lightgreen;}
	legend   {font-weight: bold;}
	img {float: right; height:200px; width:200px;}
	
</style>

  </head>
  
  <body>
  <img src="images/logo.png" alt="Our dentistry logo">
  <header> 
	<h1> Register new staff</h1>
	</header>
	
<?php	
	include('setup.php');
	session_start();

	if(isset($_POST['submit'])) {
		$sql = ("INSERT INTO staff (
			staff_loginid, 
			staff_password, 
			staff_name, 
			staff_gender, 
			staff_phone, 
			staff_email, 
			staff_status
		) VALUES (
			'" . $_POST['staffID'] . "',
			'" . $_POST['staff_password'] . "',
			'" . $_POST['staff_name'] . "',
			'" . $_POST['gender'] . "',
			'" . $_POST['phone'] . "',
			'" . $_POST['email'] . "',
			'" . $_POST['status'] . "',
		)");
	}
?>


<form action="" method="post">
	<h3>Register New staff</h3>
	<fieldset>
		<legend>Staff Login ID</legend>
		<p><label for="staffID">Staff ID: </label>
			<input type="text" name ="staffID" id="staffID" maxlength="10" required="required"/>
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
			<p><label for="address"> Address: </label>
				<textarea id="address" name="address" rows="5" cols="40" placeholder="Max of  40 characters"></textarea>
			</p>
	
			
	</fieldset>
	
	<fieldset>
		<legend>Contact Information</legend>
			<p><label for="email">Email: </label> 
				<input type="email" name= "email" id="email" required="required"/>
			</p>
			<p><label for="phone">Phone Number</label>
				<input type="text" name ="phone" id="phone" maxlength="12" pattern=".{8,12}" required="required"/>
			</p>
	</fieldset>
	
	<fieldset>
		<legend>Staff info</legend>			
			<p><label for="StaffPos">Staff Position: </label>
				<select name="StaffPos" id="StaffPos" required="required">
					<option value="" id="none">Please Select </option>
					<option value="Dr" id="Dr">Doctor</option>
					<option value="Ns" id="Ns">Nurse</option>
					<option value="Rc" id="Rc">Reception</option>
			</select>
			</p>
			
			<p><label for="status"> Staff Role: </label>
				<textarea id="status" name="status" rows="5" cols="40" placeholder="Staff's role"></textarea>
			</p>
			
			
	</fieldset>
	
	<input type= "submit" value="Register" />
	<input type= "reset" value="Reset Form"/>
</form>
</body>
</html>
