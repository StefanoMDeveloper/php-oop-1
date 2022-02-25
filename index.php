<?php

    require_once __DIR__.'./classes/Movie.php';

    $catalogo = [
        new Movies("film-1","lingua-1","anno-1"),
        new Movies("film-2","lingua-2","anno-2"),
        new Movies("film-3","lingua-3","anno-3"),
        new Movies("film-4","lingua-4","anno-4"),
        new Movies("film-5","lingua-5","anno-5"),
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <?php
        foreach($catalogo as $movie){
            echo "<div>
                {$movie->getMovie()}
            </div>";
        }
        ?>
</body>
</html>