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
        <option value="0"> Alphabetical</option>
        <option value="1"> Price</option>
    </select>

    <select name="ascDesc">
        <option value="0"> Ascending</option>
        <option value="1"> Descending</option>
    </select>

    <input type="submit" value="Submit"/>
</form>

<?php
include "showproducts.php";
?>

<hr>
<h1>New purchase: </h1>
<form method='post' action=''>
    Customer ID: <input type="text" name="custID">
    ProductID: <input type="text" name="prodID">
    Quantity: <input type="number" name="quantity" min="1">
    <input type="submit" value="Submit"/>
</form>

<?php
if (isset($_POST['custID'])) {
    include "insertpurchase.php";
}
?>

<hr>

<h1>New Customer: </h1>
<form method='post' action=''>
    Customer ID: <input type="text" name="newCustID">
    First Name: <input type="text" name="fname">
    Last Name: <input type="text" name="lname">
    City: <input type="text" name="city">
    Phone Number: <input type="text" name="phone">
    Agent ID: <input type="text" name="agentID">
    <input type="submit" value="Submit"/>
</form>

<?php
if (isset($_POST['newCustID'])) {
    include "newcustomer.php";
}
?>

<hr>

<h1>Update Phone Number: </h1>
<form method='post' action=''>
    Customer ID: <input type="text" name="phoneID">
    <input type="submit" value="Submit"/>
</form>

<?php
if (isset($_POST['phoneID'])) {
    include "updatephone1.php";
}
if (isset($_POST['newNumber']))
    include "updatephone2.php"

?>


</body>
</html>

