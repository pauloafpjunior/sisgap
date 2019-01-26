<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sistema de Gestão Administrativa e Pedagógica - SisGAP</title>
  </head>
  <body class="p-3 mb-2 bg-light text-dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-p-3 mb-2 bg-success text-white">
            <a href="<?php echo base_url('inicio') ?>"><img src="http://sisgap.dired.ufla.br/assets/img/sisgap.png" height="20" width="83"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('inicio') ?>">INÍCIO <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">CONTATOS</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="p-3 mb-2 bg-primary text-white row">.bg-success</div>
        <br /><br />
        <div class="container">
            <!---<div class="row">
                <div class="col-12 text-center my-5">
                    <h1 class="display-3 shadow p-3 mb-5 bg-white rounded">Bem-vindo ao <span class="badge badge-dark"><img src="http://sisgap.dired.ufla.br/assets/img/sisgap.png" height="100" width="380"></span></h1>
                    <h3 class="font-italic border border-secondary shadow-lg p-3 mb-5 bg-white rounded">Sistema de Gestão Administrativa e Pedagógica - UFLA</h3>
                </div>
            </div>-->
            <br />
            <div class="container shadow-lg p-3 mb-2 bg-light p-3 mb-2 bg-light border border-primary">
              <div class="">
                  <div class="text-center">
                      <img src="<?php echo base_url('assets/img/logo.png') ?>" class="img-fluid" alt="Responsive image">
                  </div> 
              </div>
            </div>
            <br />
            <div class="row border border-primary shadow-lg p-3 mb-2 bg-light text-white">
                <div class="col-4">
                  <br /><br />
                    <div class="" style="max-width: 18rem;">
                        <div class="card-header font-italic text-write border border-primary shadow-lg p-3 mb-5 bg-success rounded "><strong>Já possui Cadastro?</strong>
                            <div class="card-body p-3 mb-2 bg-light text-dark border border-success">
                              <center><a class="text-primary" href=""><strong>Acesso Administrativo</strong></a></center>
                            </div>
                        </div>
                        <div class="card-header font-italic border border-primary shadow-lg p-3 mb-5 bg-success rounded">
                        <?php echo form_open('Welcome/redireciona'); ?>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><p class="text-write"><strong>Seu CPF</strong></p></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="000.000.000-00">
                                    <small id="emailHelp" class="font-italic text-write">CPF válido e que esteja cadastrado no sistema</small><br />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><p class="text-write"><strong>Senha</strong></p></label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                                </div>
                                <center><button type="submit" class="btn btn-primary">Entrar</button></center>
                            </form>
                            <br />
                            <div class="card-body p-3 mb-2 bg-light text-dark border border-primary">
                              <center><a class="text-primary" href=""><strong>Esqueci minha senha</strong></a></center>
                            </div>
                        </div>
                    </div>
                    <div class="" style="max-width: 18rem;">
                        <div class="card-header font-italic border border-primary shadow-lg p-3 mb-5 bg-success rounded">
                            <p class="text-write"><strong>Não possui cadastro ainda?</strong></p>
                            <div class="card-body p-3 mb-2 bg-light text-dark border border-success">
                                <center><a class="text-primary" href="<?php echo base_url('formulario') ?>"><strong>Quero me cadastrar</strong></a></center>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-8">
                    <!--<div class="jumbotron">
                        <div class="container">
                            <div class="text-center">
                                <img src="http://sisgap.dired.ufla.br/assets/img/ajuda.png" class="img-fluid" alt="Responsive image">
                            </div> 
                        </div>
                    </div>-->
                    <div class="col-12 text-center my-5">
                      <h3 class="font-italic text-write border border-primary shadow-lg p-3 mb-5 bg-success rounded">Mini tutorial do processo</h3>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/ajudaEstado1.jpeg') ?>" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/ajudaEstado2.jpeg') ?>" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/ajudaEstado3.jpeg') ?>" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/ajudaEstado4.jpeg') ?>" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <br />
                    <div class="shadow-lg p-3 mb-5 bg-light rounded text-dark border border-primary" role="alert">
                        Clique na opção desejada abaixo para ver mais informações sobre os editais ou eventos em aberto e já encerrados.
                    </div>
                    <div class="accordion card border border-primary" id="accordionExample">
                        <div class="card btn-sm">
                          <div class="card-header p-3 mb-2 bg-success text-white border border-success" id="headingOne">
                            <h5 class="mb-0">
                              <center><button class="btn btn-link p-3 mb-2 bg-success text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Processos Seletivos para Tutores
                              </button></center>
                            </h5>
                          </div>
                          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card text-center">
                                <div class="card-header">
                                  <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                      <a class="nav-link active" href="#">Em Aberto</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Finalizados</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="card-body">
                                  <p>Teste de Texto aleátorio apenas para checar abas</p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="card btn-sm">
                          <div class="card-header p-3 mb-2 bg-success text-white" id="headingTwo">
                            <h5 class="mb-0">
                              <center><button class="btn btn-link collapsed p-3 mb-2 bg-success text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Processos Seletivos para Cursos de Especialização
                              </button></center>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card text-center">
                                <div class="card-header">
                                  <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                      <a class="nav-link active" href="#">Em Aberto</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Finalizados</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="card">
                                  <p>Teste de Texto aleátorio apenas para checar abas</p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="card btn-sm">
                          <div class="card-header p-3 mb-2 bg-success text-white" id="headingThree">
                            <h5 class="mb-0">
                              <center><button class="btn btn-link collapsed p-3 mb-2 bg-success text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Eventos
                              </button></center>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card text-center">
                                <div class="card-header">
                                  <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                      <a class="nav-link active" href="#">Em Aberto</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Finalizados</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="card-body">
                                  <p>Teste de Texto aleátorio apenas para checar abas</p>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <br /><br />
        <div class="card container p-3 mb-2 bg-light text-dark shadow-lg p-3 mb-5 bg-white rounded border border-primary">
          <div class="card-header p-3 mb-2 bg-success text-white">
            Frase do Dia:
          </div>
          <div class="card-body">
              <blockquote class="blockquote mb-0">
              <p class="font-italic">“Quem conhece a sua ignorância revela a mais profunda sapiência. Quem ignora a sua ignorância vive na mais profunda ilusão.”
                </p>
              <footer class="blockquote-footer"><cite title="Source Title">Lao - Tsé</cite></footer>
            </blockquote>
          </div>
        </div>
        <br />
        <br />
        <footer class="container shadow-lg p-3 mb-5 bg-white rounded border border-primary">
            <div class="footer p-3 mb-2 bg-success text-white">
                <center>
                    <div id="footbar">
                        <div width="100%" align="center">
                          <br />
                            <p align="center" class="text">
                            <strong>Diretoria de Educação a Distância - DIRED</strong><br>
                            <i>Campus Histórico da UFLA - Lavras/MG - 37.200-000</i><br>
                            <strong>Telefone</strong>: (35) 3829-1035<br>					
                            <strong>Email</strong>: editais@dired.ufla.br
                            </p>
                        </div>
                    </div>
                </center>
                <p align="center">
                    Copyright © 2019 - <a href='http://www.dired.ufla.br' target="_blank"><span class="badge badge-dark">DIRED</span></a> - Diretoria de Educação a 
                    Distância
                <br><br>
                </p>
            </div>
        </footer>
    
    <!--By FaBiUsKcomp-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>