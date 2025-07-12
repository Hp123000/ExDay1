<!DOCTYPE html>
<html>
<head>
    <title>Check Palindrome</title>
</head>
<body>
<form method="POST">
    <label>Enter a number:</label>
    <input type="number" name="num" />
    <input type="submit" value="Check" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["num"];
    $rev = strrev($n);

    if ($n == $rev) {
        echo "$n is Palindrome";
    } else {
        echo "$n is Not Palindrome";
    }
}
?>
</body>
</html>
