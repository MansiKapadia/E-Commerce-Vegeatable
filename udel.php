<?php
	$cn=mysqli_connect("localhost","root","","temp");
	$orid=$_GET['orid'];
	$q="delete from order_mstr where orid=$orid";
	
	mysqli_query($cn,$q);

	echo "Record Deleted successfully";
	mysqli_close($cn);
	header('location: udisp.php');
?>