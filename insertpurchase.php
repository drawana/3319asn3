<?php
$prodID = $_POST['prodID'];
$custID = $_POST['custID'];
$quantity = $_POST['quantity'];
$countQuery = "SELECT COUNT(*) FROM purchases WHERE productID='$prodID'AND customerID='$custID';";
$countResult = mysqli_query($connection, $countQuery);
if (!$countResult) {
    die("databases query for count failed.");
}
$query = "";

$count = mysqli_fetch_assoc($countResult);
echo $count;

mysqli_free_result($countResult);
?>

