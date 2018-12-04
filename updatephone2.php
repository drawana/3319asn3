<?php
$newNumber = $_POST['newNumber'];
$sql = "UPDATE customer SET phonenumber = '$newNumber' WHERE customerID='$phoneID'";
if (mysqli_query($connection, $sql)) {
    echo "Phone number changed successfully.";
} else {
    echo "ERROR: Invalid input.";
}
?>
