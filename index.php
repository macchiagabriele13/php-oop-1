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
    public $genres = [];

    public function __construct($title, $description, $length, $vote, array $genres)
    {
        $this->title = $title;
        $this->description = $description;
        $this->length = $length;
        $this->vote = $vote;
        $this->genres = $genres;
    }


    public function setVote($vote)
    {
        if ($vote <= 2) {
            $this->info = 'Da non vedere';
        } elseif ($vote >= 3) {
            $this->info = 'Da vedere';
        }
    }


    public function getVote()
    {
        return $this->info;
    }


    public function addGenre($genre)
    {
        if (!in_array($genre, $this->genres)) {
            $this->genres[] = $genre;
        }
    }
}

$vote = 4;
$film = new Movie('Matrix', 'lorem ipsum', '90min', 4, ['Comico', 'Drammatico']);
$film->setVote($vote);


$film->addGenre('Dark');


var_dump($film);



/* Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.





Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. */





?>