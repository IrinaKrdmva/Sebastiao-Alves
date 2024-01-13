<?php

$carousel = getTodosCarouseis();

?>
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Carousel (Editar)</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <table>

            <tr>
                <td>ID</td>
                <td>Imagem Desktop</td>
                <td>Imagem Mobile</td>
                <td>Título</td>
                <td>Texto</td>
                <td>Observação</td>
                <td>Link Saber Mais</td>
                <td>Ações</td>
            </tr>

            <?php foreach($carousel as $c): ?>

                <tr>
                    <td><?= $c["id"]; ?></td>
                    <td><img style="max-width: 115px;" src="<?= $c["imagem_desktop"]; ?>" alt="<?= $c["imagem_desktop"]; ?>"></td>
                    <td><img style="max-width: 115px;" src="<?= $c["imagem_mobile"]; ?>" alt="<?= $c["imagem_mobile"]; ?>"></td>
                    <td><?= $c["titulo"]; ?></td>
                    <td><?= $c["texto"]; ?></td>
                    <td><?= $c["observacao"]; ?></td>
                    <td><?= $c["link_saber_mais"]; ?></td>
                    <td>
                        <form action="carousel_editar.php">
                            <button name="editar" value="<?= $c["id"]; ?>" class="botao_editar">Editar</button>
                        </form>
                            <br><br>
                        <form action="carousel_apagar.php">
                            <button name="apagar" value="<?= $c["id"]; ?>" class="botao_apagar">Apagar</button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</main>