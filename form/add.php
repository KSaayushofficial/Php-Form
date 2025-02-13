<?php 
$conn = mysqli_connect('localhost','root','','bca');

if (!$conn){
    die("Database not connected.".mysqli_connect_error());
}

if(!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $sql = "INSERT INTO students(Name,Email,Address) VALUES ('$name','$email','$address')";
    $result = mysqli_query($conn,$sql);

    if($result){
        // echo "Record added successfully.";
        header("Location: index.php");
     } else{
            echo "Record not added.";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <blockquote>
        <h1>Student Record</h1>
        <a href="index.php">Home</a>
        <a href="add.php">Add Student</a>
        <hr>
        <form action="" method="post">
            <label for="id">Id</label> <br>
            <input type="text" name="id"> <br>
            <label for="name">Name</label> <br>
            <input type="text" name="name"> <br>
            <label for="email">Email</label> <br>
            <input type="email" name="email"> <br>
            <label for="address">Address</label> <br>
            <input type="text" name="address"> <br>
            <button>Add Record</button>
        </form>
    </blockquote>
</body>
</html>