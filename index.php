<?php

class Movie {
    public $title;
    public $director;
    public $ratings;
    public $boxoffice;

}


$filmAmericani = new Movie();


$filmAmericani->title = 'Mr. & Mrs. Smith';
$filmAmericani->director = 'Doug Liman';
$filmAmericani->ratings = 6.5;
$filmAmericani->boxoffice = 487.000;   //error if i try to icrement the zero like (487.000.000) !!!
var_dump($filmAmericani);



?>