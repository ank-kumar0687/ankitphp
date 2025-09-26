<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Current Month Display</title>
</head>
<body>

<h2>Print Current Month Using if..else</h2>

<?php
// Get current month number (1-12)
$currentMonth = date('n');

if ($currentMonth == 1) {
    echo "January";
} elseif ($currentMonth == 2) {
    echo "February";
} elseif ($currentMonth == 3) {
    echo "March";
} elseif ($currentMonth == 4) {
    echo "April";
} elseif ($currentMonth == 5) {
    echo "May";
} elseif ($currentMonth == 6) {
    echo "June";
} elseif ($currentMonth == 7) {
    echo "July";
} elseif ($currentMonth == 8) {
    echo "August";
} elseif ($currentMonth == 9) {
    echo "September";
} elseif ($currentMonth == 10) {
    echo "October";
} elseif ($currentMonth == 11) {
    echo "November";
} else {
    echo "December";
}
?>

<hr>

<h2>Print Current Month Using switch case</h2>

<?php
switch ($currentMonth) {
    case 1:
        echo "January";
        break;
    case 2:
        echo "February";
        break;
    case 3:
        echo "March";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "May";
        break;
    case 6:
        echo "June";
        break;
    case 7:
        echo "July";
        break;
    case 8:
        echo "August";
        break;
    case 9:
        echo "September";
        break;
    case 10:
        echo "October";
        break;
    case 11:
        echo "November";
        break;
    case 12:
        echo "December";
        break;
    default:
        echo "Invalid month";
}
?>

</body>
</html>
