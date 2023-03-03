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
        // permite alterar no objeto esse limite
        public $diretorio = "../../public_html/imagens/banners/" ;
        public $limite = (1024*1024)*2; // (Kbytes) define o limite de 2mb para o arquivo 
        // Listar o tipo permitido
        public $tiposPermitidos = array("jpg","jpeg","gif","png");

        private $nome;

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
            

            // A função explode() do PHP quebra uma string usando o caractere informado gerando um array, onde 0 é à esquerda do caractere e 1 à direita
            $tipo = explode("/", $tipo);

            // comparar se é permitido
            if( in_array( $tipo[1], $this -> tiposPermitidos))
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
        // dica util, caso quiser saber o tamanho do arquivo em mb, é necessário o dividir por 1024 duas vezes
        // caso queira saber o tamanho do arquivo em bites, multiplicalo 
        // para o debug echo $this ->arquivo['size'] / 1024 / 1024; dentro da function checatamanho, ira trazer o valor em mb do arquivo
        

        private function ChecaTamanho():void
        {

            if($this ->arquivo['size'] <= $this -> limite)
            {   
                $this -> GeraNomes();
            }
            else
            {
                $this -> MostraTexto('Arquivo maior que o permitido', 1);
            }
            

        }

        // padronizar o nome dos arquivos enviado
        private function GeraNomes()
        {
            // 20230228092633_100000_nome.jpg
            /*
                date() é uma função do php para manipular datas
                Y - ano em 2023
                y - ano 23
                m - mês
                d - dia 12
                h - hora 12am/pm
                H - 24 horas
                i - minutos
                s - seconds 
            */
            $nome = date("YmdHis_");
            // operador de atribuição e concatena, junta os valores armazenados com o novo valor
            $nome .= rand(1,100000);

            $nome .= "_imagemBanner";

            $nomeOriginal = pathinfo($this->arquivo['name'], PATHINFO_FILENAME);

            $extensão = pathinfo ($this -> arquivo['name'], PATHINFO_EXTENSION); //explore(".",$nomeOriginal);

            $nome .= $nomeOriginal . "." . $extensão;
            
            $this-> nome = $nome;

            $this -> ChecaPasta();

        }
        // salvar o arquivo na pasta de destino
        private function ChecaPasta():void
        {
            if ( !is_dir($this -> diretorio) )
            {
                mkdir( $this -> diretorio, "0777");
            }

            $this -> SalvaArquivo();
        }

        private function SalvaArquivo():bool
        {
            if( move_uploaded_file($this -> arquivo ['tmp_name'], $this->diretorio . $this->nome ) )
            {
                $this->MostraTexto("Arquivo enviado com sucesso!", 1);
                return true;
            }
            else 
            {
                $this->MostraTexto("Problema ao enviar o arquivo", 1);
                return false;
            }

        }
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