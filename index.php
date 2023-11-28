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


}


?>