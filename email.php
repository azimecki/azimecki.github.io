<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];
	$formcontent = "From: $name \n Message: $message";
	$recipient = "azimecki@hotmail.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	include('index.html');
?>