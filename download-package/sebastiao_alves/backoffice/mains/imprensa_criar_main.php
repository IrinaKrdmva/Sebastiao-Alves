<?php

$form = isset($_GET["titulo"]) && isset($_GET["data_publicacao"]) && isset($_GET["imagem"]) && isset($_GET["texto"]);

if($form){
    $titulo = $_GET["titulo"];
    $data_publicacao = $_GET["data_publicacao"];
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];

    iduSQL("INSERT INTO imprensa (titulo, data_publicacao, imagem, texto) VALUES ('$titulo', '$data_publicacao', '$imagem', '$texto')");
    
    header("Location: imprensa.php");
    exit();
}

?>
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Imprensa Criar</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <form action="" class="col-12">
            <label for="titulo">Titulo: </label><br>
            <input type="text" name="titulo" required>
            <br><br>
            <label for="data_publicacao">Data de Publicação: </label><br>
            <input type="text" name="data_publicacao" required>
            <br><br>
            <label for="imagem">Imagem: </label><br>
            <input type="text" name="imagem" required>
            <br><br>
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="gestor">Gestor de Ficheiros</button>
            </a>
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
            <input type="submit" value="Criar" class="botao_criar">
        </form>
    </div>
</main>

