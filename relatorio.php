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
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Relatórios</a>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#page-top">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#cadastro">Cadastro</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="app/destroy.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead text-dark text-left">
            <!-- Content Wrapper. Contains page content -->
          <div class="container content-wrapper">
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title"></h3>
                      </div> <!-- /.card-header -->
                      <div class="card-body">
                        <div>
                          <h5 class="card-title">Card title</h5>
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
                                    <select class="selectpicker form-control" data-live-search="true" name="id_comum" id="id_comum" required>
                                      <option value="">Selecione a ferramenta</option>
                                        <?php
                                          echo CasasController::getOptionsCasas();
                                        ?>
                                    </select>
                                </div>
                                
                              </div>
                          
                            
                              <button type="submit" class="btn btn-primary">Cadastrar</button>
                              <button type="submit" class="btn btn-danger">Cancelar</button>
                            </form>
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                          <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                          </div>
                      </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                  </div> <!-- /.col -->
                </div> <!-- /.row -->
              </div> <!-- container-fluid -->
            </section> <!-- /.content -->
          </div> <!-- /.content-wrapper -->
          
          

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
            
        </header>
    
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
       ?>
    
        
        
    </body>
</html>
