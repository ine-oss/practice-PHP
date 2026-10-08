<!DOCTYPE html>
<html>
<head>
    <title>Payment Result</title>
</head>
<body>

<?php

$product = $_POST['product'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Calculate total amount
$total = $quantity * $price;

// Calculate discount
if ($total >= 1 && $total <= 10000) {
    $discount = $total * 0.02;
}
elseif ($total >= 10001 && $total <= 100000) {
    $discount = $total * 0.05;
}
else {
    $discount = 0;
}

// Calculate amount to pay
$payment = $total - $discount;

// Display results
echo "<h2>Payment Details</h2>";

echo "Product Name: " . $product . "<br>";
echo "Quantity: " . $quantity . "<br>";
echo "Unit Price: " . $price . " RWF<br>";
echo "Total Amount: " . $total . " RWF<br>";
echo "Discount: " . $discount . " RWF<br>";
echo "Customer Payment: " . $payment . " RWF";

?>

</body>
</html>