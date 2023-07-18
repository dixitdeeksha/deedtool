<?php
 include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/4e46bd4023.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="profile2.css">
  <title>Document</title>
</head>
<body>
<?php
$email=$_SESSION['alpha'];
$sql="SELECT * FROM user where email='$email'";
$result=mysqli_query($conn,$sql);
?>

    <header>
        
       <div>
         <h1>Den</h1>
         <h2>Your-Profile</h2>
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
while($rows=mysqli_fetch_array($result)){
?>   
  
      <div class="main">
          <div class="card">
              <div class="card-body">
                  <a href="updateprofile2.php"><i class="fa fa-pen fa-xs edit" ></i></a>
<form action="updateImage.php" method="post">		
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
    
    
</body>
</html>
 







   









