// linha de comentário
/*
    JavaScript

    sandbox

	- proteção do navegador que só executa conteúdos do próprio site
	- acesso entre sites necessita de SSL / https

	Javascript - .js - linguagem de programação de scripts que roda no navegador, ela consegue interagir e controlar html/css.

	É uma linguagem case sensitive, diferencia as letras maísculos de minúsculos.

    O javascript não faz nada que uma linguagem server side como o PHP faz ( acesso à BD, criar arquivos no servidor, etc ). Exceto usando o Node.js

    O javascript em um arquivo .js (externo) deve ser inserido no html usando a tag <script></script>, dentro da tag script no html (interno) e dentro do elemento html usando os disparadores como o onclick="" (inline).

    document.getElementById() - busca no html um elemento por seu id
    
    alert("Js Externo"); // abre o alerta do navegador

    .innerHTML = "" - propriedade que lê ou escreve dentro do elemento HTML

    jQuery - é uma bilioteca ou framework de Js.
        document.getElementById("logo").innerHTML = "Novo..";
        $("#logo").html( "Novo..");

*/

  class DevApp
  {

    // método construtor é executado automaticamente
    constructor()
    {
        console.log("disparado automaticamente");
    }

    /**
     *  Método que carrega os conteúdos na home
     *  @param conteudo - string - caminho do conteúdo
     *  @param onde - string - id do elemento onde será feito o 
     *  carregamento
     * 
     */
    carregaConteudos( conteudo, onde )
    {
        // o js tem uma função chamada fetch() que permite realizar carregamentos de páginas externas
        fetch( conteudo ).then( 
            // recebemos a resposta da requisição em formato texto
            response => response.text()
        ). then(
            html => document.querySelector( onde ).innerHTML = html
        );
    }

  }

  // objeto da classe
  let devApp = new DevApp();

  devApp.carregaConteudos( "./public_html/cartao_visitas.html", "#tela" );


    



