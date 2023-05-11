<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="description" content="Create new patient" />
  <meta name="keywords" content="create" />
  <meta name="author" content="Lim Kwangmin"  />
  <title>Register new patient</title>
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
  <img src="logo.png" alt="Our dentistry logo">
  <header> 
	<h1> Register new patient</h1>
	</header>
	
<?php	
	
?>


	
	<h3>Register New Patient</h3>
	<fieldset>
		<legend>Patient Number</legend>
		<p><label for="PN"></label>
			<input type="text" name ="PN" id="PN" maxlength="5" pattern=".{0,5}" required="required"/>
		</p>
	</fieldset>
	
	<fieldset>
		<legend> Personal details </legend>
		<p><label for="firstname">First Name</label>
			<input type="text" name ="firstname" id="firstname"  maxlength="20" pattern="^[a-zA-z]+$"  required="required"/>
		</p>
		<p><label for="lastname">Last Name</label>
			<input type="text" name ="lastname" id="lastname"  maxlength="20" pattern="^[a-zA-z]+$" required="required"/>
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
			<p><label for="phonenumber">Phone Number</label>
				<input type="text" name ="phonenumber" id="phonenumber" maxlength="12" pattern=".{8,12}" required="required"/>
			</p>
	</fieldset>
	
	<fieldset>
		<legend>Patient info</legend>
		
			<p><label for="symptom"> Symptom</label>
				<textarea id="symptom" name="symptom" rows="5" cols="40" placeholder="Patient's issue"></textarea>
			</p>
			
			<p><label for="treatment"> Treatment</label>
				<textarea id="treatment" name="treatment" rows="5" cols="40" placeholder="Treatment to give"></textarea>
			</p>
			
			<p><label for="StaffAssign">Assigned Staff</label>
				<select name="staff" id="staff" required="required">
					<option value="" id="none">Please Select </option>
					<option value="jw" id="jw">John Wick</option>
					<option value="bw" id="bw">Ben White</option>
					<option value="ed" id="ed">Eric Dier</option>
			</select>
			</p>
			
			<p><label for="schedule">Next Schedule</label>
			<input type="date" name="schedule" id="schedule" placeholder="dd-mm-yyyy" pattern="\d{1,2}\/\d{1,2}\/\d{4}" maxlength="10"/>
		</p>
			
	</fieldset>
	
	<input type= "submit" value="Register" />
	<input type= "reset" value="Reset Form"/>
</form>
</body>
</html>
