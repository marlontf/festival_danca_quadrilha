<?php $count =0; ?>
<form action="" method="POST" role="form">
	<legend>CATEGORIAS (ADULTO)</legend>
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
<h4 align="center">Classificação Adulto (Quesito <?=$title?>)</h4>
<table class="table table-bordered table-hover" style="background-color: white">
	<thead>
		<tr class="btn-info tr-table">
			<th>Classificação</th>
			<th>Participantes</th>
			<?php if ($_POST['categoria'] == '1'): ?>
			<th>Coreografia</th>
			<th>Evolução</th>
			<th>Harmonia</th>
			<th>Animação</th>
			<th>Alinhamento</th>
			<th>Figurino</th>
			<?php endif ?>
			<?php if ($_POST['categoria'] == '2'): ?>
			<th>Vestimenta Tradicional</th>
			<th>Originalidade</th>
			<th>Depreciativos e preconceituoso</th>
			<?php endif; ?>
			<?php if ($_POST['categoria'] == '3'): ?>
			<th>Desenvoltura</th>
			<th>Liderança</th>
			<th>Animação</th>
			<th>Figurino</th>
			<?php endif; ?>
			<th>Nota Total</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($info_adulto as $dado_adulto):?>
			<?php  $count +=1;?>
		<tr>
			<td><label style="color: #8a4800; font-size: 30px"><?=$count?>º</label></td>
			<td><label style="color: #8a4800; font-size: 30px"><?=utf8_encode($dado_adulto['nome']);?></label></td>
			<?php if ($_POST['categoria'] == '1'): ?>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_coreografia'];?></label></td>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_evolucao'];?></label></td>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_harmonia'];?></label></td>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_animacao'];?></label></td>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_alinhamento'];?></label></td>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_figurino'];?></label></td>
			<?php endif ?>
			<?php if ($_POST['categoria'] == '2'): ?>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_vest_tradicional'];?></label></td>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_originalidade'];?></label></td>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_deprec_preconceituoso'];?></label></td>
			<?php endif ?>
			<?php if ($_POST['categoria'] == '3'): ?>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_desenvoltura'];?></label></td>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_lideranca'];?></label></td>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_animacao'];?></label></td>
			<td><label style="color: #8a4800; font-size: 30px"><?=$dado_adulto['total_figurino'];?></label></td>
			<?php endif ?>
			<td><label style="color: #381d00; font-size: 30px"><?=utf8_encode($dado_adulto['total']);?></label></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php else: ?>
<!--Reinicia o contador-->
<?php $count =0; ?>
	<div class="row">
		<div class="col-md">
			<h4 align="center"><b>Classificação Adulto (Quesito Quadrilha)</b></h4>
			<table class="table table-bordered table-hover" style="background-color: white">
				<thead>
					<tr class="btn-info tr-table">
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
			<h4 align="center"><b>Classificação Adulto (Quesito Casamento)</b></h4>
			<table class="table table-bordered table-hover" style="background-color: white">
				<thead>
					<tr class="btn-info tr-table">
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
			<h4 align="center"><b>Classificação Adulto (Quesito Marcador)</b></h4>
			<table class="table table-bordered table-hover" style="background-color: white">
				<thead>
					<tr class="btn-info tr-table">
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