<?php

    
class DB
{   
    // Propriedade que realiza a conexão com o banco
    private $conn; 

    function __construct($host, $banco, $usuario, $senha)
    {
        $this -> conectaBanco($host, $banco, $usuario, $senha);
    }
    /**
     * Undocumented function
     *
     * @param [string] $host
     * @param [string] $banco
     * @param [string] $usuario
     * @param [string] $senha
     * @return void
     */
    private function conectaBanco( $host, $banco, $usuario, $senha):void
    {
        try
        {
            // módulo PDO()
        $conexao = new PDO("mysql:host=".$host.";db=".$banco , $usuario , $senha);
            // disponibiliando a conexão como propriedade da classe
        $this->conn = $conexao;
        }
        catch(PDOException $erro)
        {
            echo "Erro ao conectar ao banco. Erro: " .$erro->getMessage();
        }

    }
    /**
     * Undocumented function
     *Roda o SQL nas tabelas protegendo com SQL Injection
     * 
     * @param [string] $SQL - SQL a ser executado
     * @param [array] $array - Um item para cada ? enviada
     * @return boolean
     */
    public function rodaSQL($SQL, $array):bool
    {
       
        $insere = $this->conn->prepare($SQL);               

        var_dump($insere->execute($array));
        
        return $insere == true ? true : false;
    }
}

?>