<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Previous Semester Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
        }
        table, th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Previous Semester Result</h2>

<?php
// Defining constants
define("STUDENT_NAME", "John Doe");
define("SEMESTER", "Spring 2025");

// Using variables for marks
$subjects = [
    "Mathematics" => 85,
    "Physics" => 78,
    "Chemistry" => 88,
    "English" => 90,
    "Computer Science" => 95
];

// Calculate total and percentage
$total_marks = 0;
$max_marks_per_subject = 100;
$number_of_subjects = count($subjects);

foreach ($subjects as $subject => $marks) {
    $total_marks += $marks;
}

$max_total_marks = $max_marks_per_subject * $number_of_subjects;
$percentage = ($total_marks / $max_total_marks) * 100;
?>

<p><strong>Student Name:</strong> <?php echo STUDENT_NAME; ?></p>
<p><strong>Semester:</strong> <?php echo SEMESTER; ?></p>

<table>
    <thead>
        <tr>
            <th>Subject</th>
            <th>Marks Obtained</th>
            <th>Maximum Marks</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($subjects as $subject => $marks) { ?>
            <tr>
                <td><?php echo $subject; ?></td>
                <td><?php echo $marks; ?></td>
                <td><?php echo $max_marks_per_subject; ?></td>
            </tr>
        <?php } ?>
        <tr>
            <th>Total</th>
            <th><?php echo $total_marks; ?></th>
            <th><?php echo $max_total_marks; ?></th>
        </tr>
        <tr>
            <th colspan="2">Percentage</th>
            <th><?php echo number_format($percentage, 2); ?>%</th>
        </tr>
    </tbody>
</table>

</body>
</html>
