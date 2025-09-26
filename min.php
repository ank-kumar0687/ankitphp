<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find max and Min Number</title>
</head>
<form method="post">
    Enter numbers seperated by spaces:<br>
    <input type="text" name="numbers" required>
    <input type="submit" value="Find max and min">
</form>
    
    
<?php
if ($_SERVER["REQUEST_METHOD"] =="POST"){
$input = $_POST['numbers'];
$numbers = array_map('intval', explode(' ', $input));


$maxNumber = max($numbers);
$minNumber = min($numbers);


echo "<h3>Results:</h3>";
echo "your arrayis [".$input."]<br>";
echo "Maximum number is:".$maxNumber ."<br>";
echo "Maximum number is:".$minNumber ."<br>";
}
?>

</body>
</html>
