<?php
$newCustID = $_POST['newCustID'];

// Determine if customer ID exists
$query = "SELECT COUNT(*) AS total FROM customer WHERE customerID = '$newCustID'";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);
if ($data['total'] > 0) {
    echo "ERROR: Customer ID is taken.";

// Insert new customer from given data
} else {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $agentID = $_POST['agentID'];

    $sql = "INSERT INTO customer VALUES ('$newCustID', '$fname', '$lname', '$city', '$phone', '$agentID')";

    if (mysqli_query($connection, $sql)) {
        echo "New customer successfully added.";
    } else {
        echo "ERROR: Invalid input.";
    }

}
mysqli_free_result($result);
?>

