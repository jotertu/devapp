<?php

    
class DB
{   
    // Propriedade que realiza a conexão com o banco
    private $conn; 

    function __construct($host, $banco, $usuario, $senha)
    {
        $this -> conectaBanco($host, $banco, $usuario, $senha);
    }

    private function conectaBanco( $host, $banco, $usuario, $senha):void
    {
        try
        {
            // módulo PDO()
        $conexao = new PDO("mysql:host=".$host.";db=".$banco , $usuario , $senha);
        }
        catch(PDOException $erro)
        {
            echo "Erro ao conectar ao banco. Erro: " .$erro->getMessage();
        }
    }
}

?>