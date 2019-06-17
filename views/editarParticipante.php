<?php if(!empty($mensagem) && $mensagem == '1'): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Atualização</strong> realizada com sucesso!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<form action="" method="POST" role="form">
	<legend>Alterar informações do Participante</legend>
	<div class="row form-group">
		<div class="col-md">
			<select name="id_categoria" id="input" class="form-control" required="required">
				<option value="" disabled="disabled">Selecione a categoria...</option>
				<?php foreach ($info_categoria as $dado_categoria): ?>
				<option value="<?=$info_participante['id_categoria']?>" <?php if($info_participante['id_categoria'] == $dado_categoria['id']) echo "selected"; ?>><?=$dado_categoria['descricao']?></option>	
				<?php endforeach; ?>
			</select>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md">
			<label>Participantes</label>
			<input type="text" name="nome" class="form-control" value="<?=utf8_encode($info_participante['nome'])?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md d-flex justify-content-md-end"><button type="submit" class="btn btn-primary">Atualizar</button></div>
	</div>
</form>