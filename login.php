<?php
require('includes/db.php'); 
// If form submitted, retrieve values from the database.
if(isset($_POST['login']))
{
    $email = $_REQUEST['email'];
    $psw = $_REQUEST['psw'];
    $repeat = $_REQUEST['psw-repeat'];
      //Checking is user existing in the database or not
   $query = "SELECT * FROM `logins` WHERE emailID='$email' and password='$psw'";
   $result = mysqli_query($con, $query);
   $rows=mysqli_num_rows($result);//return no.of rows
    if($rows==1){
	// 	echo "<br><center>Welcome $email. <br> Login successfull<br>";
	// 	echo "<p><a href='index.html'>Logout</a></p>";
        echo "
        <script>
            alert('Login Successful');
            
            document.location.href = 'index.html';
        </script>
        ";
	}
    else{
		echo "<h3>Username/password is incorrect.</h3>
		<br/>Click here to <a href='login.html'>Login</a>";
	}		
}
?>