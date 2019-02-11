
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
  <body>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-p-3 mb-2 bg-primary text-white">
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
                <a class="nav-link text-white" href="">CONTATOS</a>
              </li>
            </ul>
          </div>
          <a href="<?php echo base_url('inicio') ?>"><button class="btn btn-success" type="button" href="<?php echo base_url('inicio') ?>">Sair <img src="<?php echo base_url('assets/img/icone-cancel.png') ?>" width="30px"></button></a>
        </nav>
        <br /><br />
        <div class="p-3 mb-2 bg-success text-white row"></div>
        <br /><br />
        <div class="container shadow-lg p-3 mb-2 bg-light p-3 mb-2 bg-light">
            <div class="jumbotron">
                <div class="container">
                    <div class="well well-large">
                       <center><img src="http://sisgap.dired.ufla.br/assets/img/logo.png"/></center>
                    </div> 
                </div>
            </div>
          </div>
        <main role="main">
        <br /><br /><br />
        <div class="container text-center">
        <?php echo form_open('Welcome/update'); ?>
        <form class="container">
        <h1 class="text-danger">Aqui coloquei só alguns exemplos para testes...</A></h1><br />
        <div class="form-group">
            <label for="exampleInputEmail1">CPF</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CPF" name="CPF" value="<?php echo set_value('CPF') ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Endereço</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Novo Endereço" name="Endereco" value="<?php echo set_value('Endereco') ?>">
          </div>
          <?php echo form_error('Endereco') ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Telefone</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Novo Telefone" name="Telefone" value="<?php echo set_value('Telefone') ?>">
          </div>
          <?php echo form_error('Telefone') ?>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nova Senha" name="Senha">
          </div>
          <?php echo form_error('Senha') ?>
          <h4><small class="text-success"><?php echo $this->session->flashdata("alterados") ?></small></h4>
          <button class="btn btn-success btn-lg btn-block" type="submit">Alterar Dados</button>
        </form>
        </div>
        <br />  
        <br />                                 
        </div>
        <div class="container"><center><a href="<?php echo base_url('inicio') ?>" class="btn btn-primary btn-lg btn-block">Voltar para página inicial</a></center></div>
        <br><br />
        </main>
        <div class="card container p-3 mb-2 bg-light text-dark shadow-lg p-3 mb-5 bg-white rounded border border-success">
          <div class="card-header p-3 mb-2 bg-primary text-white">
          <img src="<?php echo base_url('assets/img/icone-frase.png') ?>" width="25px">
            Frase do Dia :
          </div>
          <div class="card-body">
              <blockquote class="blockquote mb-0">
              <p class="font-italic">“Quem conhece a sua ignorância revela a mais profunda sapiência. Quem ignora a sua ignorância vive na mais profunda ilusão.”
                </p>
              <footer class="blockquote-footer"><cite title="Source Title">Lao - Tsé</cite></footer>
            </blockquote>
          </div>
        </div>
        <footer class="container">
            <div class="footer">
                <center>
                  <div id="footbar">
                  
                    <div width="100%" align="center">
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
                    Copyright © 2018 - <a style='color: #000;' href='http://www.dired.ufla.br' target="_blank">DIRED</a> - Diretoria de Educação a 
              Distância
                    <br><br>
                  </p>
              </div>
        </footer>
        <!--By FaBiUsKcomp-->
    
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>