<?php
$prodID = $_POST['prodID'];
$custID = $_POST['custID'];
$quantity = $_POST['quantity'];

// Determine if the customer has already purchased the product
$countQuery = "SELECT COUNT(*) FROM purchases WHERE productID='$prodID'AND customerID='$custID';";
$countResult = mysqli_query($connection, $countQuery);

if (!$countResult) {
    die("databases query for count failed.");
}

$count = mysqli_fetch_assoc($countResult);

// Create new row if they haven't purchased it before
if ($count['COUNT(*)'] == 0)
    $sql = "INSERT INTO purchases VALUES ('$prodID', '$custID', '$quantity')";

// Update existing row
else
    $sql = "UPDATE purchases SET quantity = quantity + '$quantity' WHERE productID='$prodID'AND customerID='$custID'";

// Print status
if (mysqli_query($connection, $sql)) {
    echo "Purchase successful.";
} else {
    echo "ERROR: Invalid customer ID or product ID.";
}

mysqli_free_result($countResult);
?>

