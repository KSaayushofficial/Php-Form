<?php

if(!empty($_FILES)){
    $image=$_FILES['images']['name'];
    $tmp=$_FILES['images']['tmp_name'];
    move_uploaded_file($tmp, 'images/'.$image);
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
    <form action="" method="post" enctype="multipart/form-data">
        Image: <br>
        <input type="file" name="image"><br><br>
        <button>Add Record</button>
    </form>
</body>
</html>

