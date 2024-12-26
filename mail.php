<?php
//get data from form  

$product = $_POST['product'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number = $_POST['phone'];

$to ="@gmail.com ";
$subject = "New contact from $name";
$txt = "Name = ". $first_name . "\r\nMobileNumber = " . $number .  "\r\nEmail = " . $email .  "\r\nMessage =" . $message .  "\r\nProduct =" . $product ;
$headers = "From: $first_name <$email>" . "\r\n" .
"CC:@gmail.com ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
