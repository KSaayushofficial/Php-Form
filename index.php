<?php 
$name = 'user';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .admin-box {
            width: 300px;
            height: 300px;
            background-color: red;
        }
        .user-box{
            width: 300px;
            height: 300px;
            background-color: green;
        }
    </style>
</head>
<body>
    <?php if($name === 'admin') {?>
        <div class="admin-box"></div>
         <?php } else { ?>
    <div class="user-box"></div>
       <?php  }?>
</body>
</html>