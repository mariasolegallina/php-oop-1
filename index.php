<?php
class Movie
{
    public $title;
    public $duration;
    public $year;
    public $cast;
    public $director;
    public $production;

    function __construct($_title, $_duration, $_year, $_cast, $_director, $_production)
    {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->year = $_year;
        $this->cast = $_cast;
        $this->director = $_director;
        $this->production = $_production;
    }
}

$movie1 = new Movie("Poor things", 141, 2023, "Emma Stone, Mark Ruffalo, Willem Dafoe", "Yorgos Lanthimos", "Element Pictures");
// $movie1->title = "Poor things";
// $movie1->duration = 141;
// $movie1->year = 2023;
// $movie1->cast = "Emma Stone, Mark Ruffalo, Willem Dafoe";
// $movie1->director = "Yorgos Lanthimos";
// $movie1->production = "Element Pictures";


var_dump($movie1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>

</body>

</html>