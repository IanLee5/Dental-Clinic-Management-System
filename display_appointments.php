<?php
// Example data - Replace with your actual data retrieval logic
$appointments = [
    [
        'date' => '2023-06-10',
        'time' => '09:00 AM',
        'patient_name' => 'John Doe',
        'doctor' => 'Dr. Smith',
        'notes' => 'Regular check-up',
    ],
    [
        'date' => '2023-06-12',
        'time' => '02:30 PM',
        'patient_name' => 'Jane Smith',
        'doctor' => 'Dr. Johnson',
        'notes' => 'Follow-up appointment',
    ],
    // Add more appointments as needed
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Table</title>
    <style>
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
    </style>
</head>
<body>
    <h2>Appointment Table</h2>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Patient Name</th>
                <th>Doctor</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($appointments as $appointment): ?>
                <tr>
                    <td><?= $appointment['date'] ?></td>
                    <td><?= $appointment['time'] ?></td>
                    <td><?= $appointment['patient_name'] ?></td>
                    <td><?= $appointment['doctor'] ?></td>
                    <td><?= $appointment['notes'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
