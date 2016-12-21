<?php
    session_start();

    function print_acquisti() {
        $pezzi_totali = 0;
        $max_pezzi = 0;
        $max_prodotto = "";

        foreach ($_SESSION["acquisti"] as $prodotto => $pezzi) {
            if ($pezzi != "") {
                echo "Prodotto: ".$prodotto.", pezzi: ".$pezzi."<br>";
                $pezzi_totali += $pezzi;
                if ($pezzi > $max_pezzi) {
                    $max_pezzi = $pezzi;
                    $max_prodotto = $prodotto;
                }
            }
            else {
                unset($_SESSION["acquisti"][$prodotto]);
            }
        }
        echo "Pezzi totali: ".$pezzi_totali."<br>";
        echo "Prodotto acquistato maggiormente: ".$max_prodotto.", pezzi: ".$max_pezzi."<br>";

    }

?>

<html>
    <head>
        <title>Lista acquisti</title>
    </head>

    <body>
        <h1>ACQUISTI</h1>
        
        <?php
            print_acquisti()
        ?>

        <a href="form.html"><br>Nuovo acquisto</a><br>
        <a href="resetacquisti.php"><br>Cancella acquisti</a>
    </body>
</html>