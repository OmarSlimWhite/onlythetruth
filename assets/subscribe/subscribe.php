<?php
// Note: filter_var() requires PHP >= 5.2.0
if ( isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
     //$e_mail = $_POST['email'] . "," . "\n";
	 // file_put_contents('email-list.txt', $e_mail, FILE_APPEND | LOCK_EX);
    
    
    


$myemail = 'omarwhitetrust@gmail.com';

$email = $_POST['email'];


$to = $myemail;
$email_subject = "FREE BOOK";
$email_body = "You have received a new request. Details are given below. \n Email: $email";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);



}
?>