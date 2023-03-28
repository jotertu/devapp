<!-- view de administração dos banners-->
<?php 

require_once("./config.php");
require_once("./app/models/DB.class.php");


    if(isset($_GET['']))
    {
        $SQL = "UPDATE usuarios SET nome = ?, sobrenome = : ?, cpf = : ?, email = : ?, usuario = : ? WHERE idusuario = ?";

        $array = array($post['nome'], $_POST['sobrenome'], $_POST['cpf'], $_POST['email'], $_POST['usuario'], $_POST['usuEdita']);

        $edita = new DB ($host, $banco, $usuario, $senha);

        if ($edita -> rodaSQL($SQL, $array) == true)
        {
            echo '<script>location.href="?op=2&ok"</script>';
        }

        else
        {
            echo '<script>location.href="?op=2&erro"</script>';
        }
    }

    

    if(isset($_GET['edita']))
    {
        //faz a edição

        $pegaDados = new DB ($host, $banco, $usuario, $senha);

        $SQL =" SELECT FROM usuarios WHERE idusuario = ?";

        $array = array($_GET['id']);
        
        $dado = $pegaDados -> buscaDados ($SQL, $array);


    }

    if(isset($_GET['apaga']))
    {
        //faz o delete
       

        $deleta = new DB ($host, $banco, $usuario, $senha);

        $SQL =" DELETE FROM usuarios WHERE idusuario = ?";

        $array =array(
            $_GET["id"]
        );

        if ($deleta->apaga($SQL, $array) == true)
        {
            echo '
            <script>
                location.href="op=2&ok;
            </script>
            ';
        }
        else
        {
            echo '
            <script>
                location.href="op=2&erro";
            </script>
            ';
        }
    }


?>



<h1>Administração de cadastros</h1>

<script defer>

    
    /*
        w3schools - EVENT JAVASCRIPT 
        click - todos
        OnmouseOver - todos - mouse sobre
        OnmouseOut - todos - sai do elemento
        onmousemove - move o cursor
        onfocus - form - clica no campo
        onblur- form - sai do campo
    */

    document.addEventListener("DOMContentLoaded", function()
    {
        document.querySelector("#cep").addEventListener("keypress", function(event)
            {   
            VMasker(document.querySelector("#cep")).maskPattern("99999-999");          
            });
    
        document.querySelector("#cep").addEventListener("blur", function(event)
            {
                let cep = document.querySelector("#cep").value; //lê o campo

                if(cep.length > 8) 
                {
                    fetch("https://viacep.com.br/ws//"+ cep +"/json/").then(
                // Promessa
                // Converte o objeto jason
                    (resposta) => resposta.json()
                    ).then(
                    (resposta) => {
                        document.querySelector("#bairro").value = resposta.bairro;

                        document.querySelector("#endereco").value = resposta.logradouro + " - " + resposta.localidade + " - " + resposta.uf;
                } 
                )
                }     
        });

    
            document.querySelector("#cpf").addEventListener("keypress",function(event)
            {
                VMasker(document.querySelector("#cpf")).maskPattern("999.999.999-99");
            }
            );
    });




    // consultando o viacep


</script>

<form class="container-fruid" action="<?php echo (!isset($_GET['edita'])) ? './app/controls/usuariosController.php': '?op=2editar'; ?>" method="POST"> 
<!--Remover sempre o ../ e manter ./ por conta da leitura do php-->


    <?php if(isset($_GET['edita'])) { ?>

        <!-- Input oculto que armazena o id para a edição-->
        <input type="hidden" name="usuEdita" value="<?php echo @$dado[0]->idusuario; ?>">
    <?php }?>

<div class="row" > 
    <div class="row">

    <div class="form-floating col-md-4 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" minlength="2" required  value="<?php echo @$dado[0]->nome; ?>">
    <label for="Seu nome">Seu nome</label>
    </div>

    <div class="form-floating col-md-4 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Seu sobrenome"  minlength="2" required value="<?php echo @$dado[0]->sobrenome; ?>"  >
    <label for="Seu sobrenome">Seu sobrenome</label>
    </div>

    <div class="form-floating col-md-4 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Seu cpf" maxlength="14" required value="<?php echo @$dado[0]->CPF; ?>">
    <label for="Seu cpf">Seu CPF</label>
    </div>

    <div class="form-floating col-md-3 m-md-0 mt-md-3 ">
    <input type="e-mail" class="form-control" id="email" name="email" placeholder="Seu e-mail" maxlength="77" minlength="20" required value="<?php echo @$dado[0]->email; ?>" >
    <label for="Seu e-mail">Seu E-mail</label>
    </div>

    <div class="form-floating col-md-3 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Seu usuário" maxlength="77" minlength="20" required value="<?php echo @$dado[0]->usuario; ?>" >
    <label for="Seu usuário">Seu Usuário</label>
    </div>

    <div class="form-floating col-md-3 m-md-0 mt-md-3 ">
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua senha" minlength="8" required >
    <label for="Sua senha">Sua Senha</label>
    </div>

    <div class="form-floating col-md-3 m-md-0 mt-md-3 ">
    <input type="password" class="form-control" id="repSenha" name="repSenha" placeholder="Sua senha" minlength="8" required >
    <label for="repSenha">Confirme a sua senha</label>
    </div>

    <div class="form-floating col-md-2 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="cep" name="cep" placeholder="Seu cep" minlength="6" required >
    <label for="Seu cep">Seu CEP</label>
    </div>

    <div class="form-floating col-md-2 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Seu endereço" required value="<?php echo @$dado[0]->endereco; ?>" >
    <label for="Seu endereço">Seu Endereço</label>
    </div>

    <div class="form-floating col-md-2 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="numero" name="numero" placeholder="Seu numero" value="<?php echo @$dado[0]->numero; ?>">
    <label for="Seu complemento">Número</label>
    </div>

    <div class="form-floating col-md-2 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Seu complemento" value="<?php echo @$dado[0]->complemento; ?>">
    <label for="Seu complemento">Complemento</label>
    </div>

    <div class="form-floating col-md-4 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Seu bairro" required value="<?php echo @$dado[0]->bairro; ?>" >
    <label for="Seu bairro">Bairro</label>
    </div>

    <?php if(!isset($_GET['edita'])) { ?>
    <div class="m-md-0 mt-md-5">
        <label class="d-none" for="enviar">Cadastrar o usuário</label>
        <input type= "submit" name="enviar" class="btn btn-primary" value="Cadastrar Usuário" id="enviar">
    </div>
    <?php } else { ?>
    <div class="m-md-0 mt-md-5">
        <label class="d-none" for="alterar">Alterar o usuário</label>
        <input type= "submit" name="alterar" class="btn btn-sucess" value="Alterar Usuário" id="alterar">
    </div>
    <?php } ?>
    
</div>
</div> 
</form>

<table  class="table table-secondary col-md-10 table-striped table-hover align-middle mt-md-5" style="width: 97%; margin-left: 1.5%;">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome Completo</th>
        <th scope="col">Usuário</th>
        <th scope="col">E-mail</th>
        <th scope="col">Endereço</th>
        <th scope="col">Edita</th>
    </tr>

    <?php 
        // rodamos a busca da tabela de usuários
        require_once("./app/models/DB.class.php");
        require_once("./config.php");

        //cria o objeto e abre automaticamente a conexão com o bd
        $busca = new DB($host, $banco, $usuario, $senha);

        $SQL = "SELECT * FROM usuarios ORDER BY idusuario DESC";

        $array = array();
        
        $i = 1;

        foreach( $resultados = $busca -> buscaDados($SQL, $array) as $res)
        {
    ?>

        <tr>
            <td class="text-center"><?php echo $i; $i++;?></td>
            <td>
                <?php echo $res->nome . " " . 
                "$res->sobrenome"; ?></td>
            <td>
                <?php echo $res->usuario;?>
            </td>
            <td>
                <?php echo $res->email; ?>
            </td>

            <td>
            </td>
            <td>
                <a href="?op=2&edita&id=<?php echo $res->idusuario; ?>">
                <i class="bi bi-pencil-square h4 p-md-3"></i></a>
                <a href="?op=2&apaga&id=<?php echo $res->idusuario; ?>">
                <i class="bi bi-trash3 h4 p-md-3"></i></a>
            </td>
        </tr>
            <?php } ?>
</table>
