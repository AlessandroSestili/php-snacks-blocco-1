<!--  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 

Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.  -->

<!-- Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!-- // Apro tag per PHP -->
<?php

$nba = [
    [
        "home" => "Falerian City Thunder",
        "away" => "Calcatesi Inibitis",
        "homePoint" => rand(1, 100),
        "awayPoint" => rand(1, 100),

    ],
    [
        "home" => "Rignano Seattles",
        "away" => " L.A. Lakers",
        "homePoint" => rand(1, 100),
        "awayPoint" => rand(1, 100),

    ],
    [
        "home" => "Utah Jazz",
        "away" => "Dallas Mavericks",
        "homePoint" => rand(1, 100),
        "awayPoint" => rand(1, 100),
        
    ],
    [
        "home" => "San Antonio Spurs",
        "away" => "Portland T. Blazers",
        "homePoint" => rand(1, 100),
        "awayPoint" => rand(1, 100),

    ],
    [
        "home" => "Seattle S.Sonics",
        "away" => "Phoenix Suns",
        "homePoint" => rand(1, 100),
        "awayPoint" => rand(1, 100),

    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-1</title>
</head>
<body>
    <ul>
        <?php
        for ($i = 0; $i < count($nba); $i++) {
            $currentTeam = $nba[$i];
            $teams= $currentTeam["home"] ." ". "VS" ." ". $currentTeam["away"];
            $points= $currentTeam["homePoint"] ." ". "-" ." ". $currentTeam["awayPoint"];
            ?>
            <li>
            <strong><?php echo $teams ?></strong>
            <small><?php echo $points ?></small>
            </li>
            <?php

        }
        ?>

    </ul>
</body>
</html>