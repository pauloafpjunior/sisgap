
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
  <body>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-p-3 mb-2 bg-dark text-white">
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
            <button class="btn btn-default bg-dark text-white">
                <a href="<?php echo base_url('logged') ?>" class="text-white"><strong>Voltar</strong></a>
                <a href="<?php echo base_url('logged') ?>"><img src="<?php echo base_url('assets/img/icone-voltar.png') ?>" width="30px"></a>
            </button>
          </div>
        </nav>
        <br >
        <div class="p-3 mb-2 bg-info text-white row">.bg-success</div>
        <br /><br />
        <h1 class="text-dark text-center font-italic">Meus Dados</h1><br />
        <main role="main">
        <br />
        <div class="container">
        <?php echo form_open('update'); ?>
        <div class="container">
            <form action="<http://localhost/sisgap/index.php/Welcome>" method="post" accept-charset="utf-8">
                <form method="post">
                    <h2>Dados <span class="badge badge-dark"> Pessoais<img src="<?php echo base_url('assets/img/icone-cpf.png') ?>" width="30px"></span></h2><br />
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputEmail4"><strong>Nome Completo</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail4" placeholder="Nome Completo" value="<?php echo set_value('Nome') ?>" name="Nome">
                            <?php echo form_error('Nome') ?>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4"><strong>Data de Nascimento</strong></label>
                            <input type="text" class="form-control form-control-sm" id="data" placeholder="DD/MM/AAAA" value="<?php echo set_value('Nascimento')?>" name="Nascimento">
                            <?php echo form_error('Nascimento') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><strong>CPF</strong></label>
                            <input type="text" class="form-control form-control-sm" placeholder="12345678900" value="<?php echo set_value('CPF') ?>" aria-label="With textarea" name="CPF" readonly>
                            <small><p class="font-italic">Digite um CPF válido sem pontos ou traços</p></small>
                            <?php echo form_error('CPF') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label><strong>RG</strong></label>
                            <input type="text" class="form-control form-control-sm" placeholder="XX99999999" value="<?php echo set_value('RG') ?>" aria-label="With textarea" name="RG" readonly>
                            <small><p class="font-italic">Digite um Registro válido sem pontos ou traços</p></small>
                            <?php echo form_error('RG') ?>
                        </div>
                    </div>
                    <br />
                    <h2>Dados <span class="badge badge-dark"> de Contato<img src="<?php echo base_url('assets/img/icone-telefone.png') ?>" width="30px"></span></h2><br />
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="inputEmail4"><strong>Endereço</strong></label>
                            <input type="text" class="form-control form-control-sm" placeholder="Endereço" value="<?php echo set_value('Endereco')?>" name="Endereco">
                            <small><p class="font-italic">Digite um Endereço válido seguido de um número da residência</p></small>
                            <?php echo form_error('Endereco') ?>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputPassword4"><strong>Bairro</strong></label>
                            <input type="text" class="form-control form-control-sm" placeholder="Bairro" value="<?php echo set_value('Bairro') ?>" name="Bairro">
                            <?php echo form_error('Bairro') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="inputEmail4"><strong>Cidade</strong></label>
                            <input type="text" class="form-control form-control-sm" placeholder="Cidade" value="<?php echo set_value('Cidade') ?>" name="Cidade">
                            <?php echo form_error('Cidade') ?>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputPassword4"><strong>CEP</strong></label>
                            <input type="text" class="form-control form-control-sm" id="cep" placeholder="99999-000" value="<?php echo set_value('CEP')?>" name="CEP">
                            <?php echo form_error('CEP') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="inputEmail4"><strong>Estado</strong></label>
                                <?php echo form_dropdown('Estado', $dadosEstado, $Est, 'class="form-control form-control-sm"') ?>
                            <?php echo form_error('Estado') ?>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputPassword4"><strong>Pais</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputPassword4" placeholder="País" value="<?php echo set_value('Pais') ?>" name="Pais">
                            <?php echo form_error('Pais') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress"><strong>Celular</strong></label>
                            <input type="text" class="form-control form-control-sm" id="celular" placeholder="(99) 9999-9999" value="<?php echo set_value('Celular') ?>" name="Celular">
                            <small><p class="font-italic">DDD junto ao telefone</p></small>
                            <?php echo form_error('Celular') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4"><strong>Telefone</strong></label>
                            <input type="text" class="form-control form-control-sm" id="telefone" placeholder="(99) 9999-9999" value="<?php echo set_value('Telefone') ?>" name="Telefone">
                            <small><p class="font-italic">DDD junto ao telefone, se não for nativo do Brasil, informar o codigo do país</p></small>
                            <?php echo form_error('Telefone') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputAddress"><strong>E-mail</strong></label>
                            <input type="email" class="form-control form-control-sm" id="inputAddress" placeholder="seu@email.com" value="<?php echo set_value('Email') ?>" name="Email">
                            <?php echo form_error('Email') ?>
                        </div>
                    </div><br />
                    <h2>Atuação <span class="badge badge-dark">Profissional<img src="<?php echo base_url('assets/img/icone-trabalho.png') ?>" width="30px"></span></h2><br />
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"><strong>Graduação</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail4" placeholder="Graduado em..." value="<?php echo set_value('Graduacao') ?>" name="Graduacao">
                            <small><p class="font-italic">Escreva o nome do curso</p></small>
                            <?php echo form_error('Graduacao') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"><strong>Pós-Graduação</strong></label>
                                <?php echo form_dropdown('PosGraduacao', $dadosPosGrad, $PosG, 'class="form-control form-control-sm"') ?>
                            <?php echo form_error('PosGraduacao') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4"><strong>Área Pós-Graduação</strong></label>
                            <input type="text" class="form-control form-control-sm" placeholder="Área escolhida..." value="<?php echo set_value('AreaposGrad') ?>" name="AreaposGrad">
                            <small><p class="font-italic">Se possuir, digite a área</p></small>
                            <?php echo form_error('AreaposGrad') ?>
                        </div>
                    </div>
                    <p><strong>Possui experiência em docência?</strong></p>
                    <div class="form-group col-md-13">
                        <?php echo form_dropdown('PExpDoc', $dadosExpDoc, $PExpD, 'class="form-control form-control-sm"') ?>   
                        <?php echo form_error('PExpDoc') ?>
                    </div>
                    <p><strong>Experiência(s) Profissional</strong></p>
                    <div class="form-group col-md-13">
                        <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea" name="ExpProf"><?php echo set_value('ExpProf') ?></textarea>
                        </div>
                        <?php echo form_error('ExpProf') ?>
                    </div><br />
                    <p><strong>Experiência(s) Profissional na área de EAD</strong></p>
                    <div class="form-group col-md-13">
                        <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea"  name="ExpEAD"><?php echo set_value('ExpEAD') ?></textarea>
                        </div>
                        <?php echo form_error('ExpEAD') ?>
                    </div><br />
                    <h2>Experiência <span class="badge badge-dark">com Informática<img src="<?php echo base_url('assets/img/icone-computador.png') ?>" width="30px"></span></h2><br />
                    <p><strong>Nível de Conhecimento em informática</strong></p>
                    <div class="form-group col-md-13">
                        <?php echo form_dropdown('ConhecInfo', $dadosConhecInfo, $ConInf, 'class="form-control form-control-sm"') ?>
                    </div>
                    <?php echo form_error('ConhecInfo') ?>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label><strong>Currículo Lattes</strong></label>
                            <input type="text" class="form-control form-control-sm" placeholder="Currículo..." value="<?php echo set_value('Curriculo') ?>" name="Curriculo">
                            <small><p class="font-italic">Link do Currículo Lattes</p></small>
                        </div>
                    </div>
                    <?php echo form_error('Curriculo') ?>
                    <h2>Atuação <span class="badge badge-dark">como tutor na UFLA<img src="<?php echo base_url('assets/img/icone-universidade.png') ?>" width="30px"></span></h2><br />
                    <p><strong>Já atuou ou atua como tutor na UFLA?</strong></p>
                    <div class="form-group col-md-13">
                        <?php echo form_dropdown('AtuaTutor', $dadosAtuaTutor, $AtuaT, 'class="form-control form-control-sm"') ?>
                    </div>
                    <?php echo form_error('AtuaTutor') ?>
                    <h2>Informações <span class="badge badge-dark">Adicionais<img src="<?php echo base_url('assets/img/icone-info.png') ?>" width="30px"></span></h2><br />
                    <p><strong>Outras informações de Cadastro/Currículo</strong></p>
                    <div class="form-group col-md-13">
                        <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea" name="OutrasInfo"><?php echo set_value('OutrasInfo') ?></textarea>
                        </div>
                        <small><p class="font-italic">Alguma informação adicional que queira levantar</p></small>
                        <?php echo form_error('OutrasInfo') ?>
                    </div><br />
            <br />                              
        </div>
        <div class="container"><button class="btn btn-success btn-lg btn-block container" type="submit">Alterar Dados</button></div><br />
        <br><br /><br /><br />
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
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!--By FaBiUsKcomp-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.mask.min.js') ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#data").mask("00/00/0000");
            $("#cep").mask("00.000-000");
            $("#celular").mask("(00) 00000-0000");
            $("#telefone").mask("(00) 0000-0000");
        })
    </script>
  </body>
</html>