<main class="container-fluid mb-5">
    <!--CAIXA BRANCA-->
    <div class="row foco">
      <div class="col-12 col-lg-11 offset-lg-1 bg-white caixa-branca ps-lg-5 pt-4 pb-2">
        <div class="row ps-4 ps-lg-5 mt-3 pt-2"> 
          <div class="col-12 menu active">Contactos</div>
        </div>
        <div class="row ps-4 ps-lg-5">
          <div class="col-12 t1 mb-2 mt-2">Pode contactar-me através do e-mail ou telefone</div>
        </div>
      </div>
    </div>

    <!--CONTACTOS-->
    <div class="row d-flex justify-content-center mt-5 w-100">
      <div class="col-12 p-0 col-lg-6 text-center">
        <div class="row mt-3 gap-4">
          <div class="col-12 col-lg mt-3 mt-lg-0">
            <div class="titulo-contactos">Telefone</div>
            <div><?=getContactos("telefone"); ?></div>
          </div>
          <div class="col-12 col-lg-5 mt-3 mt-lg-0">
            <div class="titulo-contactos">Morada</div>
            <div><?=getContactos("morada"); ?></div>
          </div>
          <div class="col-12 col-lg mt-3 mt-lg-0">
            <div class="titulo-contactos">E-mail</div>
            <div><?=getContactos("email"); ?></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-center mt-5 w-100">
      <div class="col-4 col-lg-1 mx-auto p-0">
        <hr class="hr-topo">
      </div>
    </div>
    <div class="row d-flex justify-content-center mt-5 w-100">
      <div class="col-12 p-0 col-lg-6 text-center">
        <div class="row">
          <div class="col-12 col-lg mx-auto p-0">
            <div class="titulo-contactos">Horário</div>
            <div>De Segunda à Sexta das 00:00h às 00:00h</div>
          </div>
        </div>
      </div>
        
    </div>

  </main>