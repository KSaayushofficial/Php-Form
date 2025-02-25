<?php
$conn = mysqli_connect('localhost','root','','bca');

if(!$conn){
    die("Database not connected.".mysqli_connect_error());
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
                <?php foreach($result as $key=>$student) {?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$student['Name']?></td>
                        <td><?=$student['Email']?></td>
                        <td><?=$student['Address']?></td>
                        <td>
                            <a href="./edit.php?id=<?=$student['Id']?>">Edit</a>
                            <a href="./delete.php?id=<?=$student['Id']?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
            </thead>
        </table>
    </blockquote>
</body>
</html>