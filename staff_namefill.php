<?php
    include('setup.php');
    $staff_id = $_REQUEST['staff_id'];  
    if ($staff_id !== "") {
        $query = mysqli_query($conn, "SELECT staff_name FROM staff WHERE staff_id='$staff_id'");
        $row = mysqli_fetch_array($query);
        $staff_name = $row["staff_name"];
    }

$result = array("$staff_name");

$myJSON = json_encode($result);
echo $myJSON;
?>