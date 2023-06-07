<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="description" content="Create appointment" />
  <meta name="keywords" content="create" />
  <meta name="author" content="Lim Kwangmin"  />
  <title>Register new staff</title>
  


  </head>
  
  <body>
  <header> 
	<h1> Create new appointment</h1>
	</header>
	
<?php	
	
?>




	
	<h3>Create new appointment</h3>
	
	
	<fieldset>
		<legend> Appointment for: </legend>
		<p><label for="PatientId">Patient ID</label>
				<select name="PatientId" id="PatientId" required="required">
					<option value="" id="none">Please Select </option>
					<option value="id1" id="id1"> id 1</option>
					<option value="id2" id="id2">id 2</option>
					<option value="id3" id="id3">id 3</option>
			</select>
			</p>
			
		<p><label for="patientname">Patient Name</label>
			<input type="text" name ="patientname" id="patientname"  maxlength="20" pattern="^[a-zA-z]+$" required="required"/>
		</p>
		
		<p><label for="StaffId">Staff ID</label>
				<select name="StaffId" id="StaffId" required="required">
					<option value="" id="none">Please Select </option>
					<option value="id1" id="id1"> id 1</option>
					<option value="id2" id="id2">id 2</option>
					<option value="id3" id="id3">id 3</option>
			</select>
			</p>
		
	</fieldset>
	
	
	
	<fieldset>
		<legend>Decide appointment Date and Time</legend>
			<p><label for="AppDate">Appointment Date</label>
			<input type="date" name="AppDate" id="AppDate" placeholder="dd-mm-yyyy" pattern="\d{1,2}\/\d{1,2}\/\d{4}" maxlength="10"/>
			</p>
		
			<p><label for="time">Time</label>
				<select name="time" id="time" required="required">
					<option value="" id="none">Please Select </option>
					<option value="morning" id="morning"> Morning Session (8AM ~ 12PM)</option>
					<option value="afternoon" id="afternoon">Afternoon Session (12AM ~ 6PM)</option>
			</select>
			</p>
	</fieldset>
	
	<fieldset>
		<legend>Treatment to be serviced</legend>

			<p><label for="treatment">Treatment</label>
				<select name="treatment" id="treatment" required="required">
					<option value="" id="none">Please Select </option>
					<option value="Scl" id="Scl">Scaling</option>
					<option value="Wht" id="Wht">Whitening</option>
					<option value="Cvtf" id="Cvtf">Cavity Filling</option>
					<option value="Br" id="Br">Braces</option>
			</select>
			</p>
			
			
			
	</fieldset>
	
	<input type= "submit" value="Register" />
	<input type= "reset" value="Reset Form"/>
</form>
</body>
</html>