<?php
    session_start();

    function print_valutazioni() {
        $max_valutazione = 0;
        $film_preferito = "";
        $somma_valutazioni = 0;

        foreach ($_SESSION["valutazioni"] as $film => $valutazione) {
            echo "Film: ".$film.", valutazione: ".$valutazione."<br>";
            if ($valutazione > $max_valutazione) {
                $max_valutazione = $valutazione;
                $film_preferito = $film;
            }
            $somma_valutazioni += $valutazione;
        }
        echo "Media dei voti: ".$somma_valutazioni/count($_SESSION["valutazioni"])." su 5<br>";
        echo "Film preferito: ".$film_preferito.", valutazione: ".$max_valutazione."<br>";
    }
?>

<html>
    <head>
        <title>Lista film preferiti</title>
    </head>

    <body>
        <h1>LISTA VALUTAZIONI</h1>
        <?php
            print_valutazioni();
        ?>
        <br>
        <a href="form.html">Inserisci nuovo film</a><br>
        <a href="cancellavalutazioni.php">Cancella valutazioni</a>
    </body>
</html>
