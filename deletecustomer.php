<?php
$deleteID = $_POST['deleteID'];

$query = "SELECT COUNT(*) FROM customer WHERE customerID='$deleteID';";
$countResult = mysqli_query($connection, $query);
if (!$countResult) {
    die("databases query for count failed.");
}

$count = mysqli_fetch_assoc($countResult);
if ($count['COUNT(*)'] == 0)
    echo "ERROR: Customer ID does not exist.";
else {
    $sql = " DELETE FROM customer WHERE customerID ='$deleteID'";

    if (mysqli_query($connection, $sql)) {
        echo "Customer deleted successfully.";
    } else {
        echo "ERROR: Could not delete customer.";
    }
}
mysqli_free_result($countResult);
?>

