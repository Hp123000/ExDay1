<!DOCTYPE html>
<html>
<head>
    <title>Reverse String</title>
</head>
<body>
<form method="POST">
    <label>Enter a string:</label>
    <input type="text" name="text" />
    <input type="submit" value="Reverse" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $reverse = strrev($text);
    echo "Reversed string: $reverse";
}
?>
</body>
</html>
