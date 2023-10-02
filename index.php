<?php
    //classe film
    require_once __DIR__.'/Models/Movie.php';

    //lista film
    require_once __DIR__.'/Data/db.php';

    //genere film
    require_once __DIR__.'/Models/Genre.php';

    echo Movie::introMovie();
    echo "<hr>";
    $movies= [];
    $genre= [];
    
    //ciclo per stampare i film della lista
    foreach ($movies_list as $movie) {

        //ciclo per i generi
        foreach ($movie['genre'] as $genre_data) {
            $genre[] = new Genre($genre_data);
        };

        $movies[] = new Movie($movie['title'], $movie['duration'], $movie['language'], $genre);
        var_dump($movie);      
    };
?>