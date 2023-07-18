<!DOCTYPE html>
<html lang="en">

<head>
	<title>Your post</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<header>
<ul class="nav">
  <li><a href="Home.php">Home</a></li>
  <li><a href="post.php">Recent Post</a></li>
  <li><a href="posts.php">Your Post</a></li>
  <
  <li><a href="profile.php">Profile</a></li>
  <li><a href="logout.php">Log Out</a></li>
  
</ul>
</header>

<?php
include 'connection.php';
session_start();
$umail= $_SESSION['alpha'];

$mysqli = new mysqli("localhost","root","","den2");
$query= "SELECT * FROM post where email='$umail'";
echo "<b> <center>Your Posts</center> </b> <br> <br>";
if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
	$post_id=$row['post_id'];
        $compName = $row['comp_name'];
        $mail = $row["mail"];
        $link= $row["link"];
        $level = $row["level"];
		$prize=$row['prize'];
        $type=$row['comp_type'];
	//echo '<b>Post id: </b>'.$post_id.'<br />';
        echo '<b>Competition Name :</b>'.$compName.'<br>';
        echo '<b>Link </b> :'.$link.'<br />';
        echo '<b>Level: </b>'.$level.'<br />';
		echo '<b>Competion Type: </b>'.$type.'<br />';
	echo '<b>Prize:</b>'.$prize.'<br />';
	
	$_SESSION['post']=$post_id;

   	echo "<a href = 'deletepost.php'>delete</a><br>";
echo "<a href = 'updatepost.php'>update</a><br><hr><br>";
    }
	
$result->free();

}
?>


<body>
</html