<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce");
// Checing the database connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>