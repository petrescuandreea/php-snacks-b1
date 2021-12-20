<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>

    <?php
        // Snack 4
        // Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

        function getArrayOfIntegers($min, $max, $nItems) {
            // array che sarà popolato dai numeri 
            $array = [];

            // finchè la lunghezza dell'array è inferiore al paramentro nItems
            while(count($array) < $nItems) {
                // genera un numero casuale compreso tra $min e $max 
                $number = rand($min, $max);

                // se il numero generato non è contenuto nell'array 
                if(!in_array($number, $array)) {
                    // lo inserisco 
                    $array[] = $number;
                }
            }

            return $array;
        }
    ?>
</head>
<body>
    <div>
        <?php
            $arrayNumRnd = getArrayOfIntegers(1, 40, 15);
            var_dump($arrayNumRnd);
        ?>
    </div>
</body>
</html>