<?php  
/**
 * 
 */
class modelMarcador extends model
{
	
	public function cadastrar($desenvoltura, $lideranca, $animacao, $figurino, $id_participante, $id_categoria)
	{
		$id_usuario = explode('-', $_SESSION['LOGIN']);
		$id_usuario = $id_usuario[0];

		$sql = $this->pdo->prepare("INSERT INTO tb_quesitos_marcador (id_participante, id_categoria, id_usuario, desenvoltura, lideranca, animacao, figurino) VALUES (:id_participante, :id_categoria, :id_usuario, :desenvoltura, :lideranca, :animacao, :figurino)");
		$sql -> bindValue(":desenvoltura", $desenvoltura);
		$sql -> bindValue(":lideranca", $lideranca);
		$sql -> bindValue(":animacao", $animacao);
		$sql -> bindValue(":figurino", $figurino);
		$sql -> bindValue(":id_participante", $id_participante);
		$sql -> bindValue(":id_categoria", $id_categoria);
		$sql -> bindValue(":id_usuario", $id_usuario);
		$sql -> execute();
	}

	public function listarMarcador($id_participante, $id_categoria)
	{
		$id_usuario = explode('-', $_SESSION['LOGIN']);
		$id_usuario = $id_usuario[0];
		$sql = $this->pdo->prepare("SELECT * FROM tb_quesitos_marcador WHERE id_usuario = :id_usuario AND id_participante = :id_participante AND id_categoria = :id_categoria");
		$sql ->bindValue(":id_usuario", $id_usuario);
		$sql ->bindValue(":id_participante", $id_participante);
		$sql ->bindValue(":id_categoria", $id_categoria);
		$sql ->execute();
		return $sql ->fetch();
	}
}
?>