<?php

$destaques = getDestaques();

?>
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Destaques</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <table>

            <tr>
                <td>ID</td>
                <td>Livro (Imagem)</td>
                <td>Livro (Título)</td>
                <td>Observação</td>
                <td>Ações</td>
            </tr>

            <?php foreach($destaques as $d): ?>

                <tr>
                    <td><?= $d["id"];?></td>
                    <td><img style="max-width:115px" src="<?= getImagemLivro($d["id_livro"]);?>" alt="<?= getImagemLivro($d["id_livro"]);?>"></td>
                    <td><?= getTituloLivro($d["id_livro"]);?></td>
                    <td><?= $d["observacao"];?></td>
                    <td>
                        <form action="destaques_editar.php">
                            <button name="editar" value="<?= $d["id"];?>" class="botao_editar">Editar</button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</main>