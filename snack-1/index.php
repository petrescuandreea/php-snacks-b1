<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>

    <?php
        // Snack 1
        // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        // Olimpia Milano - Cantù | 55-60

        $basketballMatches = [
            [
                "homeTeam" => "Milano",
                "guestTeam" => "Cantu",
                "homeTeamPoints" => 55,
                "guestTeamPoints" => 60
            ],
            [
                "homeTeam" => "Roma",
                "guestTeam" => "Torino",
                "homeTeamPoints" => 48,
                "guestTeamPoints" => 52
            ],
            [
                "homeTeam" => "Firenze",
                "guestTeam" => "Verona",
                "homeTeamPoints" => 59,
                "guestTeamPoints" => 48
            ],
        ]

    ?>
</head>
<body>
    <div>
        <?php
            for($i=0;  $i < count($basketballMatches); $i++) {
                echo $basketballMatches[$i]['homeTeam'] . " - " . $basketballMatches[$i]['guestTeam'] . " | " . $basketballMatches[$i]['homeTeamPoints'] . "-" . $basketballMatches[$i]['guestTeamPoints'] . "<br>";
            }
        ?>
    </div>
</body>
</html>