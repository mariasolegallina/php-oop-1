<?php
class Movie
{
    public $title;
    public $duration;
    public $year;
    public $cast;
    public $director;

    function __construct($_title, $_duration, $_year, $_cast, $_director)
    {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->year = $_year;
        $this->cast = $_cast;
        $this->director = $_director;
    }
}
