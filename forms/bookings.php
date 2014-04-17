<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="James McCartan, Sian Finlay, Rebecca Feris, Stephanie Hughes"/>
    <meta name="description" content="This is the booking form use to send an email about a user booking a mortgage appointment"/>
    <title>Bookings</title>
    <!--==================================
   		 JS
    ======================================-->
    <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript">
    	$(document).ready( function(){

    		$agree = $("#agree");

    		$agree.click(function (){

    			if ($(this).is(":checked")){
    				$("#book").show();
				}
    			else{
    				$("#book").hide();
    			}
    			
    		});
    	});
    </script>
</head>

<body>
	<h2>Book a meeting today</h2>
	<form action="booking_mail.php" method="post">
		<input type="text" id="custName" placeholder="Name" name="name"/>
		<input type="text" id="custEmail" placeholder="Email" name="email"/>
		<input type="text" id="custPhone" placeholder="Phone" name="phone"/>
		<select id="branch" name="branch">
			<option disabled selected value="">Branch</option>
			<option id="belfast" value="Belfast">Belfast</option>
			<option id="newry" value="Newry">Newry</option>
			<option id="portadown" value="Portadown">Portadown</option>
		</select>
		<p><input type="checkbox" id="agree"/>Tick to agree to T&C's</p>
		<input type="submit" value="Book Now" id="book" name="submit"/>
	</form>
</body>
</html>