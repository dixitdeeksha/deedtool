<?php
 include 'connection.php';
session_start();
$email=$_SESSION['alpha'];
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE user set  name='" . $_POST['name'] . "', rno_dep='" . $_POST['rno'] . "' ,phone='" . $_POST['phone'] . "' WHERE email='" . $email . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE email='" . $email . "'");
$row= mysqli_fetch_array($result);
echo "Profile updated successfully";
?>
<html>
<head>
<title>Update Profile</title>

<style>
 /*set border to the form
      
    form {
        border: 3px solid #f1f1f1;
    }
    assign full width inputs*/
      
    input[type=text],
    input[type=password] ,
	input[type=mail]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 10px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /*set a style for the buttons*/
      
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    /* set a hover effect for the button*/
      
    button:hover {
        opacity: 0.8;
    }
    /*set extra style for the cancel button*/
      
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
    /*centre the display image inside the container*/
      
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    /*set image properties*/
      
    img.avatar {
        width: 10%;
        border-radius: 50%;
    }
    /*set padding to the container*/
      
    .container {
        padding: 16px;
    }
    /*set the forgot password text*/
      
    span.psw {
        float: right;
        padding-top: 16px;
    }
    /*set styles for span and cancel button on small screens*/
      
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
	
	body {
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">

</div>

 Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Roll no./Department :<br>
<input type="text" name="rno" class="txtField" value="<?php echo $row['rno_dep']; ?>">
<br>
Phone number:<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>

<input type="submit" name="submit" value="Update" class="buttom">

</form>
<form action="profile.php">
        <button class = "" type="submit">
            Back to profile
        </button>
</body>
</html>




