<!-- 
    
è definita una classe ‘Movie’

all'interno della classe sono dichiarate delle variabili d'istanza

all'interno della classe è definito un costruttore

all'interno della classe è definito almeno un metodo

vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 

-->

<?php

class Movie
{

    public $title;
    public $description;
    public $length;
    public $vote;
    public $info;

    public function __construct($title, $description, $length, $vote)
    {
        $this->title = $title;
        $this->description = $description;
        $this->length = $length;
        $this->vote = $vote;
    }


    public function setVote($vote)
    {
        if ($vote <= 2) {
            $this->info === 'Da non vedere';
        } elseif ($vote >= 3) {
            $this->info === 'Da vedere';
        }
    }


    public function getVote()
    {
        return $this->info;
    }
}


$film = new Movie('Matrix', 'lorem ipsum', '90min', 4);
$film->setVote(4);
var_dump($film);



?>