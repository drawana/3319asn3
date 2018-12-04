<!DOCTYPE html>
<html>
<head>
    <title>Assignment 3</title>
</head>
<body>
<script src="customer.js"></script>

<?php
include "connecttodb.php";

?>
<h1>Customers </h1>
Select customer:
<form action="showpurchases.php" method="post">
    <select name="pickcust" id="pickcust">
        <?php
        include "getcustomers.php";
        ?>
    </select>
</form>

<hr>
<h1>Products: </h1>
Our Products:
<form method='post' action=''>
    Order by:
    <select name="alphaPrice">
        <option value="0"> Alphabetical </option>
        <option value="1"> Price </option>
    </select>

    <select name="ascDesc">
        <option value="0"> Ascending </option>
        <option value="1"> Descending </option>
    </select>

    <input type="submit" value="Submit"/>
</form>

<?php
    if (isset($_POST['alphaPrice']))
    {
        include "showproducts.php";
    }
?>

<hr>
<h1>New purchase: </h1>
<form method='post' action=''>
    Customer ID: <input type="text" name="custID">
    ProductID: <input type="text" name="prodID">
    Quantity: <input type="text" name="quantity">
    <input type="submit" value="Submit"/>
</form>

<?php
if (isset($_POST['custID']))
{
    include "insertpurchase.php";
}
?>



</body>
</html>

