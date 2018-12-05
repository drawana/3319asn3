<?php

// Update the customer's phone number
$newNumber = $_POST['newNumber'];
$phoneID = $_POST['phoneID'];
$sql = "UPDATE customer SET phonenumber = '$newNumber' WHERE customerID='$phoneID'";
if (mysqli_query($connection, $sql)) {
    echo "Phone number changed successfully.";
} else {
    echo "ERROR: Invalid input.";
}
?>
