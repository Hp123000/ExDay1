<!DOCTYPE html>
<html>
<head>
    <title>Circle Area</title>
</head>
<body>
<form method="POST">
    <label>Enter radius:</label>
    <input type="number" name="r" step="any" />
    <input type="submit" value="Calculate" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $r = $_POST["r"];
    $area = 3.14 * $r * $r;
    echo "Area of circle with radius $r is $area";
}
?>
</body>
</html>
