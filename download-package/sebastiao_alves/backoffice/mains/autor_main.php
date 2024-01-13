<?php

$form = isset($_GET["imagem"]) && isset($_GET["texto"]);

if($form){
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];

    iduSQL("UPDATE autor SET imagem='$imagem', texto='$texto'");
}

?> 

<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Autor</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <form action="" class="col-12">
            <img src="<?= getImgemAutor(); ?>" alt="Imagem" style="max-width:300px">
            <br><br>
            <label for="imagem">Link da imagem: </label><br>
            <input type="text" name="imagem" value="<?= getImgemAutor(); ?>" required>
            <br><br>
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="gestor">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="texto">Texto: </label><br>
            <textarea name="texto" id="editor" cols="80" rows="7"><?= getTextoAutor(); ?></textarea>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

            <br><br>
            <input type="submit" value="Editar" class="botao_editar">
        </form>
    </div>
</main>

