<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels</title>
</head>
<body>
<form method="POST">
    <label>Enter a string:</label>
    <input type="text" name="text" />
    <input type="submit" value="Count vowels" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $count = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    for ($i = 0; $i < strlen($text); $i++) {
        $ch = strtolower($text[$i]);
        if (in_array($ch, $vowels)) {
            $count++;
        }
    }
    echo "Number of vowels in \"$text\" is $count";
}
?>
</body>
</html>
