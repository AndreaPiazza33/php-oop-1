<?php
class Movie{
    public $title;
    public $duration;
    public $language;

    function __construct($_title, $_duration, $_language){
        $this->title = $_title;
        $this->duration = $_duration;
        $this->language = $_language;
    }
     static function pubblishMovie(){
        return "LE CARATTERISTICHE DEL FILM:";
    }
};
    
?>