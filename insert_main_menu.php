<?php

	$menu_name = $_POST['menu_name'];
	$menu_url = $_POST['menu_url'];
//databace connation
include'dbconfig.php';

//insert Query 
$sql = "INSERT INTO `main_menu`(`ID`, `menu_name`, `menu_url`) VALUES ('null' , '$menu_name', '$menu_url')";
	
//success messages Condition 
if(mysqli_query($dbconnect , $sql)){
	header('Location: main_menu.php');
}
else{
	echo 'Sorry Error';
};

?>