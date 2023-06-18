<?php
    include ("setup.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Table</title>
    <!-- <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style> -->
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
                <th>Start Time</th>
                <th>End Time</th>
                <th>Reason</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $id = trim($_SESSION['login_patient'], "P");
                $sqlRow = tmp_query("SELECT * FROM appointment WHERE patient_id = '" . $id . "' ORDER BY appointment_id ASC");
                while($dataRow = tmp_get_object($sqlRow)) {
                    $patientID = $dataRow->patient_id;
                    $patientName = $dataRow->patient_name;
                    $staffID = $dataRow->staff_id;
                    $staffName = $dataRow->staff_name;
                    $date = $dataRow->appointment_date;
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
                    </tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>
