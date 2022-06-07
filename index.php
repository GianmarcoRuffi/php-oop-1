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
        'director' => 'Ridley Scott',
        'ratedvm' => 'YES'
    ],
    [
        'title' => 'The Terminator',
        'year' => '1984',
        'genre' => 'Thriller, Sci-Fi',
        'director' => 'James Cameron',
        'ratedvm' => 'NO'
    ],
    [
        'title' => 'Hellraiser',
        'year' => '1987',
        'genre' => 'Horror, Thriller',
        'director' => 'Clive Barker',
        'ratedvm' => 'YES',
    ],
    [
        'title' => 'Police Academy',
        'year' => '1984',
        'genre' => 'Comedy, Action',
        'director' => 'Hugh Wilson',
        'ratedvm' => 'NO',
    ]
    ];

    $movies =[];
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
$movie -> setRatedvm($value['ratedvm']);
// var_dump($movie);


echo '<div>
<h2>Title: ' .$movie->getTitle().'</h2>
<h5>Year: '.$movie->getYear().'</h5>
<h5>Genre: '  .$movie->getGenre().'</h5>
<h5>Director: ' .$movie->getDirector().'</h5>
</div>';

}
?>





</body>
</html>