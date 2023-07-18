<?php

include 'connection.php';
		session_start();
		

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password_1 = $_POST['password'];
		$password_2 = $_POST['repassword'];
		$phone=$_POST['phone'];
		$rolle=$_POST['ddlPassport'];

	

	if ($rolle==="Student")
	{
		$rollno=$_POST['roll'];
		$sql =  "INSERT INTO user (name, email, password,role,rollno,phone) 
  			  VALUES('$name', '$email', '$password_1','$rolle','$rollno','$phone')";
	}
	else
	{
		$dep=$_POST['dep'];
		$sql =  "INSERT INTO user (name, email, password,role,department,phone) 
  			  VALUES('$name', '$email', '$password_1','$rolle','$dep','$phone')";
	}

	//$sql2="INSERT INTO user (name, email, password,phone) 
  	//		  VALUES('$name', '$email', '$password_1','$phone')";
$sql2="SELECT * FROM USER ";
	if(mysqli_query($conn, $sql))
	{
		header("location:index.php");
	}
	else
	{
		echo "error";
	}		
		
?>