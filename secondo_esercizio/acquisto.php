<?php
    session_start();
    if ($_REQUEST["prodotto"] != "") {
        $_SESSION["acquisti"][$_REQUEST["prodotto"]] = $_REQUEST["pezzi"]; 
    }
    function print_reservation() {
            if ($_REQUEST["prodotto"] != "" and $_REQUEST["pezzi"] != "") {
                echo "Prodotto: ".$_REQUEST["prodotto"].", pezzi: ".$_REQUEST["pezzi"]."<br>";
            }
            else {
                echo "Valori inseriti non validi"."<br>";
            }
    }
?>

<html>
    <head>
        <title>Acquisto prodotto</title>
    </head>
    <body>
        <h1>ACQUISTO</h1>
        <?php 
            print_reservation();
        ?>
        <br/>
        <a href="form.html">Nuovo acquisto</a><br/>
        <a href="listaacquisti.php">Lista acquisti</a><br>

    </body>
</html>