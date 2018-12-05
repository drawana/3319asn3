<?php

// Find products that have not been purchased
$query = "SELECT description FROM product WHERE productID NOT IN (SELECT productID FROM purchases)";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}

// Print results
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row["description"] . "</li>";
}
echo "</ul>";
mysqli_free_result($result);
?>


