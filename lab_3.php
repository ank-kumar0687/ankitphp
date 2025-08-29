<!DOCTYPE html>
<html>
<head><title>Name Formatting</title></head>
<body>

<h2>Certificate Name Formatter</h2>
<form method="POST" action="">
  Full Name: <input type="text" name="fullname" required><br><br>
  <input type="submit" value="Format Name">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $words = explode(' ', strtolower($fullname));

    foreach ($words as &$word) {
        $word = ucfirst($word);
    }

    $formattedName = implode(' ', $words);
    echo "<h3>Formatted Name:</h3>";
    echo $formattedName;
}
?>

</body>
</html>
