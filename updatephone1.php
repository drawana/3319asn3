<?php

// Find customer info
$phoneID = $_POST['phoneID'];
$query = "SELECT * FROM customer WHERE customerID = '$phoneID'";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);

// Make sure ID is valid
if (empty($data['phonenumber'])) {
    echo "ERROR: Customer ID is invalid.";

// Print current number and get new one
} else {
    echo "Current number: " . $data['phonenumber'] . "\n";
    $html = "<form method='post' action=''>";
    $html .= "New number: <input type=\"text\" name=\"newNumber\">";
    $html .= "<input type=\"hidden\" name=\"phoneID\" value='$phoneID'>";
    $html .= "<input type=\"submit\" value=\"Submit\"/>";
    $html .= "</form>";
    echo $html;

}
mysqli_free_result($result);
?>

