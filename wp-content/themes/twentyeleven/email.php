<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$subject = $_POST['subject'];
$body = "From $name \n$email \n\n$message";

$to = "tylergraf@gmail.com";
//$to = "";

mail($to, $subject, $body);

echo 'Email sent successfully. I look forward to hearing from you.';
?>