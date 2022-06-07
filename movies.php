<?php
class Movie
{
protected $title;
protected $year;
protected $genre;
protected $director;
private $ratedvm;

function __construct($_title, $_year, $_genre, $_director){
    $this->title = $_title;
    $this->year = $_year;
    $this->genre = $_genre;
    $this->director = $_director;
}

public function getTitle(){
    return $this->title;
}

public function getYear(){
   return $this->year;
}

public function getGenre(){
   return $this->genre;
}
public function getDirector(){
   return $this->director;
}

public function setRatedvm($_ratedvm){
   return $this->ratedvm = $_ratedvm;
}



};

?>