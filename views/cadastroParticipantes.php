<?php if(!empty($mensagem)): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Cadastro</strong> realizado com sucesso!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<form action="" method="POST" role="form">
	<legend>Cadastro de Participantes</legend>

	<div class="form-group row">
		<div class="col-md">
			<select name="id_categoria" id="input" class="form-control" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione a Categoria</option>
				<?php foreach ($info_categoria as $dado_categoria):?>
				<option value="<?=$dado_categoria['id']?>"><?=$dado_categoria['descricao']?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md">
			<label>Nome do Grupo</label>
			<input type="text" name="nome" class="form-control" required="required" placeholder="Nome do Grupo Participante">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md d-flex justify-content-end">
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</div>
	</div>
</form>