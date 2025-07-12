<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Sequence</title>
</head>
<body>
<form method="POST">
    <label>Enter number of terms:</label>
    <input type="number" name="n" min="1" />
    <input type="submit" value="Generate" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];
    $a = 0;
    $b = 1;
    echo "Fibonacci sequence up to $n terms:<br/>";
    for ($i = 1; $i <= $n; $i++) {
        echo $a;
        if ($i < $n) echo ", ";
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
}
?>
</body>
</html>
