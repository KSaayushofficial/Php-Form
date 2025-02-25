<?php
$conn = mysqli_connect("localhost","root","","bca");
if(!$conn){
    die("Not connected".mysqli_connect_error());
}
$id=$_GET['id'];
$sql = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($conn,$sql);
$students = mysqli_fetch_assoc($result);
if(!empty($_POST)){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $sql="UPDATE students SET Id='$id',Name='$name',Email='$email',Address='$address' WHERE Id=$id";
    if(mysqli_query($conn,$sql)){
        header("Location: index.php");
    }else{
        echo "Error editing record";
    }
}
?>
<h1>Update</h1>
<form action="" method="post">
Name: <input type="text" name="name"value="<?=$students['Name']?>"><br>
E-mail:<input type="email" name="email" value="<?=$students['Email']?>"><br>
Address: <input type="text" name="address" value="<?=$students['Address']?>"><br>
<button>Update Record</button><br><br>
</form>
 