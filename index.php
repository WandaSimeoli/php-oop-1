<?php
require __DIR__.'/Movie.php';

$americanBeauty = new Movie('American Beauty', '2h','1999', 'drama');
$murderOnTheOrientExpress = new Movie('Murder on the Orient Express', '2h', '2017', 'thriller');

echo $americanBeauty->getMovie();
echo '<br>';
echo $murderOnTheOrientExpress->getMovie();