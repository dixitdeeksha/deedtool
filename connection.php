<?php
$conn=new mysqli("localhost","root","","den2");
if($conn->connect_error){
    die("failed".$conn->connect_error);
}

?>