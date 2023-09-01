<?php
class Movie {
    public $title;
    public $runningTime;
    public $year;
    public $genre;

    public function __construct($title, $runningTime, $year, $genre)
    {
       $this->title = $title;
       $this->runningTime = $runningTime;
       $this->year = $year;
       $this->genre = $genre;
       
    }
    public function getMovie() {
        return $this->title.' '.$this->year.' '.$this->runningTime.' '.$this->genre;
    }
}
