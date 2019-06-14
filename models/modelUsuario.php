<?php
/**
 * 
 */
class modelUsuario extends model
{
	
	public function inserirUsuario($nome, $cpf, $senha)
	{

		$sql = $this->pdo->prepare("INSERT INTO tb_usuarios (nome, cpf, senha) VALUES (:nome, :cpf, :senha)");
		$sql -> bindValue(":nome", $nome);
		$sql -> bindValue(":cpf", $cpf);
		$sql -> bindValue(":senha", $senha);
		$sql ->execute();
     
		//$last_id = $this->pdo->lastInsertId();
   		//echo $last_id;
	}


	public function listaUsuario($cpf){
		$sql = $this->pdo->prepare("SELECT * FROM tb_usuarios WHERE cpf = :cpf");
		$sql -> bindValue(":cpf", $cpf);
		$sql -> execute();
		return $sql ->fetchAll();
	}


	public function login($usuario, $senha){
		$sql = $this->pdo->prepare("SELECT * FROM tb_usuarios WHERE login = :usuario AND senha = :senha");
		$sql -> bindValue(":usuario", $usuario);
		$sql -> bindValue(":senha", $senha);
		$sql -> execute();
		return $sql ->fetch();
	}

	public function listaAll(){
		$sql = $this->pdo->prepare("SELECT * FROM tb_usuarios");
		$sql -> execute();
		return $sql ->fetchAll();
	}

	public function alterar($senha, $id)
	{
		$sql = $this->pdo->prepare("UPDATE tb_usuarios SET senha = :senha WHERE id = :id");
		$sql ->bindValue(":senha", md5($senha));
		$sql ->bindValue(":id", $id);
		$sql -> execute();
	}
}
?>