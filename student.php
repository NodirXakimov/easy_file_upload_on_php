<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student</title>
</head>
<body>
    <h1>Student information</h1>
    <form action="info.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="number" name="age" placeholder="Age"><br><br>
        <input type="file" name="avatar"><br><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>