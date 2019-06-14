<?php  
/**
 * 
 */
class modelQuadrilha extends model
{
	
	public function cadastrar($evolucao, $figurino, $animacao, $alinhamento, $coreografia, $harmonia, $id_participante, $id_categoria)
	{
		$id_usuario = explode('-', $_SESSION['LOGIN']);
		$id_usuario = $id_usuario[0];

		$sql = $this->pdo->prepare("INSERT INTO tb_quesitos_quadrilha (id_participante, id_categoria, id_usuario, evolucao, figurino, animacao, alinhamento, coreografia, harmonia) VALUES (:id_participante, :id_categoria, :id_usuario, :evolucao, :figurino, :animacao, :alinhamento, :coreografia, :harmonia)");
		$sql -> bindValue(":evolucao", $evolucao);
		$sql -> bindValue(":figurino", $figurino);
		$sql -> bindValue(":animacao", $animacao);
		$sql -> bindValue(":alinhamento", $alinhamento);
		$sql -> bindValue(":coreografia", $coreografia);
		$sql -> bindValue(":harmonia", $harmonia);
		$sql -> bindValue(":id_participante", $id_participante);
		$sql -> bindValue(":id_categoria", $id_categoria);
		$sql -> bindValue(":id_usuario", $id_usuario);
		$sql -> execute();
	}

	public function listarQuadrilhas($id_participante, $id_categoria)
	{
		$id_usuario = explode('-', $_SESSION['LOGIN']);
		$id_usuario = $id_usuario[0];
		$sql = $this->pdo->prepare("SELECT * FROM tb_quesitos_quadrilha WHERE id_usuario = :id_usuario AND id_participante = :id_participante AND id_categoria = :id_categoria");
		$sql ->bindValue(":id_usuario", $id_usuario);
		$sql ->bindValue(":id_participante", $id_participante);
		$sql ->bindValue(":id_categoria", $id_categoria);
		$sql ->execute();
		return $sql ->fetch();
	}
}
?>