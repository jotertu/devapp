<?php
    require_once("../../config.php");
    if($_POST == null)
    {
        header("Location: ". CAMINHO . "painel.php?op=2");
    }

    //Receber os dados

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $user = $_POST['usuario'];
    $pas = $_POST['senha'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cpf = $_POST['cpf'];


        //cadastrar no BD
    require_once("../models/Db.class.php");
    $insereUsuario = new DB ($host, $banco, $usuario, $senha);

    $SQL = "INSERT INTO usuarios (nome, sobrenome, email, senha, cpf, usuario) VALUES ( ?, ?, ?, ?, ?, ?)";

    $valores = array(
        $nome, 
        $sobrenome, 
        $email, 
        $pas, 
        $cpf, 
        $user
    );

    $executa = $insereUsuario->rodaSQL ($SQL, $valores);

    if ($executa == false )
    {
        // echo ' <script> location.href="painel.php?op=2&erro";</script> ';

        header("Location: ../../painel.php?op=2&erro");
    }
    //Dar uma mensagem ao usuário

    else
    {
        header("Location: ../../painel.php?op=2&ok");
    }
?>
