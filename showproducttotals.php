<?php

// Find the sales info of a given product
$pickProd = $_POST["pickProd"];
$query = "SELECT SUM(quantity) AS quantity, description, cost FROM purchases INNER JOIN product ON purchases.productID = product.productID WHERE product.productID = '$pickProd';"; //fill in with correct query
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed. ");
}
$row = mysqli_fetch_assoc($result);

// Calculate total and print results
$total = $row['quantity'] * $row['cost'];
echo "<br>" . "Item: " . $row["description"] . "<br> Total quantity sold: " . $row["quantity"] . "<br> Total revenue: $" . $total;
mysqli_free_result($result);
?>
