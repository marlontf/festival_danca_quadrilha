<h4 align="center">Usuarios cadastrados</h4>
<?php if (isset($msn) && !empty($msn) && $msn == "1"): ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		<strong>Usuário,</strong> excluido com sucesso!
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  		</button>
	</div>
<?php endif ?>
<table class="table table-bordered table-hover">
	<thead>
		<tr class="btn-dark">
			<th>Nome</th>
			<th>Login</th>
			<th>Senha</th>
			<th>Perfil</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($info_usuarios as $usuarios):?>
		<tr>
			<td><?=$usuarios['nome']?></td>
			<td><?=$usuarios['login']?></td>
			<td><?=$usuarios['senha']?></td>
			<td><?=$usuarios['perfil']?></td>
			<td><form action="" method="POST" role="form">
					<input type="hidden" class="form-control" name="id_usuario" value="<?=$usuarios['id']?>">
				<button type="submit" class="btn btn-danger">Excluir</button>
			</form></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>