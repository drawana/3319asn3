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
if ($count['COUNT(*)'] == 0)
    $sql = "INSERT INTO purchases VALUES ('$prodID', '$custID', '$quantity')";
else
    $sql = "UPDATE purchases SET quantity = quantity + '$quantity' WHERE productID='$prodID'AND customerID='$custID'";

if (mysqli_query($connection, $sql)) {
    echo "Purchase successful.";
} else {
    echo "ERROR: Invalid customer ID or product ID.";
}

mysqli_free_result($countResult);
?>

