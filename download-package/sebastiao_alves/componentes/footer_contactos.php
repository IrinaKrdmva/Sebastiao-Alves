<footer class="container-fluid my-5 pt-5 pb-3">
    <div class="row d-none d-lg-block">
      <nav class="col-11 py-4 mx-auto d-flex gap-5 justify-content-center">
      <a href="index.php" class="menus-rodape <?= ($pagina_actual == "home") ? "active" : ""; ?>">Home</a>
        <a href="autor.php" class="menus-rodape <?= ($pagina_actual == "autor") ? "active" : ""; ?>">Autor</a>
        <a href="livros.php" class="menus-rodape <?= ($pagina_actual == "livros") ? "active" : ""; ?>">Livros</a>
        <a href="imprensa.php" class="menus-rodape <?= ($pagina_actual == "imprensa") ? "active" : ""; ?>">Imprensa</a>
        <a href="contactos.php" class="menus-rodape <?= ($pagina_actual == "contactos") ? "active" : ""; ?>">Contactos</a>
      </nav>
    </div>
    <div class="hr col-11 mx-auto pb-1 d-block d-lg-none"><hr></div>
     

    <div class="row d-flex justify-content-center mt-5">
      <div class="col-12 col-lg-6 text-center text-lg-start d-none d-lg-block">
        <div class="row">
          <div class="col-12 t1">Contactos</div>
        </div>
        <div class="row mt-3">
          <div class="col-12 col-lg-5 mt-3 mt-lg-0">
            <div class="titulo-contactos">Morada</div>
            <div>Lorem ipsum dolor sit amet, 12 1234-543 Lorem</div>
          </div>
          <div class="col-12 col-lg mt-3 mt-lg-0">
            <div class="titulo-contactos">Telefone</div>
            <div>+351 123 456 789</div>
          </div>
          <div class="col-12 col-lg mt-3 mt-lg-0">
            <div class="titulo-contactos">E-mail</div>
            <div>lorem@lorem.pt</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="row text-center">
          <div class="col-12 t1">Siga-me nas redes sociais</div>
          <div class="col-12 mt-4 d-flex justify-content-center gap-4">
            <a href="#" class="icone icone-instagram"></a>
            <a href="#" class="icone icone-facebook"></a>
            <a href="#" class="icone icone-linkedin"></a>
          </div>
        </div>
      </div>

      <div class="row d-flex justify-content-center mt-5">
        <div class="col-10">
          <div class="row d-flex justify-content-between">
            <div class="col-12 col-lg-auto text-center text-lg-start ps-">
              <a href="#"><img src="imagens/livroreclamacoes.svg" alt="Livro de reclamações"></a>
              <a href="#" class="ms-5"><img src="imagens/ralc.svg" alt="RALC"></a>
            </div>
            <div class="p col-12 col-lg-5 mt-5 mt-lg-0 text-center">
              Política de Cookies.
              <br>
              Copyright &copy 2023 Grupo MediaMaster. Todos os direitos reservados.
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="js/main.js"></script> 
</body>
</html>