
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
      <nav class="navbar navbar-expand-md navbar-primary fixed-top bg-primary text-white">
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
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Login" aria-label="Login">
              <input class="form-control mr-sm-2" type="text" placeholder="senha" aria-label="Login">
              <button class="btn btn-success" type="submit">Entrar</button>
            </form>
          </div>
        </nav>
        <br /><br /><br />
        <main role="main">
    
          <!-- Main jumbotron for a primary marketing message or call to action -->
        <!--<div class="jumbotron">
            <div class="container">
              <div class="well well-large">
                  <center><img src="http://sisgap.dired.ufla.br/assets/img/logo.png"/></center>
              </div> 
            </div>
        </div>-->
        <div class="alert alert-success container" role="alert">
          <h4 class="alert-heading">Cadastro Realizado com sucesso !</h4>
            <p>Concluído, suas informações foram salvas e serão armazenadas com segurança para que haja nenhuma violação.</p>
            <hr>
            <p class="mb-0">Agora para logar, basta entrar com seu usuário e sua senha na pagina inicial.</p>
        </div>
        <br /><br />
        <center><a href="<?php echo base_url('inicio') ?>" class="badge badge-success">Voltar para página inicial</a></center>
        <br><br />
        <div class="container shadow-lg p-3 mb-2 bg-light p-3 mb-2 bg-light">
            <div class="">
                <div class="text-center">
                    <img src="<?php echo base_url('assets/img/logo.png') ?>" class="img-fluid" alt="Responsive image">
                </div> 
            </div>
          </div>
        </main>
    
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