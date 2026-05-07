<?php 

trait hasDuration {

    public int $durationMinutes;

    public function getDurationHours() {
        return "il film dura " . $this->durationMinutes/60 . " ore";
    }

}

class Genre {

    public string $name;

    public function __construct($_name) {

        $this->name = $_name;
    }
}

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

$movie1 = new Movie("Odissea", "Tom Holland", "Cristopher Nolan", "19.07.2026", 230, [new Genre("azione"), new Genre("fantasy")]);
$movie2 = new Movie("Spider-man: Brand New Day", "Tom Holland", "Destin Daniel Cretton", "20.!2.2026", 200, [new Genre("fantascienza"), new Genre("azione")]);

echo $movie1->getInfo();
echo "<br>";
echo $movie2->getInfo();
echo "<br>";

echo $movie1->getDurationHours();
echo "<br>";
echo $movie2->getDurationHours();



var_dump($movie1);
var_dump($movie2);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciao</h1>
</body>
</html>