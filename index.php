<?php
class Movie
{
    public $title;
    public $duration;
    public $year;
    public $cast;
    public $director;
    public $production;
}

$movie1 = new Movie();
$movie1->title = "Poor things";
$movie1->duration = 141;
$movie1->year = 2023;
$movie1->cast = "Emma Stone, Mark Ruffalo, Willem Dafoe";
$movie1->director = "Yorgos Lanthimos";
$movie1->production = "Element Pictures";


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