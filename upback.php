<?php


include 'connection.php';
		session_start();
		
	$email=$_SESSION['alpha'];
		$name = $_POST['name'];
		
		
		$phone=$_POST['phone'];
	$skills=$_POST['skills'];

	$sql="UPDATE user SET name = '$name', phone= '$phone',skills='$skills' where email='$email'";


if($conn->query($sql) === TRUE)
{	
		header("location:profile2.php");

	}
	else
	{
		echo "error";
	}		
		
?>