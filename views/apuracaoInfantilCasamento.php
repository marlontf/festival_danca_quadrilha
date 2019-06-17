<h4 align="center">Avaliação de Notas Infantis (Quesito Casamento)</h4>
<form action="" method="POST" role="form">
	<legend>Participante: <?=utf8_encode($info_part['nome'])?></legend>

	<div class="row form-group">
		<div class="col-md">
			<label for="">Vestimenta Tradicional</label>
			<input type="number" class="form-control" id="" name="vest_tradicional" min="5" max=10 required="required">
		</div>
		<div class="col-md">
			<label for="">Originalidade</label>
			<input type="number" class="form-control" id="" name="originalidade" min="5" max=10 required="required">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md">
			<label for="">Cuidado na Utilização de termos depreciativos e preconceituoso</label>
			<input type="number" class="form-control" id="" name="deprec_preconceituoso" min="5" max=10 required="required">
		</div>
	</div>

 	<div class="row form-group">
 		<div class="col-md d-flex justify-content-start">
 			<a href="<?=BASE_URL?>infantil" class="btn btn-dark">Voltar</a>
 		</div>
 		<div class="col-md d-flex justify-content-end">
 			<button type="submit" class="btn btn-primary">Avaliar</button>
 		</div>
	</div>
</form>