<?php

if (!isset($_SESSION['FERRAM_URL_APP'])){
  session_start();
}

  require_once('app/scripts.php');
  require_once($_SESSION['MEDICAO_URL_CONTROLLERS'].'Casa_Controller.php');
  require_once($_SESSION['MEDICAO_URL_CONTROLLERS'].'Pessoa_Controller.php');
  require_once($_SESSION['MEDICAO_URL_CONTROLLERS'].'Registro_Controller.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            getMeta();
            getIcon();
            getCSSCommonFiles();
            getCSSDataTables();
        ?>

        <title><?php echo getAppName();?></title>




<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container d-flex align-items-center flex-column">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Mediçao da Temperatura Corporal</a>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#page-top">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#cadastro">Cadastro</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal" data-target="#modalPessoas" href="">Pessoas</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="app/destroy.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead text-dark text-left">

            <div class="container d-flex flex-column">
                <h3>Comum Congregação:</h3>
                <h4>Endereço:</h4>
            </div>
              
            <div class="container">
                <a style="float: right;" class="rounded js-scroll-trigger" href="#cadastro"><button type="button" class="btn btn-secondary">Cadastrar</button></a></li>
                <button style="float: right; margin-right: 8px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadRegistro">Novo Registro</button>
              </div>

            <div class="container d-flex align-items-center flex-column responsive" style="margin-top: 60px;"> 
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
               <table id="tableRegistros" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>Data</th>
                            <th>Temperatura</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        echo RegistrosController::showTableRegistros();
                      ?>
                    </tbody>  
                  
                  </table>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="cadastro">
            <div class="container align-items-center flex-column">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Cadastro</h2>
                <!-- Icon Divider-->
               
                <form style="margin-top: 30px;" method="POST" id="cadastrar" action="<?php echo $_SESSION['MEDICAO_URL_LOCATION_CONTROLLERS'].'/'.'Pessoa_Controller.php?funcao=cadastrarPessoa' ?>" enctype="multipart/form-data">
                    <div class="form-row">
                      <div class="form-group col-md-9">
                        <label for="inputName">Nome</label>
                        <input type="text" name="nome" class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputTelefone">Telefone</label>
                        <input type="text" name="telefone" class="telefone form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputRua">Rua</label>
                        <input type="text" name="rua" class="form-control">
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputNumero">Número</label>
                        <input type="text" name="numero" class="form-control">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputBairro">Bairro</label>
                        <input type="text" name="bairro" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputCidade">Cidade</label>
                        <input type="text" name="cidade" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="validationCustom05">Comum</label>
                            <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="id_casa" id="id_casa" >
                              <option value="">Selecione uma comum</option>
                                <?php
                                  echo CasasController::getOptionsCasas();
                                ?>
                            </select>
                        </div>
                      
                    </div>
                
                   
                    <button style="padding-right: 30px; padding-left: 30px" type="submit" class="btn btn-primary">OK</button>
                    <button type="submit" class="btn btn-danger">Cancelar</button>
                  </form>
                
            </div>
        </section>

        
        

        <!-- Chamo todos os modais -->
          <?php
            require_once($_SESSION['MEDICAO_URL_MODALS'].'cadRegistro.php');
            require_once($_SESSION['MEDICAO_URL_MODALS'].'editRegistro.php');
            require_once($_SESSION['MEDICAO_URL_MODALS'].'modPessoas.php');
            require_once($_SESSION['MEDICAO_URL_MODALS'].'editPessoa.php');
          ?>
       
       
        


        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Your Website 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        
       <?php 
            getJsCommonFiles();
            getJsDataTables();
            getJqueryMask();
       ?>
    
        
       
        <script>
           $(document).ready(function() {
                $('#example').DataTable({
                    "language": {
                        "url": "language_datatable.json"
                    },
                    responsive: true,
                    dom: 'Bfrtip',
                    buttons: [
                        'print', 'excel', 'pdf'
                    ]
                } );

                $('#tabelaPessoa').DataTable({
                    "language": {
                        "url": "language_datatable.json"
                    },
                    responsive: true,
                    dom: 'Bfrtip',
                    buttons: [
                        'print', 'excel', 'pdf'
                    ]
                } );
            } );

            jQuery("input.telefone")
            .mask("(99) 9999-9999?9")
            .focusout(function (event) {  
                var target, phone, element;  
                target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
                phone = target.value.replace(/\D/g, '');
                element = $(target);  
                element.unmask();  
                if(phone.length > 10) {  
                    element.mask("(99) 99999-999?9");  
                } else {  
                    element.mask("(99) 9999-9999?9");  
                }  
            });


            // Script que retorna os valores no modal de editar registro
            $('#editRegistro').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              var recipient = button.data('whatever')
              var recipienttemperatura = button.data('whatevertemperatura')
              var recipientid_movimento = button.data('whateverid_movimento')

              // Seleciona a opção retornada no select
              $('#id_pessoa_edit option[value="' + recipient + '"]').prop('selected', true);

              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('#id_pessoa_edit').val(recipient)
              modal.find('#temperatura_edit').val(recipienttemperatura)
              modal.find('#id_movimento_edit').val(recipientid_movimento)
            })

            // Script que retorna os valores no modal de editar pessoas
            $('#editPessoas').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              var recipient = button.data('whatever')
              var recipientnome = button.data('whatevernome')
              var recipienttelefone = button.data('whatevertelefone')
              var recipientrua = button.data('whateverrua')
              var recipientnumero = button.data('whatevernumero')
              var recipientbairro = button.data('whateverbairro')
              var recipientcidade = button.data('whatevercidade')
              var recipientid_casa = button.data('whateverid_casa')
              
              // Seleciona a opção retornada no select
             $('#id_casa_edit option[value="' + recipientid_casa + '"]').prop('selected', true);

              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('#id_pessoa_edit').val(recipient)
              modal.find('#nome_edit').val(recipientnome)
              modal.find('#telefone_edit').val(recipienttelefone)
              modal.find('#rua_edit').val(recipientrua)
              modal.find('#numero_edit').val(recipientnumero)
              modal.find('#bairro_edit').val(recipientbairro)
              modal.find('#cidade_edit').val(recipientcidade)
              modal.find('#id_casa_edit').val(recipientid_casa)
            })

            function delPessoa(id){
              $.ajax({
                  method:'POST',
                  url:'<?php echo $_SESSION['MEDICAO_URL_LOCATION_CONTROLLERS'].'/'.'Pessoa_Controller.php?' ?>',
                  dataType: 'text',
                  data: {id_pessoa: id, funcao: 'delPessoa'}
              })
              .done(function(retorno) {
                  retorno = jQuery.parseJSON(String(retorno));
                  if (retorno.sucesso == true){
                      $('tr[linha-pessoa="' + id +'"]').fadeOut();
                  }else{
                      
                  }
              });

          }

          function delRegistro(id){
              $.ajax({
                  method:'POST',
                  url:'<?php echo $_SESSION['MEDICAO_URL_LOCATION_CONTROLLERS'].'/'.'Registro_Controller.php?' ?>',
                  dataType: 'text',
                  data: {id_movimento: id, funcao: 'delRegistro'}
              })
              .done(function(retorno) {
                  retorno = jQuery.parseJSON(String(retorno));
                  if (retorno.sucesso == true){
                      $('tr[linha-movimento="' + id +'"]').fadeOut();
                  }else{
                      
                  }
              });

          }
            
        </script>
    </body>
</html>
