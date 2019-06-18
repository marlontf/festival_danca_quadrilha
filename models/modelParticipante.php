<?php  
/**
 * 
 */
class modelParticipante extends model
{
	
	public function cadastrar($id_categoria, $nome, $responsavel)
	{
		$sql = $this->pdo->prepare("INSERT INTO tb_participantes (id_categoria, nome, responsavel) VALUES (:id_categoria, :nome, :responsavel)");
		$sql ->bindValue(":id_categoria", $id_categoria);
		$sql ->bindValue(":nome", $nome);
		$sql ->bindValue(":responsavel", $responsavel);
		$sql ->execute();
	}

	public function categoria()
	{
		$sql = $this->pdo->prepare("SELECT * FROM tb_categoria");
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function participante($id_participante)
	{
		$sql = $this->pdo->prepare("SELECT * FROM tb_participantes WHERE id = :id_participante");
		$sql ->bindValue(":id_participante", $id_participante);
		$sql ->execute();
		return $sql ->fetch();
	}

	public function participanteAll()
	{
		$sql = $this->pdo->prepare("SELECT p.id as pid, p.nome, p.responsavel, p.id_categoria, c.id as cid, c.descricao FROM tb_participantes as p INNER JOIN tb_categoria as c ON c.id = p.id_categoria ORDER BY c.id");
		$sql ->execute();
		return $sql->fetchAll();
	}

	public function alterar($id_categoria, $nome, $responsavel, $id_participante)
	{
		$sql = $this->pdo->prepare("UPDATE tb_participantes SET id_categoria = :id_categoria, nome = :nome, responsavel = :responsavel WHERE id = :id_participante");
		$sql ->bindValue(":id_categoria", $id_categoria);
		$sql ->bindValue(":nome", $nome);
		$sql ->bindValue(":responsavel", $responsavel);
		$sql ->bindValue(":id_participante", $id_participante);
		$sql ->execute();
	}
}
?>