<?php
	include("setup.php");

	$p_sql = "SELECT * FROM patient";
	$all_p = mysqli_query($conn, $p_sql);

	$s_sql = "SELECT * FROM staff";
	$all_s = mysqli_query($conn, $s_sql);

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		tmp_query("INSERT INTO appointment (
			
		) VALUES (
			
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
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <title>Register new staff</title>
  </head>
  
  <body>
  <header> 
	<h1> Create new appointment</h1>
	</header>	
	<h3>Create new appointment</h3>
	<fieldset>
		<legend> Appointment for: </legend>
		<p><label for="patientID">Patient ID</label>
				<select name="patientID" id="patientID" required="required" onchange="getPatient(this.value)">
					<?php
						while($patientID = tmp_get_array($all_p)):;
					?>
					<option value="<?php echo $patientID["patient_id"];?>">
						<?php 
							echo $patientID["patient_loginid"]
						?>
					<?php
						endwhile;
					?>
					</option>
			</select>
			</p>
			
		<p><label for="patientname">Patient Name</label>
			<input type="text" name="patientname" id="patientname" required="required"/>
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
		<p><label for="staffname">Staff Name</label>
			<input type="text" name="staffname" id="staffname" required="required"/>
		</p>
	</fieldset>
	
	<fieldset>
		<legend>Decide appointment Date and Time</legend>
			<p><label for="AppDate">Appointment Date</label>
			<input type="date" name="AppDate" id="AppDate" placeholder="dd-mm-yyyy" pattern="\d{1,2}\/\d{1,2}\/\d{4}" maxlength="10"/>
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
<script>
	function getPatient(str) {
    	if (str.length == 0) {
        	document.getElementById("patientname").value = "";
        	return;
    	} else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                document.getElementById("patientname").value = myObj[0];
            }
        };

        xmlhttp.open("GET", "patient_namefill.php?patient_id=" + str, true);
          
        xmlhttp.send();
    	}
	}

	function getStaff(str) {
    	if (str.length == 0) {
        	document.getElementById("staffname").value = "";
        	return;
    	} else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                document.getElementById("staffname").value = myObj[0];
            }
        };

        xmlhttp.open("GET", "staff_namefill.php?staff_id=" + str, true);
          
        xmlhttp.send();
    	}
	}
</script>
</body>
</html>