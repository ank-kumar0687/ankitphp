<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print Numbers 15 to 20</title>
</head>
<body>

<h2>Using while loop</h2>
<?php
$i = 15;
while ($i <= 20) {
    echo $i . " ";
    $i++;
}
?>

<hr>

<h2>Using do-while loop</h2>
<?php
$j = 15;
do {
    echo $j . " ";
    $j++;
} while ($j <= 20);
?>

</body>
</html>
