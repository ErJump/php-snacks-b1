
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A</title>
</head>
<body>
    <div>
        <?php
            $teams = [
                [
                    "team1" => "Atlanta Hawks",
                    "team2" => "Boston Celtics",
                    "team1Points" => 59,
                    "team2Points" => 109,
                ],
                [
                    "team1" => "Brooklyn Nets",
                    "team2" => "Charlotte Hornets",
                    "team1Points" => 106,
                    "team2Points" => 98,
                ],
                [
                    "team1" => "Chicago Bulls",
                    "team2" => "Cleveland Cavaliers",
                    "team1Points" => 75,
                    "team2Points" => 75,
                ],
                [
                    "team1" => "Detroit Pistons",
                    "team2" => "Indiana Pacers",
                    "team1Points" => 43,
                    "team2Points" => 96,
                ],
                [
                    "team1" => "Miami Heat",
                    "team2" => "Milwaukee Bucks",
                    "team1Points" => 112,
                    "team2Points" => 50,
                ],
                [
                    "team1" => "New York Knicks",
                    "team2" => "Philadelphia 76ers",
                    "team1Points" => 101,
                    "team2Points" => 102,
                ]
            ];

            for ($i = 0; $i < count($teams); $i++) {
                $match = "<h5>" . $teams[$i]["team1"] . " - " . $teams[$i]["team2"] . " | " .  $teams[$i]["team1Points"] . "-" . $teams[$i]["team2Points"] . "</h5>";
                echo $match;
            }
        ?>
    </div>
</body>
</html>