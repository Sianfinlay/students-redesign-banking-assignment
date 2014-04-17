<?php

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$branch = $_POST["branch"];
	$message = "This customer wishes to enquire about booking a appointment for a mortgage application.";
	$from = "From: $email"; 
	$to = 'hello@sianfinlay.com'; 
	$subject = 'Mortgage appointment enquiry';

	$body = "Customer: $name\n Customer Phone Number: $phone\n Customer's Email: $email\n Branch: $branch \n $message";

	if ($_POST['submit']) {				 
		if (mail ($to, $subject, $body, $from)) { 
		echo '<span>Your message has been sent!</span>';
		} 
		else { 
		echo '<span>Something went wrong, go back and try again!</span>'; 
		} 
	}

?>