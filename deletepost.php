<html>


<?php


include 'yourpost2.php';
session_start();
$id= $_SESSION['post'];


// sql to delete a record
$sql = "DELETE FROM post WHERE post_id='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("Location: yourpost2.php");


  
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 
</html>