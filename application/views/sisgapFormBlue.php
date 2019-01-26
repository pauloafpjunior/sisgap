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
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
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
                <?php echo form_open('Welcome/login'); ?>
                <form class="form-inline">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Usuário" aria-label="Username" aria-describedby="basic-addon1" name="">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">*</span>
                        </div>
                        <input type="password" class="form-control" placeholder="Senha" aria-label="Password" aria-describedby="basic-addon1" name="">
                        <button type="submit" class="btn btn-success">Entrar</button>
                    </div>
                </form>
            </div>
        </nav>
        <!--<div class="jumbotron">
            <div class="container">
                <div class="text-center">
                    <img src="http://sisgap.dired.ufla.br/assets/img/logo.png" class="img-fluid" alt="Responsive image">
                </div> 
            </div>
        </div>-->
        <br /><br /><br />
        <center><h1><span class="badge badge-primary border border-success">Formulário para cadastro de novos usuários</span></h1><br /></center>
        <br />
        <?php //echo validation_errors(); ?>
        <?php echo form_open('Welcome/form_validate'); ?>
        <div class="container border border-success">
            <form action="http://localhost/sisgap/index.php/Welcome" method="post" accept-charset="utf-8">
                <form method="post">
                    <h2>Dados <span class="badge badge-primary"> Pessoais</span></h2><br />
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputEmail4"><strong>Nome Completo</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail4" placeholder="Nome Completo" value="<?php echo set_value('Nome') ?>" name="Nome">
                            <?php echo form_error('Nome') ?>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4"><strong>Data de Nascimento</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputPassword4" placeholder="DD/MM/AAAA" value="<?php echo set_value('Nascimento') ?>" name="Nascimento">
                            <?php echo form_error('Nascimento') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress"><strong>CPF</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="123.456.789-00" value="<?php echo set_value('CPF') ?>" name="CPF">
                            <small><p class="font-italic">Digite um CPF válido</p></small>
                            <?php echo form_error('CPF') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4"><strong>RG</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputPassword4" placeholder="XX - 99.999.999" value="<?php echo set_value('RG') ?>" name="RG">
                            <small><p class="font-italic">Digite um Registro válido</p></small>
                            <?php echo form_error('RG') ?>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress"><strong>Senha</strong></label>
                            <input type="password" class="form-control form-control-sm" id="inputAddress" placeholder="Senha" name="Senha">
                            <small><p class="font-italic">As senhas tem que ter no mínimo 6 caracteres</p></small>
                            <?php echo form_error('Senha') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4"><strong>Confirmar Senha</strong></label>
                            <input type="password" class="form-control form-control-sm" id="inputPassword4" placeholder="Confirmar Senha" name="ConfSenha">
                            <small><p class="font-italic">As senhas tem que ter no mínimo 6 caracteres</p></small>
                            <?php echo form_error('ConfSenha') ?>
                        </div>
                    </div>
                    <br />
                    <h2>Dados <span class="badge badge-primary"> de Contato</span></h2><br />
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="inputEmail4"><strong>Endereço</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail4" placeholder="Endereço" value="<?php echo set_value('Endereco') ?>" name="Endereco">
                            <small><p class="font-italic">Digite um Endereço válido seguido de um número da residência</p></small>
                            <?php echo form_error('Endereco') ?>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputPassword4"><strong>Bairro</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputPassword4" placeholder="Bairro" value="<?php echo set_value('Bairro') ?>" name="Bairro">
                            <?php echo form_error('Bairro') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="inputEmail4"><strong>Cidade</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail4" placeholder="Cidade" value="<?php echo set_value('Cidade') ?>" name="Cidade">
                            <?php echo form_error('Cidade') ?>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputPassword4"><strong>CEP</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputPassword4" placeholder="9999-999" value="<?php echo set_value('CEP') ?>" name="CEP">
                            <?php echo form_error('CEP') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="inputEmail4"><strong>Estado</strong></label>
                            <select id="inputState" class="form-control form-control-sm" name="Estado" value="<?php echo set_value('Estado') ?>" name="Estado">
                                <option selected>Selecionar...</option>
                                <option value="ac">Acre</option> 
                                <option value="al">Alagoas</option> 
                                <option value="am">Amazonas</option> 
                                <option value="ap">Amapá</option> 
                                <option value="ba">Bahia</option> 
                                <option value="ce">Ceará</option> 
                                <option value="df">Distrito Federal</option> 
                                <option value="es">Espírito Santo</option> 
                                <option value="go">Goiás</option> 
                                <option value="ma">Maranhão</option> 
                                <option value="mt">Mato Grosso</option> 
                                <option value="ms">Mato Grosso do Sul</option> 
                                <option value="mg">Minas Gerais</option> 
                                <option value="pa">Pará</option> 
                                <option value="pb">Paraíba</option> 
                                <option value="pr">Paraná</option> 
                                <option value="pe">Pernambuco</option> 
                                <option value="pi">Piauí</option> 
                                <option value="rj">Rio de Janeiro</option> 
                                <option value="rn">Rio Grande do Norte</option> 
                                <option value="ro">Rondônia</option> 
                                <option value="rs">Rio Grande do Sul</option> 
                                <option value="rr">Roraima</option> 
                                <option value="sc">Santa Catarina</option> 
                                <option value="se">Sergipe</option> 
                                <option value="sp">São Paulo</option> 
                                <option value="to">Tocantins</option> 
                            </select>
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
                            <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="(99)9999-9999" value="<?php echo set_value('Celular') ?>" name="Celular">
                            <small><p class="font-italic">DDD junto ao telefone</p></small>
                            <?php echo form_error('Celular') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4"><strong>Telefone</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputPassword4" placeholder="(99)9999-9999" value="<?php echo set_value('Telefone') ?>" name="Telefone">
                            <small><p class="font-italic">DDD junto ao telefone, se não for nativo do Brasil, informar o codigo do país</p></small>
                            <?php echo form_error('Telefone') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress"><strong>E-mail</strong></label>
                            <input type="email" class="form-control form-control-sm" id="inputAddress" placeholder="seu@email.com" value="<?php echo set_value('Email') ?>" name="Email">
                            <?php echo form_error('Email') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4"><strong>Confirmar E-mail</strong></label>
                            <input type="email" class="form-control form-control-sm" id="inputPassword4" placeholder="seu@email.com" value="<?php echo set_value('ConfEmail') ?>" name="ConfEmail">
                            <?php echo form_error('ConfEmail') ?>
                        </div>
                    </div><br />
                    <h2>Atuação <span class="badge badge-primary">Profissional</span></h2><br />
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"><strong>Graduação</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail4" placeholder="Graduado em..." value="<?php echo set_value('Graduacao') ?>" name="Graduacao">
                            <small><p class="font-italic">Escreva o nome do curso</p></small>
                            <?php echo form_error('Graduacao') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"><strong>Pós-Graduação</strong></label>
                            <select id="inputState" class="form-control form-control-sm" value="<?php echo set_value('PosGraduacao') ?>" name="PosGraduacao">
                                <option selected>Selecionar...</option>
                                <option value="0" >Não possui pós-graduação</option> 
                                <option value="1" >Pós-Graduação lato sensu (especialização em andamento)</option>
                                <option value="2" >Pós-Graduação lato sensu (especialização)</option>
                                <option value="3" >Pós-Graduação stricto sensu (mestrado em andamento)</option>
                                <option value="4" >Pós-Graduação stricto sensu (especialização concluída com mestrado em andamento)</option>
                                <option value="5" >Pós-Graduação stricto sensu (mestrado concluído)</option>
                                <option value="6" >Pós-Graduação stricto sensu (mestre com doutorado em andamento)</option>
                                <option value="7" >Pós-Graduação stricto sensu (doutorado direto concluído)</option>
                                <option value="8" >Pós-Graduação stricto sensu (mestrado e doutorado concluídos)</option>
                                <option value="9" >Pós-Graduação stricto sensu (Pós-doutorado concluído)</option>
                            </select>
                            <?php echo form_error('PosGraduacao') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4"><strong>Área Pós-Graduação</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail4" placeholder="Área escolhida..." value="<?php echo set_value('AreaposGrad') ?>" name="AreaposGrad">
                            <small><p class="font-italic">Se possuir, digite a área</p></small>
                            <?php echo form_error('AreaposGrad') ?>
                        </div>
                    </div>
                    <p><strong>Possui experiência em docência?</strong></p>
                    <div class="form-group col-md-13">
                        <select id="inputState" class="form-control form-control-sm" value="<?php echo set_value('PExDoc') ?>" name="PExDoc">
                            <option selected>Selecionar...</option>
                            <option value="0" >Sim</option> 
                            <option value="1" >Não</option>
                        </select>
                        <?php echo form_error('PExDoc') ?>
                    </div>
                    <p><strong>Experiência(s) Profissional</strong></p>
                    <div class="form-group col-md-13">
                        <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea" value="<?php echo set_value('ExpProf') ?>" name="ExpProf"></textarea>
                        </div>
                        <?php echo form_error('ExpProf') ?>
                    </div><br />
                    <p><strong>Experiência(s) Profissional na área de EAD</strong></p>
                    <div class="form-group col-md-13">
                        <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea" value="<?php echo set_value('ExpEAD') ?>" name="ExpEAD"></textarea>
                        </div>
                        <?php echo form_error('ExpEAD') ?>
                    </div><br />
                    <h2>Experiência <span class="badge badge-primary">com Informática</span></h2><br />
                    <p><strong>Nível de Conhecimento em informática</strong></p>
                    <div class="form-group col-md-13">
                        <select id="inputState" class="form-control form-control-sm" value="<?php echo set_value('ConhecInfo') ?>" name="ConhecInfo">
                            <option selected>Selecionar...</option>
                            <option value="0" >Básico</option> 
                            <option value="1" >Intermediário</option>
                            <option value="2" >Avançado</option>
                        </select>
                    </div>
                    <?php echo form_error('ConhecInfo') ?>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4"><strong>Currículo Lattes</strong></label>
                            <input type="text" class="form-control form-control-sm" id="inputEmail4" placeholder="Currículo..." value="<?php echo set_value('Curriculo') ?>" name="Curriculo">
                            <small><p class="font-italic">Link do Currículo Lattes</p></small>
                        </div>
                    </div>
                    <?php echo form_error('Curriculo') ?>
                    <h2>Atuação <span class="badge badge-primary">como tutor na UFLA</span></h2><br />
                    <p><strong>Já atuou ou atua como tutor na UFLA?</strong></p>
                    <div class="form-group col-md-13">
                        <select id="inputState" class="form-control form-control-sm" value="<?php echo set_value('AtuaTutor') ?>" name="AtuaTutor">
                            <option selected>Selecionar...</option>
                            <option value="0" >Sim</option> 
                            <option value="1" >Não</option>
                        </select>
                    </div>
                    <?php echo form_error('AtuaTutor') ?>
                    <h2>Informações <span class="badge badge-primary">Adicionais</span></h2><br />
                    <p><strong>Outras informações de Cadastro/Currículo</strong></p>
                    <div class="form-group col-md-13">
                        <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea" value="<?php echo set_value('OutrasInfo') ?>" name="OutrasInfo"></textarea>
                        </div>
                        <small><p class="font-italic">Alguma informação adicional que queira levantar</p></small>
                        <?php echo form_error('OutrasInfo') ?>
                    </div><br />
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar Cadastro</button>
                            <a class="btn btn-secondary btn-lg btn-block text-white bg-success" href="" role="button">Cancelar Cadastro</a>
                        </div>
                    </div>
                </form>
            </form>
        </div>
        <br><br />
        <div class="container p-3 mb-2 bg-light text-dark">
            <div class="">
                <div class="text-center">
                    <img src="<?php echo base_url('assets/img/LogoFooter.png.png') ?>" class="img-fluid" alt="Responsive image">
                </div> 
            </div>
        </div>
        <br />
        <footer class="container shadow-lg p-3 mb-5 bg-white rounded">
            <div class="footer p-3 mb-2 bg-primary text-white">
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
        <!--<div class="jumbotron">
            <div class="container">
                <div class="text-center">
                    <img src="http://sisgap.dired.ufla.br/assets/img/logo.png" class="img-fluid" alt="Responsive image">
                </div> 
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
        </footer>-->
    <!--by FaBiUsKcomp-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>