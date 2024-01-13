<main class="container-fluid mb-5">
  <!--BEM-VINDO -->
  <div class="row">
    <div class="col-12 col-lg-11 offset-lg-1 bg-white caixa-branca">
      <div class="row px-4 px-lg-5 py-5">
          <div class="col-12 col-lg-4 py-2 py-xl-4 ps-2 ps-xl-4 text-center">
              <img src="<?=getImagemHome(); ?>" alt="Autor" class="w-100">
          </div>
          <div class="col-12 col-lg-8 ps-4 pt-4">
              <div class="t1 titulo-bv ">Bem-vindo ao meu website</div>
              <div class="p texto-bv mt-4">
                  <?=getTextoAbreviadoAutor(); ?>
              </div>
              <div class="text-end mt-5">
                <a href="autor.php">
                  <button class="saber_mais"></button>
                </a>
              </div>
          </div>
      </div>
    </div>
  </div>
  <!-- ULTIMOS LIVROS -->
  <div class="row mt-5">
    <div class="col-10 mx-auto t1">Últimos Livros</div>
    <div class="col-10 mx-auto p mt-4">
      <?=getTextoUltimosLivrosHome(); ?>
    </div>
  </div>

  <!-- CARDS -->
  <div class="row mt-5 pt-4">
    <div class="col-11 mx-auto d-flex justify-content-center gap-5 flex-wrap">

      <?php foreach(getDestaques() as $d): ?>

        <div class="card" style="width: 18rem;">
          <img src="<?=getImagemLivro($d["id_livro"]);?>" alt="livro1" style="max-height: 380px;">
          <div class="card-body px-4">
            <div class="card-title mt-3"><?=getTituloLivro($d["id_livro"]);?></div>
            <div class="novidade"><?=$d["observacao"];?></div>
            <div class="p mt-1">
            <?=getTextoAbrvLivro($d["id_livro"]);?>
            </div>
            <div class="text-end my-3">
              <form action="livros.php">
                <button class="saber_mais" name="id" value="<?= $d["id_livro"];?>"></button>
              </form>
            </div>
          </div>
        </div>    
      <?php endforeach; ?>  
    </div>
  </div> 
</main>