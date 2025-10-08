<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Countdown</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .countdown-container {
            background: orange;
            padding: 30px 50px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        .days-left {
            font-size: 55px;
            color: #2c3e50;
            margin: 20px 0;
        }
        .event-name {
            font-size: 30px;
            color: #2980b9;
        }
    </style>
</head>
<body>

<?php

$eventDate = '2025-10-25'; 

$currentDate = time();
$eventTimestamp = strtotime($eventDate);


$diffInSeconds = $eventTimestamp - $currentDate;


$daysRemaining = ceil($diffInSeconds / (60 * 60 * 24)); 

if ($daysRemaining > 0) {
    echo "<div class='countdown-container'>";
    echo "<div class='event-name'>Countdown to Chhath 2025</div>";
    echo "<div class='days-left'>{$daysRemaining} days left</div>";
    echo "</div>";
} elseif ($daysRemaining == 0) {
    echo "<div class='countdown-container'>";
    echo "<div class='event-name'>Today is the event day!</div>";
    echo "</div>";
} else {
    echo "<div class='countdown-container'>";
    echo "<div class='event-name'>The event has passed.</div>";
    echo "</div>";
}
?>

</body>
</html>
