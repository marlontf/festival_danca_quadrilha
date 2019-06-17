<?php  
/**
 * 
 */
class usuarioController extends controller
{
	
	public function index()
	{
		$class_usuario = new modelUsuario();
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {
			header('Location:'.BASE_URL);
		}else{

		if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
			$usuario 	= utf8_decode($_POST['usuario']);
			$senha 		= md5($_POST['senha']);

			$dado = $class_usuario->login($usuario, $senha);
			if (!empty($dado)) {
				$_SESSION['LOGIN'] = $dado['id'].'-'.$dado['nome'].'-'.$dado['login'].'-'.$dado['perfil'];
			}
			
			header('Location:'.BASE_URL);

		}

		$this->loadTemplate("login");
		}
	}

	public function sair()
	{
		session_destroy();
		header('Location:'.BASE_URL.'usuario');

	}


	public function alterar()
	{

		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {
			if (isset($_POST['senha']) && !empty($_POST['senha'])) {
				$user = new modelUsuario();
				$usuario = explode('-', $_SESSION['LOGIN']);
				$id 	 = $usuario[0];
				$senha = $_POST['senha'];

				$user->alterar($senha, $id);
				session_destroy();
				header('Location:'.BASE_URL.'usuario');
			}
			$this->loadTemplate("password");
		}else{
			header('Location:'.BASE_URL);
		}
	}
}
?>