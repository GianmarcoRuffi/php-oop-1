<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php

require_once __DIR__ . './movies.php';

$myMovies = [
    [
        'title' => 'Alien',
        'year' => '1979',
        'genre' => 'Sci-Fi, Horror',
        'director' => 'Ridley Scott'
    ],
    [
        'title' => 'The Terminator',
        'year' => '1984',
        'genre' => 'Thriller, Sci-Fi',
        'director' => 'James Cameron'
    ],
    [
        'title' => 'Hellraiser',
        'year' => '1987',
        'genre' => 'Horror, Thriller',
        'director' => 'Clive Barker'
    ],
    [
        'title' => 'Police Academy',
        'year' => '1984',
        'genre' => 'Comedy, Action',
        'director' => 'Hugh Wilson'
    ]
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movies</title>
</head>
<body>

<h1>Movie Database</h1>
    
<?php foreach ($myMovies as $key => $value) {

$movie = new Movie($value['title'],$value['year'],$value['genre'],$value['director'],);

}
?>

<h2>Title: <?php echo $movie->getTitle(); ?></h2>
<h5>Year: <?php echo $movie->getYear(); ?></h5>
<h5>Genre: <?php echo $movie->getGenre(); ?></h5>
<h5>Director: <?php echo $movie->getDirector(); ?></h5>


</body>
</html>