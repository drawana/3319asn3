<!DOCTYPE html>
<html>
<head>
    <title>Customer Purchases</title>
</head>
<body>
<?php
include "connecttodb.php";

?>

<?php
$whichCust = $_POST["pickcust"]; //get selected museum value from the form
$query = "SELECT * FROM purchases INNER JOIN product ON purchases.productID = product.productID WHERE customerID = '$whichCust'"; //fill in with correct query
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query on customers failed. ");
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




