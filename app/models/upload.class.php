<?php 

    /**
     * @version 1.0
     * @author joao.vntertuliano <joao.tertulianoo00@gmail.com.br>
     * @abstract Classe que implementa o envio de arquivos para a pasta do servidor.
     * @license MIT
     */

     class upload
     {
        // propriedades/variáveis das classes
        private $arquivo;
        private $diretorio;
        // métodos da classe
        /**
         * @abstract Método construtor do PHP executado automaticamente. Usados para passar dados à classe.
         * @param $_FILES $enviado - recebe o arquivo enviado
         */

        function __construct( $enviado )
        {   
            // Enviando o arquivo para a propriedade da classe $Arquivo
            $this -> arquivo = $enviado;
            $this -> ChecaTipo();
            
        }
        // Checar se a pasta existe / se não criá-la

        // Checar o tipo de arquivo enviado

        /**
         * 
         * Checar o tipo de 
         * @return void
         */
        private function ChecaTipo():void
        {
            // váriavel local com o tipo do arquivo
            $tipo = $this -> arquivo['type'];

            // Listar os tipos permitidos
            $tiposPermitidos = array("jpg","jpeg","gif","png");

            // A função explode() do PHP quebra uma string usando o caractere informado gerando um array, onde 0 é à esquerda do caractere e 1 à direita
            $tipo = explode("/", $tipo);

            // comparar se é permitido
            if( in_array( $tipo[1], $tiposPermitidos ))
            {   
                // Se o tipo é permitido mandamos para a próxima checagem   
                $this -> ChecaTamanho();
            }
            else
            {
                $this -> MostraTexto("Tipo de arquivo não permitido", 1);
            }

           
        }

        // checar o tamanho do arquivo enviado mb

        private function ChecaTamanho():void
        {
            
        }


        // padronizar o nome dos arquivos enviados

        // salvar o arquivo na pasta de destino

        /**
         * Undocumented function
         * @abstract  $texto método que exibe os textos na tela para debug.
         * @param [type]  @texto/object - texto a ser mostrado
         * @param [INT] $escolha - 1 para usar o echo / 0 para usar o var_dump()
         * @return void 
         */
        public function MostraTexto($texto, $escolha):void
        {   
            switch( $escolha)
            {   
                case 0 :
                    var_dump($texto);
                    break;
                case 1:
                    echo $texto;
                break;
            }
        }
     }

?>