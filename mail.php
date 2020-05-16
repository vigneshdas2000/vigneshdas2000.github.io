<?php
$to = 'vigneshdas2000@gmail.com';
$subject = "Subject-  " . $_GET['c'];
$header = "Sender's Name-  " . $_GET['b'];
$message = "From-  " . $_GET['a'] . "\r\n Subject-  " . $_GET['c'] . "\r\n Message-  " . $_GET['d']; 
$from = $_GET['a'];

if(mail($to, $subject, $header, $message, $from)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
