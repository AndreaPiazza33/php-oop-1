<?php
    class TvSeriesData {
        public $episodes;
        public $season;
        public $genre;
        
        public function __construct(int $episodes, int $season, array $genre,){
            $this->episodes = $episodes;
            $this->season = $season;
            $this->genre = $genre;
        }
        static function introTvSeries(){
            return "INFO TV Series:";
        }
    }
?>