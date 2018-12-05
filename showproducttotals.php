<?php
$pickProd = $_POST["pickProd"];
$query = "SELECT SUM(quantity) AS quantity, description, cost FROM purchases INNER JOIN product ON purchases.productID = product.productID WHERE product.productID = '$pickProd';"; //fill in with correct query
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed. ");
}
$row = mysqli_fetch_assoc($result);
$total = $row['quantity'] * $row['cost'];
echo "<b>" . "Item: " . $row["description"] . ", Total quantity Sold: " . $row["quantity"] . ", Total revenue: $" . $total . "</b>";
mysqli_free_result($result);
?>

SELECT productID, SUM(quantity) FROM purchases GROUP BY productID;
SELECT SUM(quantity), description, cost FROM purchases INNER JOIN product ON purchases.productID = product.productID WHERE product.productID = 66;