<?php
$dbhost = "localhost";
$dbuser= "root";
$dbpass = "cs3319";
$dbname = "drawana2assign2db";

// Connect to database
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
    die("Database connection failed :" .
        mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
}
?>