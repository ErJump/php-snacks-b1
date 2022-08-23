<?php
    $array = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C</title>
</head>
<body>
    <ul>
        <?php
            do{
                $randomNumber = rand(0, 100);
                if (!in_array($randomNumber, $array)) {
                    $array[] = $randomNumber;
        ?>
        <li>
            <?php
                    echo $randomNumber;
                }
            } while (count($array) < 15);
            ?>
        </li>  
    </ul>
</body>
</html>