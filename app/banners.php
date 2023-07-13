<!-- view de administração dos banners-->
<h1>Administração dos banners</h1>

<form class="container-fruid" action="./app/controls/bannersController.php" method="POST" enctype="multipart/form-data" novalidate> 
<!--Remover sempre o ../ e manter ./ por conta da leitura do php-->

<div class="row" > 
    <div class="row">

    <div class="form-floating mb-3 col-md-6 m-md-3 ">
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título da Imagem" maxlength="77" minlength="20" required >
    <label for="titulo">Título Banner 01</label>
    </div>

    <div class="form-floating col-md-4 m-md-3 ">
    <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subtítulo da Imagem" maxlength="77" minlength="20" required >
    <label for="subtitulo">Subtítulo Banner 01</label>
    </div>

    <div class="col-md-6 m-md-3">
        <label for="banner01" class="form-label d-none">Banner 01</label>
        <input class="form-control form-control-" id="banner01" name="banner01" type="file" accept="image/png, image/jpg, image/gif, image/jpeg">
    </div>

    <div class="m-md-3">
        <label class="d-none" for="enviar">Cadastrar os Banners</label>
        <input type= "submit" name="enviar" class="btn btn-primary" value="Cadastrar os Banners" id="enviar">
    </div>
</div>
</div> 
</form>

<table  class="table table-secondary col-md-10 table-striped table-hover align-middle mt-md-5" style="width: 95%; margin-left: 1.5%;">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Banner</th>
        <th scope="col">Título</th>
        <th scope="col">Subtítulo</th>
        <th scope="col">Editar</th>
    </tr>
    <tr>
        <td class="text-center">1</td>
        <td><img src="https://via.placeholder.com/100x80" alt="Miniatura banner 01"></td>
        <td>Título</td>
        <td>Subtítulo</td>
        <td>
            <a href="">
            <i class="bi bi-pencil-square h4 p-md-3"></i></a>
            <a href=""> 
            <i class="bi bi-trash3 h4 p-md-3"></i></a>
        </td>
    </tr>
</table>