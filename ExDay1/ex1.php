<!DOCTYPE html>
<html>
<head>
    <title>Check Even or Odd</title>
</head>
<body>
<form method="POST">
    <label>Enter a number:</label>
    <input type="number" name="number" />
    <input type="submit" value="Check" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];
    if ($num % 2 == 0) {
        echo "$num is Even";
    } else {
        echo "$num is Odd";
    }
}
?>
</body>
</html>
