<?php
$to = "ilakkiyaa99@gmail.com";
$subject = "Checking whether mail is send properly frm php";
$message="mail was send from my code";
$headers= "From: ajayvenu.ajay@gmail.com";

if(mail($to, $subject, $message, $headers)){
    echo" mail sent successfully";
}
else{
    echo "cannot send mail";
}
?>