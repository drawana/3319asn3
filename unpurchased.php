<?php
$query = "SELECT description FROM product WHERE productID NOT IN (SELECT productID FROM purchases)";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row["description"] . "</li>";
}
echo "</ul>"; //end the bulleted list
mysqli_free_result($result);
?>


