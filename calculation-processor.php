<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$sum = 0;

if ($num1 < $num2) {

    for ($i = $num1; $i <= $num2; $i++) {
        $sum = $sum + $i;
    }

} else {

    for ($i = $num1; $i >= $num2; $i--) {
        $sum = $sum + $i;
    }
}

echo "The sum is: " . $sum;

?>