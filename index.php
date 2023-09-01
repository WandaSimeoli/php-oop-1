<?php

class Movie {
    public $title;
    public $runningTime;
    public $year;

    public function getNameYear() {
        return $this->title.' '.$this->year;
    }
}

$americanBeauty = new Movie();
$americanBeauty->title = 'American Beauty';
$americanBeauty->runningTime = '2h';
$americanBeauty->year = '1999';

echo $americanBeauty->getNameYear();