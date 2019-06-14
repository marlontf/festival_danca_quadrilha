<?php  
/**
 * 
 */
class modelParticipante extends model
{
	
	public function cadastrar($id_categoria, $nome)
	{
		$sql = $this->pdo->prepare("INSERT INTO tb_participantes (id_categoria, nome) VALUES (:id_categoria, :nome)");
		$sql ->bindValue(":id_categoria", $id_categoria);
		$sql ->bindValue(":nome", $nome);
		$sql ->execute();
	}

	public function categoria()
	{
		$sql = $this->pdo->prepare("SELECT * FROM tb_categoria");
		$sql ->execute();
		return $sql ->fetchAll();
	}
}
?>