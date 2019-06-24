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

	public function cadastrar()
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {
		$cLogin 	= new modelUsuario();
		$dados = array();
		$user 		= explode('-', $_SESSION['LOGIN']);
		//verifica as permissões do usuario
		if ($user[3] == 'comissao') {
		
		if (isset($_POST['login']) && !empty($_POST['login'])) {
			$nome 	= utf8_decode($_POST['nome']);
			$login 	= utf8_decode($_POST['login']);
			$senha 	= md5($_POST['senha']);
			$perfil = $_POST['perfil'];

			$lUsuario = $cLogin->listaUsuario($login);
			if (empty($lUsuario)) {
				$cLogin->inserirUsuario($nome, $login, $senha, $perfil);
				//msn = 2 para usuários cadastrados com sucesso
				$msn = "2";
			}else{
				//msn = 1 para usuário que já existem no banco de dados
				$msn = "1";
			}
			
			$dados = array
			(
				'msn' => $msn, 
			);

		}
		
		$this->loadTemplate('cadastroUsuario', $dados);

		}else{
			header('Location:'.BASE_URL.'usuario');
		}
		}
	}

	public function listar()
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {
		$cLogin 	= new modelUsuario();
		$msn 		= "";
		$user 		= explode('-', $_SESSION['LOGIN']);
		//verifica as permissões do usuario
		if ($user[3] == 'comissao') {

		if (isset($_POST['id_usuario']) && !empty($_POST['id_usuario'])) {
			$id_usuario = $_POST['id_usuario'];
			$cLogin->excluir($id_usuario);
			$msn = 1;
		}

		$dados = array
		(
			'info_usuarios' => $cLogin->listaAll(),
			'msn'			=> $msn, 
		);

		$this->loadTemplate('listarUsuarios', $dados);

		}else{
			header('Location:'.BASE_URL.'usuario');
		}
		}
	}
}
?>