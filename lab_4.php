<!DOCTYPE html>
<html>
<head><title>CSV Parsing</title></head>
<body>

<h2>Student Scores CSV Parser</h2>
<form method="POST" action="">
  Enter CSV (e.g. Ankit,80,85,90):<br>
  <input type="text" name="csv" size="40" required><br><br>
  <input type="submit" value="Parse">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['csv'];
    $data = explode(',', $input);
    $name = $data[0];
    $scores = array_slice($data, 1);

    // Convert all scores to numbers
    $scores = array_map('floatval', $scores);

    $average = array_sum($scores) / count($scores);
    $summary = $name . " - Avg: " . number_format($average, 2);

    echo "<h3>Summary:</h3>";
    echo $summary;
}
?>

</body>
</html>
