<?php
    include('setup.php');
    $patient_id = $_REQUEST['patient_id'];  
    if (substr($patient_id, 0, 1) === "P") {
        $query = mysqli_query($conn, "SELECT patient_name FROM patient WHERE patient_id='$patient_id'");
        $row = mysqli_fetch_array($query);
        $patient_name = $row["patient_name"];
    } else if ($patient_id !== "") {
        $query = mysqli_query($conn, "SELECT patient_name FROM patient WHERE patient_id='$patient_id'");
        $row = mysqli_fetch_array($query);
        $patient_name = $row["patient_name"];
    }

$result = array("$patient_name");

$myJSON = json_encode($result);
echo $myJSON;
?>