<?php
    //classe film
    require_once __DIR__.'/Models/Movie.php';

    //lista film
    require_once __DIR__.'/Data/db.php';

    echo Movie::pubblishMovie();
    echo "<hr>";
    $movies= [];
    
    //ciclo per stampare i film della lista
    foreach ($movies_list as $movie) {
        $movies[] = new Movie($movie['title'], $movie['duration'], $movie['language']);      
    };
    var_dump($movies);
?>