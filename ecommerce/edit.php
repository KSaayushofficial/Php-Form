<?php
$conn = mysqli_connect("localhost","root","","bca");
if(!$conn){
    die("Not connected".mysqli_connect_error());
}
$id=$_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$result = mysqli_query($conn,$sql);
$products = mysqli_fetch_assoc($result);
if(!empty($_POST)){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $description=$_POST['description'];
    $sql="UPDATE products SET Id='$id',Name='$name',Price='$price',Quantity='$quantity', Description='$description' WHERE Id=$id";
    if(mysqli_query($conn,$sql)){
        header("Location: index.php");
    }else{
        echo "Error editing record";
    }
}
?>
<h1>Update</h1>
<form action="" method="post">
Name: <input type="text" name="name"value="<?=$products['Name']?>"><br>
Price:<input type="number" name="price" value="<?=$products['Price']?>"><br>
Quantity: <input type="number" name="quantity" value="<?=$products['Quantity']?>"><br>
Description: <input type="text" name="description" value="<?=$products['Description']?>"><br>
<button>Update Record</button><br><br>
</form>
 