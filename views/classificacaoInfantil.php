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
<?php 
if ($_POST['categoria'] == '1') {
	$title = "Quadrilha";
}
if ($_POST['categoria'] == '2') {
	$title = "Casamento";
}
if ($_POST['categoria'] == '3') {
	$title = "Marcador";
}
 ?>
<h4 align="center">Classificação Infantil (Quesito <?=$title?>)</h4>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Classificação</th>
			<th>Participantes</th>
			<th>Nota Total</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($info_infantil as $dado_infantil):?>
			<?php  $count +=1;?>
		<tr>
			<td><?=$count?>º</td>
			<td><?=utf8_encode($dado_infantil['nome']);?></td>
			<td><?=utf8_encode($dado_infantil['total']);?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php else: ?>
<!--Reinicia o contador-->
<?php $count =0; ?>
	<div class="row">
		<div class="col-md">
			<h4 align="center">Classificação Infantil (Quesito Quadrilha)</h4>
			<table class="table table-bordered table-hover">
				<thead>
					<tr class="btn-dark">
						<th>Classificação</th>
						<th>Participantes</th>
						<th>Nota Total</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($classificacao_quadrilha as $dado_quadrilha):?>
						<?php  $count +=1;?>
					<tr>
						<td><?=$count?>º</td>
						<td><?=utf8_encode($dado_quadrilha['nome']);?></td>
						<td><?=utf8_encode($dado_quadrilha['total']);?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
<!--Reinicia o contador-->
<?php $count =0; ?>
		<div class="col-md">
			<h4 align="center">Classificação Infantil (Quesito Casamento)</h4>
			<table class="table table-bordered table-hover">
				<thead>
					<tr class="btn-dark">
						<th>Classificação</th>
						<th>Participantes</th>
						<th>Nota Total</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($classificacao_casamento as $dado_casamento):?>
						<?php  $count +=1;?>
					<tr>
						<td><?=$count?>º</td>
						<td><?=utf8_encode($dado_casamento['nome']);?></td>
						<td><?=utf8_encode($dado_casamento['total']);?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
<!--Reinicia o contador-->
<?php $count =0; ?>
		<div class="col-md">
			<h4 align="center">Classificação Infantil (Quesito Marcador)</h4>
			<table class="table table-bordered table-hover">
				<thead>
					<tr class="btn-dark">
						<th>Classificação</th>
						<th>Participantes</th>
						<th>Nota Total</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($classificacao_marcador as $dado_marcador):?>
						<?php  $count +=1;?>
					<tr>
						<td><?=$count?>º</td>
						<td><?=utf8_encode($dado_marcador['nome']);?></td>
						<td><?=utf8_encode($dado_marcador['total']);?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
<?php endif; ?>