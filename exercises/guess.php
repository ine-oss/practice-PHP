<?php
$num = $_POST['num'];
if ($num == 0) {
    echo "Program stopped.";
} else {
    echo "You entered: " . $num;
    echo "<br><br>";
    echo '<form action="process.php" method="POST">';
    echo '<label>Enter another num:</label>';
    echo '<input type="num" name="num" required>';
    echo '<button type="submit">Submit</button>';
    echo '</form>';
}

?>