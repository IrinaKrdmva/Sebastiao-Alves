<?php

$menu_livros = getMenuLivros();
$carousel = getTodosCarouseis();

?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sebastião Alves</title>
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!--FONTS-->
  <link rel="stylesheet" href="fontes/IBM_Plex_Sans/stylesheet.css">
  <link rel="stylesheet" href="fontes/Lato/stylesheet.css">
  <!-- CSS LOCAL -->
  <link rel="stylesheet" href="style.css">
  <script src="js/funcoes.js"></script>
</head>
<body>
  <header class="container-fluid p-0 m-0">
    <div class="row w-100 position-absolute z-1 p-0 mx-auto" id="top">
      <div class="col-md-11 col-9 text-sm-center text-uppercase">
        <div class="titulo_principal ms-lg-5 ps-lg-5 ms-2 mb-2">Sebastião Alves</div>       
      </div>
      <div class="col-3 d-md-none align-self-end">
        <button onclick="mudarBotao()" class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="imagens/menu.svg" id="hamburguer"></img>
        </button>
      </div>
      <hr class="hr-topo col-11 mx-auto my-0"></hr>
      <!--NAVBAR-->
      <div class="row text-uppercase p-0 m-0">
        <div class="col-12 p-0">
          <nav class="navbar navbar-expand-md">
            <div class="container-fluid px-0">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="menu navbar-nav w-100 gap-3 me-auto mb-2 mb-lg-0 justify-content-center">
                  <li class="nav-item">
                    <a class="nav-link <?= ($pagina_actual == "home") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($pagina_actual == "autor") ? "active" : ""; ?>" href="autor.php">Autor</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a id="livrosdrop" class="nav-link <?= ($pagina_actual == "livros") ? "active" : ""; ?>" href="livros.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Livros
                    </a>
                    <ul class="dropdown-menu m-0">

                      <?php foreach($menu_livros as $l):?>

                        <li><a class="dropdown-item" href="livros.php?id=<?= $l["id"];?>"><?= $l["titulo"];?></a></li>
                      
                      <?php endforeach; ?>

                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($pagina_actual == "imprensa") ? "active" : ""; ?>" href="imprensa.php">Imprensa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($pagina_actual == "contactos") ? "active" : ""; ?>" href="contactos.php" >Contactos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>  
    <!--CAROUSEL-D-->
    <div class="row w-100 p-0 m-0">
      <div class="col-12 p-0 d-none d-md-block">
        <div id="carousel-d" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators d-flex justify-content-start gap-3">

            <?php foreach($carousel as $i => $c): ?>

              <button type="button" data-bs-target="#carousel-d" data-bs-slide-to="<?= $i; ?>" <?= ($i == 0) ? "class='active' aria-current='true'" : ""; ?> aria-label="Slide 1"></button>
            
            <?php endforeach; ?>

          </div>
          <div class="carousel-inner">

            <?php foreach($carousel as $i => $c): ?>

              <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
                <img src="<?= $c["imagem_desktop"];?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p class="novidade"><?= $c["observacao"];?></p>
                  <h5 class="titulo-banner"><?= $c["titulo"];?></h5>
                  <p class="texto-banner mt-3"><?= $c["texto"];?></p>
                  <a href="<?= $c["link_saber_mais"];?>" target="_blank">
                    <button type="button" class="saber_mais"></button>
                  </a>
                </div>
              </div>

            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
    
    <!--CAROUSEL-M-->
    <div class="row w-100 p-0 m-0">
      <div class="col-12 p-0 d-block d-md-none">
        <div id="carousel-m" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators d-flex justify-content-start gap-3">
            
            <?php foreach($carousel as $i => $c): ?>

              <button type="button" data-bs-target="#carousel-m" data-bs-slide-to="<?= $i; ?>" <?= ($i == 0) ? "class='active' aria-current='true'" : ""; ?> aria-label="Slide 1"></button>

            <?php endforeach; ?>

          </div>

          <div class="carousel-inner">

            <?php foreach($carousel as $i => $c): ?>

              <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
                <img src="<?= $c["imagem_mobile"];?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block d-md-none">
                  <p class="novidade"><?= $c["observacao"];?></p>
                  <h5 class="titulo-banner"><?= $c["titulo"];?></h5>
                  <p class="texto-banner mt-3"><?= $c["texto"];?></p>
                  <a href="<?= $c["link_saber_mais"];?>" target="_blank">
                    <button type="button" class="saber_mais"></button>
                  </a>
                </div>
              </div>

            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
  </header>