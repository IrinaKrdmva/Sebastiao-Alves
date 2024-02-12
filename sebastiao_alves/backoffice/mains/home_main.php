<?php

$form = isset($_GET["imagem_bv"]) && isset($_GET["texto_ultimos_livros"]);

if($form){
    $imagem_bv = $_GET["imagem_bv"];
    $texto_ultimos_livros = $_GET["texto_ultimos_livros"];

    iduSQL("UPDATE home SET imagem_bv='$imagem_bv', texto_ultimos_livros='$texto_ultimos_livros'");
}

?> 
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Home</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <form action="" class="col-12">
            <img src="<?= getImgemAutor(); ?>" alt="Imagem" style="max-width:300px;">
            <br><br>
            <label for="imagem_bv">Link da imagem: </label><br>
            <input type="text" name="imagem_bv" value="<?= getImagemHome();?>" required>
            <br><br>
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="gestor">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="texto_ultimos_livros">Texto "Ultimos Livros": </label><br>
            <textarea name="texto_ultimos_livros" id="editor" cols="80" rows="7"><?= getTextoUltimosLivrosHome();?></textarea>
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

