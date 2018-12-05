<!DOCTYPE html>
<html>
<head>
    <title>Customer Purchases</title>
</head>
<body>

<?php
include "connecttodb.php";
echo "<h1> Purchases for Customer '$whichCust':</h1>";

// Find a customer's purchases
$whichCust = $_POST["pickcust"];
$query = "SELECT * FROM purchases INNER JOIN product ON purchases.productID = product.productID WHERE customerID = '$whichCust'";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("databases query on customers failed. ");
}

// Print results
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . "Item: " . $row["description"] . ", Quantity: " . $row["quantity"] . "</li>";
}
echo "</ul>"; //end the bulleted list


mysqli_free_result($result);
mysqli_close($connection);
?>
</body>
</html>




