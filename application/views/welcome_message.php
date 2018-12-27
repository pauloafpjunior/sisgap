
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sistema de Gestão Administrativa e Pedagógica - SisGAP</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="" >SisGap</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="">INÍCIO <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">CONTATOS</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Login" aria-label="Login">
              <input class="form-control mr-sm-2" type="text" placeholder="senha" aria-label="Login">
              <button class="btn btn-primary" type="submit">Entrar</button>
            </form>
          </div>
        </nav>
    
        <main role="main">
    
          <!-- Main jumbotron for a primary marketing message or call to action -->
          <div class="jumbotron">
            <div class="container">
              <div class="well well-large">
                  <center><img src="http://sisgap.dired.ufla.br/assets/img/logo.png"/></center>
              </div> 
            </div>
          </div>
          <?php echo validation_errors(); ?>
          <?php echo form_open('Welcome/cadastrar'); ?>
          <center><h4 class="text-primary">Formulário para cadastro de novos usuários</h4></center>
          <br>
          <form method="post">
              <!-- DADOS PESSOAIS-->
              <fieldset>
                <center><legend class="text-white bg-dark">Dados Pessoais</legend>  </center>
                  <center><form>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4" >Nome Completo:</label>
                      <input class="form-control form-control-sm" type="text" name="Nome" placeholder="Nome" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Data de Nascimento:</label>
                        <input class="form-control form-control-sm" type="text" name="Nascimento" placeholder="DD/MM/AAAA" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">RG:</label>
                        <input class="form-control form-control-sm" type="text" name="RG" placeholder="RG" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">CPF:</label>
                        <input class="form-control form-control-sm" type="text" name="CPF" placeholder="CPF" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Senha:</label>
                        <input class="form-control form-control-sm" type="text" name="Senha" placeholder="Senha" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Confirme sua senha:</label>
                        <input class="form-control form-control-sm" type="text" name="ConfSenha" placeholder="Confirmar Senha" required>
                    </div>
                    <br />
                    <center><legend class="text-white bg-dark">Dados de Contato</legend>  </center>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4" >Endereço:</label>
                      <input class="form-control form-control-sm" type="text" name="Endereco" placeholder="Endereço" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Bairro:</label>
                        <input class="form-control form-control-sm" type="text" name="Bairro" placeholder="Bairro" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Cidade:</label>
                        <input class="form-control form-control-sm" type="text" name="Cidade" placeholder="Cidade" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">CEP:</label>
                        <input class="form-control form-control-sm" type="text" name="CEP" placeholder="CEP" required>
                    </div>
                    <div class="form-group col-md-4">
                            <label for="inputState">Estado:</label>
                            <select id="inputState" class="form-control" name="Estado" required>
                              <option selected>Selecionar</option>
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
                          </div>
                          <div class="form-group col-md-6">
                                <label for="inputAddress">País:</label>
                                <input class="form-control form-control-sm" type="text" name="Pais" placeholder="País" required>
                          </div>
                          <div class="form-group col-md-6">
                                <label for="inputAddress">Telefone:</label>
                                <input class="form-control form-control-sm" type="text" name="Telefone" placeholder="(99) 9999-9999" required>
                          </div>
                          <div class="form-group col-md-6">
                                <label for="inputAddress">Celular:</label>
                                <input class="form-control form-control-sm" type="text" name="Celular" placeholder="(99) 9999-9999" required>
                          </div>
                          <div class="form-group col-md-6">
                                <label for="inputAddress">E-mail:</label>
                                <input class="form-control form-control-sm" type="text" name="Email" placeholder="seu@email.com" required>
                        </div>
                        <div class="form-group col-md-6">
                                <label for="inputAddress">Confirme seu E-mail:</label>
                                <input class="form-control form-control-sm" type="text" name="ConfEmail" placeholder="seu@email.com" required>
                        </div>
                        <center><legend class="text-white bg-dark">Atuação Profissional</legend>  </center>
                        <div class="form-group col-md-6">
                      <label for="inputEmail4" >Graduação:</label>
                      <input class="form-control form-control-sm" type="text"  name="Graduacao" placeholder="Área que possui graduação" required>
                    </div>
                    <div class="form-group col-md-4">
                            <label for="inputState">Pós-Graduação:</label>
                            <select id="inputState" class="form-control" name="PosGraduacao" required>
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
                        </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Área Pós-Graduação:</label>
                        <input class="form-control form-control-sm" type="text" name="AreaposGrad" placeholder="Área escolhida" required>
                    </div>
                    <p>Possui experiência em docência?</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="PExDoc" id="inlineRadio1" value="option1" required>
                        <label class="form-check-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="PExDoc" id="inlineRadio1" value="option1"required>
                        <label class="form-check-label" for="inlineRadio1">Não</label>
                    </div>
                    <br><br />
                    <p>Experiência(s) Profissional:</p>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Escreva aqui</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea" name="ExpProf" required></textarea>
                    </div>
                    <p>Experiência(s) Profissional na área de EAD:</p>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Escreva aqui</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea" name="ExpEAD" required></textarea>
                    </div>
                    <br><br />
                    <center><legend class="text-white bg-dark">Experiência com Informática</legend>  </center>
                  <center>
                    <br />
                    <p>Nível de Conhecimento em informática:</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ConhecInfo" id="inlineRadio1" value="option1" required>
                        <label class="form-check-label" for="inlineRadio1">Básico</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ConhecInfo" id="inlineRadio1" value="option2" required>
                        <label class="form-check-label" for="inlineRadio1">Intermediário</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ConhecInfo" id="inlineRadio1" value="option3" required>
                            <label class="form-check-label" for="inlineRadio1">Avançado</label>
                    </div>
                    <br><br />
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" >Currículo Lattes:</label>
                        <input class="form-control form-control-sm" type="text" name="Curriculo" placeholder="Link do Currículo" required>
                    </div>
                    <br><br />
                    <center><legend class="text-white bg-dark">Atuação como tutor na UFLA</legend>  </center>
                    <br><br />
                    <p>Já atuou ou atua como tutor na UFLA?</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="AtuaTutor" id="inlineRadio1" value="option1" required>
                        <label class="form-check-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="AtuaTutor" id="inlineRadio1" value="option2" required>
                        <label class="form-check-label" for="inlineRadio1">Não</label>
                    </div>
                    <br><br />
                    <center><legend class="text-white bg-dark">Informações Adicionais</legend>  </center>
                    <br><br />
                    <p>Outras informações de Cadastro/Currículo:</p>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Escreva aqui</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea" name="OutrasInfo"></textarea>
                    </div>
                    <br><br />
                </fieldset>
                <center>
                <button class="btn btn-primary" type="submit">Confirmar Cadastro</button>
                <a class="btn btn-primary" href="welcome_menssage.php" role="button">Cancelar Cadastro</a>
                </center>

                <br />
                <div class="jumbotron">
                    <div class="container">
                      <div class="well well-large">
                          <center><img src="http://sisgap.dired.ufla.br/assets/img/logo.png"/></center>
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