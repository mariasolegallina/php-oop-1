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

$movie1 = new Movie("Poor things", 141, 2023, "Emma Stone, Mark Ruffalo, Willem Dafoe", "Yorgos Lanthimos");
$movie2 = new Movie("Barbie", 115, 2023, "Margot Robbie, Ryan Gosling", "Greta Gerwig");

// movies array
$movies = [$movie1, $movie2];


var_dump($movie1, $movie2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Durata</th>
                <th scope="col">Anno di uscita</th>
                <th scope="col">Cast</th>
                <th scope="col">Regista</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($movies as $movie) {
                echo "
                    <tr>
                        <td>" . $movie->title . "</td>
                        <td>" . $movie->duration . " min.</td>
                        <td>" . $movie->year . "</td>
                        <td>" . $movie->cast . "</td>
                        <td>" . $movie->director . "</td>
                        </tr>
                        ";
            } ?>


        </tbody>
    </table>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>