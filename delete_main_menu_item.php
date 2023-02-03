<<?php 
include'dbconfig.php';
$id = $_GET['id'];
$sql = "DELETE FROM main_menu WHERE id=$id";

if (mysqli_query($dbconnect ,$sql )) {
	header ('Location: main_menu.php');
}

 ?>