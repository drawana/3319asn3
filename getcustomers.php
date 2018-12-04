<?php
$query = "SELECT * FROM customer ORDER BY lastname;";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row["customerID"] . "'>" . $row["customerID"] . ", " . $row["firstname"] . ", " . $row["lastname"] . ", " . $row["city"] . ", " . $row["phonenumber"] . ", " . $row["agentid"] . " </option > ";
}
mysqli_free_result($result);
?>