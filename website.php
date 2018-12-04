<!DOCTYPE html>
<html>
<head>
    <title>Assignment 3</title>
</head>
<body>

<?php
include "connecttodb.php";

?>
<h1>Customers </h1>
Select customer:
<form action="showpurchases.php" method="post">
    <select name="cust" id="cust">
        <option>Select Here</option>
        <?php
        include "getcustomers.php";
        ?>
    </select>
</form>

<hr>
<hr>
</body>
</html>

