<!DOCTYPE html>
<html>
<head><title> Secure Token Generation</title></head>
<body>

<h2>Password Reset Token Generator</h2>
<form method="POST" action="">
  Email: <input type="email" name="email" required><br><br>
  <input type="submit" value="Generate Token">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $timestamp = time();
    $token = md5($email . $timestamp);

    echo "<h3>Generated Token:</h3>";
    echo $token . "<br><br>";
    echo "Use this token in the password reset URL like:<br>";
    echo "<code>https://example.com/reset.php?token=$token</code>";
}
?>

</body>
</html>
