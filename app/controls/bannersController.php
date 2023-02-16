<?php

    /*
    Algoritmo que fará o cadastro dos banners

    1 - Os dados são enviados da view para o controller (action / method )

    2 - A controller solicita os processamentos e devolve os resultados
       a. -  Subir a imagem para a pasta do servidor
       b. -  Salvar o caminho da imagem no banco de dados
       c. -  encaminhar de volta para o painel
    3 - A tabela é atualizada

    $_GET[''] e $_POST[''] - Super Variáveis que trazem os dados de acordo com o method enviado

    $_FILES[''] - Super variável para campo do tipo file 

    var_dump() / print_r()  - exibe os dados mesmo de um array em formato
    */

   require_once("../../config.php");

   if($_POST == null)
   {
    header("Location: " . CAMINHO . "painel.php?op=1"); // Cabeçalho do arquivo redirecionando
   }

   var_dump($_POST);
   var_dump($_FILES);

   // A controller faz a chamada para o Model//
   move_uploaded_file($_FILES['banner01']['tmp_name'], CAMINHO.'public_html/imagens/imagem01.jpg');

?>