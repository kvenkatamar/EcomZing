<?php

include "includes/db.php";

if(isset($_POST['calculate'])){
    $quantity = $_POST['quantity'];
    $id = $_GET['id'];
    $price = mysqli_query($con, "SELECT item_price FROM product WHERE item_id=$id");
    
    $result = mysqli_query($con, "UPDATE `cart` SET `cart_quantity`='$quantity',`total`='$quantity*$price' WHERE cart_id=$id");

    echo "
    <script>         
        document.location.href = 'cart.php';
    </script>";
}

?>