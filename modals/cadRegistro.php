<div class="modal fade" id="cadRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Registro de Temperatura</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form style="margin-top: 30px;" method="POST" id="cadastrar" action="<?php echo $_SESSION['MEDICAO_URL_LOCATION_CONTROLLERS'].'/'.'Registro_Controller.php?funcao=cadastrarRegistro' ?>" enctype="multipart/form-data">
                        <div class="form-row" style="padding-bottom: 2rem;">
                          <div class="form-group col-md-9">
                            <label for="validationCustom05">Nome</label>
                              <select class="selectpicker form-control" style="border-color:brown" data-show-subtext="true" data-live-search="true" name="id_pessoa" id="id_pessoa">
                                <option value="">Selecione um nome</option>
                                  <?php
                                    echo PessoasController::getOptionsPessoas();
                                  ?>
                              </select>
                          </div>
                            <div class="form-group col-md-3">
                              <label for="inputAddress">Temperatura</label>
                              <input type="text" class="form-control" name="temperatura" id="temperatura">
                            </div>
                            
                            <!-- Input que fornece o id da casa de oração do usuário que está fazendo cadastro, dessa maneira, os registros são efetuados apenas nas casa de oração correspondente ao usuário. -->
                            <input type="hidden" value="<?php $_SESSION['id_casa']; ?>" name="id_casa">

                        </div>
                        <button style="float: right; margin-left: 8px;" type="submit" class="btn btn-primary">Cadastrar</button>
                        <button style="float: right;" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </form>
                </div>
              </div>
            </div>
          </div>