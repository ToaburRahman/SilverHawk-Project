<?php
	//databace connation
	include'dbconfig.php';

	$sql = "SELECT * from main_menu";

	$menu_result = mysqli_query($dbconnect , $sql);

	

	
?>