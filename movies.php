<?php
class Movie
{
protected $title;
protected $year;
protected $genre;
protected $director;
private $ratedvm;
}

function __construct($_title, $_year, $_genre){
    $this->title = $_title;
    $this->year = $_year;
    $this->genre = $_genre;
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


?>