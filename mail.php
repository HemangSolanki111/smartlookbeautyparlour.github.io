<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['mobile'];
$address= $_POST['address'];
$message= $_POST['message'];

$to = "smarlook7525@gmail.com";
$subject = "Mail From Smartlook Website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Mobile number =" . $number . "\r\n Address =" . $address;

$headers = "From: noreply@smartlook.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location: index.html");
?>