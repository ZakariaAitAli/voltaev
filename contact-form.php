<?php 
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    define('email','voltaensa@gmail.com');
    $to_email = "yass.jaafar0@gmail.com";
    $subject = "Volta Contact";
    $body = "
                Nom :".$name."<br> Email :".$email."<br> Phone :".$phone."<br> Message:".$message."<br>
            ";
 
if (mail($to_email, $subject, $body,'FROM: '.email))
 
{
    echo "Email successfully sent to $to_email...";
}
 
else
 
{
    echo "Email sending failed!";
}
}