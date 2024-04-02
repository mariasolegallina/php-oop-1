<?php
class Movie
{
    public $title;
    public $duration;
    public $genre;
    public $year;
    public $cast;
    public $director;

    function __construct($_title, $_duration, $_genre, $_year, $_cast, $_director)
    {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->cast = $_cast;
        $this->director = $_director;
    }
}
