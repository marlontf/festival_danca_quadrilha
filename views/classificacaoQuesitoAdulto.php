<?php $tb = 1; ?>
<form action="" method="POST" role="form" class="hidden-print">
	<legend align="center">Relatório por Quesito (Adulto)</legend>

	<div class="row form-group">
		<div class="col-md">
			<select name="tbquesito" id="input" class="form-control" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione o Quesito...</option>
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
<?php if (isset($_POST['tbquesito']) && !empty($_POST['tbquesito'])) {
	$tb = $_POST['tbquesito'];
} ?>
<?php if($tb == '1'): ?>
<table class="table table-striped table-hover table-bordered" style="background-color: white">
	<legend align='center'>Quesito Quadrilha (Adulto)</legend>
	<thead>
		<tr class="btn-info tr-table">
			<th>Jurado</th>
			<th>Participante</th>
			<th>Evolução</th>
			<th>Figurino</th>
			<th>Animação</th>
			<th>Alinhamento</th>
			<th>Coreografia</th>
			<th>Harmonia</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($info_quesitos_quadrilha as $dados): ?>
		<tr>
			<td><b><?=utf8_encode($dados['jurado'])?></b><br>
			Ass:______________________________________</td>
			<td><?=utf8_encode($dados['nome'])?></td>
			<td><?=$dados['evolucao']?></td>
			<td><?=$dados['figurino']?></td>
			<td><?=$dados['animacao']?></td>
			<td><?=$dados['alinhamento']?></td>
			<td><?=$dados['coreografia']?></td>
			<td><?=$dados['harmonia']?></td>
			<td><?=$dados['evolucao']+$dados['figurino']+$dados['animacao']+$dados['alinhamento']+$dados['coreografia']+$dados['harmonia']?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>

<?php if($tb == '2'): ?>
<table class="table table-striped table-hover table-bordered" style="background-color: white">
	<legend align='center'>Quesito Casamento (Adulto)</legend>
	<thead>
		<tr class="btn-success">
			<th>Jurado</th>
			<th>Participante</th>
			<th>Vestimenta Tradicional</th>
			<th>Originalidade</th>
			<th>Cuid. Ult. Termos deprec. preconceituoso</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($info_quesitos_casamento as $dados): ?>
		<tr>
			<td><b><?=utf8_encode($dados['jurado'])?></b><br>
			Ass:______________________________________</td>
			<td><?=utf8_encode($dados['nome'])?></td>
			<td><?=$dados['vest_tradicional']?></td>
			<td><?=$dados['originalidade']?></td>
			<td><?=$dados['deprec_preconceituoso']?></td>
			<td><?=$dados['vest_tradicional']+$dados['originalidade']+$dados['deprec_preconceituoso']?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>

<?php if($tb == '3'): ?>
<table class="table table-striped table-hover table-bordered" style="background-color: white">
	<legend align='center'>Quesito Marcador (Adulto)</legend>
	<thead>
		<tr class="btn-primary">
			<th>Jurado</th>
			<th>Participante</th>
			<th>Desenvoltura</th>
			<th>Liderança</th>
			<th>Animação</th>
			<th>Figurino</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($info_quesitos_marcador as $dados): ?>
		<tr>
			<td><b><?=utf8_encode($dados['jurado'])?></b><br>
			Ass:______________________________________</td>
			<td><?=utf8_encode($dados['nome'])?></td>
			<td><?=$dados['desenvoltura']?></td>
			<td><?=$dados['lideranca']?></td>
			<td><?=$dados['animacao']?></td>
			<td><?=$dados['figurino']?></td>
			<td><?=$dados['desenvoltura']+$dados['lideranca']+$dados['animacao']+$dados['figurino']?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>
<div class="hidden-print">
    <p><a href="#" onclick="window.print()" class="btn btn-warning fas fa-print">Imprimir</a></p>
</div>