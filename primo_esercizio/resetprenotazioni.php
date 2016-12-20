<?php
    session_start();
    unset($_SESSION["prenotazioni"]); // per cancellare tutte le prenotazioni
?>
<html>
    <boby>
        <p><center>Prenotazioni cancellate</center></p><br>
        <center><a href="form1.html">Torna alla pagina per le prenotazioni</a></center>
    </boby>
</html>
