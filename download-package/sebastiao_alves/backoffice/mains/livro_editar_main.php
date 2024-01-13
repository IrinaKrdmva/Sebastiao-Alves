<?php

$editar = isset($_GET["editar"]);

if($editar){
    $id=$_GET["editar"];
    $form = isset($_GET["imagem_livros"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);
    if($form){
        $imagem_livros = $_GET["imagem_livros"];
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];

        iduSQL("UPDATE livros SET imagem_livros='$imagem_livros', titulo='$titulo', texto='$texto' WHERE id=$id"); 
        header("Location: livros.php");
        exit();
    }

    $livro_especifico = getLivro($id);
}
else{
    header("Location: livro.php");
    exit();
}

?>
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Editar livro</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <form action="" class="col-12">
            <input type="hidden" name="editar" value="<?= $_GET["editar"]; ?>">
            <label for="titulo">Titulo: </label><br>
            <input type="text" name="titulo" value="<?= $livro_especifico["titulo"]; ?>" required>
            <br><br>
            <label for="texto">Texto: </label><br>
            <textarea name="texto" id="editor" cols="80" rows="7"><?= $livro_especifico["texto"]; ?></textarea>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

            <br><br>
            <label for="imagem_livros">Imagem para Desktop: </label><br>
            <input type="text" name="imagem_livros" value="<?= $livro_especifico["imagem_livros"]; ?>" required>
            <br><br>
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="gestor">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <input type="submit" value="Editar" class="botao_editar">
        </form>
    </div>
</main>

