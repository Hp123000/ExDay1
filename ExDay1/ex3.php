<!DOCTYPE html>
<html>
<head>
    <title>Factorial</title>
</head>
<body>

<form method="POST">
    <label>Enter a number:</label>
    <input type="number" name="n" min="0" />
    <input type="submit" value="Find factorial" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];
    $fact = 1;

    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }

    echo "Factorial of $n is $fact";
}
?>
</body>
</html>
