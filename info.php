<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Info</title>
</head>
<body>
    <h1>Student info</h1>
    <?php
        $name = htmlentities($_POST['name'], ENT_QUOTES, "UTF-8");
        $age = htmlentities($_POST['age'], ENT_QUOTES, "UTF-8");
        $avatar = $_FILES['avatar'];
        move_uploaded_file($avatar['tmp_name'], $avatar['name']);


        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Temp name: {$avatar['tmp_name']}</p>";
        
        echo "<img src='{$avatar['name']}' width='100' />";

    ?>
</body>
</html>