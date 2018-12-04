<?php
$newNumber = $_POST['newNumber'];
$phoneID = $GLOBALS['phoneID'];
echo $newNumber;
echo $phoneID;
$sql = "UPDATE customer SET phonenumber = '$newNumber' WHERE customerID='$phoneID'";
if (mysqli_query($connection, $sql)) {
    echo "Phone number changed successfully.";
} else {
    echo "ERROR: Invalid input.";
}
?>
