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
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];

    //cadastrar no BD
    require_once("../models/Db.class.php");
    $insereUsuario = new DB ($host, $banco, $usuario, $senha);

    $SQL = "INSERT INTO usuarios (nome, sobrenome, email, senha, cpf, usuario) VALUES ( ?, ?, ?, ?, ?, ?)";

    $valores = array(
        $nome, 
        $sobrenome, 
        $email, 
        $senha, 
        $cpf, 
        $usuario
    );

    if (!$insereUsuario -> rodaSQL($SQL, $valores) )
    {
        echo "problema ao realizar cadastro";
    }
    //Dar uma mensagem ao usuário
?>
