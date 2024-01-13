<main class="container-fluid mb-5">
    <!--CAIXA BRANCA -->
    <div class="foco row">
      <div class="col-12 col-lg-11 offset-lg-1 bg-white caixa-branca ps-lg-5 pt-4 pb-2">
        <div class="row ps-4 ps-lg-5 mt-3 pt-2"> 
          <div class="col-12 menu active">Autor</div>
        </div>
        <div class="row ps-4 ps-lg-5">
          <div class="col-12 t1 mb-2 mt-2">Sobre mim</div>
        </div>
      </div>
    </div>

    <!-- AUTOR -->
    <div class="row mt-5 mt-lg-2 pt-4 pt-lg-0">
      <div class="col-10 mx-auto text-center">
        <img src="<?= getImgemAutor(); ?>" alt="Autor" class="autor-img w-100">
      </div>
      <div class="col-10 mx-auto p mt-5 pt-2 d-none d-lg-block" id="longtxt">
        <?= getTextoAutor(); ?>
      </div>
      <div class="col-10 mx-auto p mt-5 pt-2 d-block d-lg-none" id="shortxt">
        <?= getTextoAbreviadoAutor(); ?>
      </div>
      <div class="col-10 mx-auto mt-5 pt-4 text-center text-lg-start">
        <button id="ver_mais" class="ver-mais d-inline d-lg-none mb-4" onclick="verMais()"></button>
        <br class="d-block d-lg-none">
        <button class="voltar-atras" onclick="window.history.back()"></button>
      </div>
    </div>
  </main>