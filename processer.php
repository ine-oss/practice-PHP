<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body align="center">
    <h1>Arithmetic Calculation Results</h1>

<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;
$modulas = $num1 % $num2;
$power = $num1 ** $num2;

echo "<h2>Sum Result</h2>";
echo "The sum of $num1 and $num2 is: $sum";

echo "<h2>Difference Result</h2>";
echo "The difference of $num1 and $num2 is: $difference";

echo "<h2>Product Result</h2>";
echo "The product of $num1 and $num2 is: $product";

echo "<h2>Quotient Result</h2>";
echo "The quotient of $num1 and $num2 is: $quotient";

echo "<h2>Modulus Result</h2>";
echo "The remainder of $num1 divided by $num2 is: $modulas";

echo "<h2>Power Result</h2>";
echo "$num1 raised to the power of $num2 is: $power";

?>

</body>
</html>