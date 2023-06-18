<?php
	include("setup.php");

	$p_sql = "SELECT * FROM patient";
	$all_p = mysqli_query($conn, $p_sql);

	$s_sql = "SELECT * FROM staff";
	$all_s = mysqli_query($conn, $s_sql);

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		tmp_query("INSERT INTO appointment (
			patient_id,
			patient_name,
			staff_id,
			staff_name,
			appointment_date,
			start_time,
			end_time,
			reason
		) VALUES (
			'" . $_POST['patientID'] . "',
			'" . $_POST['patientName'] . "',
			'" . $_POST['staffID'] . "',
			'" . $_POST['staffName'] . "',
			'" . $_POST['appDate'] . "',
			'" . $_POST['startTime'] . "',
			'" . $_POST['endTime'] . "',
			'" . $_POST['treatment'] . "'
		)");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="description" content="Create appointment" />
  <meta name="keywords" content="create" />
  <meta name="author" content="Lim Kwangmin"  />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
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
	<form action="" method="post">
	<h3>Create new appointment</h3>
	<fieldset>
		<legend> Appointment for: </legend>
		<p><label for="patientID">Patient ID</label>
        <?php
			echo '<input type="text" name="patientID" id="patientID" value="' . trim($_SESSION['login_patient'], "P") . '" onchange="getName(this.value)">'
        ?>
            </input>
		</p>
			
		<p><label for="patientName">Patient Name</label>
			<input type="text" name ="patientName" id="patientName"  maxlength="50" required="required"/>
		</p>
		
		<p><label for="staffID">Staff ID</label>
				<select name="staffID" id="staffID" required="required" onchange="getStaff(this.value)">
				<?php
					while($staffID = tmp_get_array($all_s)):;
				?>
				<option value= "<?php echo $staffID["staff_id"];?>">
					<?php 
						echo $staffID["staff_loginid"]
					?>
				<?php
					endwhile;
				?>
			</select>
		</p>
        <p><label for="staffName">Staff Name</label>
			<input type="text" name="staffName" id="staffName" required="required"/>
		</p>
	</fieldset>
	
	<fieldset>
		<legend>Decide appointment Date and Time</legend>
			<p><label for="appDate">Appointment Date</label>
			<input type="date" name="appDate" id="appDate" placeholder="dd-mm-yyyy" pattern="\d{1,2}\/\d{1,2}\/\d{4}" maxlength="10"/>
			</p>
		
			<p><label for="time">Time</label>
					<input type="time" name="startTime" id="startTime" placeholder="0800"/>
					<input type="time" name="endTime" id="endTime" placeholder="1800"/>
			</p>
	</fieldset>
	
	<fieldset>
		<legend>Treatment to be serviced</legend>
			<p><label for="treatment">Treatment</label>
				<select name="treatment" id="treatment" required="required">
					<option value="" id="none">Please Select </option>
					<option value="Scaling" id="Scl">Scaling</option>
					<option value="Whitening" id="Wht">Whitening</option>
					<option value="Cavity Filling" id="Cvtf">Cavity Filling</option>
					<option value="Braces" id="Br">Braces</option>
			</select>
			</p>		
	</fieldset>
	
	<input type= "submit" value="Register" />
	<input type= "reset" value="Reset Form"/>
</form>
<script>
	function getName(str) {
    	if (str.length == 0) {
        	document.getElementById("patientName").value = "";
        	return;
    	} else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                document.getElementById("patientName").value = myObj[0];
            }
        };

        xmlhttp.open("GET", "patient_namefill.php?patient_id=" + str, true);
          
        xmlhttp.send();
    	}
	}

    function getStaff(str) {
    	if (str.length == 0) {
        	document.getElementById("staffName").value = "";
        	return;
    	} else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                document.getElementById("staffName").value = myObj[0];
            }
        };

        xmlhttp.open("GET", "staff_namefill.php?staff_id=" + str, true);
          
        xmlhttp.send();
    	}
	}
</script>
</body>
</html>