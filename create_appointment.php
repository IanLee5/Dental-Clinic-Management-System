<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="description" content="Create appointment" />
  <meta name="keywords" content="create" />
  <meta name="author" content="Lim Kwangmin"  />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Create New Appointment</title>
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
	
	body {align: top;
		  margin: 0px;
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
			align: top;
			margin: 0px;
	}
	
	img { 
		height:150px; 
		width:150px;
	}
	
	fieldset {
		border: 3px solid #666;
  		border-right: 3px solid #333;
  		border-bottom: 3px solid #333;
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
  <img src="images/logo.png" alt="Our dentistry logo">
  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:10%">
        <h3 class="w3-bar-item"> Menu </h3> 
            <a href="create_appointment.php" class="w3-bar-item w3-button">Create Appointment</a>
            <a href="display_appointment.php" class="w3-bar-item w3-button">Display Appointment</a>
            <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
	<div style="margin-left:12%">
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
