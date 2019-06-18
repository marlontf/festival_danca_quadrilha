<?php  
/**
 * 
 */
class modelAdulto extends model
{
	
	public function listarAll()
	{
		$sql = $this->pdo->prepare("SELECT * FROM tb_participantes WHERE id_categoria = 2");
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function listarCasamentos()
	{
		$id_usuario = explode('-', $_SESSION['LOGIN']);
		$id_usuario = $id_usuario[0];
		$sql = $this->pdo->prepare("SELECT * FROM tb_quesitos_casamento WHERE id_usuario = :id_usuario");
		$sql ->bindValue(":id_usuario", $id_usuario);
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function listarQuadrilhas()
	{
		$id_usuario = explode('-', $_SESSION['LOGIN']);
		$id_usuario = $id_usuario[0];
		$sql = $this->pdo->prepare("SELECT * FROM tb_quesitos_quadrilha WHERE id_usuario = :id_usuario");
		$sql ->bindValue(":id_usuario", $id_usuario);
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function listarMarcador()
	{
		$id_usuario = explode('-', $_SESSION['LOGIN']);
		$id_usuario = $id_usuario[0];
		$sql = $this->pdo->prepare("SELECT * FROM tb_quesitos_marcador WHERE id_usuario = :id_usuario");
		$sql ->bindValue(":id_usuario", $id_usuario);
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function classificacaoCasamento()
	{
		$sql = $this->pdo->prepare("SELECT p.id, p.nome, 
			SUM(c.vest_tradicional+c.originalidade+c.deprec_preconceituoso) as total, 
			SUM(c.vest_tradicional) AS total_vest_tradicional, 
			SUM(c.originalidade) AS total_originalidade, 
			SUM(c.deprec_preconceituoso) AS total_deprec_preconceituoso 
			FROM tb_quesitos_casamento AS c INNER JOIN tb_participantes AS p ON c.id_participante = p.id WHERE p.id_categoria = 2 GROUP BY c.id_participante 
			ORDER BY total DESC, total_vest_tradicional DESC, total_originalidade DESC, total_deprec_preconceituoso DESC");
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function classificacaoQuadrilha()
	{
		$sql = $this->pdo->prepare("SELECT p.id, p.nome, 
			SUM(q.evolucao+q.figurino+q.animacao+q.alinhamento+q.coreografia+q.harmonia) as total,
			SUM(q.coreografia) AS total_coreografia,
			SUM(q.evolucao) AS total_evolucao,
			SUM(q.harmonia) AS total_harmonia,
			SUM(q.animacao) AS total_animacao,
			SUM(q.figurino) AS total_figurino
			FROM tb_quesitos_quadrilha AS q INNER JOIN tb_participantes AS p ON q.id_participante = p.id WHERE q.id_categoria = 2 GROUP BY q.id_participante 
			ORDER BY total DESC, total_coreografia DESC, total_evolucao DESC, total_harmonia DESC, total_animacao DESC, total_figurino DESC");
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function classificacaoMarcador()
	{
		$sql = $this->pdo->prepare("SELECT p.id, p.nome, 
			SUM(m.desenvoltura+m.lideranca+m.animacao+m.figurino) as total,
			SUM(m.desenvoltura) AS total_desenvoltura,
			SUM(m.lideranca) AS total_lideranca,
			SUM(m.animacao) AS total_animacao,
			SUM(m.figurino) AS total_figurino 
			FROM tb_quesitos_marcador AS m INNER JOIN tb_participantes AS p ON m.id_participante = p.id WHERE m.id_categoria = 2 GROUP BY m.id_participante 
			ORDER BY total DESC, total_desenvoltura DESC, total_lideranca DESC, total_animacao DESC, total_figurino DESC");
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function fQuesitosQuadrilha()
	{
		$sql = $this->pdo->prepare("SELECT c.*, u.nome as jurado, p.* FROM tb_quesitos_quadrilha as c INNER JOIN tb_usuarios as u ON c.id_usuario = u.id INNER JOIN tb_participantes AS p ON p.id = c.id_participante WHERE c.id_categoria = '2' ORDER BY p.id");
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function fQuesitosCasamento()
	{
		$sql = $this->pdo->prepare("SELECT c.*, u.nome as jurado, p.* FROM tb_quesitos_casamento as c INNER JOIN tb_usuarios as u ON c.id_usuario = u.id INNER JOIN tb_participantes AS p ON p.id = c.id_participante WHERE c.id_categoria = '2' ORDER BY p.id");
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function fQuesitosMarcador()
	{
		$sql = $this->pdo->prepare("SELECT c.*, u.nome as jurado, p.* FROM tb_quesitos_marcador as c INNER JOIN tb_usuarios as u ON c.id_usuario = u.id INNER JOIN tb_participantes AS p ON p.id = c.id_participante WHERE c.id_categoria = '2' ORDER BY p.id");
		$sql ->execute();
		return $sql ->fetchAll();
	}

	/*public function classificacaoGeral()
	{
		$sql = $this->pdo->prepare("SELECT p.id, p.nome, SUM(c.vest_tradicional+c.originalidade+c.deprec_preconceituoso+m.desenvoltura+m.lideranca+m.animacao+m.figurino+q.evolucao+q.figurino+q.animacao+q.alinhamento+q.coreografia+q.harmonia) as total FROM tb_quesitos_casamento AS c INNER JOIN tb_participantes AS p ON c.id_participante = p.id INNER JOIN tb_quesitos_marcador as m ON p.id = m.id_participante INNER JOIN tb_quesitos_quadrilha AS q ON p.id = q.id_participante GROUP BY c.id_participante ORDER BY p.id DESC");
		$sql ->execute();
		return $sql ->fetchAll();
	}*/
}
?>