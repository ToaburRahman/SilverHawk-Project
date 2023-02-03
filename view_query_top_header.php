<?php
	//databace connation
	include'dbconfig.php';

	$sql = "SELECT * from top_header_info";

	$result = mysqli_query($dbconnect , $sql);

	$top_data = mysqli_fetch_assoc($result);

	
?>