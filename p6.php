<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post" action="">
    Number 1: <input type="number" name="num1" step="any" required><br><br>
    Number 2: <input type="number" name="num2" step="any" required><br><br>
    Operation:
    <select name="operation" required>
        <option value="">Select</option>
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select><br><br>
    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 == 0) {
                return "Error: Division by zero!";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Invalid operation selected.";
    }
}

if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $result = calculator($num1, $num2, $operation);

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
