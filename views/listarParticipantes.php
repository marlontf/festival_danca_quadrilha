<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Participante</th>
			<th>Categoria</th>
			<th>Responsável</th>
		</tr>
	</thead>
	<tbody>
		<?php  foreach ($info_part as $dado):?>
		<tr>
			<td><?=utf8_encode($dado['nome']);?></td>
			<td><?=$dado['descricao']?></td>
			<td><?=utf8_encode($dado['responsavel']);?></td>
			<td><a href="<?=BASE_URL?>participante/editar/<?=$dado['pid']?>" class="btn btn-info">Editar</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>