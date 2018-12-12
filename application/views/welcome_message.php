<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sistema de Gestão Administrativa Pedagógica</title>
  </head>
  <body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">SISGAP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
	<ul class="navbar-nav mr-auto">
	  <li class="nav-item active">
		<a class="nav-link" href="#">Cadastrar-se <span class="sr-only">(current)</span></a>
	  </li>
	</ul>
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
	<div class="container">
		<h1><?php echo $titulo; ?></h1>
	</div>
  </div>

  <div class="container">
  <?php echo validation_errors(); ?>
  <?php echo form_open('welcome/salvar'); ?>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Mensagem</label>
      <textarea class="form-control" id="mensagem" name="mensagem" rows="3" ></textarea>
    </div>
    <button type="submit"  class="btn btn-primary">Salvar</button>
  </form>

	<br/>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Mensagem</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($mensagens as $msg):?>
    <tr>
      <th scope="row"><?php echo $msg->id; ?></th>
      <td><?php echo $msg->email; ?></td>
      <td><?php echo $msg->mensagem; ?></td>
    </tr>
  <?php endforeach;?>
    
  </tbody>
</table>

  </div> <!-- /container -->

</main>

<footer class="container">
  <p>&copy; Company 2017-2018</p>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>