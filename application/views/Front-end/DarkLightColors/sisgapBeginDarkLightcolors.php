<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/sisgapTitle.ico') ?>">
    <!--<link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>"-->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Sistema de Gestão Administrativa e Pedagógica - SisGAP</title>
  </head>
  <body class="p-3 mb-2 bg-light text-dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a href="<?php echo base_url('inicio') ?>"><img src="<?php echo base_url('assets/img/sisgap.png') ?>" height="20" width="83"></a>
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
                <button class="btn btn-default bg-dark text-white">
                    <a href="<?php echo base_url('AdmBegin') ?>" class="text-white"><strong>Acesso Administrativo</strong></a>
                    <a href="<?php echo base_url('inicio') ?>"><img src="<?php echo base_url('assets/img/icone-admaccess.png') ?>" width="30px"></a>
                </button>
            </div>
        </nav>
        <div class="p-3 mb-2 bg-info text-white row" id="linhaGreen">.bg-success</div>
        <div class="container">
            <br />
            <div class="container shadow-lg p-3 mb-2 bg-light p-3 mb-2 bg-light">
              <div class="">
                  <div class="text-center">
                      <img src="<?php echo base_url('assets/img/logo.png') ?>" class="img-fluid" alt="Responsive image">
                  </div> 
              </div>
            </div>
            <br />
            <div class="row text-white">
                <div class="col-sm-4 col-xs-12">
                  <br /><br />
                    <div class="areaLogin" id="areaLogin" style="max-width: 18rem;">
                        <div class="card-header font-italic border border-info shadow-lg p-3 mb-5 bg-light rounded">
                        <?php echo form_open('login'); ?>
                            <form>
                            <p class="text-dark"><strong>Já possui cadastro?</strong></p>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><p class="text-dark"><img src="<?php echo base_url('assets/img/icone-cpf.png') ?>" width="30px"><strong>Seu CPF</strong></p></label>
                                    <input type="text" class="form-control" id="cpf" aria-describedby="emailHelp" placeholder="000.000.000-00" name="CPF" onpaste="return false" value="<?php echo set_value('CPF') ?>">
                                    <small id="emailHelp" class="font-italic text-dark">CPF sem pontos ou traços</small><br />
                                    <?php echo form_error('CPF') ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><p class="text-dark"><img src="<?php echo base_url('assets/img/icone-senha.png') ?>" width="30px"><strong>Senha</strong></p></label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="Senha">
                                    <br/><?php echo form_error('Senha') ?>
                                    <h4 class=""><small class=""><?php echo $this->session->flashdata("error") ?></small></h4>
                                </div>
                                <div class="text-white text-center btn btn-primary btn btn-primary btn-lg btn-block"">
                                  <button type="submit" class="btn btn-primary btn-block"><strong>Entrar</strong> <img src="<?php echo base_url('assets/img/icone-entrar.png') ?>" width="25px"></button>
                                </div>
                            </form>
                            <br />
                            <div class="p-3 mb-2 bg-primary text-white text-center">
                              <center><a class="text-white" href=""><strong><img src="<?php echo base_url('assets/img/icone-esquecisenha.png') ?>" width="25px">Esqueci minha senha</strong></a></center>
                            </div>
                        </div>
                    </div>
                    <div class="areaNlogin" style="max-width: 18rem;">
                        <div class="card-header font-italic border border-info shadow-lg p-3 mb-5 bg-light rounded">
                            <p class="text-dark"><strong>Não possui cadastro ainda?</strong></p>
                            <div class="p-3 mb-2 bg-primary text-dark">
                                <center><a class="text-white" href="<?php echo base_url('formulario') ?>"><strong><img src="<?php echo base_url('assets/img/icone-cadastro.png') ?>" width="25px">Quero me cadastrar </strong></a></center>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-8 col-xs-12">
                  <div class="areaBody">
                      <div class="col-12 text-center my-5">
                        <h3 class="font-italic text-dark shadow-lg p-3 mb-5 bg-light rounded border border-alert"> <img src="<?php echo base_url('assets/img/icone-tutorial.png') ?>" width="40px">Mini tutorial do processo </h3>
                      </div>
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="<?php echo base_url('assets/img/CarrosselImg1.png') ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php echo base_url('assets/img/CarrosselImg2.png') ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php echo base_url('assets/img/CarrosselImg3.png') ?>" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php echo base_url('assets/img/CarrosselImg4.png') ?>" alt="Third slide">
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
                      <div class="shadow-lg p-3 mb-5 bg-light rounded text-dark border border-alert" role="alert">
                          Clique na opção desejada abaixo para ver mais informações sobre os editais ou eventos em aberto e já encerrados.
                      </div>
                      <div class="text-white border border-info text-center bg-secondary" role="alert">
                      <img src="<?php echo base_url('assets/img/icone-abaixo.png') ?>" width="30px"><strong>Processos Seletivos:</strong>
                      </div><br />
                      <div class="text-dark text-center col-xs-12 container">
                        <div class="row">
                          <div class="col-sm-4 col-xs-12 shadow-lg p-3 mb-5 bg-light rounded text-dark border border-info">
                            <img src="<?php echo base_url('assets/img/icone-universidade.png') ?>" width="30px"><a class="text-dark" href="#">Tutores</a>
                          </div>
                          <div class="col-sm-4 col-xs-12 shadow-lg p-3 mb-5 bg-light rounded text-dark border border-info">
                            <img src="<?php echo base_url('assets/img/icone-espec.png') ?>" width="30px"><a class="text-dark" href="#">Especialização</a>
                          </div>
                          <div class="col-sm-4 col-xs-12 shadow-lg p-3 mb-5 bg-light rounded text-dark border border-info">
                            <img src="<?php echo base_url('assets/img/icone-calendario.png') ?>" width="30px"><a class="text-dark" href="#">Eventos</a>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <br />
        <br /><br/><br/><br /><br/>
        <div class="copy">
        <footer class="container border border-info col-xs-12">
            <div class="footer p-3 mb-2 bg-white text-dark">
                <center>
                    <div id="footbar">
                        <div width="100%" align="center">
                          <br />
                            <p align="center" class="text">
                            <strong>Diretoria de Educação a Distância - DIRED</strong><br>
                            <i>Campus Histórico da UFLA - Lavras/MG - 37.200-000</i><br>
                            <img src="<?php echo base_url('assets/img/icone-telefone.png') ?>" width="25px"><strong>Telefone</strong>: (35) 3829-1035 <br>					
                            <img src="<?php echo base_url('assets/img/icone-email.png') ?>" width="25px"><strong>Email</strong>: editais@dired.ufla.br
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
      </div>
    
    <!--By FaBiUsKcomp-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.mask.min.js') ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#cpf").mask("000.000.000-00");
        })
    </script>
  </body>
</html>