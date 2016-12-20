<?php
    session_start();
    if ($_REQUEST["evento"] != "") {
        $_SESSION["prenotazioni"][$_REQUEST["evento"]] += $_REQUEST["num"]; 
    }
    function print_reservation() {
            if ($_REQUEST["evento"] != "") {
                echo "Inseriti ".$_REQUEST["num"]." posti per l'evento: ".$_REQUEST["evento"]."<br/>";
                echo "Posti totali prenotati: ".$_SESSION["prenotazioni"][$_REQUEST["evento"]]."<br/>";
            }
            else {
                echo "Nome evento non valido"."<br>";
            }
    }
?>

<html>
    <head>
        <title>Prenotazione evento</title>
    </head>
    <body>
        <h1>PRENOTAZIONE</h1>
        <?php 
            print_reservation();
        ?>
        <br/>
        <a href="form1.html">Nuova prenotazione</a><br/>
        <a href="listaprenotazioni.php">Lista prenotazioni</a><br>
        <a href="resetprenotazioni.php">Reset prenotazioni</a>

    </body>
</html>