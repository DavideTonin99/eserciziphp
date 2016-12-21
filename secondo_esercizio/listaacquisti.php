<?php
    session_start();

    function print_acquisti() {
        foreach ($_SESSION["acquisti"] as $prodotto => $pezzi) {
            if ($pezzi != "") {
                echo "Prodotto: ".$prodotto.", pezzi: ".$pezzi."<br>";
            }
            else {
                unset($_SESSION["acquisti"][$prodotto]);
            }
        }
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