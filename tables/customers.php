<?php
//staff customer table

$attribute = "Customer_ID";
$order = "ASC";
if ( isset( $_POST['sort'] ) ) {
	$attribute = $_POST["attribute"];
	$order = $_POST["order"];
}
include "dbconn.php";//connect to the database

$query = "SELECT Customer_ID , Name , Address , Martial_Status , Tel , Email FROM customer ORDER BY $attribute $order";//create varible for the select query 
	$result = mysqli_query($conn, $query) or die("invalid query");//run query

	// add classes and style helper in the variable below
	$staff_table = "<table id=\"customer\" class=\"table-display\"><thead><h2>Customer</h2></thead><tr><th>Customer ID</th><th>Name</th><th>Address</th><th>Martial Status</th><th>Tel</th><th>Email</th></tr>";//print start of table and  table headers
		while($rows = mysqli_fetch_array($result)){// use while loop to run throught the selected rows
			$staff_table .= "<tr><td>".$rows["Customer_ID"]."</td><td>".$rows["Name"]."</td><td>".$rows["Address"]."</td><td>".$rows["Martial_Status"]."</td><td>".$rows["Tel"]."</td><td>".$rows["Email"]."</td></tr>";// print table rows with table rows values 
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
    <title>Customers</title>
</head>

<body>
	<form action="customers.php" method="post">
		<label>SORT BY</label>
		<select name="attribute">
			<option value="Customer_ID">Customer ID</option>
			<option value="Name">Name</option>
			<option value="Address">Address</option>
			<option value="Martial_Status">Martial Status</option>
			<option value="Age">Age</option>
			<option value="Income">Income</option>
			<option value="Tel">Tel</option>
			<option value="Email">Email</option>
		</select>
		<select name="order">
			<option value="ASC">ASC</option>
			<option value="DESC">DESC</option>
		</select>
		<input type="submit" value="sort" name="sort">
	</form>
	<?php echo $staff_table; ?>
</body>
</html>