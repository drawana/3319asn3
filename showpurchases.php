<!DOCTYPE html>
<html>
<head>
    <title>Customer Purchases</title>
</head>
<body>

<?php
$whichCust = $_POST["cust"]; //get selected museum value from the form
$query = "SELECT * FROM purchases INNER JOIN products ON purchases.productID = products.productID WHERE customerID = '$whichCust'"; //fill in with correct query
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query on art pieces failed. ");
}
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . "Item: " . $row["description"] . ", Quantity: " . $row["quantity"] . "</li>";
}
echo "</ul>"; //end the bulleted list
mysqli_free_result($result);
?>
<hr>
<hr>
</body>
</html>




