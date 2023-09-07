<?php 
require('includes/db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['signup'])){
    $email = $_REQUEST['email'];
    $psw = $_REQUEST['psw'];
    $repeat = $_REQUEST['psw-repeat'];
    $remember = $_REQUEST['remember'];
    $query	=	"INSERT into `logins`(emailID, password, remember) VALUES('$email', '$psw', '$remember')";
    $query2	=	"INSERT INTO `cart` (`emailID`, `item_id`, `item_name`, `item_price`, `item_quantity`, `subtotal`, `cart_id`) VALUES ('kvenkatamar12@gmail.com', '', '', '', '', '', '1')";
    
    try {
        $result = mysqli_query($con, $query);
        $result = mysqli_query($con, $query2);
        if($result)
        {
            echo "<h3>You are registered successfully.</h3>
            <br/>Click here to <a href='login.html'>Login</a></div>";
        }
    }
    catch (mysqli_sql_exception $e) {
        echo "<h3>User Credentials already exist..</h3>
        <br/>Click here to <a href='signup.html'>Signup</a> again</div>";
    }
}
?>