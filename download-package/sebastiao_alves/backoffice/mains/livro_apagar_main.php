<?php

$apagar = isset($_GET["apagar"]);

if($apagar){
    $id=$_GET["apagar"];
    $form = isset($_GET["resposta"]);
    
    if($form){
        iduSQL("DELETE FROM livros WHERE id=$id");
        header("Location: livros.php");
        exit();
    }

    $livro_especifico = getLivro($id);
}
else{
    header("Location: livros.php");
    exit();
}

?>
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Apagar livro</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <h3>Tem a certeza que deseja apagar o livro (<?= $livro_especifico["titulo"];?>)?</h3>
        <form action="" class="col-12">
            <input type="hidden" name="apagar" value="<?= $_GET["apagar"];?>">
            <button name="resposta" class="btn btn-success">SIM</button>
            <a href="livros.php">
                <button type="button" class="btn btn-danger">NÃO</button>
            </a>
        </form>
    </div>
</main>

