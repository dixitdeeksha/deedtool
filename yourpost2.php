<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/4e46bd4023.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="yourpost.css">
  <title>Document</title>
</head>

<body>

  <header>

    <div>
      <h1>Den</h1>
      <h2>Your Post</h2>
    </div>
    

    <!--<div class="profilepic">
      <img src="Itachi2.webp" alt="jpg">
    </div>-->

    <div class="logo">
      <img src="Den 2.png" alt="png">
    </div>
  </header>








  <section class="mainbody">
  <nav>
      <ul>
       <a href="Home2.php"> <li>
          <div class="home-icon">
            <div class="roof">
              <div class="roof-edge"></div>
            </div>
            <div class="front"></div>
          </div>
        </li></a>
        <a href="yourpost2.php"><li>
          <div class="about-icon">
            <div class="head">
              <div class="eyes"></div>
              <div class="beard"></div>
            </div>
          </div>
        </li></a>
       <a href="createpost2.php"> <li>
          <div class="work-icon">
            <div class="paper"></div>
            <div class="lines"></div>
            <div class="lines"></div>
            <div class="lines"></div>
          </div>
        </li></a>
        <a href="profile2.php"><li>
          <div class="mail-icon">
            <div class="mail-base">
              <div class="mail-top"></div>
            </div>
          </div>
        </li></a>

        <a href="logout.php">
        <li>
          <div class="about-icon">
            <div class="head">
              <div class="eyes"></div>
              <div class="beard"></div>
            </div>
          </div>
        </li>
        </a>
        
      </ul>
    </nav>


<?php
include 'connection.php';
session_start();
$umail= $_SESSION['alpha'];

$mysqli = new mysqli("localhost","root","","den2");
$query= "SELECT * FROM post where email='$umail' ORDER BY post_id DESC ";


if ($result = $mysqli->query($query)) {


    while ($row = $result->fetch_assoc()) {
	
	$post_id=$row['post_id'];
	
        $compName = $row['comp_name'];
        $mail = $row["email"];
        $link= $row["link"];
        $level = $row["level"];
$p=$row['prize'];
		$type=$row['post_type'];
        
		$query2= "SELECT * FROM user where email='$mail' ";
	$result2 = mysqli_query($conn,$query2);
	$row2 = mysqli_fetch_assoc($result2);
	$name=$row2['name'];
?>	


    <div class="wrapper">
      <ul class="cards__list">
        <li class="card">
          <div class="card__header">
            <img class="card__profile-img"
              src="Itachi2.webp" 
              alt="jpg" />
            <div class="card__meta">
              <div class="card__meta__displayname">
                <?php echo $row2['name'];?>
              </div>
              <div class="card__meta__username">
                @<?php echo $row2['email'];?>
              </div> 
              <div class="card__meta__timestamp">
                1 day ago
              </div>
            </div>
            <div class="card__menu"><?php echo $type ;?>!
            </div>
          </div>
          <div class="card__body">


<b> Competition Name : </b><?php echo $row['comp_name'];?><br>
<b> Competition Link : </b><?php echo $row['link'];?><br>
<b> Competition Level : </b><?php echo $row['level'];?><br>
<b> Competition Prize : </b><?php echo $p ;?><br>

          </div>
          <div class="card__footer">
            <span class="card__footer__like">
              <i class="fas fa-share-alt"></i>Send Mail
            </span>
          </div>
        </li>
      </ul>
    </div>

    <button class="button button1" onclick="window.location.href='deletepost.php'">Delete</button>

    <button class="button button3"onclick="window.location.href='updatepost.php'">Update</button>


  <?php
  $_SESSION['post']=$post_id ;

   	}

    }

	
//$result->free();


?>
      
</body>

</html>
</section>
