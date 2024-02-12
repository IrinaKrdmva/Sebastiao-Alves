<?php

$editar = isset($_GET["editar"]);
if($editar){

    $id=$_GET["editar"];
    $form = isset($_GET["observacao"]) && isset($_GET["id_livro"]);
    if($form){
        $observacao = $_GET["observacao"];
        $id_livro = $_GET["id_livro"];
        iduSQL("UPDATE destaques SET observacao='$observacao', id_livro='$id_livro' WHERE id=$id");
        header("Location: destaques.php");
        exit();
    }

    $destaque_especifico = getDestaque($id);
    $livros = getMenuLivros();

}
else{
    header("Location: destaques.php");
    exit();
}

?> 
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Destaques</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <form action="" class="col-12">
            <input type="hidden" name="editar" value="<?= $_GET["editar"];?>">
            <label for="observacao">Observação: </label><br>
            <input type="text" name="observacao" value="<?= $destaque_especifico["observacao"];?>" required>
            <br><br>
            <label for="id_livro">Livro a destacar: </label><br>
            <select name="id_livro">

                <?php foreach($livros as $l): ?>
                    <option value="<?= $l["id"];?>"<?= ($l["id"] == $destaque_especifico["id_livro"]) ? "selected" : ""; ?>><?= $l["titulo"];?></option>
                <?php endforeach; ?>

            </select>
            <br><br>
            <input type="submit" value="Editar" class="botao_editar">
        </form>
    </div>
</main>

