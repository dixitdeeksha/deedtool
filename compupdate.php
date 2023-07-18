<!DOCTYPE html>
<html lang="en">

<head>
	<title>Compition Update</title>
	
		<meta charset="utf-8">
		
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
</head>

<body>
	<center>

<?php

		session_start();
		//echo "afah";
		echo $_SESSION['alpha'];

?>
	<?php include 'connection.php';
?>	<h1>Add a post</h1>

		<form action="home_back.php" method="post">
			
			
<p>
				<label for="competition_name">Competition name:</label>
				<input type="text" name="competition_name" id="competition_name">
			</p>

<p>
				<label for="link">link</label>
				<input type="link" name="link" id="link">
			</p>

			
<p>
				<label for="level">Level:</label>
				<input type="text" name="level" id="level">
			</p>


			
			<input type="submit" value="post">
<h1>or <br> <a href="show_post.php">View posts</a></h1>
		</form>

<h1>or <br> <a href="yourpost.php">your posts</a></h1>
	</center>
</body>

</html>