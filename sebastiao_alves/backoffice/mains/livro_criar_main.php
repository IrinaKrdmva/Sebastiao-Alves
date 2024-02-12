<?php

$form = isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["imagem_livros"]);

if($form){
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $imagem_livros = $_GET["imagem_livros"];

    iduSQL("INSERT INTO livros (titulo, texto, imagem_livros) VALUES ('$titulo', '$texto', '$imagem_livros')");
    
    header("Location: livros.php");
    exit();
}

?>
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Criar Livro</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <form action="" class="col-12">
            <label for="titulo">Titulo: </label><br>
            <input type="text" name="titulo" required>
            <br><br>
            <label for="texto">Texto: </label><br>
            <textarea name="texto" id="editor" cols="80" rows="7"></textarea>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

            <br><br>
            <label for="imagem_livros">Imagem: </label><br>
            <input type="text" name="imagem_livros" required>
            <br><br>
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="gestor">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <input type="submit" value="Criar" class="botao_criar">
        </form>
    </div>
</main>

