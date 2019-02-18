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
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-p-3 mb-2 bg-primary text-white">
            <a href="<?php echo base_url('inicio') ?>"><img src="http://sisgap.dired.ufla.br/assets/img/sisgap.png" height="20" width="83"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('inicio') ?>">INÍCIO<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item text-white">
                        <a class="nav-link text-white" href="">CONTATOS</a>
                    </li>
                </ul>
            </div> 
            <button class="btn btn-default bg-primary text-white">
                <a href="<?php echo base_url('change') ?>" class="text-white"><strong>Alterar meu dados</strong></a>
                <a href="<?php echo base_url('change') ?>"><img src="<?php echo base_url('assets/img/icone-trabalho.png') ?>" width="30px"></a>
            </button>
            <button class="btn btn-default bg-primary text-white">
                <a href="<?php echo base_url('logged') ?>" class="text-white"><strong>Alterar minha senha</strong></a>
                <a href="<?php echo base_url('logged') ?>"><img src="<?php echo base_url('assets/img/icone-senha.png') ?>" width="30px"></a>
            </button>
            <a href="<?php echo base_url('quit') ?>"><button class="btn btn-success" type="button" href="<?php echo base_url('inicio') ?>">Sair <img src="<?php echo base_url('assets/img/icone-cancel.png') ?>" width="30px"></button></a>
        </nav>
        <div class="p-3 mb-2 bg-success text-white row">.bg-success</div>
            <!---<div class="row">
                <div class="col-12 text-center my-5">
                    <h1 class="display-3 shadow p-3 mb-5 bg-white rounded">Bem-vindo ao <span class="badge badge-dark"><img src="http://sisgap.dired.ufla.br/assets/img/sisgap.png" height="100" width="380"></span></h1>
                    <h3 class="font-italic border border-secondary shadow-lg p-3 mb-5 bg-white rounded">Sistema de Gestão Administrativa e Pedagógica - UFLA</h3>
                </div>
            </div>-->
    
    <!--By FaBiUsKcomp-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>