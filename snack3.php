<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>

    <?php
        // Snack 3
        // Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

        $posts = [
            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ]
        
    ?>
</head>
<body>
    <div>
        <?php
            $arrKeys = array_keys($posts);

            for( $i = 0; $i < count($arrKeys); $i++) {
                // var_dump($posts[$arrKeys[$i]]);

                for( $j = 0; $j < count($posts[$arrKeys[$i]]); $j++) {
                    $post = $posts[$arrKeys[$i]][$j];
                    echo "<div>" . $arrKeys[$i] ."<br>" . "<h2>" . $post['title'] . "</h2>" . "<h4>" . $post['author'] . "</h4>" . "<p>" .  $post['text'] . "</p>" . "</div>" . "<br>" . "<br>";
                }
            }
        ?>
    </div>
</body>
</html>