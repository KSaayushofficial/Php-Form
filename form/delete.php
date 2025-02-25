<?php
$conn = mysqli_connect('localhost','root','','bca');

if(!$conn){
    die("Database not connected.".mysqli_connect_error());
};

$Id = $_GET['id'];
$sql = "DELETE from students WHERE Id=$Id";
$result = mysqli_query($conn,$sql); 
if($result){
      header('Location:index.php');
} else {
      echo "Data not deleted";
}
?>