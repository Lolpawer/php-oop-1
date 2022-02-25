<?php

class Movie {
    public $movieName;
    public $movieGenre;
    public $screeningDate;
    public $availableSeats;

    function __construct(string $_movieName, string $_movieGenre, string $_screeningDate, int $_availableSeats) {
        
        $this->movieName = $_movieName;
        $this->movieGenre = $_movieGenre;
        $this->screeningDate = $_screeningDate;
        $this->availableSeats = $_availableSeats;

    }

    public function movieInformation()  {
        return "The movie " . $this->movieName . " ( " . $this->movieGenre .
        " ) is available in theaters on the following date: " . $this->screeningDate . ", with " .
        $this->availableSeats . " seats available. </br>";
    }
}

$venom = new Movie("Venom", "Action/Comedy", "26/2/2022", 150);
$shutterIsland = new Movie("Shutter Island", "Thriller/Mistery", "1/3/2022", 250);

echo $venom->movieInformation();
echo $shutterIsland->movieInformation();

?>