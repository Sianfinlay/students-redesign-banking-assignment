<?php
//staff staff table

$attribute = "UserName";
$order = "ASC";
if ( isset( $_POST['sort'] ) ) {
	$attribute = $_POST["attribute"];
	$order = $_POST["order"];
}
include "dbconn.php";//connect to the database

$query = "SELECT UserName , Name , Location , Branch_Name , Position  FROM staff ORDER BY $attribute $order";//create varible for the select query 
	$result = mysqli_query($conn, $query) or die("invalid query");//run query

	// add classes and style helper in the variable below
	$staff_table = "<table id=\"staff\" class=\"table-display\"><tr><th>Staff ID</th><th>Name</th><th>Location</th><th>Branch Name</th><th>Position</th></tr>";//print start of table and  table headers
		while($rows = mysqli_fetch_array($result)){// use while loop to run throught the selected rows
			$staff_table .= "<tr><td>".$rows["UserName"]."</td><td>".$rows["Name"]."</td><td>".$rows["Location"]."</td><td>".$rows["Branch_Name"]."</td><td>".$rows["Position"]."</td></tr>";// print table rows with table rows values 
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
    <meta name="description" content=""/>
    <title>Staff</title>
</head>

<body>
	<form action="staff.php" method="post">
		<label>SORT BY</label>
		<select name="attribute">
			<option value="UserName">Staff ID</option>
			<option value="Name">Name</option>
			<option value="Location">Location</option>
			<option value="Branch_Name">Branch Name</option>
			<option value="Position">Position</option>
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