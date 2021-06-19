<?php
//get data from form  
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];

$password= $_POST['password'];
$to = "vishalrathod86@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $firstname . "\r\n  lastname = " . $lastname . "\r\n  Email = " . $email . "\r\n Message =" . $password;
$headers = "From: vishalrathod86@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>