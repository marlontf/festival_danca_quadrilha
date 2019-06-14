<form action="" method="POST" role="form">
	<legend>Avaliação de Notas Adulto (Quesito Quadrilha)</legend>

	<div class="row form-group">
		<div class="col-md">
			<label for="">Evolução</label>
			<input type="number" class="form-control" id="" name="evolucao" min="5" max=10 required="required">
		</div>
		<div class="col-md">
			<label for="">Figurino</label>
			<input type="number" class="form-control" id="" name="figurino" min="5" max=10 required="required">
		</div>
		<div class="col-md">
			<label for="">Animação</label>
			<input type="number" class="form-control" id="" name="animacao" min="5" max=10 required="required">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md">
			<label for="">Alinhamento</label>
			<input type="number" class="form-control" id="" name="alinhamento" min="5" max=10 required="required">
		</div>
		<div class="col-md">
			<label for="">Coreografia</label>
			<input type="number" class="form-control" id="" name="coreografia" min="5" max=10 required="required">
		</div>
		<div class="col-md">
			<label for="">Harmonia</label>
			<input type="number" class="form-control" id="" name="harmonia" min="5" max=10 required="required">
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