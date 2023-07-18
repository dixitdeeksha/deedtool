<html>
	<!DOCTYPE html>
<html lang="en">

<head>
	<title>Show post</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<ul class="nav">
  <li><a href="Home.php">Home</a></li>
  <li><a href="post.php">Recent Post</a></li>
  <li><a href="posts.php">Your Post</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li><a href="logout.php">Log Out</a></li>
  
</ul>
<?php
error_reporting(E_ALL ^ E_WARNING); 
include 'connection.php';
session_start();
$umail= $_SESSION['alpha'];

$mysqli = new mysqli("localhost","root","","den2");
$query= "SELECT post_id,comp_name,comp_type, mail, link,level FROM post ORDER BY post_id DESC ";
echo "<b> <center>Recent Post</center> </b> <br> <br>";
if ($result = $mysqli->query($query)) {


    while ($row = $result->fetch_assoc()) {
	
	$post_id=$row['post_id'];
	
        $compName = $row['comp_name'];
        $mail = $row["mail"];
        $link= $row["link"];
        $level = $row["level"];
		$type=$row['comp_type'];
        
		$query2= "SELECT name FROM user where user.email='$mail' ";
	$result2 = mysqli_query($conn,$query2);
	$row2 = mysqli_fetch_assoc($result2);
	$name=$row2['name'];
	
	 
	//echo '<b>Post id: </b>'.$post_id.'<br>';
	echo '<b>Name: </b>'.$name.'<br>';
        echo '<b>competition Name :</b>'.$compName.'<br>';
		 echo '<b>competition Type :</b>'.$type.'<br>';
        echo "<b>link </b><a href='$link'>:".$link.'</a><br>';
        echo '<b>level:</b>'.$level.'<br>';
		

		
		
	echo "<a href = 'mailto:$mail'>Send Email</a><br><hr><br";
	
	
	$_SESSION['post']=$post_id;

   	}

    }

	
$result->free();


?>
</body>
</html>