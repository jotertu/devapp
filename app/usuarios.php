<!-- view de administração dos banners-->
<h1>Administração de cadastros</h1>

<form class="container-fruid" action="./app/controls/usuariosController.php" method="POST" novalidate> 
<!--Remover sempre o ../ e manter ./ por conta da leitura do php-->

<div class="row" > 
    <div class="row">

    <div class="form-floating col-md-6 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" minlength="2" required >
    <label for="Seu nome">Seu nome</label>
    </div>

    <div class="form-floating col-md-6 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Seu sobrenome"  minlength="2" required >
    <label for="Seu sobrenome">Seu sobrenome</label>
    </div>

    <div class="form-floating col-md-3 m-md-0 mt-md-3 ">
    <input type="e-mail" class="form-control" id="email" name="email" placeholder="Seu e-mail" maxlength="77" minlength="20" required >
    <label for="Seu e-mail">E-mail</label>
    </div>

    <div class="form-floating col-md-3 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Seu usuário" maxlength="77" minlength="20" required >
    <label for="Seu usuário">Usuário</label>
    </div>

    <div class="form-floating col-md-3 m-md-0 mt-md-3 ">
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua senha" minlength="8" required >
    <label for="Sua senha">Senha</label>
    </div>

    <div class="form-floating col-md-3 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Seu cpf" minlength="8" required >
    <label for="Seu cpf">CPF</label>
    </div>

    <div class="form-floating col-md-2 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="cep" name="cep" placeholder="Seu cep" minlength="6" required >
    <label for="Seu cep">CEP</label>
    </div>

    <div class="form-floating col-md-3 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Seu endereço" required >
    <label for="Seu endereço">Endereço</label>
    </div>

    <div class="form-floating col-md-3 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Seu complemento">
    <label for="Seu complemento">Complemento</label>
    </div>

    <div class="form-floating col-md-4 m-md-0 mt-md-3 ">
    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Seu bairro" required >
    <label for="Seu bairro">Bairro</label>
    </div>

    <div class="m-md-0 mt-md-5">
        <label class="d-none" for="enviar">Cadastrar o usuário</label>
        <input type= "submit" name="enviar" class="btn btn-primary" value="Cadastrar Usuário" id="enviar">
    </div>

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
    </tr>
    <tr>
        <td class="text-center">1</td>
        <td></td>
        <td>Título</td>
        <td>Subtítulo</td>
        <td></td>
    </tr>
</table>
