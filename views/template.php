<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Quadrilhas 2019</title>
    <link href="<?=BASE_URL?>assets/css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="<?=BASE_URL?>assets/js/funcoes.js"></script>
    <script src="<?=BASE_URL?>assets/js/jquery.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<a class="navbar-brand" href="#">Festival de Quadrilhas</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNavDropdown">
    			<ul class="navbar-nav">
      				<li class="nav-item active">
        				<a class="nav-link" href="<?=BASE_URL?>home">Home <span class="sr-only">(Página atual)</span></a>
      				</li>
              <?php if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])): ?>
              <?php $login = explode('-', $_SESSION['LOGIN']);?>
      				<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Avaliação Infantil</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          				<a class="dropdown-item" href="<?=BASE_URL.'infantil'?>">Listar / Avaliar</a>
                  <?php if($login[3] == 'comissao'): ?>
                  <a class="dropdown-item" href="<?=BASE_URL.'infantil/classificacao'?>">Classificação</a>
                  <?php endif ?>
        			</div>
      				</li>
      				<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Avaliação Adulta</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          				<a class="dropdown-item" href="<?=BASE_URL.'adulto'?>">Listar / Avaliar</a>
                  <?php if($login[3] == 'comissao'): ?>
                  <a class="dropdown-item" href="<?=BASE_URL.'adulto/classificacao'?>">Classificação</a>
                  <?php endif; ?>
        			</div>
      				</li>
              <?php if($login[3] == 'comissao'): ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quesitos</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?=BASE_URL.'infantil/quesitos'?>">Aval. Jurados (Infantil)</a>
                  <a class="dropdown-item" href="<?=BASE_URL.'adulto/quesitos'?>">Aval. Jurados (Adulto)</a>
              </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Participantes</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?=BASE_URL.'participante/listar'?>">Listar / Editar</a>
                  <a class="dropdown-item" href="<?=BASE_URL.'participante'?>">Cadastrar</a>
              </div>
              </li>
              <?php endif; ?>
              <?php endif;?>
      				<?php if (!empty($_SESSION['LOGIN'])): ?>
      				<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php
        				$login = explode('-', $_SESSION['LOGIN']);
        				echo $login[2];
        				?></a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?=BASE_URL.'usuario/alterar'?>">Alterar Senha</a>
          				<a class="dropdown-item" href="<?=BASE_URL.'usuario/sair'?>">Logout</a>
        			</div>
      				</li>
      				<?php endif; ?>
    			</ul>
  			</div>
		</nav>

		<div class="container">
		<?php
		//chama a view para dentro do template
		$this->carregaViewInTemplate($viewName, $viewDados);
		?>
		</div>
    <script src="<?=BASE_URL?>assets/js/bootstrap.min.js"></script>
    <script src="<?=BASE_URL?>assets/js/jquery.min.js"></script>
	</body>
</html>