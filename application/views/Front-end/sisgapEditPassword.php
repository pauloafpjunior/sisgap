
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
          <button class="btn btn-default bg-primary text-white">
                <a href="<?php echo base_url('logged') ?>" class="text-white"><strong>Voltar</strong></a>
                <a href="<?php echo base_url('logged') ?>"><img src="<?php echo base_url('assets/img/icone-voltar.png') ?>" width="30px"></a>
            </button>
        </nav>
        <br /><br />
        <div class="p-3 mb-2 bg-success text-white row"></div>
        <br /><br /><br/><br/>
        <main role="main">
        <br />
        <div class="container">
        <?php echo form_open('newPass'); ?>
        <div class="container">
            <form action="<http://localhost/sisgap/index.php/Welcome>" method="post" accept-charset="utf-8">
                <form method="post">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><strong>Senha</strong></label>
                            <input type="password" class="form-control form-control" placeholder="Senha Atual"  aria-label="With textarea" name="Senha">
                            <?php echo form_error('Senha') ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label><strong>Nova Senha</strong></label>
                            <input type="password" class="form-control form-control" placeholder="Nova Senha" aria-label="With textarea" name="newSenha">                            <?php echo form_error('RG') ?>
                            <?php echo form_error('newSenha') ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label><strong>Confirmar Nova Senha</strong></label>
                            <input type="password" class="form-control form-control" placeholder="confirmar Nova Senha"  aria-label="With textarea" name="confnewSenha">
                            <?php echo form_error('confnewSenha') ?>
                        </div>
                    </div>
                    <br /><br />
                    <center><h3><small class="text-success"><?php echo $this->session->flashdata("alterados") ?></small></h3></center>
                    <br /><br /><br/><br/>
        <div class="container"><button class="btn btn-success btn-lg btn-block container" type="submit">Alterar Senha</button></div><br />
        <br><br /><br /><br />
        </main>
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!--By FaBiUsKcomp-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>