<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E</title>
</head>
<body>
<div>
    <?php
        $students = [
            [
                "name" => "Giampiero",
                "surname" => "Fedeli",
                "grades" => [4, 2, 5, 1],
            ],
            [
                "name" => "Gina",
                "surname" => "Bagiggia",
                "grades" => [10, 9, 8, 9],
            ],
            [
                "name" => "Francesco",
                "surname" => "De Santis",
                "grades" => [7, 3, 5, 10],
            ],
            [
                "name" => "Ninna",
                "surname" => "Nanna",
                "grades" => [1, 2, 3, 4],
            ],
            [
                "name" => "Luca",
                "surname" => "Berardi",
                "grades" => [2, 10, 9, 8],
            ],
            [
                "name" => "Mario",
                "surname" => "Gallo",
                "grades" => [6, 7, 8, 2],
            ]
        ];
       
        ?>
    <ul>
        <?php
            for ( $i = 0; $i < count($students); $i++) {
        ?>
        <li>
            <?php
                $sum = 0;
                for ($j = 0; $j < count($students[$i]["grades"]); $j++) {
                    $sum += $students[$i]["grades"][$j];
                }
                echo "<strong>Nome e Cognome:</strong>" . " " . $students[$i]["name"] . " " . $students[$i]["surname"] . "<br>";
                echo "<strong>Media voti:</strong>" . " " . $average = $sum / count($students[$i]["grades"]);
            }
        ?>
        </li>
    </ul>
</body>
</html>