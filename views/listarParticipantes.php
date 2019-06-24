<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Participante</th>
			<th>Categoria</th>
			<th>Responsável</th>
			<th colspan="2">Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php  foreach ($info_part as $dado):?>
		<tr>
			<td><?=utf8_encode($dado['nome']);?></td>
			<td><?=$dado['descricao']?></td>
			<td><?=utf8_encode($dado['responsavel']);?></td>
			<td><a href="<?=BASE_URL?>participante/editar/<?=$dado['pid']?>" class="btn btn-info">Editar</a></td>
			<td><form action="" method="POST" role="form">
					<input type="hidden" class="form-control" name="input_id_participante" value="<?=$dado['pid']?>">
				<button type="submit" class="btn btn-danger">Excluir</button>
			</form></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>