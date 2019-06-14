<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SGCPD</title>

		<!-- Bootstrap CSS -->
    <!--
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="assets/css/fontawesome.min.css" rel="stylesheet">
    <link href="../assets/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/css/fontawesome.css" rel="stylesheet">
    <link href="assets/css/brands.css" rel="stylesheet">
     <link href="assets/css/solid.css" rel="stylesheet">
    <link href="assets/css/all.css" rel="stylesheet">
    <link href="../assets/css/fontawesome.css" rel="stylesheet">
    <link href="../assets/css/brands.css" rel="stylesheet">
     <link href="../assets/css/solid.css" rel="stylesheet">
    <link href="../assets/css/all.css" rel="stylesheet">
    -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="assets/js/funcoes.js"></script>
    <script type="text/javascript" src="../assets/js/funcoes.js"></script>
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
      				<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Avaliação Infantil</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          				<a class="dropdown-item" href="<?=BASE_URL.'infantil'?>">Listar / Avaliar</a>
                  <a class="dropdown-item" href="<?=BASE_URL.'infantil/classificacao'?>">Classificação</a>
        			</div>
      				</li>
      				<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Avaliação Adulta</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          				<a class="dropdown-item" href="<?=BASE_URL.'adulto'?>">Listar / Avaliação</a>
                  <a class="dropdown-item" href="<?=BASE_URL.'adulto/classificacao'?>">Classificação</a>
        			</div>
      				</li>
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
    <!--
		<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/fontawesome.js"></script>

    <script src="assets/js/funcoes.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/fontawesome.min.js"></script>
    <script src="../assets/js/fontawesome.js"></script>

    <script src="../assets/js/funcoes.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>