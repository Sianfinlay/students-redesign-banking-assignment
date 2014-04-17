<?php
	$conn = mysqli_connect("localhost", "Imd10", "") or die ("No connection");// connect to databases
	mysqli_select_db($conn, "Imd10") or die("db will not open");// open specific database
?>