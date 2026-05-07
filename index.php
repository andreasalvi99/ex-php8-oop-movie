<?php

require_once './Traits/hasDuration.php';
require_once './Models/Genre.php';
require_once './Models/Movie.php';

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
</body>
</html>