<?php

$imprensa = getTodaImprensa();

?>
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Imprensa (Editar)</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <table>

            <tr>
                <td>ID</td>
                <td>Título</td>
                <td>Data de publicação</td>
                <td>Imagem</td>
                <td>Texto</td>
                <td>Ações</td>
            </tr>

            <?php foreach($imprensa as $i): ?>

                <tr>
                    <td><?= $i["id"]; ?></td>
                    <td><?= $i["titulo"]; ?></td>
                    <td><?= $i["data_publicacao"]; ?></td>
                    <td><img style="max-width: 115px;" src="<?= $i["imagem"]; ?>" alt="<?= $i["imagem"]; ?>"></td>
                    <td><?= getTextoImprensa($i["id"]); ?></td>
                    <td>
                        <form action="imprensa_editar.php">
                            <button name="editar" value="<?= $i["id"]; ?>" class="botao_editar">Editar</button>
                        </form>
                            <br><br>
                        <form action="imprensa_apagar.php">
                            <button name="apagar" value="<?= $i["id"]; ?>" class="botao_apagar">Apagar</button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</main>