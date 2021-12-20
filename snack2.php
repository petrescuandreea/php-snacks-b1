<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>

    <?php
        // Snack 2
        // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $hasDot = strpos($mail, ".");
        $age = $_GET['age'];
        $hasAt = strpos($mail, "@");

    ?>
</head>
<body>
    <div>
        <?php
            if(strlen($name) > 3 && $hasDot !== false && $hasAt !== false && is_numeric($age)) {
                echo "<span> Accesso riuscito </span>";
            } else {
                echo "<span> Accesso negato </span>";
            }
        ?>
    </div>
</body>
</html>