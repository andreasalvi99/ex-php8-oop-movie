<?php 

class Movie {

    public string $name;
    public string $mainActor;
    public string $director;
    public string $releaseDate;

    public function __construct($_name, $_mainActor, $_director, $_releaseDate) {

        $this->name = $_name;
        $this->mainActor = $_mainActor;
        $this->director = $_director;
        $this->releaseDate = $_releaseDate;

    }

    public function getInfo() {

        return $this->name . " di " . $this->director . " con " . $this->mainActor . " uscirà nelle sale il giorno " . $this->releaseDate;

    }

}

$movie1 = new Movie("Odissea", "Tom Holland", "Cristopher Nolan", "19.07.2026");
$movie2 = new Movie("Spider-man: Brand New Day", "Tom Holland", "Destin Daniel Cretton", "20.!2.2026");

var_dump($movie1);
var_dump($movie2);

// echo $movie1->getInfo();
echo $movie2->getInfo();


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