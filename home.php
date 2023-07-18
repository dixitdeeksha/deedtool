<!DOCTYPE html>
<html>
	<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>

	</head>
	<body>
	
<ul class="nav">
  <li><a href="Home.php">Home</a></li>
  <li><a href="posts.php">Recent Post</a></li>
  <li><a href="yourpost.php">Your Post</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li><a href="logout.php">Log Out</a></li>
  
</ul>
<?php 
include 'connection.php';
		session_start();
		?>
		<center>

<form action="post_back.php" method="post">
			
			
			
<p>
				<label for="cname">Comptition Name</label>
				<input type="text" name="cname" id="cname">
			</p>

			
			
<p>
				<label for="link">link</label>
				<input type="link" name="link" id="link">
			</p>



			
			
<p>
				<label for="level">Level:</label>
				<input type="text" name="level" id="level">
			</p>
						
<p>
				<label for="prize">Prize:</label>
				<input type="text" name="prize" id="prize">
			</p>
	<script type="text/javascript">
    $(function () {
        $("#ddlPassport").change(function () {
            if ($(this).val() == "Achivement_Update") {
                $("#dvPos").show();
				$("#dvcLink").show();
            } else if($(this).val() == "Team_Requirment"){
				$("#dvnMem").show();
				$("#dvskillr").show();
				
			}
			else {
                $("#dvPassport").hide();
				
            }
        });
    });
</script>

<span>Type of post</span>
<select id="ddlPassport" value="ddlPassport" name="ddlPassport">
    <option value=""></option>
    <option value="Achivement_Update">Achivement Update</option>
    <option value="Team_Requirment">Team Requirment </option>
	<option value="Comptition_Update">Comptition Update</option>
</select>
<hr />
<p id="dvPos" style="display: none">
    Position:
    <input type="text" name="dvPos" id="dvPos" />
</p>
<div id="dvcLink" style="display: none">
    Certificate Link:
    <input type="link"  name ="cLink" id="cLink" />
</div>
<div id="dvnMem" style="display: none">
    No. of Team members:
    <input type="text"  name ="dvnMem" id="dvnMem" />
</div>
<div id="dvskillr" style="display: none">
   Skill required:
    <input type="text"  name ="dvskillr" id="dvskillr" />
</div>

</select>

<input type="submit" value="Post">

		</form>
</center>
        
	</body>
</html>
</html>