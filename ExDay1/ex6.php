<!DOCTYPE html>
<html>
<head>
    <title>Triangle Perimeter</title>
</head>
<body>
<form method="POST">
    <label>Enter side a:</label>
    <input type="number" name="a" step="any" /><br/>
    <label>Enter side b:</label>
    <input type="number" name="b" step="any" /><br/>
    <label>Enter side c:</label>
    <input type="number" name="c" step="any" /><br/>
    <input type="submit" value="Calculate" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $perimeter = $a + $b + $c;
    echo "Perimeter of triangle is $perimeter";
}
?>
</body>
</html>
