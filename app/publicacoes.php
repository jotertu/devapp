



<h1>Pubicação de noticias</h1>

<form class="container-fruid" action="./app/controls/publicacoesController.php" method="POST" enctype="multipart/form-data" novalidate> 
    <div class="row" > 
        <div class="row">
            <div class="form-floating mb-3 col-md-5 m-md-3 ">
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título da publicação" maxlength="77" minlength="20" required >
            <label for="titulo">Título da Publicação</label>
        </div>

        <div class="form-floating col-md-5 m-md-3">
            <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Titulo do texto" maxlength="77" minlength="20" required >
            <label for="subtitulo">Título do texto</label>
        </div>

        <div style ='height:45%;' class="mb-3 col-md-5 m-md-3 mt-md-1" >
            <label for="texto" class="form-label"></label>
            <textarea style ='height:80%' id="texto" name="texto" placeholder="Texto da publicação" class="form-control" rows="3"></textarea>
        </div>

        <div class="col-md-7 m-md-3 mt-md-2 ">
            <label for="banner01" class="form-label d-none">Imagem da publição</label>
            <input class="form-control form-control-" id="banner01" name="banner01" type="file" accept="image/png, image/jpg, image/gif, image/jpeg">
        </div>

        <div class="m-md-3 col-md-3 mt-md-2 ">
            <label class="d-none" for="enviar">Cadastrar a publicação</label>
            <input type= "submit" name="enviar" class="btn btn-primary" value="Cadastrar a publicação" id="enviar">
        </div>
    </div>
</form>

<table class="table table-secondary col-md-10 table-striped table-hover align-middle mt-md-5" style="width: 93%; margin-left: 2.2%;">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Publicação</th>
        <th scope="col">Titulo da Publicação</th>
        <th scope="col">Editar</th>
    </tr>
    <tr>
        <td class="text-center">1</td>
        <td><img src="https://via.placeholder.com/100x80" alt="Miniatura banner 01"></td>
        <td>Título</td>
        <td>
            <a href="">
            <i class="bi bi-pencil-square h4 p-md-3"></i></a>
            <a href=""> 
            <i class="bi bi-trash3 h4 p-md-3"></i></a>
        </td>
    </tr>
</table>

