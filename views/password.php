<form action="" method="POST" role="form">
	<legend>Alterar Senha</legend>

	<div class="form-group">
		<label for="">Senha Nova</label>
		<input type="password" class="form-control" id="Senha" placeholder="*******" name="senha">
	</div>

	<div class="form-group">
		<label for="">Repetir Senha</label>
		<input type="password" class="form-control" id="Confirmar" placeholder="*******" name="confirmar" onblur="return validasenha(this.value)">
	</div>
	

	<button type="submit" class="btn btn-primary">Alterar</button>
</form>