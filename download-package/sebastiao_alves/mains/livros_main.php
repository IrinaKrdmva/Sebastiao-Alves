<?php

$form = isset($_GET["id"]);

if($form){
  $id = $_GET["id"];
}

?>
<main class="container-fluid mb-5">
    <!--CAIXA BRANCA -->
    <div class="row foco">
      <div class="col-12 col-lg-11 offset-lg-1 bg-white caixa-branca ps-lg-5 pt-4 pb-2">
        <div class="row ps-4 ps-lg-5 mt-3 pt-2"> 
          <div class="col-12 menu active">Livros</div>
        </div>
        <div class="row ps-4 ps-lg-5">
          <div class="col-12 t1 mb-2 mt-2"><?= getTituloLivro($id); ?></div>
        </div>
      </div>
    </div>

    <!-- LIVROS -->
    <div class="row py-lg-2 py-5">
      <div class="col-12 col-lg-3 text-center mx-auto mt-4">
          <img src="<?= getImagemLivro($id); ?>" alt="Livro" class="w-100 livro-img ms-4">
      </div>
      <div class="col-11 col-lg-6 me-lg-5 mt-lg-4 mt-5 ms-4 ps-3">
        <div class="p texto-bv">
          <?= getTextoLivro($id); ?>
        </div>
        <div class="col-11 ms-5 text-end d-lg-block d-none">
          <button class="voltar-atras" onclick="window.history.back()"></button>
        </div>
      </div>
    </div>
  </main>