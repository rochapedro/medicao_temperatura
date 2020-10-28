
<!-- Início do modal que edita os registros -->
<div class="modal fade" id="editRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Registro de Temperatura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form style="margin-top: 30px;" method="POST" id="cadastrar" action="<?php echo $_SESSION['MEDICAO_URL_LOCATION_CONTROLLERS'].'/'.'Registro_Controller.php?funcao=editarRegistros' ?>" enctype="multipart/form-data">
              <div class="form-row" style="padding-bottom: 2rem;">
                <div class="form-group col-md-9">
                  <label for="validationCustom05">Nome</label>
                  <input type="hidden" class="form-control" name="id_movimento_edit" id="id_movimento_edit">
                    <select class="selectpicker form-control" style="border-color:brown" data-live-search="true" name="id_pessoa_edit" id="id_pessoa_edit">
                      <option value="">Selecione um nome</option>
                        <?php
                          echo PessoasController::getOptionsPessoas();
                        ?>
                    </select>
                </div>
                  <div class="form-group col-md-3">
                    <label for="inputAddress">Temperatura</label>
                    <input type="text" class="form-control" name="temperatura_edit" id="temperatura_edit">
                  </div>
              </div>
              <button style="float: right; margin-left: 8px;" type="submit" class="btn btn-primary">Editar</button>
              <button style="float: right;" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          </form>
      </div>
    </div>
  </div>
</div>
<!-- Fim do modal que edita os registros -->