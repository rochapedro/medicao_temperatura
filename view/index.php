<?php

if (!isset($_SESSION['FERRAM_URL_APP'])){
  session_start();
}

  require_once('../app/scripts.php');
  require_once($_SESSION['MEDICAO_URL_CONTROLLERS'].'Casa_Controller.php');
  require_once($_SESSION['MEDICAO_URL_CONTROLLERS'].'Pessoa_Controller.php');
  require_once($_SESSION['MEDICAO_URL_CONTROLLERS'].'Registro_Controller.php');
  require_once ('../app/session.php');

  if(isset($_REQUEST['filter'])){
    $data_inicial = $_GET['data_inicial'];
    $data_final = $_GET['data_final'];
    if(isset($_REQUEST['id_casa'])){
      $id_casa = $_GET['id_casa'];
    } else {
      $id_casa = $_SESSION['id_casa'];
    }
  } else {
  
    $data_inicial = date("Y-m-d");
    $data_final = date("Y-m-d");
    $id_casa = $_SESSION['id_casa'];
  }


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

    </head>
    <body id="page-top">
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Mediçao da Temperatura Corporal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#home">Home</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#cadastro">Cadastro</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#pessoas">Pessoas</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../app/destroy.php">Sair</a></li>
          </ul>
        </div>
      </nav>


      <section class="page-section portfolio" id="home" style="margin-top: 4rem;">
        <div class="container align-items-center flex-column">
          <div class="content-wrapper">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div style="margin: 20px;" class="card">
                    <div class="card-header">
                      <h3 class="card-title">Comum Congregação: <?php echo $_SESSION['casa_oracao']; ?></h3>
                    </div>
                    <div class="card-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <div class="card w-90" style="margin-bottom: 10px;">
                              <div class="card-body">
                                <h5 class="card-title">Filtros</h5>
                                <form method="GET" id="filtro" action="index.php" enctype="multipart/form-data">
                                  <div class="form-row">
                                    <!-- Chamo os filros para o datatable mediante as permissões do usuário -->
                                    <?php 
                                      require_once ($_SESSION['MEDICAO_URL_MENUS'].'filtros.php')
                                    ?>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>  
                        </div>
                        <div class="row">
                          <div class="col">
                            <a style="float: right;" class="rounded js-scroll-trigger" href="#cadastro"><button type="button" class="btn btn-secondary">Cadastrar</button></a></li>
                            <button style="float: right; margin-right:3px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadRegistro">Novo</button>
                          </div>
                        </div>        
                      </div>
                      <table id="tabelaRegistros" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%; margin-top: 100px">
                        <thead>
                          <tr>
                              <th style="width: 20px;">Nome</th>
                              <th>Endereço</th>
                              <th>Telefone</th>
                              <th>Data</th>
                              <th>Temperatura</th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            echo RegistrosController::showTableRegistros($id_casa, $data_inicial, $data_final);
                          ?>
                        </tbody>   
                      </table>   
                    </div>
                  </div>      
                </div>
              </div>    
            </div>    
          </div>
        </div>
      </section>
      
    
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

        <section class="page-section portfolio" id="pessoas">
          <div class="container align-items-center flex-column">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Pessoas</h2>
            <div class="content-wrapper">
              <section class="content">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div style="margin: 20px;" class="card">
                        <div class="card-body">
                          <table id="tabelaPessoa" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
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
                </div>
              </section>
            </div>
          </div>
        </section>

        <!-- Chamo todos os modais -->
          <?php
            require_once($_SESSION['MEDICAO_URL_MODALS'].'cadRegistro.php');
            require_once($_SESSION['MEDICAO_URL_MODALS'].'editRegistro.php');
            require_once($_SESSION['MEDICAO_URL_MODALS'].'editPessoa.php');
          ?>
       

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small></small></div>
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
            $('#tabelaRegistros').DataTable({
                    "language": {
                        "url": "../language/language_datatable.json"
                    },
                    responsive: true,
                    dom: 'Bfrtip',
                    buttons: [
                        'print', 'excel', 'pdf'
                    ]
                } );


                $('#tabelaPessoa').DataTable({
                    "language": {
                        "url": "../language/language_datatable.json"
                    },
                    responsive: true,
                    dom: 'Bfrtip',
                    buttons: [
                        'print', 'excel', 'pdf'
                    ]
                } );
            } );

            $(document).ready(function() {
        $('#example').DataTable();
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
