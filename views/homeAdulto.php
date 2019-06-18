<h4 align="center">Grupos Adultos (Avaliações dos Jurados)</h4>
<table class="table table-bordered table-hover">
	<thead>
		<tr class="btn-dark">
			<th>Participantes</th>
			<th>Quadrilha</th>
			<th>Casamento</th>
			<th>Marcador</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($info_adulto as $dadulto):?>
		<tr>
			<td><?=utf8_encode($dadulto['nome']);?></td>
			<!--Verifica se o participante já foi avaliado no quesito quadrilha-->
			<?php if (!empty($info_quadrilha)):?>
			<?php foreach ($info_quadrilha as $dquadrilha):?>
				<?php if ($dquadrilha['id_participante'] == $dadulto['id']): ?>
						<td>Avaliado</td>

				<?php else: ?>
					   <?php foreach ($info_quadrilha as $ver_quadrilha):
					   		if ($ver_quadrilha['id_participante'] != $dadulto['id']):?>
					   			<?php $valor = $dadulto['id'] ?>
					   		<?php else: ?>
					   			<?php $valor = 0;
					   			break; 
					   			?>
					   		<?php endif;?>			   		
					   <?php endforeach; ?>
					   <?php if ($valor != 0):?>
					   			<td><a href="<?=BASE_URL?>adulto/quadrilha/<?=$dadulto['id']?>/<?=$dadulto['id_categoria']?>" class="btn btn-success">Quesito Quadrilha</a></td>
					   		<?php 
					   		break;
					   	  	endif;?>
				<?php endif ?>
			<?php endforeach; ?>
			<?php elseif (empty($info_quadrilha)):?>
						<td><a href="<?=BASE_URL?>adulto/quadrilha/<?=$dadulto['id']?>/<?=$dadulto['id_categoria']?>" class="btn btn-success">Quesito Quadrilha</a></td>
			<?php endif ?>

			<!--Verifica se o participante já foi avaliado no quesito casamento-->
			<?php if (!empty($info_casamento)):?>
			<?php foreach ($info_casamento as $dcasamento):?>
				<?php if ($dcasamento['id_participante'] == $dadulto['id']): ?>
						<td>Avaliado</td>

				<?php else: ?>
					   <?php foreach ($info_casamento as $ver_casamento):
					   		if ($ver_casamento['id_participante'] != $dadulto['id']):?>
					   			<?php $valor = $dadulto['id'] ?>
					   		<?php else: ?>
					   			<?php $valor = 0;
					   			break; 
					   			?>
					   		<?php endif;?>			   		
					   <?php endforeach; ?>
					   <?php if ($valor != 0):?>
					   			<td><a href="<?=BASE_URL?>adulto/casamento/<?=$dadulto['id']?>/<?=$dadulto['id_categoria']?>" class="btn btn-info">Quesito Casamento</a></td>
					   		<?php 
					   		break;
					   	  	endif;?>
				<?php endif ?>
			<?php endforeach; ?>
			<?php elseif (empty($info_casamento)):?>
						<td><a href="<?=BASE_URL?>adulto/casamento/<?=$dadulto['id']?>/<?=$dadulto['id_categoria']?>" class="btn btn-info">Quesito Casamento</a></td>
			<?php endif ?>

			<!--Verifica se o participante já foi avaliado no quesito marcador-->
			<?php if (!empty($info_marcador)):?>
			<?php foreach ($info_marcador as $dmarcador):?>
				<?php if ($dmarcador['id_participante'] == $dadulto['id']): ?>
						<td>Avaliado</td>

				<?php else: ?>
					   <?php foreach ($info_marcador as $ver_marcador):
					   		if ($ver_marcador['id_participante'] != $dadulto['id']):?>
					   			<?php $valor = $dadulto['id'] ?>
					   		<?php else: ?>
					   			<?php $valor = 0;
					   			break; 
					   			?>
					   		<?php endif;?>			   		
					   <?php endforeach; ?>
					   <?php if ($valor != 0):?>
					   			<td><a href="<?=BASE_URL?>adulto/marcador/<?=$dadulto['id']?>/<?=$dadulto['id_categoria']?>" class="btn btn-warning">Quesito Marcador</a></td>
					   		<?php 
					   		break;
					   	  	endif;?>
				<?php endif ?>
			<?php endforeach; ?>
			<?php elseif (empty($info_marcador)):?>
						<td><a href="<?=BASE_URL?>adulto/marcador/<?=$dadulto['id']?>/<?=$dadulto['id_categoria']?>" class="btn btn-warning">Quesito Marcador</a></td>
			<?php endif ?>
			
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<div class="row">
	<div class="col-md d-flex justify-content-end">
		<a href="<?=BASE_URL?>" class="btn btn-dark">Voltar</a>
	</div>
</div>