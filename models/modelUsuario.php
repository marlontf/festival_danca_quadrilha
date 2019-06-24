<?php
/**
 * 
 */
class modelUsuario extends model
{
	
	public function inserirUsuario($nome, $login, $senha, $perfil)
	{

		$sql = $this->pdo->prepare("INSERT INTO tb_usuarios (nome, login, senha, perfil) VALUES (:nome, :login, :senha, :perfil)");
		$sql -> bindValue(":nome", $nome);
		$sql -> bindValue(":login", $login);
		$sql -> bindValue(":senha", $senha);
		$sql -> bindValue(":perfil", $perfil);
		$sql ->execute();
     
		//$last_id = $this->pdo->lastInsertId();
   		//echo $last_id;
	}


	public function listaUsuario($login){
		$sql = $this->pdo->prepare("SELECT * FROM tb_usuarios WHERE login = :login");
		$sql -> bindValue(":login", $login);
		$sql -> execute();
		return $sql ->fetch();
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

	public function excluir($id_usuario)
	{
		$sql = $this->pdo->prepare("DELETE FROM tb_usuarios WHERE id = :id_usuario");
		$sql ->bindValue(":id_usuario", $id_usuario);
		$sql -> execute();

		$sql2 = $this->pdo->prepare("DELETE FROM tb_quesitos_casamento WHERE id_usuario = :id_usuario");
		$sql2 ->bindValue(":id_usuario", $id_usuario);
		$sql2 ->execute();

		$sql3 = $this->pdo->prepare("DELETE FROM tb_quesitos_marcador WHERE id_usuario = :id_usuario");
		$sql3 ->bindValue(":id_usuario", $id_usuario);
		$sql3 ->execute();

		$sql4 = $this->pdo->prepare("DELETE FROM tb_quesitos_quadrilha WHERE id_usuario = :id_usuario");
		$sql4 ->bindValue(":id_usuario", $id_usuario);
		$sql4 ->execute();
	}
}
?>