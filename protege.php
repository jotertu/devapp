<?php
    session_start(); //permite acessar as variaveis $_SESSION no servidor
    //Bloqueio de acesso caso o usuario não esteja logado
    if(!isset($_SESSION['logado']) || $_SESSION['logado'] == false)
    {
     echo '<script> location.href ="./painel.php?op=0";</script>';
    }

?>