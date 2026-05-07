<?php 

class Movie {

    public name;
    public main_actor;
    public director;
    public release_date;

    public function __construct($_name, $_main_actor, $_director, $_release_date) {

        $this->name = $_name;
        $this->main_actor = $_main_actor;
        $this->director = $_director;
        $this->release_date = $_release_date;

    }

    public function getInfo() {

        return $this->name . "di" . $this->director . "con" . $this->main_actor . "uscirà nelle sale il giorno" . $this->release_date;

    }

}




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