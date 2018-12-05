<!DOCTYPE html>
<html>
<head>
    <title>Big Buyers</title>
</head>
<body>

<?php
$qty = $_POST["overThis"];
$query = "SELECT firstname, lastname, description, quantity FROM purchases INNER JOIN product ON purchases.productID = product.productID INNER JOIN customer ON purchases.customerID = customer.customerID WHERE quantity > '$qty';"; //fill in with correct query
$result = mysqli_query($connection, $query);
echo "<h1> Customers who purchased more than '$qty' items:</h1>";

if (!$result) {
    die("databases query on customers failed. ");
}
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row["firstname"] . " " . $row["lastname"] . " bought " . $row["quantity"] . " " . $row["description"] . "(s)" . "</li>";
}
echo "</ul>"; //end the bulleted list
mysqli_free_result($result);
?>
</body>
</html>



