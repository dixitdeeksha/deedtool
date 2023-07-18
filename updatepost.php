<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/4e46bd4023.js" crossorigin="anonymous"></script>
 
  <title>Document</title>
</head>

<body>










  <section class="mainbody">
    <nav>
      <ul>
        <li>
          <div class="home-icon">
            <div class="roof">
              <div class="roof-edge"></div>
            </div>
            <div class="front"></div>
          </div>
        </li>
        <li>
          <div class="about-icon">
            <div class="head">
              <div class="eyes"></div>
              <div class="beard"></div>
            </div>
          </div>
        </li>
        <li>
          <div class="work-icon">
            <div class="paper"></div>
            <div class="lines"></div>
            <div class="lines"></div>
            <div class="lines"></div>
          </div>
        </li>
        <li>
          <div class="mail-icon">
            <div class="mail-base">
              <div class="mail-top"></div>
            </div>
          </div>
        </li>


        <li>
          <div class="about-icon">
            <div class="head">
              <div class="eyes"></div>
              <div class="beard"></div>
            </div>
          </div>
        </li>
      </ul>
    </nav>


<?php
////include 'connection.php';
include 'yourpost2.php';
session_start();

$id= $_SESSION['post'];
echo $id;
//$umail= $_SESSION['alpha'];

$mysqli = new mysqli("localhost","root","","den2");
$sql= "SELECT * FROM post where post_id='$id'  ";

$result=mysqli_query($conn,$sql);


while($rows=mysqli_fetch_array($result)){
	
	$post_id=$id;
	
        $compName = $row['comp_name'];
        $mail = $row["email"];
        $link= $row["link"];
        $level = $row["level"];
$p=$row['prize'];
		$type=$row['post_type'];
        
		
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


<b> Cometition Name : </b><?php echo $row['comp_name'];?><br>
<b> Cometition Link : </b><?php echo $row['link'];?><br>
<b> Cometition Level : </b><?php echo $row['level'];?><br>
<b> Cometition Prize : </b><?php echo $p ;?><br>

          </div>
          
        </li>
      </ul>
    </div>

    

  
  <?php

   	

    

}	
//$result->free();


?>
      
</body>

</html>
</section>
