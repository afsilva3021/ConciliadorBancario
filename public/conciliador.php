<?php require_once __DIR__ . "/../public/component/header.php";
// require_once "./querys/fk5.php";

?>


<main class="container-fluid pt-4 ms-1">
  <section class="seletor container-fluid ps-5 ms-3">
    <div class="h4 pb-2 mb-4 text-dark border-bottom border-dark">
      <h1>Conciliador</h1>
    </div>
    <label for="configuracaoConciliacao" class="form-label h3 text-primary">Configuração de Conciliação</label>
    <select class="form-select border-dark" id="opcoes"></select>
  </section>
  <div id="secoes">

    <section class="border border mt-4 p-5 rounded-4 ms-5" id="secao-" style="display: none;"></section>

  </div>


</main>


<?php require_once __DIR__ . "/../public/component/footer.php"; ?>