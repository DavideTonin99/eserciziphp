<?php
    session_start();
    if (check_input()):
        $_SESSION["valutazioni"][$_REQUEST["film"]] = $_REQUEST["valutazione"];
    endif;

    function check_input() {
        return $_REQUEST["film"] != "" and $_REQUEST["valutazione"] > 0 and $_REQUEST["valutazione"] < 6;
    }

    function print_valutazione() {
        if (check_input()){
            echo "Film: ".$_REQUEST["film"].", valutazione: ".$_REQUEST["valutazione"]."<br>";
        }
        else {
            echo "Valori inseriti non validi"."<br>";
        }
    }
?>

<html>
    <head>
        <title>Film preferito</title>
    </head>

    <body>
        <h1>FILM PREFERITO</h1>
        <?php
            print_valutazione();
        ?>
        <br>
        <a href="form.html">Inserisci nuovo film</a><br>
        <a href="listafilm.php">Lista film preferiti</a>
    </body>
</html>