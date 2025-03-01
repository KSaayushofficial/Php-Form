<?php
$conn = mysqli_connect('localhost','root','','bca');

if(!$conn){
    die("Database not connected.".mysqli_connect_error());
};

$sql = "SELECT * from products";
$result = mysqli_query($conn,$sql); 
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
        <table border="1" width="100%">
            <thead>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                <?php foreach($result as $key=>$product) {?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$product['Name']?></td>
                        <td><?=$product['Price']?></td>
                        <td><?=$product['Quantity']?></td>
                        <td><?=$product['Description']?></td>
                        <td>
                            <a href="./edit.php?id=<?=$product['Id']?>">Edit</a>
                            <a href="./delete.php?id=<?=$product['Id']?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
            </thead>
        </table>
    </blockquote>
</body>
</html>