<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_number = $_POST['number'];
$subject = $_POST['Donation Details'];
$message = $_POST['message'];

<*/-------ENTER DOMAIN NAME---------*/>
$email_from = '';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
            "User Numbber: $visitor_number.\n".
             "Donation Details: $subject.\n".
              "User Message: $message.\n";

<*/------Enter id----------*/>
    
$to='gtlmedicine1198@gmail.com';

$headers= "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n"
    
    mail($to,$email_subject,$email_body,$headers);
  header("Location: Donate.html");

?>