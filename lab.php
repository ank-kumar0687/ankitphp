<!DOCTYPE html>
<html>
<head><title> User Input Sanitization</title></head>
<body>

<h2>Contact Form</h2>
<form method="POST" action="">
  Name: <input type="text" name="name" required><br><br>
  Email: <input type="email" name="email" required><br><br>
  Message:<br>
  <textarea name="message" rows="5" cols="40" required></textarea><br><br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = strtolower(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    echo "<h3>Sanitized Output:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br>";
}
?>

</body>
</html>
