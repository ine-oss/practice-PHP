<!DOCTYPE html>
<html>
<head>
    <title>Product Payment</title>
</head>
<body>

    <h2>Product Payment Form</h2>

    <form action="processor_for_product_payment.php" method="POST">

        <label>Product Name:</label>
        <input type="text" name="product" required>

        <br><br>

        <label>Quantity:</label>
        <input type="number" name="quantity" required>

        <br><br>

        <label>Unit Price:</label>
        <input type="number" name="price" required>

        <br><br>

        <input type="submit" value="Calculate">

    </form>

</body>
</html>