<?php

    require_once __DIR__.'./classes/Movie.php';

    $primo = new Movie;
    $secondo = new Movie;

    $primo-> getTitolo= "La città incantata";

    echo var_dump($primo);

?>