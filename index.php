<?php
require __DIR__.'/Movie.php';

$americanBeauty = new Movie('American Beauty', '2h','1999');
$americanBeauty->setArray(['drama','thriller']);
$murderOnTheOrientExpress = new Movie('Murder on the Orient Express', '2h', '2017', 'thriller');

$newArray = $americanBeauty->getArray();

echo $americanBeauty->getMovie();
foreach ($newArray as $item) {
    echo "<span>$item</span>";
}
echo '<br>';
echo $murderOnTheOrientExpress->getMovie();