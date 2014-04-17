<?php
//staff landing page table

include "dbconn.php";//connect to the database

$query = "SELECT Customer_ID , Name , Address , Martial_Status , Age , Income , Tel , Email FROM customer ORDER BY Customer_ID DESC LIMIT 6";//create varible for the select query 
	$result = mysqli_query($conn, $query) or die("invalid query");//run query
	$staff_table = "<table id=\"staff\" border=\"1\" cellspacing=\"0\"><tr><th>Customer ID</th><th>Name</th><th>Address</th><th>Martial Status</th><th>Age</th><th>Income</th><th>Tel</th><th>Email</th></tr>";//print start of table and  table headers
		while($rows = mysqli_fetch_array($result)){// use while loop to run throught the selected rows
			$staff_table .= "<tr><td>".$rows["Customer_ID"]."</td><td>".$rows["Name"]."</td><td>".$rows["Address"]."</td><td>".$rows["Martial_Status"]."</td><td>".$rows["Age"]."</td><td>".$rows["Income"]."</td><td>".$rows["Tel"]."</td><td>".$rows["Email"]."</td></tr>";// print table rows with table rows values 
		}
		$staff_table .= "</table>";//close table

mysqli_close($conn);//close connection
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="James McCartan, Sian Finlay, Rebecca Feris, Stephanie Hughes"/>
    <meta name="description" content="This is the booking form use to send an email about a user booking a mortgage appointment"/>
    <title>Staff</title>
</head>

<body>
	<?php echo $staff_table; ?>
</body>
</html>