
<?php
require "includes/db.php";

$item_id = $_GET['id'];
$quantity = 1;

// JS Prompt to PHP Variable
// echo "<script>
// var quantity=prompt('Quantity?');
// $.ajax(
// {
//     type: 'POST',
//     url: '/addCart.php',
//     data: quantity,
//     success: function(data, textStatus, jqXHR)
//     {
//         console.log(data);
//     }
// });
// </script>";
// $quantity = $_POST['data'];

$exits_query = "SELECT * FROM `cart` WHERE item_id=$item_id";
$exits_result = mysqli_query($con, $exits_query);
$exits_rows = mysqli_num_rows($exits_result);
if($exits_rows==0){
// 	echo "<br><center>Welcome $email. <br> Login successfull<br>";
// 	echo "<p><a href='index.html'>Logout</a></p>";
    $item_array = mysqli_fetch_array(mysqli_query($con, "SELECT item_price FROM product where item_id=$item_id"));
    $cart_query	= "INSERT INTO `cart` (`cart_id`, `item_id`, `cart_quantity`, `total`) VALUES (NULL, '$item_id', '$quantity', '$item_array')";
    $cart_query = mysqli_query($con, $cart_query);
    echo "
    <script>
        alert('Added to cart Successfully');            
        document.location.href = 'product.php';
    </script>
    ";
}
else{
	echo "
    <script>
        alert('The item was already added to the cart');            
        document.location.href = 'product.php';
    </script>
    ";
}	
?>