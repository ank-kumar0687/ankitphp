<!DOCTYPE html>
<html>
<head><title>Comment Moderation</title></head>
<body>

<h2>Comment Moderation System</h2>
<form method="POST" action="">
  Enter Comment:<br>
  <textarea name="comment" rows="5" cols="50" required></textarea><br><br>
  <input type="submit" value="Submit Comment">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = trim($_POST['comment']);
    $lowerComment = strtolower($comment);
    $sanitizedComment = htmlspecialchars($comment);

    $bannedWords = ['spam', 'hack', 'malware'];
    $flagged = false;

    foreach ($bannedWords as $word) {
        if (strpos($lowerComment, $word) !== false) {
            $flagged = true;
            break;
        }
    }

    echo "<h3>Comment:</h3>";
    echo nl2br($sanitizedComment) . "<br><br>";
    if ($flagged) {
        echo "<strong style='color:red;'>Warning: Comment contains banned words.</strong>";
    } else {
        echo "<em>Comment is clean.</em>";
    }
}
?>

</body>
</html>
