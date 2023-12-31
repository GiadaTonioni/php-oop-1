<?php

class Movie {
public $titolo;
public $genere;
public $lingua;
public $trama;

function __construct($titolo, $genere, $lingua, $trama){
    $this->titolo = $titolo;
    $this->genere = $genere;
    $this->lingua = $lingua;
    $this->trama = $trama;
}

public function stampaTitolo(){
    echo "MOVIE DETAILS"."<br/>";
    echo "<strong>Titolo: </strong>";
    echo $this->titolo."<br/>";
    echo "<strong>Genere: </strong>";
    echo $this->genere."<br/>";
    echo "<strong>Lingua: </strong>";
    echo $this->lingua."<br/>";
    echo "<strong>Trama: </strong>";
    echo $this->trama."<br/>";
  }


}

$movie_1 = new Movie('JoJo Rabbit', 'Guerra / Drammatico', 'ENG', '1945, un ragazzino tedesco scopre che sua madre nasconde una giovane ebrea nella loro soffitta. Aiutato dal suo unico amico immaginario, Adolf Hitler, Jojo deve fare i conti con il proprio cieco e infantile nazionalismo');
$movie_2 = new Movie('Mixed by Erry', 'Drammatico / Commedia', 'ITA', 'Negli anni 80, a Napoli, Enrico Erry Frattasio inizia a creare e a vendere musicassette contraffatte per i suoi amici e clienti, allargando in seguito il giro fino a dar vita a un impresa, che si trasforma in un avventura internazionale');

$movie_2->stampaTitolo()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>MOVIE DETAILS</h4>
    <ul>
        <li>Titolo: <?php echo $movie_1->titolo ?></li>
        <li>Genere: <?php echo $movie_1->genere ?></li>
        <li>Lingua: <?php echo $movie_1->lingua ?></li>
        <li>Trama: <?php echo $movie_1->trama ?></li>
    </ul>
</body>
</html>
