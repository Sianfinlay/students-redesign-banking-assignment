<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = "This customer wishes to enquire about booking a appointment for a mortgage application.";
	$from = "From: $email"; 
	$to = 'finlaysian@gmail.com'; 
	$subject = 'Mortgage appointment enquiry';

	$body = "Customer: $name\n Customer's Email: $email\n Branch: $branch \n $message";

	if ($_POST['submit']) {				 
		if (mail ($to, $subject, $body, $from)) { 
		echo '<span>Your message has been sent!</span>';
		} 
		else { 
		echo '<span>Something went wrong, go back and try again!</span>'; 
		} 
	}

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="James McCartan, Sian Finlay, Rebecca Feris, Stephanie Hughes"/>
    <meta name="description" content="This is the booking form use to send an email about a user booking a mortgage appointment"/>
    <title>Bookings</title>
</head>

<body>
	<h2>Book a meeting today</h2>
	<form>
		<input type="text" id="custName" placeholder="Name"/>
		<input type="text" id="custEmail" placeholder="Email"/>
		<input type="text" id="custPhone" placeholder="Phone"/>
		<select id="branch">
			<option disabled selected value="">Branch</option>
			<option id="belfast">Belfast</option>
			<option id="newry">Newry</option>
			<option id="portadown">portadown</option>
		</select>
		<input type="checkbox" id="agree"/>
			<p>Tick to agree to T&C's</p>
		<input type="submit" value="Book Now" id="book"/>
	</form>
</body>
</html>