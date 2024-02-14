<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$comment= $_POST['comment'];

$email_from = 'info@yourwebsite.com';

$email_subject= 'New Comment';

$email_body= "User Name: $name.\n" . 
               "User Email: $visitor_email.\n" . 
               "Subject:n$comment.\n" . 

$to = 'sshreya3095@gmail.com' ;

$headers= "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: blog.html");
?>

