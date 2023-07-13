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

    $_FILES['nomeCampo']['Indice'] - Super variável para campo do tipo file, ele gera um vetor com os índices abaxo:
      - name - nomeDoArquivoOriginal.ext
      - type - traz o tipo do arquivo enviado
      - tmpo_name - nomeTemp.ext na pasta temp no servidor, imediatamente descartado após a execução do arquivo
      - size - tamanho do arquivo em bytes
      - error - traz o valor 0 se não houver erro no envio

    var_dump() / print_r()  - exibe os dados mesmo de um array em formato
    */

    /*empty() - Função do php que checa se o item (váriavel) está vazio retorna true/1 se estiver vazio */
   require_once("../../config.php");

   if($_POST == null)
   {
    header("Location: " . CAMINHO . "painel.php?op=1"); // Cabeçalho do arquivo redirecionando
   }

   // A controller faz a chamada para o Model//
   if( empty($_FILES['banner01']) && $_FILES['banner01']['tmp_name'] != "")
   {
      // Chamar o model
      // 1 º Upload de imagem
      // importamos a classe
      require_once("../models/upload.class.php");
      
      //instaniamos ou criamos um objeto enviando o arquivo como parametro
      $sobeArquivo = new upload($_FILES['banner01']);
      var_dump($sobeArquivo);
   }

   /*if( empty($_FILES['banner01'] && $_FILES['banner01']['size'] != "")
   {
      require_once("../models/upload.class.php")

      $
   }

   )*/
?>