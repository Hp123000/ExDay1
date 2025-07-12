<!DOCTYPE html>
<html>
<head>
    <title>Celsius to Fahrenheit</title>
</head>
<body>
<form method="POST">
    <label>Enter temperature (°C):</label>
    <input type="number" name="celsius" step="any" />
    <input type="submit" value="Convert" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c = $_POST["celsius"];
    $f = ($c * 9/5) + 32;
    echo "$c °C = $f °F";
}
?>
</body>
</html>
