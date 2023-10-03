<?php
    //classe film
    require_once __DIR__.'/Models/Movie.php';

    //classe serie tv
    require_once __DIR__.'/Models/TvSeries.php';

    //lista film e serie tv
    require_once __DIR__.'/Data/db.php';

    //genere film e serie tv
    require_once __DIR__.'/Models/Genre.php';

    echo MovieData::introMovie();
    echo "<hr>";
    $movies= [];
    $genre= [];
    
    //ciclo per stampare i film della lista
    foreach ($movies_list as $movie) {

        //ciclo per i generi
        foreach ($movie['genre'] as $genre_data) {
            $genre[] = new Genre($genre_data);
        };

        $movies[] = new MovieData($movie['published_year'], $movie['duration'], $genre);
        var_dump($movie);      
    };

    echo TvSeriesData::introTvSeries();
    echo "<hr>";
    $TvSeries= [];

    //ciclo per stampare le serie tv della lista
    foreach ($TvSeries_list as $serie) {

        foreach($serie['genre'] as $genre_data) {
            $genre[] = new Genre($genre_data);
        };
        $TvSeries[] = new TvSeriesData($serie['episodes'], $serie['season'], $genre);
        var_dump($serie);
    };
?>