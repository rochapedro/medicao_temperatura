<?php
  require_once('app/scripts.php');
  require_once('app/controllers/Casa_Controller.php');
  require_once('app/controllers/Cadastro_Controller.php');
  require_once('app/controllers/Registro_Controller.php');
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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container d-flex align-items-center flex-column">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Mediçao da Temperatura Corporal</a>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#page-top">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#cadastro">Cadastro</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="">Pessoas</a></li>
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
                <button style="float: right; margin-right: 8px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Novo Registro</button>
              </div>

            <div class="container d-flex align-items-center flex-column" style="margin-top: 60px;"> 
                
                
   
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>Data</th>
                            <th>Temperatura</th>
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
               
                <form style="margin-top: 30px;" method="POST" id="cadastrar" action="<?php echo $_SESSION['MEDICAO_URL_LOCATION_CONTROLLERS'].'/'.'Cadastro_Controller.php?funcao=cadastrarPessoa' ?>" enctype="multipart/form-data">
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
                            <select class="form-control" data-live-search="true" name="id_comum" id="id_comum" >
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

        <!-- About Section
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container"> -->
                <!-- About Section Heading
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>-->
                <!-- Icon Divider
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>-->
                <!-- About Section Content
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div>
                </div>-->
                <!-- About Section Button
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
                        <i class="fas fa-download mr-2"></i>
                        Free Download!
                    </a>
                </div>
            </div>
        </section> -->
       
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="validationCustom05">Nome</label>
                            <select class="selectpicker form-control" data-live-search="true" name="id_pessoa" id="id_pessoa" required>
                              <option value="">Selecione um nome</option>
                                <?php
                                  echo CadastrosController::getOptionsPessoas();
                                ?>
                            </select>
                        </div>
                          <div class="form-group col-md-3">
                            <label for="inputAddress">Temperatura</label>
                            <input type="text" class="form-control" name="temperatura" id="temperatura">
                          </div>
                        </div>
                        <button style="float: right; margin-left: 8px;" type="submit" class="btn btn-primary">Cadastrar</button>
                        <button style="float: right;" type="submit" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
       
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
            
        </script>
    </body>
</html>
