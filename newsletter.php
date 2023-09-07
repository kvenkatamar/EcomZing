<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

require 'includes/db.php';

if (isset($_POST['submit'])) {
    $visitor_email = $_POST['email'];  
    $email_from = "kvenkatamar123@gmail.com";
    $email_subject = "Successfully Subcribed";
    $email_body = "Hey,\nThank you for subcribing to The SHOPZZ. Stay tuned for the updates..";
    $headers = "From: $email_from \r\n";
    $headers .= "TO: $visitor_email \r\n";

    $mail = new phpmailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email_from;
    $mail->Password = 'wjuxugpftdotczpu';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($email_from);
    $mail->addAddress($visitor_email);
    $mail->isHTML(true);
    $mail->Subject = $email_subject;
    $mail->Body = $email_body;
    $mail->send();

    $email = $_REQUEST['email'];
    $query = "INSERT into `subcribers`(emailID) VALUES('$visitor_email')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "
        <script>
            alert('Subscribed Successfully');
            document.location.href = 'index.html';
        </script>
        ";
    }
}
?>