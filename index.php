<?php

class Movie {
    public $title;
    public $runningTime;
    public $year;

    public function __construct($title, $runningTime, $year)
    {
       $this->title = $title;
       $this->runningTime = $runningTime;
       $this->year = $year;
       
    }

    public function getNameYear() {
        return $this->title.' '.$this->year;
    }
}

$americanBeauty = new Movie('American Beauty', '2h','1999');

echo $americanBeauty->getNameYear();