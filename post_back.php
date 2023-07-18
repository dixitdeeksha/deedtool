<html>
<head>
<link rel="stylesheet" href="createpost2.css">
</head>
<?php

include 'connection.php';
 
		session_start();
		
		
		$email = $_SESSION['alpha'];
		$cname=$_POST['cname'];
		$link = $_POST['link'];
		$prize=$_POST['prize'];
		$level = $_REQUEST['level'];
		$ctype=$_POST['ddlPassport'];
		echo $ctype;
		
		$sql =  "INSERT INTO post (link, level, email,comp_name,post_type,prize) 
  			  VALUES('$link', '$level', '$email','$cname','$ctype','$prize')";
	
		
		
		

	if(mysqli_query($conn, $sql)){
    

echo "huaaaaaa";
		
		

$sql2 = "select  post_id from post ORDER BY post_id DESC LIMIT 1";
$mysqli = new mysqli("localhost","root","","den2");
if ($result = $mysqli -> query($sql2)) {
  while ($row = $result -> fetch_row()) {
  $post= $row[0];

  }
}

if($ctype=="Achivement_Update"){	

		$pos=$_REQUEST['dvPos'];
		
		$certi=$_REQUEST['cLink'];
		
	$sql3=  "INSERT INTO achievement_update
  			  VALUES('$post', '$pos', '$certi')";
			  if(mysqli_query($conn, $sql3)){
  
	}else{
		echo "nhi ho rha feed yar";
	}

} else if($ctype=="Team_Requirment"){
	$no=$_POST['dvnMem'];
	$skills=$_POST['dvskillr'];
	$sql3=  "INSERT INTO team_request
  			  VALUES('$post', '$no','$skills')";
			  if(mysqli_query($conn, $sql3)){
   

	}
	
}


	}	
	
	echo "<h2><center>Posted Successfully<h2>";
	echo "<h1><a href='home.php'>Back to home</a></center><h1>";


		?>
</html>