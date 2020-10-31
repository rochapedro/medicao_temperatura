<!-- Início do modal que edita as pessoas cadastradas -->
<div class="modal fade bd-example-modal-lg"  id="editPessoas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Pessoas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form style="margin-top: 30px;" method="POST" id="cadastrar" action="<?php echo $_SESSION['MEDICAO_URL_LOCATION_CONTROLLERS'].'/'.'Pessoa_Controller.php?funcao=editarPessoas' ?>" enctype="multipart/form-data">
                    <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="inputName">Nome</label>
                        <input type="hidden" name="id_pessoa_edit" id="id_pessoa_edit" class="form-control">
                        <input type="text" name="nome_edit" id="nome_edit" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputTelefone">Telefone</label>
                        <input type="text" name="telefone_edit" id="telefone_edit" class="telefone form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputRua">Rua</label>
                        <input type="text" name="rua_edit" id="rua_edit" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputNumero">Número</label>
                        <input type="text" name="numero_edit" id="numero_edit" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputBairro">Bairro</label>
                        <input type="text" name="bairro_edit" id="bairro_edit" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCidade">Cidade</label>
                        <input type="text" name="cidade_edit" id="cidade_edit" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="validationCustom05">Comum</label>
                            <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="id_casa_edit" id="id_casa_edit" >
                            <option value="">Selecione uma comum</option>
                                <?php
                                echo CasasController::getOptionsCasas();
                                ?>
                            </select>
                        </div>
                    
                    </div>
                    <input type="hidden" name="id_usuario_edit" id="id_usuario_edit" class="form-control">

                    <button style="float: right; margin-left: 8px;" type="submit" class="btn btn-primary">Editar</button>
                    <button style="float: right;" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fim do modal que edita as pessoas cadastradas -->