<?php

$pagina_atual = 1;
$elementos_por_pagina = 2;

$resultado = selectSQLUnico("SELECT Count(id) as total FROM imprensa");
$total_elementos = intval($resultado["total"]);
$total_paginas = ceil($total_elementos / $elementos_por_pagina);
$total_botoes = 2;

$form = isset($_GET["pagina"]);

if($form){
    $pagina_atual = intval($_GET["pagina"]);
    if($pagina_atual < 1){
      $pagina_atual = 1;
    }
    elseif($pagina_atual > $total_paginas){
      $pagina_atual = $total_paginas;
    }
}

$elementos_a_ignorar = ($pagina_atual-1) * $elementos_por_pagina;

$imprensa = selectSQL("SELECT * FROM imprensa ORDER BY id DESC LIMIT $elementos_por_pagina OFFSET $elementos_a_ignorar");

?>

<main class="container-fluid mb-5">
    <!--CAIXA BRANCA -->
    <div class="row foco pb-4">
      <div class="col-12 col-lg-11 offset-lg-1 bg-white caixa-branca ps-lg-5 pt-4 pb-2">
        <div class="row ps-4 ps-lg-5 mt-3 pt-2 mb-2 mb-lg-0"> 
          <div class="col-12 menu active">Imprensa</div>
        </div>
        <div class="row ps-4 ps-lg-5">
          <div class="col-12 t1 mb-4 mt-2">Últimas notícias</div>
        </div>
      </div>
    </div>

    <!--NOTICIAS-->
    <div class="row">
      <div class="col-12 p-0">
        <?php foreach($imprensa as $d => $i): ?>
          <?php if($d == 0): ?>
            <div class="row caixa-imprensa justify-content-center w-100">
              <div class="col-8 p-0 m-0 text-uppercase">
                <div class="row">
                  <div class="col-12 p-0">
                    <div class="t1 mb-lg-0 mb-3 mt-5 pt-2"><?= $i["titulo"]; ?></div>
                    <hr class="hr-topo col-12 mx-auto my-0"></hr>
                    <div class="imprensa-subt mb-4 mt-2 pt-1 text-end"><?=$i["data_publicacao"]; ?></div>
                    <img class="mb-5 pb-2 w-100" src="<?= $i["imagem"]; ?>" alt="imprensa1">            
                  </div>
                </div>
              </div>
              <div class="col-12 px-0 mx-auto mb-5">
                <div class="row d-flex justify-content-start w-100 p-0 m-0">
                  <div class="p col-10 col-lg-8 mt-5 mx-lg-auto mx-4 px-3 px-lg-0">
                    <?= $i["texto"]; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php else: ?>
            <div class="row justify-content-center w-100">
              <div class="col-8 p-0 m-0 text-uppercase">
                <div class="row">
                  <div class="col-12 p-0">
                    <div class="t1 mb-lg-0 mb-3 mt-5 pt-2"><?= $i["titulo"]; ?></div>
                    <hr class="hr-topo2 col-12 mx-auto my-0"></hr>
                    <div class="imprensa-subt2 mb-4 mt-2 pt-1 text-end">Publicado a <?=$i["data_publicacao"]; ?></div>
                    <img class="mb-5 pb-2 w-100" src="<?= $i["imagem"]; ?>" alt="imprensa1">            
                  </div>
                </div>
              </div>
              <div class="col-12 px-0 mx-auto mb-5">
                <div class="row d-flex justify-content-start w-100 p-0 m-0">
                  <div class="p col-10 col-lg-8 mt-5 mx-lg-auto mx-4 px-3 px-lg-0">
                    <?= $i["texto"]; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>    

        <!--PAGINAÇÃO-->
        <div class="row text-center mt-5 w-100">
          <div class="col-auto d-flex flex-columns flex-nowrap mx-auto">
            <form action="" class="d-flex flex-row gap-4">

              <button name="pagina" value="<?= (($pagina_atual == 1) ? 1 : ($pagina_atual-1)); ?>" class="page-link" id="anterior"></button>
              
              <?php if($pagina_atual - $total_botoes > 1): ?>
                ...
                <?php for($k = $pagina_atual - $total_botoes; $k <= $pagina_atual; $k++): ?>
                  <button name="pagina" value="<?= $k; ?>" class="page-link"><?= $k; ?></button>
                <?php endfor; ?>

              <?php else: ?>

                <?php for($k = 1; $k < $pagina_atual; $k++): ?>
                  <button name="pagina" value="<?= $k; ?>" class="page-link"><?= $k; ?></button>
                <?php endfor; ?>

              <?php endif; ?>

              <button class="page-link" id="active" name="pagina" value="<?= $pagina_atual; ?>"><?= $pagina_atual; ?></button>

              <?php if($pagina_atual + $total_botoes < $total_paginas): ?>

                <?php for($k = $pagina_atual + 1; $k <= $pagina_atual + $total_botoes; $k++): ?>
                  <button name="pagina" value="<?= $k;?>" class="page-link"><?= $k; ?></button>
                <?php endfor; ?>
                ...
              <?php else: ?>

                <?php for($k = $pagina_atual + 1; $k <= $total_paginas; $k++): ?>
                  <button name="pagina" value="<?= $k;?>" class="page-link"><?= $k; ?></button>
                <?php endfor; ?>

              <?php endif; ?>

              <button name="pagina" value="<?= (($pagina_atual == $total_paginas) ? $total_paginas: ($pagina_atual + 1)); ?>" class="page-link" id="seguinte"></button>

            </form>
          </div>        
        </div>
      </div>
    </div>    
  </main>