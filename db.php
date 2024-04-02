<?php
require './Models/Movie.php';

// instances of Movie
$movie1 = new Movie("Poor things", 141, 2023, "Emma Stone, Mark Ruffalo, Willem Dafoe", "Yorgos Lanthimos");
$movie2 = new Movie("Barbie", 115, 2023, "Margot Robbie, Ryan Gosling", "Greta Gerwig");

// movies array
$movies = [$movie1, $movie2];
