<?php

class Movie {
    public $title;
    public $director;
    public $ratings = 0;
    public $boxoffice;

    function __construct($_title,$_director,$boxoffice){
        $this->title = $_title;
        $this->director = $_director,
        $this->boxoffice = $_boxoffice,
    }

    public function setRatings($voto){
        if( $voto > 8 ){
            $this->ratings = 5;
        } elseif ( $voto > 6){
            $this->ratings = 4;
        } elseif ($voto > 4){
            $this->ratings = 3;
        } elseif ( $voto>2){
            $this->ratings = 2;
        } else {
            $this->ratings = 1;
        }
        return $this->ratings;
    }

};



$filmAmericani = new Movie('Mr. & Mrs. Smith','Doug Liman',487.000);   //error if i try to icrement the zero like (487.000.000) !!!
var_dump($filmAmericani);

$filmAmericani->setRatings(5);
var_dump($filmAmericani);

echo $ratings;


?>
