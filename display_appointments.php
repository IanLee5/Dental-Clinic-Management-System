<?php
    include ("setup.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" >
  <meta name="description" content="Create new staff" />
  <meta name="keywords" content="create" />
  <meta name="author" content="Lim Kwangmin"  />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <img src="images/logo.png" alt="Our dentistry logo">
    <title>Appointment Table</title>
	<style>
	body {
		font-family: Verdana, Arial sans-serif;
        background-color: #f2f2f2;
	}
			
	h2   {
		font-weight: bold;
	}
			
	h3  {
		text-decoration: underline;
		color: #333;
	}
	
	th  {
		font-family: Verdana, Arial sans-serif;
		color: #333;
		}
	
	img { 
		height:150px; 
		width:150px;
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
		
		body {align: top;
			  margin: 0px;
			 }
		
		table {border: 3px solid #333;
			   padding: 0px;
			   margin: 0px;
			  }
		
		th {border: 2px solid #333;
			padding: 0px;
			margin: 0px;
			  }
			  
		
	</style>
	
</head>
<body>

<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:10%">
        <h3 class="w3-bar-item"> Menu </h3> 
            <a href="create_appointment.php" class="w3-bar-item w3-button">Create Appointment</a>
            <a href="display_appointment.php" class="w3-bar-item w3-button">Display Appointment</a>
            <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
			
    </div>
	<div style="margin-left:12%">
    <h2>Appointment Table</h2>
    <table>
        <thead>
		
            <tr>
                <th>Patient ID</th>
                <th>Patient Name</th>
                <th>Staff ID</th>
                <th>Staff Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Reason</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sqlRow = tmp_query("SELECT * FROM appointment ORDER BY appointment_id ASC")
                while($dataRow = tmp_get_object($sqlRow)) {
                    $patientID = $dataRow->patient_id;
                    $patientName = $dataRow->patient_name;
                    $staffID = $dataRow->staff_id;
                    $staffName = $dataRow->staff_name;
                    $date = $dataRow->date;
                    $startTime = $dataRow->start_time;
                    $endTime = $dataRow->end_time;
                    $reason = $dataRow->reason;

                    echo '<tr>
                        <td>' . $patientID . '</td>
                        <td>' . $patientName . '</td>
                        <td>' . $staffID . '</td>
                        <td>' . $staffName . '</td>
                        <td>' . $date . '</td>
                        <td>' . $startTime . '</td>
                        <td>' . $endTime . '</td>
                        <td>' . $reason . '</td>
                    </tr>'
                }
            ?>
            <?php endwhile ?>
        </tbody>
    </table>
	
</body>
</html>
