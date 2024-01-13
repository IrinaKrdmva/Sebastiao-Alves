<?php

$livros = getTodosLivros();

?>
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Livros (Editar)</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <table>

            <tr>
                <td>ID</td>
                <td>Imagem</td>
                <td>Título</td>
                <td>Texto</td>
                <td>Ações</td>
            </tr>

            <?php foreach($livros as $l): ?>

                <tr>
                    <td><?= $l["id"]; ?></td>
                    <td><img style="max-width: 115px;" src="<?= $l["imagem_livros"]; ?>" alt="<?= $l["imagem_livros"]; ?>"></td>
                    <td><?= $l["titulo"]; ?></td>
                    <td><?= getTextoAbrvLivro($l["id"]); ?></td>
                    <td>
                        <form action="livro_editar.php">
                            <button name="editar" value="<?= $l["id"]; ?>" class="botao_editar">Editar</button>
                        </form>
                            <br><br>
                        <form action="livro_apagar.php">
                            <button name="apagar" value="<?= $l["id"]; ?>" class="botao_apagar">Apagar</button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</main>