<?php

	$phone = $_POST['phone'];
	$email = $_POST['email'];
//databace connation
include'dbconfig.php';

//insert Query 
$sql = "INSERT INTO `top_header_info`(`ID`, `Phone Number`, `E-mail Address`) VALUES ('null' , '$phone', '$email')";
	
//success messages Condition 
if(mysqli_query($dbconnect , $sql)){
	header('Location: index.php');
}
else{
	echo 'Sorry Error';
};

?>
