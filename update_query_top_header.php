<?php

	$phone = $_POST['phone'];
	$email = $_POST['email'];
//databace connation

	include'dbconfig.php';

$sql = "UPDATE `top_header_info` SET `Phone Number`= '$phone',`E-mail Address`='$email'";


if(mysqli_query($dbconnect , $sql)){
	header('Location: index.php');
}
else{
	echo 'Sorry Error';
};

?>
