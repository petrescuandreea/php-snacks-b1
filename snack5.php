<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack5</title>

    <?php
        // Snack 5
        // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
       
        $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, vero ea sed fuga assumenda necessitatibus amet ratione porro recusandae animi, dolore exercitationem, nihil deserunt corporis. Esse accusamus fuga repellat eligendi."

    ?>
</head>
<body>
    <div>
        <?php
            $textArray = explode("." , $text);
            var_dump($textArray);
        ?>
        
    </div>
</body>
</html>