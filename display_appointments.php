<?php
    include ("setup.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Table</title>
    
</head>
<body>
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
