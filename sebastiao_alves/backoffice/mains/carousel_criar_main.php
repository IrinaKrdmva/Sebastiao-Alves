<?php

$form = isset($_GET["observacao"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);
$form = $form && isset($_GET["imagem_desktop"]) && isset($_GET["imagem_mobile"]) && isset($_GET["link_saber_mais"]);

if($form){
    $observacao = $_GET["observacao"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $imagem_desktop = $_GET["imagem_desktop"];
    $imagem_mobile = $_GET["imagem_mobile"];
    $link_saber_mais = $_GET["link_saber_mais"];

    iduSQL("INSERT INTO carousel (observacao, titulo, texto, imagem_desktop, imagem_mobile, link_saber_mais) VALUES 
    ('$observacao', '$titulo', '$texto', '$imagem_desktop', '$imagem_mobile', '$link_saber_mais')");
    
    header("Location: carousel.php");
    exit();
}
?>
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Criar carousel</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <form action="" class="col-12">
            <label for="observacao">Observação: </label><br>
            <input type="text" name="observacao" required>
            <br><br>
            <label for="titulo">Titulo: </label><br>
            <input type="text" name="titulo" required>
            <br><br>
            <label for="texto">Texto: </label><br>
            <textarea name="texto" cols="80" rows="7" id="editor"></textarea>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            <br><br>
            <label for="imagem_desktop">Imagem para Desktop: </label><br>
            <input type="text" name="imagem_desktop" required>
            <br><br>
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="gestor">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="imagem_mobile">Imagem para Mobile: </label><br>
            <input type="text" name="imagem_mobile" required>
            <br><br>
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="gestor">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="link_saber_mais">Link do botão "Saber Mais": </label><br>
            <input type="text" name="link_saber_mais" required>
            <br><br>
            <input type="submit" value="Criar" class="botao_criar">
        </form>
    </div>
</main>

