<?php
    session_start();
    // remove a session do servidor como se o navegador tivesse fechado
    session_destroy();

    header("location: ./painel.php");
?>