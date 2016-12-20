<?php
    session_start();

    function print_reservations() {
        foreach($_SESSION["prenotazioni"] as $evento => $num) {
            if ($evento != "") {
                echo "Evento: ".$evento.", posti: ".$num."<br/>";
            }
            else {
                unset($_SESSION["prenotazioni"][$_SESSION[$evento]]);
            }
        }

    }
?>
<html>
<head>
    <title>Lista prenotazioni</title>
</head>
<body>
    <h1>Lista prenotazioni</h1>
    <?php 
        print_reservations();
    ?>
    <br/>
    <a href="form1.html">Nuova prenotazione</a><br/>
    <a href="resetprenotazioni.php">Reset prenotazioni</a>

</body>
</html>