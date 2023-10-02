<?php
    class Movie{
        public $title;
        public $duration;
        public $language;

        public function __construct(string $title, int $duration, string $language){
            $this->title = $title;
            $this->duration = $duration;
            $this->language = $language;
        }
        static function pubblishMovie(){
            return "INFO FILM:";
        }
    };
?>