<?php

$email = $_POST['email'];



$to = "abdishay@gmail.com";
$subject = "Submission from Sofos Contact Form";
$body = "This is an automated message. Please do not reply.\n\n $email";


mail($to, $subject, $body);
echo <p> <?php "Message Sent"?> </p>;
?>