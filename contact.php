<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        blockquote {
            width: 50%;
            margin: 0 auto;
            border: 1px solid #000;
            padding: 20px;
            border-radius: 10px;
            background-color: cyan;
        }
        h1 {
            text-align: center;
            margin-bottom: 50px;
        }
        hr {
            margin-top: 20px;
        }
        input {
            margin-bottom: 10px;
        }
        button {
            margin-top: 10px;
        }
        label {
            margin: 20px;
            width: 100px;
        }
        #name, #f_name, #m_name, #email, #phone, #DOB, #address {
            margin-left: 75px;
            width: 200px;
        }
        #blood_group {
            margin-left: 33px;
            width: 100px;
        }
        #photo {
            margin-left: 80px;
        }
        .form-data {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            font-family: sans-serif;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $father_name = $_POST['father_name'] ?? '';
    $mother_name = $_POST['mother_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $DOB = $_POST['DOB'] ?? '';
    $address = $_POST['address'] ?? '';
    $blood_group = $_POST['blood_group'] ?? '';
    $department = $_POST['department'] ?? '';
    $course = $_POST['course'] ?? '';

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $photo = $_FILES['photo'];
        $upload_dir = "uploads/";
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $photo_path = $upload_dir . basename($photo['name']);
        move_uploaded_file($photo['tmp_name'], $photo_path);
    }
}
?>

<blockquote>
    <h1>Contact Page</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="username" id="name"><br><br>

        <label for="f_name">Father's Name:</label>
        <input type="text" name="father_name" id="f_name"><br><br>

        <label for="m_name">Mother's Name:</label>
        <input type="text" name="mother_name" id="m_name"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone"><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other<br><br>

        <label for="DOB">Date of Birth:</label>
        <input type="date" name="DOB" id="DOB"><br><br>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address"><br><br>

        <label for="blood_group">Blood Group:</label>
        <select name="blood_group" id="blood_group">
            <option value="" selected disabled>Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select><br><br>

        <label>Department:</label>
        <input type="radio" name="department" value="CSE"> CSE
        <input type="radio" name="department" value="BBA"> BBA
        <input type="radio" name="department" value="BCA"> BCA<br><br>

        <label>Course:</label>
        <input type="radio" name="course" value="C"> C
        <input type="radio" name="course" value="C++"> C++
        <input type="radio" name="course" value="JAVA"> JAVA
        <input type="radio" name="course" value="AI"> AI<br><br>

        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo"><br><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</blockquote>

<div class="form-data">
    <h1>User data:</h1>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Name: <?= $username ?></p>
        <p>Father's Name: <?= $father_name ?></p>
        <p>Mother's Name: <?= $mother_name ?></p>
        <p>Email: <?= $email ?></p>
        <p>Phone: <?= $phone ?></p>
        <p>Gender: <?= $gender ?></p>
        <p>Date of Birth: <?= $DOB ?></p>
        <p>Address: <?= $address ?></p>
        <p>Blood Group: <?= $blood_group ?></p>
        <p>Department: <?= $department ?></p>
        <p>Course: <?= $course ?></p>
        <p>Photo: <?= isset($photo_path) ? "<img src='$photo_path' width='100'>" : "No photo uploaded" ?></p>
    <?php endif; ?>
</div>

</body>
</html>
