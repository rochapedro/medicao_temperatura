<!-- Modal -->
<div class="modal fade bd-example-modal-lg" data-backdrop="static" id="modalPessoas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pessoas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <table id="tabelaPessoa" class="table table-striped table-bordered responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>Comum</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        echo PessoasController::showTablePessoas();
                      ?>
                    </tbody>  
                  
                  </table>
              </div>
              
            </div>
          </div>
        </div>