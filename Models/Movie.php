<?php
    class Movie{
        public $title;
        public $duration;
        public $language;
        public $genre;

        public function __construct(string $title, int $duration, string $language, array $genre){
            $this->title = $title;
            $this->duration = $duration;
            $this->language = $language;
            $this->genre = $genre;
        }
        static function introMovie(){
            return "INFO FILM:";
        }

    };
?>