/*
Javascript
Sandbox

	- proteção do navegador que só executa conteudos do proprio site
	- acesso entre sites necessita de ssl (certificado) / Https

Javascript é uma linguagem de programação que roda no navegador, ela consegue interagir e controlar html/css

É uma linguagem case sensetive, diferencia os caracteres maíusculos de minusculos

linguagem padrão ecma

O javascript não faz nada que uma linguagem server side como o php faz (acesso à bd, criar arquivos do servidor, etc). Exceto utilizando o Node.js

O Javascript em um arquivo .js (externo) deve ser inserido no html usando a tag <script></script>, dentro da tag script no html (interno) e dentro do html usando os disparadores como o onclick="" (inline).

.innerhtml ="" - Le ou escreve dentro do elemento html 

JQUERY - é uma biblioteca de framework de JS.
    let objeto = document.getElementById("logo") = "Novo...";
    $("#logo").html( new text);

*/

    // alert ("js externo") // abre o alerta do navegador

    let objeto = document.getElementById("logo");
    objeto.innerHTML = "Novo texto";

    class DevApp{
        //método construtor 
        constructor()
        {
            console.log("disparado automaticamente");
        }
        /** 
         * Método que carrega os conteúdos na home
         * @param conteudo - string - caminho do conteudo
         * @param onde - string id do elemento onde sera feito o carregamento */

        carregaConteudos( conteudo,onde ){
        
            // o js tem uma função chamada fetch() que permite realizar carregamentos de páginas externas
            fetch(conteudo).then( response => response.text()). then( 
                html => document.querySelector (onde).innerHTML = html
            );

    
    }   
}
    //objeto da classe
    let devApp = new DevApp();

    devApp.carregaConteudos("./public_html/cartao_visitas.html","#tela");
