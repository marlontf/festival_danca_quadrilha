<?php  
/**
 * 
 */
class modelCasamento extends model
{
	
	public function cadastrar($vest_tradicional, $originalidade, $deprec_preconceituoso, $id_participante, $id_categoria)
	{
		$id_usuario = explode('-', $_SESSION['LOGIN']);
		$id_usuario = $id_usuario[0];

		$sql = $this->pdo->prepare("INSERT INTO tb_quesitos_casamento (id_participante, id_categoria, id_usuario, vest_tradicional, originalidade, deprec_preconceituoso) VALUES (:id_participante, :id_categoria, :id_usuario, :vest_tradicional, :originalidade, :deprec_preconceituoso)");
		$sql -> bindValue(":vest_tradicional", $vest_tradicional);
		$sql -> bindValue(":originalidade", $originalidade);
		$sql -> bindValue(":deprec_preconceituoso", $deprec_preconceituoso);
		$sql -> bindValue(":id_participante", $id_participante);
		$sql -> bindValue(":id_categoria", $id_categoria);
		$sql -> bindValue(":id_usuario", $id_usuario);
		$sql -> execute();
	}

	public function listarCasamentos($id_participante, $id_categoria)
	{
		$id_usuario = explode('-', $_SESSION['LOGIN']);
		$id_usuario = $id_usuario[0];
		$sql = $this->pdo->prepare("SELECT * FROM tb_quesitos_casamento WHERE id_usuario = :id_usuario AND id_participante = :id_participante AND id_categoria = :id_categoria");
		$sql ->bindValue(":id_usuario", $id_usuario);
		$sql ->bindValue(":id_participante", $id_participante);
		$sql ->bindValue(":id_categoria", $id_categoria);
		$sql ->execute();
		return $sql ->fetch();
	}
}
?>