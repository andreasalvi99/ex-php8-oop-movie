<?php

class Movie {

    
    public string $name;
    public string $mainActor;
    public string $director;
    public string $releaseDate;
    public int $durationMinutes;
    public array $genres = [];

    use hasDuration;
    
    public function addGenre(Genre $genre) {
        $this->genres[] = $genre;
    }

    public function __construct($_name, $_mainActor, $_director, $_releaseDate, $_durationMinutes, array $_genres) {

        $this->name = $_name;
        $this->mainActor = $_mainActor;
        $this->director = $_director;
        $this->releaseDate = $_releaseDate;
         $this->durationMinutes = $_durationMinutes;
        foreach($_genres as $_genre) {
        $this->addGenre($_genre);
        }

    }

    public function getInfo() {

        return $this->name . " di " . $this->director . " con " . $this->mainActor . " uscirà nelle sale il giorno " . $this->releaseDate;

    }

}