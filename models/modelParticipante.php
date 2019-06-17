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

	public function participante($id_participante)
	{
		$sql = $this->pdo->prepare("SELECT * FROM tb_participantes WHERE id = :id_participante");
		$sql ->bindValue(":id_participante", $id_participante);
		$sql ->execute();
		return $sql ->fetch();
	}

	public function participanteAll()
	{
		$sql = $this->pdo->prepare("SELECT p.id as pid, p.nome, p.id_categoria, c.id as cid, c.descricao FROM tb_participantes as p INNER JOIN tb_categoria as c ON c.id = p.id_categoria ORDER BY c.id");
		$sql ->execute();
		return $sql->fetchAll();
	}

	public function alterar($id_categoria, $nome, $id_participante)
	{
		$sql = $this->pdo->prepare("UPDATE tb_participantes SET id_categoria = :id_categoria, nome = :nome WHERE id = :id_participante");
		$sql ->bindValue(":id_categoria", $id_categoria);
		$sql ->bindValue(":nome", $nome);
		$sql ->bindValue(":id_participante", $id_participante);
		$sql ->execute();
	}
}
?>