<?php
class Movie {
    public $title;
    public $runningTime;
    public $year;
    public $genre;

    public function __construct($title, $runningTime, $year, $myArray = [])
    {
       $this->title = $title;
       $this->runningTime = $runningTime;
       $this->year = $year;
       $this->genre = $myArray;
       
    }
    public function getMovie() {
        return $this->title.' '.$this->year.' '.$this->runningTime;
    }
    public function getArray() {
        return $this->genre;
    }
    public function setArray($myArray) {
        $this->genre = $myArray;
    }
}
