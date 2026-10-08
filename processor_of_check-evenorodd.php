<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>

<?php

$number = $_POST['number'];

if ($number % 2 == 0) {
    echo "<h2>$number is an Even Number</h2>";
} else {
    echo "<h2>$number is an Odd Number</h2>";
}

?>

</body>
</html> 