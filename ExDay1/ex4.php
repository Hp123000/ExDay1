<!DOCTYPE html>
<html>
<head>
    <title>Check Prime</title>
</head>
<body>
<form method="POST">
    <label>Enter a number:</label>
    <input type="number" name="n" min="0" />
    <input type="submit" value="Check" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];
    $isPrime = true;

    if ($n < 2) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo "$n is Prime";
    } else {
        echo "$n is Not Prime";
    }
}
?>
</body>
</html>
