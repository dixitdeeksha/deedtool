
<?php
// Include database connection file

 include 'connection.php';


?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <title>Profile</title>
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
<div id="center">
<div id="center-set"> 
<h1 align='center'>Welcome <?php echo $_SESSION['alpha']; ?>,</h1>

<div id="contentbox">
<?php
$email=$_SESSION['alpha'];
$sql="SELECT * FROM user where email='$email'";
$result=mysqli_query($conn,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg"></b>Your Profile:</b></div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">mail id:</div> </td>
<td class="tl-4"><?php echo $email; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['name']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Roll no:</div></td>
<td class="tl-4"><?php echo $rows['rno_dep']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Phone no:</div></td>
<td class="tl-4"><?php echo $rows['phone']; ?></td>
</tr>
</table>

</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
<div id="st"><a href="updateprofile.php" id="st-btn">Update Profile</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>
<div id="footer"><p><center> DEN</center></p></div>
</body>
</html>