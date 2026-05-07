<?php 

class Genre {

    public string $name;
    public string $description;
    public bool $isForAdults;

    public function __construct($_name, $_description, $_isForAdults) {

        $this->name = $_name;
        $this->description = $_description;
        $this->isForAdults = $_isForAdults;
    }
}

class Movie {

    public string $name;
    public string $mainActor;
    public string $director;
    public string $releaseDate;
    public $genre;

    public function __construct($_name, $_mainActor, $_director, $_releaseDate, Genre $_genre) {

        $this->name = $_name;
        $this->mainActor = $_mainActor;
        $this->director = $_director;
        $this->releaseDate = $_releaseDate;
        $this->genre = $_genre;

    }

    public function getInfo() {

        return $this->name . " di " . $this->director . " con " . $this->mainActor . " uscirà nelle sale il giorno " . $this->releaseDate;

    }

}

$movie1 = new Movie("Odissea", "Tom Holland", "Cristopher Nolan", "19.07.2026", new Genre("azione", "Il genere action comprende film ricchi di combattimenti, inseguimenti, esplosioni e scene ad alta tensione, con protagonisti spesso coinvolti in missioni pericolose o scontri contro nemici potenti.
Praticamente persone che risolvono problemi complessi distruggendo mezza città. Metodo discutibile, ma molto cinematografico.
", false));
$movie2 = new Movie("Spider-man: Brand New Day", "Tom Holland", "Destin Daniel Cretton", "20.!2.2026", new Genre("fantascienza", "Il genere fantascienza comprende film ambientati in futuri tecnologici, universi spaziali o realtà alternative, esplorando temi come il progresso scientifico, l’intelligenza artificiale e il rapporto tra uomo e tecnologia.
In pratica: “e se inventassimo qualcosa che poi ci distrugge?”. Tema sorprendentemente ricorrente nella storia umana.
", false));

var_dump($movie1);
var_dump($movie2);

echo $movie1->getInfo();
echo "<br>";
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