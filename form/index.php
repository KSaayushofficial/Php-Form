<?php
$conn = mysqli_connect('localhost','root','','bca');

if(!$conn){
    echo "Database not connected";
};

$sql = "SELECT * from students";
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
        <h1>Student Record</h1>
        <a href="index.php">Home</a>
        <a href="add.php">Add Student</a>
        <hr>
        <table border="1" width="100%">
            <thead>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <?php foreach($result as $student) {?>
                    <tr>
                        <td><?=$student['Id']?></td>
                        <td><?=$student['Name']?></td>
                        <td><?=$student['Email']?></td>
                        <td><?=$student['Address']?></td>
                        <td>
                            <a href="./edit.php">Edit</a>
                            <a href="./delete.php">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
            </thead>
        </table>
    </blockquote>
</body>
</html>