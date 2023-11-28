<?php

// definizione della classe
class Production {
    // proprietà della classe
    public $title;
    public $language;
    public $rating;

    // costruttore 
    function __construct($title, $language, $rating) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }

    // methods
    function get_title() {
        return $this->title;
    }

}

$film1 = new Production('Zoolander', 'English', '3');
$film2 = new Production('Boris', 'Italiano', '5');

echo $film1->get_title();
?>

<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe Production
   => all’interno della classe sono dichiarate delle variabili d’istanza (title, language e rating)
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo (get / set ad esempio)
- vengono istanziati almeno due oggetti Production'e stampati a schermo i valori delle relative proprietà
Bonus
Creare un layout completo per stampare a schermo una lista di movies.
Buon lavoro! -->