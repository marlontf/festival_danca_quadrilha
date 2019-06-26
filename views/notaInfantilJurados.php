<!--Nota dos Jurados para cada categoria-->
<?php $count =0; ?>
<form action="" method="POST" role="form">
	<legend>Categorias Infantis</legend>
	<div class="row form-group">
		<div class="col-md">
			<select name="categoria" class="form-control" required="required">
				<option disabled="disabled" selected="selected">Selecione a Categoria Desejada...</option>
				<option value="1">Quadrilha</option>
				<option value="2">Casamento</option>
				<option value="3">Marcador</option>
			</select>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md d-flex justify-content-end">
			<button type="submit" class="btn btn-primary">Buscar</button>	
		</div>
	</div>
</form>
<?php if (isset($_POST['categoria']) && isset($val_categoria) == '1'):?>
<?php endif; ?>