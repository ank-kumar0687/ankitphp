<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Operators Demo</title>
</head>
<body>
    <h1>PHP Operators Demo</h1>
    
    <?php
    // Arithmetic Operators
    $a = 10;
    $b = 3;
    echo "<h2>Arithmetic Operators</h2>";
    echo "a = $a, b = $b<br>";
    echo "Addition (a + b): " . ($a + $b) . "<br>";
    echo "Subtraction (a - b): " . ($a - $b) . "<br>";
    echo "Multiplication (a * b): " . ($a * $b) . "<br>";
    echo "Division (a / b): " . ($a / $b) . "<br>";
    echo "Modulus (a % b): " . ($a % $b) . "<br>";
    echo "Exponentiation (a ** b): " . ($a ** $b) . "<br>";

    // Assignment Operators
    echo "<h2>Assignment Operators</h2>";
    $c = 5;
    echo "Initial c = $c<br>";
    $c += 3;  // equivalent to $c = $c + 3
    echo "After c += 3, c = $c<br>";
    $c *= 2;
    echo "After c *= 2, c = $c<br>";

    // Comparison Operators
    echo "<h2>Comparison Operators</h2>";
    $x = 7;
    $y = '7';
    echo "x = $x (int), y = '$y' (string)<br>";
    echo "x == y? " . ($x == $y ? "true" : "false") . "<br>";   // Equal value
    echo "x === y? " . ($x === $y ? "true" : "false") . "<br>"; // Equal value and type
    echo "x != y? " . ($x != $y ? "true" : "false") . "<br>";
    echo "x !== y? " . ($x !== $y ? "true" : "false") . "<br>";
    echo "x > y? " . ($x > $y ? "true" : "false") . "<br>";
    echo "x < y? " . ($x < $y ? "true" : "false") . "<br>";

    // Logical Operators
    echo "<h2>Logical Operators</h2>";
    $p = true;
    $q = false;
    echo "p = true, q = false<br>";
    echo "p AND q: " . ($p && $q ? "true" : "false") . "<br>";
    echo "p OR q: " . ($p || $q ? "true" : "false") . "<br>";
    echo "NOT p: " . (!$p ? "true" : "false") . "<br>";
    echo "p XOR q: " . ($p xor $q ? "true" : "false") . "<br>";

    // Increment / Decrement Operators
    echo "<h2>Increment/Decrement Operators</h2>";
    $num = 5;
    echo "num = $num<br>";
    echo "++num = " . (++$num) . "<br>"; // pre-increment
    echo "num++ = " . ($num++) . "<br>"; // post-increment
    echo "After post-increment, num = $num<br>";
    echo "--num = " . (--$num) . "<br>"; // pre-decrement
    echo "num-- = " . ($num--) . "<br>"; // post-decrement
    echo "After post-decrement, num = $num<br>";
    ?>
    
</body>
</html>
