<?php if (isset($msn) && !empty($msn) && $msn == "1"): ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		<strong>Usuário: <?=$_POST['login']?></strong>, já existe no sistema!
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  		</button>
	</div>
<?php endif ?>
<?php if (isset($msn) && !empty($msn) && $msn == "2"): ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
  		<strong>Usuário: <?=$_POST['login']?></strong>, cadastrado com sucesso!
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  		</button>
	</div>
<?php endif ?>
<form action="" method="POST" role="form">
	<legend>Cadastro de Usuários</legend>

	<div class="row form-group">
		<div class="col-md">
			<label for="">Nome</label>
			<input type="text" class="form-control" id="" placeholder="Nome Completo" name="nome" required="required">
		</div>
		<div class="col-md">
			<label for="">Usuário</label>
			<input type="text" class="form-control" id="" placeholder="Ex: joao.oliveira" name="login" required="required">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md">
			<label for="">Senha</label>
			<input type="password" class="form-control" id="" placeholder="*********" name="senha" required="required">
		</div>
		<div class="col-md">
			<label for="">Perfil</label>
			<select name="perfil" id="input" class="form-control" required="required">
				<option value="" selected="selected" disabled="disabled">Selecione o Perfil...</option>
				<option value="jurado">Jurado</option>
				<option value="comissao">Comissão</option>
			</select>
		</div>
	</div>
	
	<div class="row form-group">
		<div class="col-md d-flex justify-content-end">
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</div>
	</div>
</form>