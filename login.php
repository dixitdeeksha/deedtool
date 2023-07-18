<?php 

session_start(); 

include "connection.php";

if (isset($_POST['mail']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $mail = validate($_POST['mail']);

    $password = validate($_POST['password']);

    if (empty($mail)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($password)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM user WHERE email='$mail' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $mail && $row['password'] === $password) {

                echo "Logged in!";

              

                //$_SESSION['mail'] = $row['mail'];

                //$_SESSION['id'] = $row['id'];

                header("Location: home2.php");
		$_SESSION['alpha']=$mail ;
		 exit();


            }else{

                header("Location: index.php?error=Incorect User mail or password");
                
                exit();

            }

        }else{

          //  header("Location: index.php?error=Incorect User mail or password");
            echo"login failed";

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

} 