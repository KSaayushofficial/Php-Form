<?php 
$conn = mysqli_connect('localhost','root','','bca');

if (!$conn){
    die("Database not connected.".mysqli_connect_error());
}

if(!empty($_POST)){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $sql = "INSERT INTO products(Name,Price,Quantity,Description) VALUES ('$name','$price','$quantity','$description')";
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
        <h1>Product Record</h1>
        <a href="index.php">Home</a>
        <a href="add.php">Add Product</a>
        <hr>
        <form action="" method="post">
            <label for="name">Name</label> <br>
            <input type="text" name="name"> <br>
            <label for="price">Price</label> <br>
            <input type="number" name="price"> <br>
            <label for="quantity">Quantity</label> <br>
            <input type="number" name="quantity"> <br>
            <label for="description">Description</label> <br>
            <input type="text" name="description"> <br>
            <button>Add Record</button>
        </form>
    </blockquote>
</body>
</html>