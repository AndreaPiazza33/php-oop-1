<?php
    class Production{
        public $title;
        public $language;
        
        public function __construct(string $title, string $language){
            $this->title = $title;
            $this->language = $language;
        }
    }
?>