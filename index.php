<?php

class Movie {
    public $title;
    public $director;
    public $ratings = 0;
    public $boxoffice;

    function __construct($_title,$_director,$_boxoffice){
        $this->title = $_title;
        $this->director = $_director;
        $this->boxoffice = $_boxoffice;
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
        return array(
            $this->title,
            $this->ratings,
            $this->director,
            $this->boxoffice
        );
    }

};


//-------------First oggetto of Movie    filmAmericani---------------
$filmAmericani = new Movie('Mr. & Mrs. Smith','Doug Liman',487.000);   //error if i try to icrement the zero like (487.000.000) !!!
$vote = $filmAmericani->setRatings(5);
print_r($vote);

for($i = 0; $i < 4; $i++){
    echo  '<br>' . $vote[$i] . '<br>' ;
}

//-------------Second oggetto of Movie filmitaliani-------------
$filmAmericani = new Movie('Dio Perdona..Io No','Giuseppe Colizzi',50.000);   //error if i try to icrement the zero like (487.000.000) !!!
$vote = $filmAmericani->setRatings(9);
print_r($vote);

for($i = 0; $i < 4; $i++){
    echo  '<br>' . $vote[$i] . '<br>' ;
}


?>
