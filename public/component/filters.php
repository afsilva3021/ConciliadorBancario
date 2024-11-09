<?php
$title = 'Filtro';
$filter = array(
  '',
  '<h4 class="text-promary">Filtro</h4>
      <p>Selecione os filtros para ver os detalhes da conciliação Clique no botão à direita para aplicar os filtros</p>
      <div class=" d-flex justify-content-end">
        <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas1" aria-controls="offcanvas1"><i class="bi bi-chevron-double-down"></i>Ver Filtro</button>
      </div>
      <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvas1" aria-labelledby="offcanvas1Label"    style="width:40%;">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvas1Label">' . $title . '</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
          <form class="row g-4" method="POST" action="">
            <p class="fs-5">Exibir por</p>
              <select class="form-select border-dark" aria-label="Default select example">
                <option value="1">Ambos</option>
                <option value="2">Concilados</option>
                <option value="3">Não Conciliados</option>
              </select>
      
            <div class="mb-4 text-dark border-bottom border-dark">
              <p class="label">CONTAS A RECEVER (SE1)<p>
            </div>

            <div class="col-md-6 ">
              <label for="inputDateEm" class="form-label">DT Emissao de</label>
              <input type="date" class="form-control border-dark" id="inputDateEm">
            </div>
            <div class="col-md-6">
              <label for="inputDateAte" class="form-label">DT Emissao até</label>
              <input type="date" class="form-control border-dark" id="inputDateAte">
            </div>
            <div class="col-md-6">
              <label for="inputVencEm" class="form-label">Venctor real de</label>
              <input type="date" class="form-control border-dark" id="inputVencEm">
            </div>
            <div class="col-md-6">
              <label for="inputVencEm" class="form-label">Venctor real de</label>
              <input type="date" class="form-control border-dark" id="inputVencEm">
            </div>
            <div class="col-md-6">
              <label for="inputPrefxDe" class="form-label">Prefixo de</label>
              <input type="text" class="form-control border-dark" id="inputPrefxDE">
            </div>
            <div class="col-md-6">
              <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
              <input type="text" class="form-control border-dark" id="inputPrefxAte">
            </div>
            <div class="col-md-6">
              <label for="inputPrefxDe" class="form-label">No. Titulo de</label>
              <input type="text" class="form-control border-dark" id="inputPrefxDE">
            </div>
            <div class="col-md-6">
              <label for="inputPrefxAte" class="form-label">No Titulo até Ate</label>
              <input type="text" class="form-control border-dark" id="inputPrefxAte">
            </div>
            <div class="col-md-6">
              <label for="inputPrefxDe" class="form-label">Natureza de</label>
              <input type="text" class="form-control border-dark" id="inputPrefxDE">
            </div>
            <div class="col-md-6">
              <label for="inputPrefxAte" class="form-label">Natureza Ate</label>
              <input type="text" class="form-control border-dark" id="inputPrefxAte">
            </div>
            <div class="col-md-6">
              <label for="inputPrefxDe" class="form-label">Client de</label>
              <input type="text" class="form-control border-dark" id="inputPrefxDE">
            </div>
            <div class="col-md-6">
              <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
              <input type="text" class="form-control border-dark" id="inputPrefxAte">
            </div>
            <div class="col-md-6">
              <label for="inputPrefxDe" class="form-label">Prefixo de</label>
              <input type="text" class="form-control border-dark" id="inputPrefxDE">
            </div>
            <div class="col-md-6">
              <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
              <input type="text" class="form-control border-dark" id="inputPrefxAte">
            </div>
            <div class="col-md-12">
              <label for="inputPrefxDe" class="form-label">Prefixo de</label>
              <input type="text" class="form-control border-dark" id="inputPrefxDE">
            </div>
            <div class="border-bottom border-dark"></div>
            <div class="col-md-6 ">
              <label for="inputDateEm" class="form-label">DT Emissao de</label>
              <input type="date" class="form-control border-dark" id="inputDateEm">
            </div>
            <div class="col-md-6">
              <label for="inputDateAte" class="form-label">DT Emissao até</label>
              <input type="date" class="form-control border-dark" id="inputDateAte">
            </div>
            <div class="col d-flex justify-content-end">
              <button type="submit" class="btn btn-outline-dark me-3">Sair</button>
              <button type="submit" class="btn btn-outline-primary ">Consultar</button>
            </div>
          </form> 
      </div>
    </div>',

  '<h4 class="text-promary">Filtro</h4>
    <p>Selecione os filtros para ver os detalhes da conciliação Clique no botão à direita para aplicar os filtros</p>
    <div class=" d-flex justify-content-end">
      <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas2" aria-controls="offcanvas2"><i class="bi bi-chevron-double-down"></i>Ver Filtro</button>
    </div>
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvas2Label"    style="width:40%;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvas2Label">' . $title . '</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form class="row g-4" method="POST" action="">
          <p class="fs-5">Exibir por</p>
            <select class="form-select border-dark" aria-label="Default select example">
              <option value="1">Ambos</option>
              <option value="2">Concilados</option>
              <option value="3">Não Conciliados</option>
            </select>
    
          <div class="mb-4 text-dark border-bottom border-dark">
            <p class="label">CONTAS A RECEVER (SE1)<p>
          </div>

          <div class="col-md-6 ">
            <label for="inputDateEm" class="form-label">DT Emissao de</label>
            <input type="date" class="form-control border-dark" id="inputDateEm">
          </div>
          <div class="col-md-6">
            <label for="inputDateAte" class="form-label">DT Emissao até</label>
            <input type="date" class="form-control border-dark" id="inputDateAte">
          </div>
          <div class="col-md-6">
            <label for="inputVencEm" class="form-label">Venctor real de</label>
            <input type="date" class="form-control border-dark" id="inputVencEm">
          </div>
          <div class="col-md-6">
            <label for="inputVencEm" class="form-label">Venctor real de</label>
            <input type="date" class="form-control border-dark" id="inputVencEm">
          </div>
          <div class="col-md-6">
            <label for="inputPrefxDe" class="form-label">Prefixo de</label>
            <input type="text" class="form-control border-dark" id="inputPrefxDE">
          </div>
          <div class="col-md-6">
            <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
            <input type="text" class="form-control border-dark" id="inputPrefxAte">
          </div>
          <div class="col-md-6">
            <label for="inputPrefxDe" class="form-label">No. Titulo de</label>
            <input type="text" class="form-control border-dark" id="inputPrefxDE">
          </div>
          <div class="col-md-6">
            <label for="inputPrefxAte" class="form-label">No Titulo até Ate</label>
            <input type="text" class="form-control border-dark" id="inputPrefxAte">
          </div>
          <div class="col-md-6">
            <label for="inputPrefxDe" class="form-label">Natureza de</label>
            <input type="text" class="form-control border-dark" id="inputPrefxDE">
          </div>
          <div class="col-md-6">
            <label for="inputPrefxAte" class="form-label">Natureza Ate</label>
            <input type="text" class="form-control border-dark" id="inputPrefxAte">
          </div>
          <div class="col-md-6">
            <label for="inputPrefxDe" class="form-label">Client de</label>
            <input type="text" class="form-control border-dark" id="inputPrefxDE">
          </div>
          <div class="col-md-6">
            <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
            <input type="text" class="form-control border-dark" id="inputPrefxAte">
          </div>
          <div class="col-md-6">
            <label for="inputPrefxDe" class="form-label">Prefixo de</label>
            <input type="text" class="form-control border-dark" id="inputPrefxDE">
          </div>
          <div class="col-md-6">
            <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
            <input type="text" class="form-control border-dark" id="inputPrefxAte">
          </div>
          <div class="col-md-12">
            <label for="inputPrefxDe" class="form-label">Prefixo de</label>
            <input type="text" class="form-control border-dark" id="inputPrefxDE">
          </div>
          <div class="border-bottom border-dark"></div>
          <div class="col-md-6 ">
            <label for="inputDateEm" class="form-label">DT Emissao de</label>
            <input type="date" class="form-control border-dark" id="inputDateEm">
          </div>
          <div class="col-md-6">
            <label for="inputDateAte" class="form-label">DT Emissao até</label>
            <input type="date" class="form-control border-dark" id="inputDateAte">
          </div>
          <div class="col d-flex justify-content-end fixed-bottom pt-5">
            <button type="submit" class="btn btn-outline-dark me-3">Sair</button>
            <button type="submit" class="btn btn-outline-primary ">Consultar</button>
          </div>
        </form> 
    </div>
  </div>',

  '<h4 class="text-promary">Filtro</h4>
  <p>Selecione os filtros para ver os detalhes da conciliação Clique no botão à direita para aplicar os filtros</p>
  <div class=" d-flex justify-content-end">
    <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas3" aria-controls="offcanvas3"><i class="bi bi-chevron-double-down"></i>Ver Filtro</button>
  </div>
  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvas3" aria-labelledby="offcanvas3Label"    style="width:40%;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvas3Label">' . $title . '</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
      <form class="row g-4" method="POST" action="">
        <p class="fs-5">Exibir por</p>
          <select class="form-select border-dark" aria-label="Default select example">
            <option value="1">Ambos</option>
            <option value="2">Concilados</option>
            <option value="3">Não Conciliados</option>
          </select>
  
        <div class="mb-4 text-dark border-bottom border-dark">
          <p class="label">CONTAS A RECEVER (SE1)<p>
        </div>

        <div class="col-md-6 ">
          <label for="inputDateEm" class="form-label">DT Emissao de</label>
          <input type="date" class="form-control border-dark" id="inputDateEm">
        </div>
        <div class="col-md-6">
          <label for="inputDateAte" class="form-label">DT Emissao até</label>
          <input type="date" class="form-control border-dark" id="inputDateAte">
        </div>
        <div class="col-md-6">
          <label for="inputVencEm" class="form-label">Venctor real de</label>
          <input type="date" class="form-control border-dark" id="inputVencEm">
        </div>
        <div class="col-md-6">
          <label for="inputVencEm" class="form-label">Venctor real de</label>
          <input type="date" class="form-control border-dark" id="inputVencEm">
        </div>
        <div class="col-md-6">
          <label for="inputPrefxDe" class="form-label">Prefixo de</label>
          <input type="text" class="form-control border-dark" id="inputPrefxDE">
        </div>
        <div class="col-md-6">
          <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
          <input type="text" class="form-control border-dark" id="inputPrefxAte">
        </div>
        <div class="col-md-6">
          <label for="inputPrefxDe" class="form-label">No. Titulo de</label>
          <input type="text" class="form-control border-dark" id="inputPrefxDE">
        </div>
        <div class="col-md-6">
          <label for="inputPrefxAte" class="form-label">No Titulo até Ate</label>
          <input type="text" class="form-control border-dark" id="inputPrefxAte">
        </div>
        <div class="col-md-6">
          <label for="inputPrefxDe" class="form-label">Natureza de</label>
          <input type="text" class="form-control border-dark" id="inputPrefxDE">
        </div>
        <div class="col-md-6">
          <label for="inputPrefxAte" class="form-label">Natureza Ate</label>
          <input type="text" class="form-control border-dark" id="inputPrefxAte">
        </div>
        <div class="col-md-6">
          <label for="inputPrefxDe" class="form-label">Client de</label>
          <input type="text" class="form-control border-dark" id="inputPrefxDE">
        </div>
        <div class="col-md-6">
          <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
          <input type="text" class="form-control border-dark" id="inputPrefxAte">
        </div>
        <div class="col-md-6">
          <label for="inputPrefxDe" class="form-label">Prefixo de</label>
          <input type="text" class="form-control border-dark" id="inputPrefxDE">
        </div>
        <div class="col-md-6">
          <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
          <input type="text" class="form-control border-dark" id="inputPrefxAte">
        </div>
        <div class="col-md-12">
          <label for="inputPrefxDe" class="form-label">Prefixo de</label>
          <input type="text" class="form-control border-dark" id="inputPrefxDE">
        </div>
        <div class="border-bottom border-dark"></div>
        <div class="col-md-6 ">
          <label for="inputDateEm" class="form-label">DT Emissao de</label>
          <input type="date" class="form-control border-dark" id="inputDateEm">
        </div>
        <div class="col-md-6">
          <label for="inputDateAte" class="form-label">DT Emissao até</label>
          <input type="date" class="form-control border-dark" id="inputDateAte">
        </div>
        <div class="col d-flex justify-content-end fixed-bottom pt-5" style="height:10%;">
          <button type="submit" class="btn btn-outline-dark me-3">Sair</button>
          <button type="submit" class="btn btn-outline-primary ">Consultar</button>
        </div>
      </form> 
  </div>
</div>',

  '<h4 class="text-promary">Filtro</h4>
<p>Selecione os filtros para ver os detalhes da conciliação Clique no botão à direita para aplicar os filtros</p>
<div class=" d-flex justify-content-end">
  <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas4" aria-controls="offcanvas4"><i class="bi bi-chevron-double-down"></i>Ver Filtro</button>
</div>
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvas4" aria-labelledby="offcanvas4Label"    style="width:40%;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvas4Label">' . $title . '</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
    <form class="row g-4" method="POST" action="">
      <p class="fs-5">Exibir por</p>
        <select class="form-select border-dark" aria-label="Default select example">
          <option value="1">Ambos</option>
          <option value="2">Concilados</option>
          <option value="3">Não Conciliados</option>
        </select>

      <div class="mb-4 text-dark border-bottom border-dark">
        <p class="label">CONTAS A RECEVER (SE1)<p>
      </div>

      <div class="col-md-6 ">
        <label for="inputDateEm" class="form-label">DT Emissao de</label>
        <input type="date" class="form-control border-dark" id="inputDateEm">
      </div>
      <div class="col-md-6">
        <label for="inputDateAte" class="form-label">DT Emissao até</label>
        <input type="date" class="form-control border-dark" id="inputDateAte">
      </div>
      <div class="col-md-6">
        <label for="inputVencEm" class="form-label">Venctor real de</label>
        <input type="date" class="form-control border-dark" id="inputVencEm">
      </div>
      <div class="col-md-6">
        <label for="inputVencEm" class="form-label">Venctor real de</label>
        <input type="date" class="form-control border-dark" id="inputVencEm">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxDe" class="form-label">Prefixo de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
        <input type="text" class="form-control border-dark" id="inputPrefxAte">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxDe" class="form-label">No. Titulo de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxAte" class="form-label">No Titulo até Ate</label>
        <input type="text" class="form-control border-dark" id="inputPrefxAte">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxDe" class="form-label">Natureza de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxAte" class="form-label">Natureza Ate</label>
        <input type="text" class="form-control border-dark" id="inputPrefxAte">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxDe" class="form-label">Client de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
        <input type="text" class="form-control border-dark" id="inputPrefxAte">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxDe" class="form-label">Prefixo de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
        <input type="text" class="form-control border-dark" id="inputPrefxAte">
      </div>
      <div class="col-md-12">
        <label for="inputPrefxDe" class="form-label">Prefixo de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="border-bottom border-dark"></div>
      <div class="col-md-6 ">
        <label for="inputDateEm" class="form-label">DT Emissao de</label>
        <input type="date" class="form-control border-dark" id="inputDateEm">
      </div>
      <div class="col-md-6">
        <label for="inputDateAte" class="form-label">DT Emissao até</label>
        <input type="date" class="form-control border-dark" id="inputDateAte">
      </div>
      <div class="col d-flex justify-content-end fixed-bottom pt-5" style="height:10%;">
        <button type="submit" class="btn btn-outline-dark me-3">Sair</button>
        <button type="submit" class="btn btn-outline-primary ">Consultar</button>
      </div>
    </form> 
</div>
</div>',
  '<h4 class="text-promary">Filtro</h4>
<p>Selecione os filtros para ver os detalhes da conciliação Clique no botão à direita para aplicar os filtros</p>
<div class=" d-flex justify-content-end">
  <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas5" aria-controls="offcanvas5"><i class="bi bi-chevron-double-down"></i>Ver Filtro</button>
</div>
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvas5" aria-labelledby="offcanvas5Label"    style="width:40%;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvas5Label">' . $title . '</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
    <form class="row g-4" method="POST" action="">
      <p class="fs-5">Exibir por</p>
        <select class="form-select border-dark" aria-label="Default select example">
          <option value="1">Ambos</option>
          <option value="2">Concilados</option>
          <option value="3">Não Conciliados</option>
        </select>

      <div class="mb-4 text-dark border-bottom border-dark">
        <p class="label">CONTAS A RECEVER (SE1)<p>
      </div>

      <div class="col-md-6 ">
        <label for="inputDateEm" class="form-label">DT Emissao de</label>
        <input type="date" class="form-control border-dark" id="inputDateEm">
      </div>
      <div class="col-md-6">
        <label for="inputDateAte" class="form-label">DT Emissao até</label>
        <input type="date" class="form-control border-dark" id="inputDateAte">
      </div>
      <div class="col-md-6">
        <label for="inputVencEm" class="form-label">Venctor real de</label>
        <input type="date" class="form-control border-dark" id="inputVencEm">
      </div>
      <div class="col-md-6">
        <label for="inputVencEm" class="form-label">Venctor real de</label>
        <input type="date" class="form-control border-dark" id="inputVencEm">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxDe" class="form-label">Prefixo de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
        <input type="text" class="form-control border-dark" id="inputPrefxAte">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxDe" class="form-label">No. Titulo de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxAte" class="form-label">No Titulo até Ate</label>
        <input type="text" class="form-control border-dark" id="inputPrefxAte">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxDe" class="form-label">Natureza de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxAte" class="form-label">Natureza Ate</label>
        <input type="text" class="form-control border-dark" id="inputPrefxAte">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxDe" class="form-label">Client de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
        <input type="text" class="form-control border-dark" id="inputPrefxAte">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxDe" class="form-label">Prefixo de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="col-md-6">
        <label for="inputPrefxAte" class="form-label">Prefixo Ate</label>
        <input type="text" class="form-control border-dark" id="inputPrefxAte">
      </div>
      <div class="col-md-12">
        <label for="inputPrefxDe" class="form-label">Prefixo de</label>
        <input type="text" class="form-control border-dark" id="inputPrefxDE">
      </div>
      <div class="border-bottom border-dark"></div>
      <div class="col-md-6 ">
        <label for="inputDateEm" class="form-label">DT Emissao de</label>
        <input type="date" class="form-control border-dark" id="inputDateEm">
      </div>
      <div class="col-md-6">
        <label for="inputDateAte" class="form-label">DT Emissao até</label>
        <input type="date" class="form-control border-dark" id="inputDateAte">
      </div>
      <div class="col d-flex justify-content-end fixed-bottom pt-5" style="height:10%;">
        <button type="submit" class="btn btn-outline-dark me-3">Sair</button>
        <button type="submit" class="btn btn-outline-primary ">Consultar</button>
      </div>
    </form> 
</div>
</div>',
);
