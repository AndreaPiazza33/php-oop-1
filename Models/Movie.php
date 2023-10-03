<?php
    class MovieData{
        public $published_year;
        public $duration;
        public $genre;

        public function __construct(int $published_year, int $duration, array $genre){
            $this->published_year = $published_year;
            $this->duration = $duration;
            $this->genre = $genre;
        }
        static function introMovie(){
            return "INFO FILM:";
        }

    };
?>