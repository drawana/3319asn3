<?php
$pickProd = $_POST["pickProd"];
$query = "SELECT SUM(quantity) AS quantity, description, cost FROM purchases INNER JOIN product ON purchases.productID = product.productID WHERE product.productID = '$pickProd';"; //fill in with correct query
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed. ");
}
$row = mysqli_fetch_assoc($result);
$total = $row['quantity'] * $row['cost'];
echo "<br>" . "Item: " . $row["description"] . "<br> Total quantity Sold: " . $row["quantity"] . "<br> Total revenue: $" . $total;
mysqli_free_result($result);
?>
