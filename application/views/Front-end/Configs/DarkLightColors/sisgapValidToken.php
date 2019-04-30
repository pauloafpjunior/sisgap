<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/sisgapTitle.ico') ?>">

    <title>Sistema de Gestão Administrativa e Pedagógica - SisGAP</title>
  </head>
  <body class="p-3 mb-2 bg-light text-dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-p-3 mb-2 bg-dark text-white">
            <a href="<?php echo base_url('inicio') ?>"><img src="<?php echo base_url('assets/img/sisgap.png') ?>" height="20" width="83"></a>
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
        </nav>
        <div class="p-3 mb-2 bg-info text-white row">.bg-success</div>
        <br /><br /><br />
        <div class="container border border-success">
          <h4 class="p-3 mb-2 bg-secondary text-white text-center">Preencha os campos abaixo com seu cpf cadastrado, senha e o codigo que você recebeu por email:</h4><br>
          <?php echo form_open('updatetoken'); ?>
          <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress"><strong>Seu CPF</strong></label>
                    <input type="text" class="form-control form-control-sm" id="cpf" placeholder="000.000.000-00" onpaste="return false" value="<?php echo set_value('CPF') ?>" name="CPF">
                    <small><p class="font-italic">Cpf válido sem pontos ou traços</p></small>
                    <?php echo form_error('CPF') ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4"><strong>Sua Senha</strong></label>
                    <input type="password" class="form-control form-control-sm" id="telefone" placeholder="*********" name="Senha">
                    <?php echo form_error('Senha') ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputAddress"><strong>Seu Código</strong></label>
                    <input type="text" class="form-control form-control-sm" id="cpf" placeholder="Código recebido por Email" name="Token">
                    <?php echo form_error('Token') ?>
                </div>
            </div>
            <center><h3><small class="text-success"><?php echo $this->session->flashdata("sucesso") ?></small></h3></center>
            <br /><br />
        <button class="btn btn-success btn-lg btn-block" type="submit"><img src="<?php echo base_url('assets/img/icone-success.png') ?>" width="30px">Confirmar Cadastro</button>
        </div>
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