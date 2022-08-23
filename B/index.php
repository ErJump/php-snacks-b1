<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B</title>
</head>
<body>
    <?php
        $userName = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];

        if (strlen($userName) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($age)) {
            echo "<h1>Welcome, " . $userName . "</h1>";
        } else {
            echo "<h1>Sorry something went wrong</h1>";
        }
    ?>
</body>
</html>