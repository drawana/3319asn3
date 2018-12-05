<?php

// Determine how to order the output
if (isset($_POST['alphaPrice'])) {
    if ($_POST['alphaPrice'] == 0 and $_POST['ascDesc'] == 0)
        $query = "SELECT * FROM product ORDER BY description;";
    else if ($_POST['alphaPrice'] == 1 and $_POST['ascDesc'] == 0)
        $query = "SELECT * FROM product ORDER BY cost;";
    else if ($_POST['alphaPrice'] == 0 and $_POST['ascDesc'] == 1)
        $query = "SELECT * FROM product ORDER BY description DESC;";
    else
        $query = "SELECT * FROM product ORDER BY cost DESC;";
} // First time the page loads
else
    $query = "SELECT * FROM product;";

// Query database
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
echo "<ul>";

// Print results
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . "ID: " . $row["productID"] . ", Description: " . $row["description"] . ", Price: " . $row["cost"] . ", Stock: " . $row["stock"] . "</li>";
}
echo "</ul>"; //end the bulleted list
mysqli_free_result($result);
?>