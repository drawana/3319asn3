<?php

$phoneID = $_POST['phoneID'];
$query = "SELECT * FROM customer WHERE customerID = '$phoneID'";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);
if (empty($data['phonenumber'])) {
    echo "ERROR: Customer ID is invalid.";
} else {
    echo "Current number: ".$data['phonenumber']."\n";
    $html = "<form method='post' action=''>";
    $html .= "New number: <input type=\"text\" name=\"newNumber\">";
    $html .= "Customer ID: <input type=\"text\" name=\"phoneID\" value='$phoneID' readonly>";
    $html .= "<input type=\"submit\" value=\"Submit\"/>";
    $html .= "</form>";
    echo $html;

}
mysqli_free_result($result);
?>

