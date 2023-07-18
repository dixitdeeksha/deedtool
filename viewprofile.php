<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/4e46bd4023.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="viewprofile.css">
  <title>Document</title>
</head>
<body>
<?php
 include 'connection.php';
session_start();$email=$_SESSION['alpha'];
$sql="SELECT * FROM user where email='$email'";
$result=mysqli_query($conn,$sql);
?>
    <header>
        
       <div>
         <h1>Den</h1>
         <h2>Profile</h2>
       </div>

       <div class="profilepic">
         <img src="Itachi2.webp" alt="jpg">
       </div>

       <div class="logo">
         <img src="Den 2.png" alt="png">
       </div>
    </header> 
          
          
    
   






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
while($rows=mysqli_fetch_array($result)){
?>   
  
      <div class="main">
          <div class="card">
              <div class="card-body">
                  <a href="updateprofile2.php"><i class="fa fa-pen fa-xs edit" ></i></a>

                  
                  <table>
                      <tbody>
                          <tr>
                              <td>Name</td>
                              <td>:</td>
                              <td><?php echo $rows['name'];?></td>
                          </tr>
                          <tr>
                              <td>Email</td>
                              <td>:</td>
                              <td><?php echo $email; ?></td>
                          </tr>
	<tr>
                              <td>Phone</td>
                              <td>:</td>
                              <td><?php echo $rows['phone']; ?></td>
                          </tr>
                          <tr>
                              <td>Role</td>
                              <td>:</td>
                              <td><?php echo $rows['role'];?></td>
                          </tr>
<?php 
if($rows['role']==="Student"){
$field="Roll no.";
$value1=$rows['rollno'];
}else{
$field="Department";
$value1=$rows['department'];
}
?>			
                          <tr>
                              <td><?php echo $field; ?> </td>
                              <td>:</td>
                              <td><?php echo $value1; ?></td>
                          </tr>


                          <tr>
                              <td>Job</td>
                              <td>:</td>
                              <td>Web Developer</td>
                          </tr>

                          <tr>
                              <td>Skill</td>
                              <td>:</td>
                              <td><?php echo $rows['skills'];?></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div><?php 
// close while loop 
}
?>
  </section>
  


<?php

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

<section>
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
          <div class="card__footer">
            <span class="card__footer__like">
              <i class="fas fa-share-alt"></i>Send Mail
            </span>
          </div>
        </li>
      </ul>
    </div>

  </section>
  
  <?php

   	}

    }

	
//$result->free();


?>
      
    
</body>
 







   









