<?php
require 'db.php';
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
    <div class="container py-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Durata</th>
                    <th scope="col">Genere</th>
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
                        <td>" . $movie->genre . "</td>
                        <td>" . $movie->year . "</td>
                        <td>" . $movie->cast . "</td>
                        <td>" . $movie->director . "</td>
                        </tr>
                        ";
                } ?>


            </tbody>
        </table>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>