<!DOCTYPE html>
<html>
<head>
    <title>Big Buyers</title>
</head>
<body>


<?php
include "connecttodb.php";
$qty = $_POST["overThis"];

// Find customers who bought over a certain quantity of items
$query = "SELECT firstname, lastname, description, quantity FROM purchases INNER JOIN product ON purchases.productID = product.productID INNER JOIN customer ON purchases.customerID = customer.customerID WHERE quantity > '$qty';";
$result = mysqli_query($connection, $query);
echo "<h1> Customers who purchased more than $qty items:</h1>";

if (!$result) {
    die("databases query on customers failed. ");
}

// Print results
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row["firstname"] . " " . $row["lastname"] . " bought " . $row["quantity"] . " " . $row["description"] . "(s)" . "</li>";
}
echo "</ul>"; //end the bulleted list
mysqli_free_result($result);
mysqli_close($connection);
?>
</body>
</html>



