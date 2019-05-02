<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                <a href="<?php echo base_url('quit') ?>"><button class="btn btn-info" type="button" href="<?php echo base_url('inicio') ?>">Sair <img src="<?php echo base_url('assets/img/icone-canc.png') ?>" width="30px"></button></a>
            </div> 
        </nav>
        <div class="p-3 mb-2 bg-info text-white row">.bg-success</div>
        <br/><br/>
        <div class="row">
            <div class="col-5">
                <div class="card bg-light mb-3 border border-info" style="max-width: 30rem; height: 35rem;">
                        <div class="card-body">
                        <h5 class="card-title"><img src="<?php echo base_url('assets/img/icone-menu.png') ?>" width="30px" ><strong class="text-primary">  MENU:</strong> </h5>
                        <div class="text-white text-left col-xs-12">
                            <div class="p-3 mb-2 bg-light">
                                <img src="<?php echo base_url('assets/img/icone-disciplina.png') ?>" width="30px"><a class="text-dark" href="<?php echo base_url('CadDisciplina') ?>"> Cadastrar Disciplinas</a>
                            </div>
                            <div class="p-3 mb-2 bg-light text-white">
                                <img src="<?php echo base_url('assets/img/icone-listDisci.png') ?>" width="30px"><a class="text-dark" href="<?php echo base_url('ListDisciplina') ?>"> Listar disciplinas cadastradas</a>
                            </div>
                            <div class="p-3 mb-2 bg-light text-white">
                                <img src="<?php echo base_url('assets/img/icone-curso.png') ?>" width="30px"><a class="text-danger" href="<?php echo base_url('CadCursos') ?>"> Cadastrar Cursos</a>
                            </div>
                            <div class="p-3 mb-2 bg-light text-white">
                                <img src="<?php echo base_url('assets/img/icone-listCorse.png') ?>" width="30px"><a class="text-dark" href="<?php echo base_url('ListCursos') ?>"> Listar Cursos cadastrados</a>
                            </div>
                            <div class="p-3 mb-2 bg-light text-white">
                                <img src="<?php echo base_url('assets/img/icone-voltar.png') ?>" width="30px"><a class="text-dark" href="<?php echo base_url('AdmBegin') ?>"> Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
            <h4 class="text-center"><strong>Cadastrar Curso</strong></h4><br/>
            <?php echo form_open('validCurso') ?>
                <div action="post">
                    <div class="form-group row">
                            <label class=""><strong>Nome do Curso</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail4" placeholder="Nome do Curso" value="<?php echo set_value('Nome') ?>" name="Nome">
                            <?php echo form_error('Nome') ?>
                        </div>
                        <br />
                        <center><button type="submit" class="btn btn-primary">Cadastrar</button><center>
                        <center><h3><small class="text-success"><?php echo $this->session->flashdata("alterados") ?></small></h3></center>
                        <center><h3><small class="text-danger"><?php echo $this->session->flashdata("naoalterados") ?></small></h3></center>
                    </div>
                </div>
            </div>       
        </div>

    <!--By FaBiUsKcomp-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>